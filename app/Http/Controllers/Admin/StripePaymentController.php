<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\transection;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Illuminate\Support\Facades\Session;



class StripePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
        $id = $request->id;
        $data = order::where('id', $id)->get();

        return view('admin.stripe.stripe')->with([
            'id' => $data,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function stripePost(Request $request)
{
    $id = $request->id;
    $order = Order::findOrFail($id); // Find the order by ID

    try {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create a customer in Stripe
        $customer = Customer::create([
            "email" => Auth::user()->email,
            "name" => Auth::user()->name,
            "source" => $request->stripeToken
        ]);

        // Create a charge in Stripe
        Charge::create([
            "amount" => $order->totalprice * 100, // Amount in cents
            "currency" => "usd",
            "customer" => $customer->id,
            "description" => "Test payment from furnimart.com."
        ]);

        $transaction = new transection();
        $transaction->order_id = $order->id;
        $transaction->stripe_customer_id = $customer->id;
        $transaction->email = Auth::user()->email;
        $transaction->amount = $order->totalprice;
        $transaction->status = 'success'; // Update status to 'success' for successful payment
        $transaction->save();

        // Update the order's payment status and update_payment_status
        $order->payment_status = 'success';
        $order->update_payment_status = 'automatic';
        $order->save();

        // Clear the session data for cart or wishlist
        Session::forget('cart');
        Session::forget('wish');

        // Flash success message
        Session::flash('success', 'Payment successful!');
    } catch (Exception $e) {
        // Handle exceptions, e.g., Stripe API errors
        Session::flash('error', 'Payment failed: ' . $e->getMessage());
    }

    // Redirect back to the shop page
    return redirect()->route('web.index');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

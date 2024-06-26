<?php

namespace App\Http\Controllers\frontend;

use App\DataTables\NewsLetterDataTable;
use App\DataTables\OrderDataTable;
use App\Http\Controllers\Controller;
use App\Mail\orderConfirmMail;
use App\Models\Blog;
use App\Models\ChildCategory;
use App\Models\Color;
use App\Models\newsletter;
use App\Models\order;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\productSize;
use App\Models\User;
use Exception;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use SebastianBergmann\Type\NullType;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class DefaultController extends Controller
{
    public function home(): View
    {

        $allcategories = ChildCategory::all();
        $product = Product::latest()->take(20)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();

        return view('frontend.layout.index')
            ->with([

                'product' => $product,
                'childcategory' => $allcategories,
                'blogs' => $blogs
            ]);
    }

    public function allparentcategory(): View
    {
        $allcategories = ParentCategory::all();
        $product = Product::latest()->take(20)->get();
        // $products = Product::whereRaw('id % 2 != 0')->latest()->take(20)->get();


        return view('frontend.layout.category', compact('product', 'allcategories'));

    }


    public function productbycategory(Request $request){
        $id = $request->id;
        $getid = ParentCategory::where('name', $id)->get();
        $allid =$getid ->pluck('id')->all();
          $pid = ChildCategory::where('parent_category_id', $allid)->get();
if($pid->isEmpty())
            {
                $products =  Product::where(function ($query) use($allid){
                    $query->whereNull('child_category_id')
                        ->where('parent_category_id', $allid);
                })->paginate(12);
                // dd($products->all());
                $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
                $parentcategory = ParentCategory::where('id',  $allid)->get();
                return view('frontend.layout.productbycategory')->with([
                  'product' => $products,
                  'categories' =>$parentcategory,
                  'blogs' => $blogs,
              ]);
            } else{
                $childcategory = ChildCategory::where('parent_category_id',  $allid)->get();
                $parentcategory = ParentCategory::where('id', $allid)->get();
                $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
                $product = Product::latest()->take(20)->get();
                return view('frontend.layout.childcatgory')->with([
                    'childcategory' => $childcategory,
                    'parentcategory' =>$parentcategory,
                    'product' => $product,
                    'blogs' => $blogs,
                ]);

            }


    }


    public function all(Request $request, $category = null)
    {
        $categorySelected = '';
        $categoryName = $request->category;

        $products = Product::query();

        $categories = ParentCategory::all();
        $productCounts = Product::select('parent_category_id', DB::raw('count(*) as product_count'))
            ->groupBy('parent_category_id')
            ->get();

        // Search functionality
        if ($request->filled('query')) {
            $query = $request->input('query');
            $products = $products->where('name', 'like', "%$query%");
        }

        // Filter by category
        if (!empty($categoryName)) {
            $category = ParentCategory::where('name', $categoryName)->first();
            if ($category) {
                $products = $products->where('parent_category_id', $category->id);
                $categorySelected = $category->id;
            }
        }

        // Filter by price range
        if ($request->filled('price_max') && $request->filled('price_min')) {
            $products = $products->whereBetween('price', [$request->input('price_min'), $request->input('price_max')]);
        }

        // Paginate the results
        $products = $products->paginate(12);

        $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();

        return view('frontend.layout.allproduct')->with([
            'product' => $products,
            'categories' => $categories,
            'productCounts' => $productCounts,
            'blogs' => $blogs,
            'categorySelected' => $categorySelected,
        ]);
    }
 // Search feilds



    public function porductbychildcategory(Request $request){

        $id = $request->id;

        $childproduct = Product::where('child_category_id',  $id)->paginate(12);
        $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();


       $category =  ChildCategory::where('id',  $id)->take(1)->get();
    //   dd($category);
        return view('frontend.layout.productbycategory')->with([

            'product' => $childproduct,
            'categories' =>$category,
            'blogs' => $blogs,
        ]);
    }
    public function addtocart(Request $request)

    {
   // Retrieve individual form fields
   $quantity = $request->input('quantity');
   $color = $request->input('color');
   $size = $request->input('size');
   $id = $request->input('id');




   if (Auth::user()) {
    $product = Product::find($id);

    // Get the existing cart from the session or initialize an empty array
    $wish = Session::get('cart', []);

    // Check if the product already exists in the cart

        // Product doesn't exist, add it to the cart
        $productImage =  $product->getFirstMediaUrl('product.image');
        $price = $product->discounted_price ?? $product->price;
        $wish[$id] = [
            "id" =>$product->id,
            "name" => $product->name,
            "quantity" => $quantity ,
            "price" => $price,
            "photo" => $productImage,
            "size" => $size,
            "color" => $color


            // Add other product details as needed
        ];


    // Save the updated cart array to the session
    Session::put('cart', $wish);

    // Return a JSON response (optional)
    return response()->json(['cartSection' => view('frontend.layout.cart')->render()]);
} else {
    // Redirect to the login route
    return response()->json(['redirect' => route('auth.login')]);
}




       }

 public function updateCart(Request $request)
{
    $id = $request->input('id');
    $quantity = $request->input('quantity');

    $cart = Session::get('cart', []);

    if (isset($cart[$id])) {
        // Update the quantity for the specified product
        $cart[$id]['quantity'] = $quantity;

        // Save the updated cart array to the session
        Session::put('cart', $cart);

        // Return a JSON response with the updated cart section
        return response()->json([
            'cartSection' => view('frontend.layout.cart')->render(),
                  'updatecar' => view('frontend.layout.adcart')->render()
        ]);
    }

    return response()->json(['error' => 'Product not found in cart']);
}
    public function addtowishlist($productId)
    {
        // Sample product information retrieval, replace it with your logic
        if (Auth::user()) {
            $product = Product::find($productId);

            // Get the existing cart from the session or initialize an empty array
            $wish = Session::get('wish', []);


                // Product doesn't exist, add it to the cart
                $productImage =  $product->getFirstMediaUrl('product.image');
                $price = $product->discounted_price ?? $product->price;
                $wish[$productId] = [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $price,
                    "photo" => $productImage


                    // Add other product details as needed
                ];

            // Save the updated cart array to the session
            Session::put('wish', $wish);
            // Return a JSON response (optional)
            return response()->json(['wishSection' => view('frontend.layout.wish')->render()]);
        }
      else{
            // Redirect to the login route
            return response()->json(['redirect' => route('auth.login')]);
        }
    }



    public function deletecart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                return response()->json([ 'cartSection' => view('frontend.layout.cart')->render(),
                'updatecar' => view('frontend.layout.adcart')->render()]);

            }

        }

    }

    public function cart()
    {
        return view('frontend.layout.addtocart');
    }



    public function wish()
    {
        return view('frontend.layout.addtowishlist');
    }

    public function deletewish(Request $request)
    {
        if($request->id) {
            $wish = session()->get('wish');
            if(isset($wish[$request->id])) {
                unset($wish[$request->id]);
                session()->put('wish', $wish);
                return response()->json(['wishSection' => view('frontend.layout.wish')->render()]);

            }

        }
    }

    Public function productDetail(Request $request)
    {

        $name = $request->name;
        $products= Product::where("name",$name)->first();

        $colors = Color::whereIn('id', $products->color)->get();
        $size = productSize::whereIn('id', $products->size)->get();


        if (!$products) {
            // Handle the case where the product is not found
            abort(404); // or redirect to a 404 page, or display an error message
        };

        $relatedProducts = Product::where('parent_category_id',$products->parent_category_id)->where('name', '!=', $name)->get();

        $productImage = $products->getFirstMediaUrl('product.image');

        $color = Color::all();




return view('frontend.layout.productdetail')->with([
    'product' => $products,
    'image' => $productImage,
    'colors' => $colors,
    'size' => $size,
    'relate' =>$relatedProducts
]);



    }

    public function checkout():View
    {

        return view ('frontend.layout.checkout');

    }


    public function payment(Request $request)
    {
        // $all = $request->all();
        // // dd($all);
        // $userID = Auth::User()->id;
        $validation =$request->validate([
            'Fname'=>'required',
            'Lname'=>'required|max:60',
            'email'=>'required|max:60',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zipcode'=>'required',
            'Phno'=>'required',
            'payment_method'=>'required',

      ]);
        print_r($validation);
        $Fname=$request->input('Fname');
        $email = $request->input('email');
        $Lname=$request->input('Lname');
        $address=$request->input('address');
        $city=$request->input('city');
        $state=$request->input('state');
        $zipcode=$request->input('zipcode');
        $phno=$request->input('Phno');
        $Pmethod=$request->input('payment_method');

          $fullname =$Fname.''.$Lname;
          $state_city = $city.','.$state;


        if(session('cart'))
        {
            $total=0;$count=0;$order_details='';$delivery_charges=0;
            foreach (session('cart') as $id => $details)
            {
                $count=$count +1 ;
                $total += $details['price'] * $details['quantity'];
                $order_details=$order_details.'<br>'.
                ('Product Name:'.$details["name"].' <br> Quantity: '.$details["quantity"].
                '<br> Price:'.$details["price"].'<br> Size:'.$details["size"].'<br> Color:'.$details["color"]);
            }
    }
    $Amount =$total;
    $O_Details=$order_details;
    $Email_Id=Auth::user()->email;
    $userid = Auth::user()->id;
    $loginid=$Email_Id;
    $name=Auth::user()->name;
/*Order Details Ends Here*/
     $Order = new order();

     $user =  User::where('id', $userid);
     $Order->userid=$userid;
     $Order->userName=$fullname;
     $Order->StreetAddress=$address;
     $Order->state=$state_city;
     $Order->zipcode=$zipcode;
     $Order->phoneNo=$phno;
     $Order->product_detail=$order_details;
     $Order->totalprice=$Amount;
     $Order->payment_method=$Pmethod;
     $Order->save();
     $id=$Order->id;

     if($Pmethod=='Stripe')
     {
        $welcomemessage='Hello '.$name.'<br>';
        $emailbody='Your Order Was Placed Successfully<br>
        <p>Thank you for your order. We’ll send a confirmation when your order ships. Your estimated delivery date is 3-5 working days. If you would like to view the status of your order or make any changes to it, please visit Your Orders on <a href="https://www.gainaloe.com">Gainaloe.com</a></p>
        <h4>Order Details: </h4><p> Order TrakingNo:'.$Order->order_no.$O_Details.'</p>
         <p><strong>Delivery Address:</strong>
       '.$address.'</p>
        <p> <strong>Total Amount:</strong>
        '.$Amount.'</p>
         <p><strong>Payment Method:</strong>'.$Pmethod.'</p>';
        $emailcontent=array(
            'WelcomeMessage'=>$welcomemessage,
            'emailBody'=>$emailbody

            );
            Mail::send(array('html' => 'emails.order'), $emailcontent, function($message) use
            ($loginid, $name,$id)
            {
                $message->to($loginid, $name)->subject
                ('Your furnimart.co.uk order '.$id.' is Confirmed');
                $message->from('muhammadnoman0786@hotmail.com','furnimart.co.uk');

            });
        return redirect("stripe/$id");
     }
     else
     {


        $welcomemessage='Hello '.$name.'<br>';
        $emailbody='Your Order Was Placed Successfully<br>
        <p>Thank you for your order. We’ll send a confirmation when your order ships. Your estimated delivery date is 3-5 working days. If you would like to view the status of your order or make any changes to it, please visit Your Orders on <a href="https://www.gainaloe.com">Gainaloe.com</a></p>
        <h4>Order Details: </h4><p> Order trakingNo:'.$Order->order_no.$O_Details.'</p>
         <p><strong>Delivery Address:</strong>
       '.$address.'</p>
        <p> <strong>Total Amount:</strong>
        '.$Amount.'</p>
         <p><strong>Payment Method:</strong>'.$Pmethod.'</p>';
        $emailcontent=array(
            'WelcomeMessage'=>$welcomemessage,
            'emailBody'=>$emailbody

            );
            Mail::send(array('html' => 'emails.order'), $emailcontent, function($message) use
            ($loginid, $name,$id)
            {
                $message->to($loginid, $name)->subject
                ('Your ouction.pk order '.$id.' is Confirmed');
                $message->from('muhammadnoman0786@hotmail.com','furnimart.co.uk');

            });
                Session::forget('cart');
                Session::forget('discount');
                Session::forget('promocode');
                session()->flash('success', 'Session data  is Cleared');


        return view('frontend.thankyou')->with([
            'email' => $email
        ]);
     }



}


public function detail(OrderDataTable $colorDatable)
{
    return $colorDatable->render('admin.order.index',[$colorDatable]);
}


public function orderedit(order $id):View
{


     $userid = $id->userid;
     $mail = User::where('id', $userid)->first();
    //  dd($mail);
   $email= $mail->email;




    return view('admin.order.updateorder',)->with([
        'orders' => $id,
        'mail' => $email
    ]);


}
 public function orderupdate(Request $request):RedirectResponse
 {


    try {
    $id =$request->id;
    $order= order::where('id',$id)->first();

    $order->delivery_status = $request->delivery_status;
    $order->zipcode = $request->zipcode;
    $order->StreetAddress = $request->StreetAddress;
    $order->state = $request->state;
    $order->phoneNo = $request->phoneNo;

    $order->save();
    return redirect()->back()->with('success', 'Delivery status updated successfully');
} catch (Exception $ex) {
    return back()->withError("Something went wrong");
}
}

    public function blog(){
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(8);


        return view('frontend.layout.blog')->with([
            'blogs' => $blogs
        ]);



    }
    public function blogDetail(Request $request)
    {
        $id = $request->id;
        $detail = Blog::where('id', $id)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
        return view('frontend.layout.blogdetail')->with([
            'detail' => $detail,
            'blogs' => $blogs
        ]);


    }

    public function forgotPassword(){

        return view('admin.auth.forgot-password');
    }

    public function trackorder(Request $request){
        $request->validate([
            'orderno' => 'required|string', // Example validation rule (adjust as needed)
        ]);



        $trackor = $request->orderno;

        $order = order::where('order_tracker', $trackor)->first();
        if (!$order) {
           Session::put('val', 'ORderNotFout');
            return view('frontend.ordertrack');
        }else{

        // Get the order creation date (updated_at timestamp)
        $orderCreationDate = $order->updated_at;

        // Calculate the date 5 days after the order creation date
        $dateAfter5Days = new \DateTime($orderCreationDate);
        $dateAfter5Days->modify('+5 days');

        // Format the calculated date as a string
        $formattedDate = $dateAfter5Days->format('Y-m-d');

        return view('frontend.trackorder')->with([
            'order' => $order,
            'formattedDate' => $formattedDate
        ]);

    }




    }

    public function newsletter(Request $request) {
        $request->validate([
            'email' => 'required|email', // Example validation rule (adjust as needed)
        ]);

        $email = $request->email;

        // Check if the email already exists in the database
        $existingSubscriber = Newsletter::where('email', $email)->first();

        if ($existingSubscriber) {
            // Email already exists, return back with alert
            return redirect()->back()->with('alert', 'You are already subscribed to our newsletter');
        }

        // Email does not exist, proceed to save it
        $news = new Newsletter();
        $news->email = $email;
        $news->save();

        return redirect()->back()->with('alert', 'Your email has been added to our mailing list');
    }









 }









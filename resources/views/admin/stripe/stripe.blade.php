<!DOCTYPE html>
<html>
<head>
    <title>Laravel - Stripe Payment Gateway Integration Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body{

    display: flex;
    background-color: rgb(0, 0, 34);
    padding-top: 3%;
    background-image: url("https://i.imgur.com/4bg1e6u.jpg");
    align-items: center;
    justify-content: center;
    width: 400%;
    border: none;


}
.card{
    max-width: 1000px;
    margin: 2vh;
    background-color: #ffffff1f;
}
.card-top{
    padding: 0.7rem 5rem;
}
.card-top a{
    float: left;
    margin-top: 0.7rem;
}
#logo{
    font-family: 'Dancing Script';
    font-weight: bold;
    font-size: 1.6rem;
}
.card-body{
    padding: 0 5rem 5rem 5rem;
    background-image: url("https://i.imgur.com/4bg1e6u.jpg");
    background-size: cover;
    background-repeat: no-repeat;

}
@media(max-width:768px){
    .card-body{
        padding: 0 1rem 1rem 1rem;
        background-image: url("https://i.imgur.com/4bg1e6u.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .card-top{
        padding: 0.7rem 1rem;
    }
}
.row{
    margin: 0;
}
.upper{
    padding: 1rem 0;
    justify-content: space-evenly;
}


.icons{
    margin-left: auto;
}
form span{
    color: rgb(179, 179, 179);
    font-size: medium;
}
form{
    padding: 2vh 0;
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    height: 37px;
    font-size: large;
    width: 98%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.header{
    font-size: 1.5rem;
}
.left{

    padding: 2vh;
}
.left img{
    width: 4rem;
}
.left .col-4{
    padding-left: 0;
}
.right .item{
    padding: 0.3rem 0;
}
.right{
  color: white;
    padding: 2vh;
}
.col-8{
    padding: 0 1vh;
}
.lower{
    line-height: 2;
}
.btn{
    background-color: #ff9900cf;
    border-color: rgb(23, 4, 189);
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin: 4vh 0 1.5vh 0;
    padding: 1.5vh;
    border-radius: 0;
}
.btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none;
}
.btn:hover{
    color: black;
   width: 100%;
    font-size: 1.6rem;
    margin: 4vh 0 1.5vh 0;
    padding: 1.5vh;
    border-radius: 0;

    background-color: #db7804eb;
    font-weight: 500;
}
a{
    color: black;
}
a:hover{
    color: black;
    text-decoration: none;
}
input[type=checkbox]{
    width: unset;
    margin-bottom: unset;
}
.fw{
    font-size: 15px;
}
#cvv{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.575) , rgba(255, 255, 255, 0.541)), url("https://img.icons8.com/material-outlined/24/000000/help.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}
.bg-info{
    background-color: #b0c1c494 !important;
    border-radius: 10px;
    padding: 5px;
    font-size: xx-large;
    font-family: revert;
    font-weight: 700;
}
.btn-smal{

    border: 1px solid black;
    border-radius: 5px;
    padding: 5px;
    color: white;
    background-color: #ff9900cf;
}
.btn-smal:hover{
    color: black;
    border: 1px solid black;
    border-radius: 5px;
    padding: 5px;

    background-color: #db7804eb;
    font-weight: 500;
}

</style>
</head>
<body class="container" >

<div class="card mt-10">
        <div class="card-top mt-2  text-center">


        </div>
        <div class="card-body col-12">
            <h1 class="text-center bg-info p-2" >Payment Gateway</h1><br>
            <div class="row">
                <div class="col-md-7">
                    <div class="left border">
                        <div class="row">
                            <span class="header">Payment</span>
                            <div class="icons">
                                <img src="https://img.icons8.com/color/48/000000/visa.png"/>
                                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png"/>
                                <img src="https://img.icons8.com/color/48/000000/maestro.png"/>
                            </div>
                        </div>
                        @foreach($id as $ids)
                        @endforeach
                    <form
                            role="form"
                            action="{{ route('stripe.post', ['id' => $ids->id]) }}"
                            method="post"
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
                            <span>Cardholder's name:</span>
                            <input
                                    class='fs-3' type='text'>
                            <span>Card Number:</span>
                            <input
                            autocomplete='off' class=' card-number cc-number'  placeholder="0125 6780 4567 9909" size='20' maxlength="19"
                            type='text' >
                            <div class="row">
                                <div class="col-4"><span>Expiry Month:</span>
                                    <input
                                    class=' card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                                </div>
                                <div class="col-4"><span>Expiry Year:</span>
                                    <input
                                    class=' card-expiry-year ' placeholder='YYYY' size='4'
                                    type='text'>
                                </div>
                                <div class="col-4"><span>CVV:</span>
                                    <input autocomplete='off'
                                    class=' card-cvc cc-cvc' placeholder='ex. 311' size='4'
                                    type='text' id="cvc">
                                </div>
                                <a href="{{url('cart')}}" class="fw  btn-smal"> Back to Cart </a>
                            </div>
                            <input type="text" name="id" value="{{$ids->id}}" hidden readonly>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="right border">
                        <div class="header fw-bolder">Order Summary</div>
                        <p class="fw">2 items</p>
                        <?php $total = 0; ?>
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                <?php $total += $details['price'] * $details['quantity']; ?>
                        <div class="row item">
                            <div class="col-4 align-self-center"><img class="img-fluid" src="{{ $details['photo'] }}"></div>
                            <div class="col-8">
                                <div class="row"><b>${{ $details['price'] }}</b></div>
                                <div class="row text-muted">{{ $details['name'] }}</div>
                                <div class="row">Qty:{{ $details['quantity'] }}</div>
                            </div>
                        </div>
                        @endforeach
                        @endif


                        <hr>
                        <div class="row lower">
                            <div class="col  fs-2 text-left fw">Subtotal</div>
                            <div class="col text-right">$ {{$total}}</div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left fw">Delivery</div>
                            <div class="col text-right fw">Free</div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left fw"><b>Total to pay</b></div>
                            <div class="col text-right"><b>$ {{$total}}</b></div>
                        </div>

                        <button class="btn fw" type="submit">Place order {{$ids->totalprice}}</button>
                    </form>
                        <p class="text-muted text-center">Complimentary Shipping & Returns</p>
                    </div>
                </div>
            </div>
        </div>

     <div>
    </div>
    </div>

</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.0.1/jquery.payment.min.js"></script>


<script type="text/javascript">

$(function() {

    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/

    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });

        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }

    });

    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

});

$('#payment-form .cc-number').formatCardNumber();
  $('#payment-form .cc-expires').formatCardExpiry();
  $('#payment-form .cc-cvc').formatCardCVC();
</script>
</html>

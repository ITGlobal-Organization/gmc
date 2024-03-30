var addmodal = document.getElementById( "vcc" );
var addbtn = document.getElementById( "btn-vcc" );
var addspan = document.getElementById( "close1" );
var price = 0;

$(document).on('click','.btn-vcc',function(){
   addmodal.style.display = "block";
   price = $(this).data('id');
   initialize();
})

 let stripeIntent = null; 
 let amount = 0;
 // This is your test publishable API key.
   const stripe = Stripe(stripeConfig.apiKey);
   let elements;
   

   let emailAddress = '';
   // Fetches a payment intent and captures the client secret
async function initialize() {
   const response = await fetch(stripeConfig.paymentIntentRoute, {
      method: "POST",
      headers: { "Content-Type": "application/json",'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      body: JSON.stringify({
           'price':stripeConfig.price
      }),
   });
   const data = await response.json();
  
   const appearance = {
      theme: 'stripe',
   };
   let clientSecret = data.data.clientSecret;
   amount = data.data.amount;
   stripeIntent = data.data.intent_id;
   elements = stripe.elements({ appearance, clientSecret:clientSecret });

   const paymentElementOptions = {
      layout: "tabs",
   };
      const paymentElement = elements.create("payment", paymentElementOptions);
      paymentElement.mount("#payment-element");
}



$(document).on('click','.close1',function(){
   addmodal.style.display = "none";
})
async function chargePayment(){
      

      setLoader(true)
      const { error } = await stripe.confirmPayment({
         elements,
         confirmParams: {
            // Make sure to change this to your payment completion page
            return_url: stripeConfig.confirmIntentRoute,
            receipt_email: emailAddress,
         },
      });
      if (error.type === "card_error" || error.type === "validation_error") {
         showMessage(error.message);
      } else {
         showMessage("An unexpected error occurred.");
      }
      setLoader(false);
      console.log(error)
}

function showMessage(messageText) {
   notify(messageText,'succcess')
}
// when the document is ready
$( document ).ready(function() {

    // query params
    var userIdParam = "&user_id=";
    var totalParam = "&total=";
    var sessionIdParam = "&sessionId=";
    var orderTotal;

    // this is the unique user id associated with the
    // session (see payment.php) - it was declared and
    // initialised on the global scope in order.php
    id = user.user_id; 
    sessionId = user.sessionId; // get session id (see payment.php) 
    

    // When user clicks proceed, an AJAX request is made to PHP server
    // server executes insert query on order table with data provided as 
    // url parameters
    $( "input#proceed" ).on( "click", function(event) {
        
        /** get the cart items from localStorage and 
        calculate the total */
        function calculateTotal(){

            var product;

            var priceArray = [];

            for(var key in localStorage){

                if(key.match(sessionId)){
                    

                    var product = JSON.parse(localStorage.getItem(key));
                    
                    //remove euro symbol from price
                    var price = product.price.split("€ ").pop();

                    priceArray.push(parseFloat(price));

                }

            } 

            /*sum all prices in prices array with reduce  method applying a fuction accumulator
            for each value of the array to 'reduce' it to a single value. A really cool function!*/
            if(priceArray.length == 0){
                return 0;
            }
            else {
                return priceArray.reduce(function(a, b){return a+b;});
            }

        }

        // insert the order data into the orders table of the db with an 
        // AJAX request - see also commitOrder.php which holds up PHP's 
        // end of the bargain
    	function commitOrder(total){
    		// do Ajax Request
    		// send data to php (commitOrder.php)
    		 $.ajax({
    		    url : "commitOrder.php",
    		    type: "POST",
    		    data : userIdParam + id + totalParam + total + sessionIdParam + sessionId,
    		    success: function(data,status,xhr)
    		    {
                    // clear cart/order from localStorage
                    for(var key in localStorage){

                        if(key.match(sessionId)){
                        
                            localStorage.removeItem(key);
                        }

                    } 

    		        // if the payment is successful, navigate to the order confirmation page
                    // passing the user idea as a url parameter
                    window.location.replace("order.php?"+id);
    		    }

    		}); 
    	}
        orderTotal = calculateTotal();
        // execute the AJAX insert
    	commitOrder(orderTotal);
    });

		

});
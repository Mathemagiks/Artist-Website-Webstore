$(function(){


	// hide the warnings
	$('p.warning').hide();
	$('#disabledProceedButtonWarning').hide();

	//validate credit card number
		$('#cc-number').validateCreditCard(function(result){

			// if the card is valid, hide the warnings and enable the 
			// proceed button
			if(result.valid){

				$('p#numberWarning').hide();
				$("input#proceed").prop('disabled', false);
				$('#disabledProceedButtonWarning').hide();
			}
			else {
				// if the card is invalid show the warnings and 
				// disable the proceed button
				$('p#numberWarning').show(); 
				$("input#proceed").prop('disabled', true);
				$("#disabledProceedButtonWarning").show();
			}

		});
	
});
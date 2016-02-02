(function ($) {

	$('#sendMessage').click(function(){
		var clientName 		= $('#clientName').val();
		var clientCity 		= $('#clientCity').val();
		var clientCompany 	= $('#clientCompany').val();
		var clientPhone 	= $('#clientPhone').val();
		var clientMobile 	= $('#clientMobile').val();
		var clientEmail 	= $('#clientEmail').val();
		var clientArrival 	= $('#arrival').val();
		var clientDeparture	= $('#departure').val();
		var clientAdults 	= $('#clientAdults').val();
		var clientChildren 	= $('#clientChildren').val();
		var clientPurpose 	= $('#clientPurpose').val();
		var clientInfo 		= $('#clientInfo').val();
		
		var fError = 0;
		
		$('.failed').hide();
		
		if (!clientName)
		{
			$('#fName').show('slow');
			fError++;
		}
		
		if (!clientEmail)
		{
			$('#fEmail').show('slow');
			fError++;
		}
		
		if (!clientArrival)
		{
			$('#fArrival').show('slow');
			fError++;
		}
		
		if (!clientDeparture)
		{
			$('#fDeparture').show('slow');
			fError++;
		}
		
		if (!clientAdults)
		{
			$('#fAdults').show('slow');
			fError++;
		}
		
		if (!clientChildren)
		{
			$('#fChildren').show('slow');
			fError++;
		}
		
		if (fError == 0)
		{
			$.ajax({
		        type:   'POST',
		        url:    '/email/send-email.php',
		        data:{  
		        	clientName 		: clientName,
		    		clientCity 		: clientCity,
		    		clientCompany 	: clientCompany,
		    		clientPhone 	: clientPhone,
		    		clientMobile 	: clientMobile,
		    		clientEmail 	: clientEmail,
		    		clientArrival 	: clientArrival,
		    		clientDeparture	: clientDeparture,
		    		clientAdults 	: clientAdults,
		    		clientChildren 	: clientChildren,
		    		clientPurpose 	: clientPurpose,
		    		clientInfo 		: clientInfo 
		             },
		        success:
		        function(xml)
		        {
		            if ('0' != xml)
		            {
		            	$('#hasSent').show('slow');
		            }
		        }
		    });
		}
		
		return false;
	});

})(jQuery);

/*!
 * A Fancy AJAX Contact Form
 * http://tutorialzine.com/2009/09/fancy-contact-form/
 * http://tutorialzine.com/
 */

$(document).ready(function(){

	$("button").click(function(){

		$(".formError").hide();

	});

	var use_ajax=true;
	$.validationEngine.settings={};

	$("#contact-form").validationEngine({
		success :  function(){use_ajax=true},
		failure : function(){use_ajax=false;}
	 })

	$("#contact-form").submit(function(e){
			
			if(use_ajax)
			{
				$('#contact-loading').css('visibility','visible');
				$.post('submit.php',$(this).serialize()+'&ajax=1',
				
					function(data){
						if(parseInt(data)==-1)
							$.validationEngine.buildPrompt("#captcha","* Wrong verification number!","error");
							
						else
						{
							$("#contact-form").hide('slow').after('<h1 class="mail-sent">Thank you!</h1>');
						}
						
						$('#contact-loading').css('visibility','hidden');
					}
				
				);
			}
			e.preventDefault();
	})

});
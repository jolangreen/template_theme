jQuery(document).ready(function(){
	var interval='';
	var error_style = 'border:2px solid red';
	var error_message = 'Fields marked in RED are mandatory';
	//add empty div with error class
	add_error_div();
	
	jQuery('#publish').click(function(){
		
		
		//ajax request for getting the id's stored
		var data = {
				action: 'check-fields',
				type: "fields"
			};
		var valid_elements = [];
		jQuery.ajax({
		type: 'POST',
        url: ajax_object.ajaxurl,
        data: data,
        async: false, // This is the magic
        success: function(fields_attr){
        	var validate_elements = fields_attr.split(',');
			jQuery.each(validate_elements,function(){
				if(this == null || this == '')
					return ;
				
				var element = validate_input(this);
				if(element != true)
				{
					//display error div
					jQuery(element).attr('style',error_style);
					jQuery('#error_message').show();
					jQuery('#error_message').html('<p>'+error_message+'</p>');
					valid_elements.push(false);
				}
				else
					valid_elements.push(true);
			});
        }
		});
		
		if(jQuery.inArray(false,valid_elements) >=0)
		{
			jQuery('.ajax-loading').hide();
			interval = window.setInterval(remove_disabled_class, 3000);
			return false;
		}
		else
			return true;
	});
	
	
	
	function remove_disabled_class() { 
		jQuery('#publish').removeClass('button-primary-disabled');
		jQuery('#message').hide();
		window.clearInterval(interval);
	}
	
	
	function get_input_values()
	{
		
	/*	
		jQuery.post(ajax_object.ajaxurl,data,
		function(fields_attr){
			
		});
		*/
	}
	
	
	function validate_input(elements)
	{
		//check if null or empty 
		//also ajax request for checking featured image & categories
		var field = elements.split(':');
		var id = false;
		var field_name_id = jQuery('input[name='+field[0]+']').val();
		if(field_name_id == undefined){
			var field_name_id = jQuery('#'+field[1]).val();
			id=true;
		}
		
		if(id)
			element = '#'+field[1];
		else
			element = 'input[name='+field[0]+']';
		
		if(field_name_id == '' || field_name_id == null)
		{
			return element;
		}
		return true;
	}
	
	function add_error_div()
	{
		jQuery(".postarea").prepend('<div id="error_message" class="error" style="display:none;width:945px;"></div>');
	}
});


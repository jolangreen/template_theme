<?php
function mand_plugin_notice($data) {
    global $post;
    if (get_option('display_mand_admin_message')) 
    { // check whether to display the message

		
    	$html = '<style>#message{display:none;}</style><div class="error"><p>'.get_option('mand_message_custom').'</p></div>';
		//could not create seperate function as wordpress was not allowing to display message in the post .
		add_action('admin_notices' , create_function( '', "echo '" . $html . "';" ) );		
		
		$all_empty_elements = get_option('mand_elements');
		$all_empty_elements = split(',',$all_empty_elements);
		$selector = 1;
		foreach($all_empty_elements as $elements)
		{
			$elements = split(':',$elements);    
			$js_update_css .= 'jQuery("input[name='.$elements[0].']").css(cssObj);';    
			$js_update_css .= 'jQuery("#'.$elements[1].'").css(cssObj);';    
		}
		
		
		 ?>
		    <script>
		        jQuery(document).ready(function(){
		            var cssObj = {                
		            	'border': '2px solid red'
		            }
		            jQuery("input[name=_su_description]").css(cssObj);
		            <?php echo $js_update_css.$featured_image.$category_err;?>
		        });
		    </script>
		<?php
		update_option('display_mand_admin_message', 0); // turn off the message
    }
}



function mand_fields ($post_id) {

	if(get_post_type()!='post')
		return $post_id;
	
	if( !check_elements())
        {
        	$my_post['ID'] = $post_id;
			$my_post['post_status'] = 'draft';
			wp_update_post($my_post);
			$get_message = get_option('mand_message_custom');
			if ( empty( $get_message ) )
				update_option('mand_message_custom', 'The Fields Marked In Red Are Mandatory');	
							
			update_option('display_mand_admin_message', 1); // turn on the message
        }
        else
        {
        	update_option('display_mand_admin_message', 0); // turn on the message        	        	
        }
    return $post_id;
}


function has_featured_image()
{
	if(!get_option('check_featured_image'))
		return true;
	
	if(!has_post_thumbnail())
	{
		return false;
	}
	
	return true;
		
}


/*
 * Check if the category is checked or not 
 */
function has_categories()
{
	global $post;
	// check if the categories are to a post
	if(!get_option('check_categories'))
		return true;
	
	if(!has_category('', $post->ID) || in_category('uncategorized'))
	{
		return false;
	}
	
	return true;
	
}

function return_featured_image_id()
{
	return 'postimagediv:postimagediv';
}

function return_category_div_id()
{
	 return 'categorydiv:categorydiv';
}

function check_elements()
{
	$arr_flag = array();
	$elements = '';
	for($i=1;$i<=5;$i++)
	{
		$element = get_option('element_'.$i);		
		if ( !is_element_valid($element) && ! empty($element) )
		{
			$elements = error_elements($elements, $element);
		}
	}
	
	if(!has_featured_image())
		$elements = error_elements($elements, return_featured_image_id());
	if(!has_categories())
		$elements = error_elements($elements, return_category_div_id());
	
	if(strlen($elements)>0){
		update_option('mand_elements',$elements);
		return false;
	}
	else
		return true;
}

function is_element_valid($element_name){
	$field = split(':',$element_name);
	
	$value_emelemt = $_POST[$field[0]];
	
	if(empty($value_emelemt) && isset($value_emelemt))
		return false;
	else
		return true;				
}


function error_elements($prev_elements,$element_name)
{
	$prev_elements = $prev_elements .','.$element_name;
	$prev_elements = preg_replace('/^,/','',$prev_elements);
	return $prev_elements;
}

/*
 * This function will check via javascript if featured_image & categories are checked
 */
function js_check()
{
	 
	 $type = $_POST['type'];
	 switch($type)
	 {
	 	case 'fields':
	 		$element = 5;
	 		$elements = '';
	 		for($i=1;$i<$element;$i++)
	 		{
	 			$new_element = get_option('element_'.$i);
	 			$elements = error_elements($elements,$new_element);
	 		}
	 		echo $elements;
	 		break;
	 }
	 
	 die();
}

function return_fields()
{
	
}

?>

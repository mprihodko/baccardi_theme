<?php

add_action('category_edit_form_fields','category_edit_form_fields');
add_action('category_add_form_fields','category_add_form_fields');

if(!function_exists('category_add_form_fields')){

	function category_add_form_fields(){

		wp_enqueue_media();
		?>
		<div class="form-field">
           
            <label for="catpic"><?php _e('Picture of the category', ''); ?></label>
        
           	<div>
                <img src='' id="cat_img_prev" width='100'> 
			    <input type="hidden" name="category_image_url" id="image_url" class="regular-text">
			    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">
			</div>
            
        </div>
        <script type="text/javascript">
			jQuery(document).ready(function($){
				$('#cat_img_prev').attr('src', $('#image_url').val());
			    $('#upload-btn').click(function(e) {
			        e.preventDefault();
			        var image = wp.media({ 
			            title: 'Upload Image',
			            // mutiple: true if you want to upload multiple files at once
			            multiple: false
			        }).open()
			        .on('select', function(e){
			            // This will return the selected image from the Media Uploader, the result is an object
			            var uploaded_image = image.state().get('selection').first();
			            // We convert uploaded_image to a JSON object to make accessing it easier
			            // Output to the console uploaded_image
			            var image_url = uploaded_image.toJSON().url;
			            // Let's assign the url value to the input field
			            $('#image_url').val(image_url);
			            $('#cat_img_prev').attr('src', $('#image_url').val());
			        });
			    });
			});
		</script>
		<?php 
	}

}

if(!function_exists('category_edit_form_fields')){


	function category_edit_form_fields(){

		wp_enqueue_media();
		?>

		<tr class="form-field">
            <th valign="top" scope="row">
                <label for="catpic"><?php _e('Picture of the category', ''); ?></label>
            </th>
            <td>
                <div>	
                	<img src='' id="cat_img_prev" width='100'> 			    
				    <input type="hidden" name="category_image_url" id="image_url" class="regular-text">
				    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">
				</div>
            </td>
        </tr>
         <script type="text/javascript">
			jQuery(document).ready(function($){
				$('#cat_img_prev').attr('src', $('#image_url').val());
			    $('#upload-btn').click(function(e) {
			        e.preventDefault();
			        var image = wp.media({ 
			            title: 'Upload Image',
			            // mutiple: true if you want to upload multiple files at once
			            multiple: false
			        }).open()
			        .on('select', function(e){
			            // This will return the selected image from the Media Uploader, the result is an object
			            var uploaded_image = image.state().get('selection').first();
			            // We convert uploaded_image to a JSON object to make accessing it easier
			            // Output to the console uploaded_image
			            var image_url = uploaded_image.toJSON().url;
			            // Let's assign the url value to the input field
			            $('#image_url').val(image_url);
			            $('#cat_img_prev').attr('src', $('#image_url').val());
			        });
			    });
			});
		</script>
		<?php


	}

}
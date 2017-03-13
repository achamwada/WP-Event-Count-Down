/*var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';
    jQuery(function($) {
        $('body').on('click', 'select', function() {
          
            var the_id = $(this).val();

            alert("The id is "+the_id);
          
            if(the_id != '') {
              
                var data = {
                    action: 'myCategories',
                    the_id: the_id
                }
 
                $.post(ajaxurl, data, function(response) {

                    //$('.load-categories').html(response);
                    alert("From php response "+response);
                   
                });
            }
           
        });
    });*/
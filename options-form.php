<?php 
$current_date = strtotime("Today");
$final_date =strtotime("August 1, 2017 12:00 AM");
echo "current_date: $current_date <br/>";
echo "final_date: $final_date <br/>";
//include "main.js";
$process_page =  $_SERVER['PHP_SELF']."?page=day_time_counter";

if($_POST['menu_item_changer']){
	echo "<h1>".$_POST['menu_item_changer']."</h1>";
	//exit();

	

}

/*$current_date = date("Y/m/d");
$final_date =strtotime("August 1, 2017 12:00 AM");*/

//if($current_date<=$final_date){
//$everyday=  $_POST['menu_item_changer'];

//}
/*add_filter( 'nav_menu_link_attributes', 'add_specific_menu_atts', 10, 3 );

function add_specific_menu_attsq( $atts, $item, $args ) {

		include "countdown.php";

		$menuLocations = get_nav_menu_locations();
		$menuID = $menuLocations['primary']; 
		$primaryNav = wp_get_nav_menu_items($menuID);

		foreach ($primaryNav as $menu_item) {

			if($menu_item->post_title==$_POST['menu_item_changer']){
				$my_menu_id = $menu_item->ID;
			}
			
		}


			$menu_items = array($my_menu_id);
			if (in_array($item->ID, $menu_items)) {
			  $atts['class'] = 'menu_syl';
			}
			
		    return $atts;
		}*/



?>

<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Heading', 'wp_admin_style' ); ?></h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e( 'Date Count Down settings', 'wp_admin_style' ); ?></span>
						</h2>

						<div class="inside">
							<p><?php esc_attr_e( 'Select the navigation location followed by the menu item ', 'wp_admin_style' ); ?></p>

							
							<form id="my_form" name="my_form" action="<?php echo $process_page; ?>" method="POST">
							<input type="hidden" value="379" name="category_name" /><br>

								<div class'menu_loc'>

								<select name="menu_locat" id="select_menu_item">
										
										<option  value="379" type="hidden" >Select Menu location</option>
										<?php

										$menuLocations = get_nav_menu_locations();
										foreach ($menuLocations as $menu_item => $value) {
													echo "<option class='select_menu_loc' value=".$menu_item.">$menu_item</option>";
												}
													?>
										
									</select>
									
								</div>
										

									<select class='load-menu-items' name='menu_item_changer' id="select_menu_item2">
										<option selected="selected" value="none_selected" type="hidden">Select Menu</option>
										
									</select>



									<br/><br/>

									

									<br/>
									
								<input class="button-primary" type="submit" name="menu_update" value="<?php esc_attr_e( 'Update Menu' ); ?>" />
							</form>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e(
									'About Plugin', 'wp_admin_style'
								); ?></span></h2>

						<div class="inside">
						<!--<h2><?php //esc_attr_e( 'Title Day Countdown', 'wp_admin_style' ); ?></h2>-->
							<p><?php esc_attr_e( 'This plugin allows you to select the menu navigation you want to have a countdown on', 'wp_admin_style' ); ?></p>
							<img src="http://www.cbronline.com/wp-content/uploads/2016/11/index_logo_progressive.jpg" style="width: 58%; margin-left: 3em;" />

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->




<script type="text/javascript">
//Ajax function to post year to the php callback functon
   var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';
    jQuery(function($) {
    	//.on('change', 'input', function() {
        $('#select_menu_item').on('change',  function() {

             var the_id = $('option:selected').attr('value');
    
          
          
          
            if(the_id != '') {
              
                var data = {
                    action: 'collect_menu_items',
                    the_id: the_id
                }
 
                $.post(ajaxurl, data, function(response) {

                	$('.load-menu-items').html(response);

                   
                });
            }
           
        });
    });
</script>



<?php 
	$date = strtotime("August 1, 2017 12:00 AM");
    $time_h = $date - time();
    $remaining = ceil($time_h/86400); 

    ?>

	<style type="text/css">

 

.menu_syl::before { 
    content: "<?php echo "$remaining "; ?>";
}

.success_change{
	color:#297147 !important;
}

</style>
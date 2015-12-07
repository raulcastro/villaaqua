<div class="rental-service_item">
                                            		<div class="rs-item_inner">
                                            			<div class="rs-item_actions">
                                            				<a class="rs-item_action_zoom js-fancybox" rel="gr1" href="/images/overview/the-rooms/Villa_Aqua_master_bedroom_1.jpg"><i class="fa fa-search-plus"></i></a>
                                            			</div>
                                            			<div class="rs-item_content">
                                            				<img width="1140" height="676" src="/images/overview/the-rooms/Villa_Aqua_master_bedroom_1.jpg" class="vc_single_image-img attachment-full" alt="Villa Aqua Master Bedroom" />
                                            			</div>
                                            		</div>
                                            	</div>
<a href="http://villaaqua.dev/images/staff-and-services/Menu_epic-experiences.pdf" target="_blank"></a>
<a href="/contact-us/" target="_blank"></a>

<?php 
public function getHead()
{
	ob_start();
	?>
    <?php echo self::getCommonDocuments(); ?>
    <?php echo self::getGoogleAnalytics(); ?>
	<?php
	$head = ob_get_contents();
	ob_end_clean();
	return $head;
}
	
public function getContent()
{
	ob_start();
	echo self::getHeader();
	?>

    <?php 
    $content = ob_get_contents();
    ob_end_clean();
	return $content;
}
    
public function getHeader()
{
	ob_start();
    ?>
    	
    <?php 
    $header = ob_get_contents();
    ob_end_clean();
    return $header;
}

?>



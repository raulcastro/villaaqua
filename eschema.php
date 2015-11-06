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

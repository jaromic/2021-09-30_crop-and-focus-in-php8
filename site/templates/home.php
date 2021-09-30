<?php

/**
 * @var $page
 */

include("./basic-page.php");

$image = $page->image->size(400,200,['cropping'=>true, 'focus'=>true, 'forceNew'=>true]);

?>
<a href="/processwire/page/edit/?id=1">Edit</a>

<?php if($image) { ?>
    <img src="<?php echo $image->URL ?>" width="<?php echo $image->width ?>" height="<?php echo $image->height ?>">
<?php }

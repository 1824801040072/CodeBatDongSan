<?php
/**
* Template : Chi tiết
*/
?>

<?php get_header();the_post();  ?>


<div id="content" class="single-product">
 
<div id="content1" class="detail container">

<div id="tabs-list">
<div id="breadcrumb">
<?php echo custom_breadcrumbs() ?>
</div>
</div>
<div class="content-post">

<h1 style="padding: 20px 0;text-transform: uppercase;font-weight: 700;font-size: 26px; clear: both;"><?php the_title()?></h1>
<label style="float:left;color:#555;font-size:90%;"><i class="fa fa-clock-o"></i> <?php the_time('d-m-Y')?></label>
<div style="float:right;" class=share>
<div class="addthis_native_toolbox"></div>
</div>
<div style="clear:both"></div>
<?php the_content() ?>

</div>


<div class="clear"></div>


</div>




</div>







<?php get_footer(); ?>
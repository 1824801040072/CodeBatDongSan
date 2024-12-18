<?php
/**
* Template Name: TRANG CHỦ
*/
?>

<?php get_header(); ?>

<div class="banner_img bg_content"> 
<?php foreach($vpw_theme['opt-slides'] as $slider){?>	
<img src="<?php echo $slider['image']?>" />
<?php } ?>
</div>
<div class="clear"></div>


<?php
dynamic_sidebar('duanhot');
?> 


<div class="footer" id="main">
<div class="footer1 container">
<div class="footer_l first_ft" id="list-product">
<?php
dynamic_sidebar('trangchu');
?> 
</div>


<div class="footer_l second_ft" id="list-product">
<?php
dynamic_sidebar('trangchu2');
?> 
</div>



<div class="footer_l last_ft news-home">
<div class="footer_l">
<div class="warrper_box">
<div class="bottom-news tin-tuc">

<?php
dynamic_sidebar('sidebar-home');
?>

</div>
</div>
</div>
</div>
</div>
</div>


<?php get_footer(); ?>

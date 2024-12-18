<?php
/**
* Category
*/
?>

<?php get_header(); ?>


<div id="content">
 
<div id="content1" class="detail container">
<div class="col-left">
<div id="tabs-list">
<div id="breadcrumb">
<?php echo custom_breadcrumbs() ?>
</div>
</div>
<div id="primary" class="site-content property-page">
<div id="content">
<ul>
<?php if (have_posts()) { ?>
<?php while (have_posts()) {
the_post(); ?>
<li>
<div class="pp-list-title">
<h2><a class="property-title" href="<?php the_permalink()?>" style="border:0;"><?php the_title()?></a></h2>
<label><i class="fa fa-clock-o"></i> <?php the_time('d-m-Y')?></label>
</div>
<div class="pg-list-left" id="pg-list-left-news">
<a href="<?php the_permalink()?>"><img width="362" height="267" src="<?php the_post_thumbnail_url('size330')?>" alt="vị trí the sun avenue quận 2">
</a>
</div>
<div class="pg-list-right" id="pg-list-right-news">
<p style="max-height:140px;"><?php echo get_the_excerpt()?></p> <a class="property-list-details" href="<?php the_permalink()?>" style="border:0;">Xem chi tiết</a> </div>
</li>
<?php } } ?>


</ul>


<ul class="pagination">
<?php
global $wp_query;
$big = 999999999; 
echo paginate_links( array(

'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),

'format'=> '?paged=%#%',

'prev_text'=> __('←'),

'next_text' => __('→'),

'current' => max( 1, get_query_var('paged') ),

'total' => $wp_query->max_num_pages

) );

?>
</ul>


</div>
</div>
</div>


<div class="col-right">
<div id="sidebar-right-col1">
<?php get_sidebar() ?>
</div>
</div>

</div>




</div>




<?php get_footer(); ?>
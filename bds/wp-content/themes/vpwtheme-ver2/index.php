<?php
/**
* Template Name: index
*/
?>

<?php get_header(); ?>
<div class="grid grid--type-a">
<div class="grid__sizer"></div>

<?php if (have_posts()) { ?>
<?php while (have_posts()) {
the_post(); ?>


<div class="grid__item cover">


<div class="crop"><a class="anes ui-link" target="_self" title="<?php the_title()?>" href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url() ?>"></a></div>
<h2><a target="_self" href="<?php the_permalink() ?>" class="ui-link" rel="bookmark" title="<?php the_title()?>"><?php the_title()?></a></h2>

</div>

<?php } } ?>

</div>
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
<?php get_footer(); ?>


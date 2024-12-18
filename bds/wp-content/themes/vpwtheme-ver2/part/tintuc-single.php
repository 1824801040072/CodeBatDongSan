<div id="content" class="single-product">
 
<div id="content1" class="detail container">
<div class="col-left">
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

<?php the_content() ?>

</div>

</div>
<div class="col-right">
<div id="sidebar-right-col1">
<?php get_sidebar() ?>
</div>
</div>
<div class="clear"></div>

<?php
$categories = get_the_category($post->ID);
$args = array( 'posts_per_page' =>8,'orderby'=>'rand', 'offset'=> 1, 'category' => $categories['0']->term_id );
$myposts = get_posts( $args );
if($myposts){
?>




<div class="feauture-product related-product">
<div class="title2" style="
    margin-top: 15px;
">Tin liên quan</div>
<div id="owl-demo" class="owl-carousel owl-theme">

<?php
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>



<div class="item">
<a href="<?php the_permalink()?>" title="<?php the_title()?>"> <img width="300" height="300" src="<?php the_post_thumbnail_url('size330') ?>" alt="thu-thiem-dragon-quan-2" /> </a>
<h3><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title() ?></a></h3> </div>



<?php endforeach;  wp_reset_postdata();?>

</div>
</div>
<div class="clear"></div>


<?php } ?>


</div>




</div>






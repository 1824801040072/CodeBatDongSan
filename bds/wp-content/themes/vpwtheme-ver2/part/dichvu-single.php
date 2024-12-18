
<section id="breadcrumb">
<div class="wrapper">
<div class="inner">
<div class="breadcrumb-content text-center">
<p class="breadcrumb-title"><?php the_title() ?></p>
<?php echo custom_breadcrumbs() ?>
</div>
</div>
</div>
</section>
<main class="main-content" role="main">

<section id="a-service-detail">
<div class="wrapper">
<div class="inner">
<div class="grid">






<div class="grid__item large--nine-twelfths">
<div class="service-detail-content">
<div class="service-detail-img">
<img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title() ?>">
</div>
<div class="service-detail-desc">
<h1><?php the_title() ?></h1>
<?php the_content() ?>
</div>
</div>
</div>


<div class="grid__item large--three-twelfths">
<div class="service-sidebar">
<div class="service-sidebar-detail">
<h2 class="text-center">thông tin dịch vụ</h2>
<div class="service-name">
<p class="title">
Tên:
</p>
<p>
<?php the_title() ?>
</p>
</div>
<div class="service-desc">
<p class="title">
Mô tả:
</p>
<p><span>
<?php the_excerpt()?>

</span></p>
</div>
<div class="service-time">
<span class="title">
Giá:
</span>
<span>
<?php the_field('gia_cat')?>
</span>
</div>
</div>



<?php
$categories = get_the_category($post->ID);
$args = array( 'posts_per_page' =>8,'orderby'=>'rand', 'offset'=> 1, 'category' => $categories['0']->term_id );
$myposts = get_posts( $args );
if($myposts){
?>


<div class="hottest-hairstyle">
<h2 class="text-center">các mẫu tóc hot nhất</h2>
<div class="grida">

<?php
$i=2;
foreach ( $myposts as $post ) : setup_postdata( $post ); 
$y=$i++;

?>

<div class="album-g <?php if($y%2==0){ echo 'pad';} ?>">
<a href="<?php the_permalink()?>" rel="nofollow"><img src="<?php the_post_thumbnail_url('size250')?>" alt="<?php the_title()?>"></a>
</div>

<?php endforeach;  wp_reset_postdata();?>


</div>
</div>
<?php } ?>




</div>
</div>


</div>
</div>
</div>

</section>

</main>

<?php


class cat_post extends WP_Widget {

function __construct() {
parent::__construct(
'cat_post',
'BÀI VIẾT BOX 1',
array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
);
}

function form( $instance ) {
$default = array(
'title' => 'Tiêu đề widget',
'cat'   => 1,
'post_number' => 10
);
$instance = wp_parse_args( (array) $instance, $default );
$cat = esc_attr($instance['cat']);
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);

$terms = get_terms('category', array(
'orderby'    => 'name',
'hide_empty' => TRUE
));
$cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
foreach ($terms as $term) {
$cats_output .= '<option value="' . $term->term_id . '"';
if ($term->term_id == $cat) {
$cats_output .= 'selected="selected"';
}
$cats_output .= '>' . $term->name . '</option>';
}
$cats_output .= '</select></p>';
echo $cats_output;
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['cat'] = strip_tags($new_instance['cat']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
return $instance;
}

function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$post_number = $instance['post_number'];
$cat = $instance['cat'];
$random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
?>

<div class="doi_tac container" id="hot-project">
<ul>

<?php
if ($random_query->have_posts()):
while( $random_query->have_posts() ) :
$random_query->the_post();
?>

<li>
<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img width="221" height="152" src="<?php the_post_thumbnail_url('size330')?>" alt="<?php the_title() ?>" />
</a> <a class="title" href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
<p><?php the_field('gia')?></p>
</li>

<?php 
endwhile;
endif; ?>

</ul>
</div>



<?php
}
}

add_action( 'widgets_init', 'create_randompost_widget' );
function create_randompost_widget() {
register_widget('cat_Post');
}








class cat_post333 extends WP_Widget {

function __construct() {
parent::__construct(
'cat_post333',
'BÀI VIẾT BOX 2',
array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
);
}

function form( $instance ) {
$default = array(
'title' => 'Tiêu đề widget',
'cat'   => 1,
'post_number' => 10
);
$instance = wp_parse_args( (array) $instance, $default );
$cat = esc_attr($instance['cat']);
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);

$terms = get_terms('category', array(
'orderby'    => 'name',
'hide_empty' => TRUE
));
$cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
foreach ($terms as $term) {
$cats_output .= '<option value="' . $term->term_id . '"';
if ($term->term_id == $cat) {
$cats_output .= 'selected="selected"';
}
$cats_output .= '>' . $term->name . '</option>';
}
$cats_output .= '</select></p>';
echo $cats_output;
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['cat'] = strip_tags($new_instance['cat']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
return $instance;
}

function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$post_number = $instance['post_number'];
$cat = $instance['cat'];
$random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
?>


<h3><a href="<?php echo get_category_link($cat)?>"><?php echo $title ?></a></h3>
<div class="warrper_box">
<div class="bottom-news">

<ul>

<?php
if ($random_query->have_posts()):
while( $random_query->have_posts() ) :
$random_query->the_post();
?>

<li>
<div class="thumb">
<a href="<?php the_permalink()?>" title="<?php the_title()?>"><img width="334" height="190" src="<?php the_post_thumbnail_url('size330')?>" alt="kenton-node" />
</a>
</div>
<div class="sumary_product">
<h4><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h4>
</div>
<div class="info_product"> 

<span class="item"><i class="fa fa-home" aria-hidden="true"></i> <?php the_field('dien_tich')?></span> 
<span class="item"><i class="fa fa-bath" aria-hidden="true"></i> <?php the_field('phong_wc')?></span> 
<span class="item last"><i class="fa fa-bed" aria-hidden="true"></i><?php the_field('phong_ngu')?></span>
<div class="property-info">
<div class="text_price"><?php the_field('gia')?></div>
<div class="text_detail"><a href="<?php the_permalink()?>" title="<?php the_title()?>">Xem chi tiết</a>
</div>
</div>
</div>
</li>


<?php 
endwhile;
endif; ?>

</ul>
</div>
</div>



<?php
}
}

add_action( 'widgets_init', 'create_randompost_widget333' );
function create_randompost_widget333() {
register_widget('cat_Post333');
}








class cat_post3334 extends WP_Widget {

function __construct() {
parent::__construct(
'cat_post3334',
'BÀI VIẾT BOX 3',
array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
);
}

function form( $instance ) {
$default = array(
'title' => 'Tiêu đề widget',
'cat'   => 1,
'post_number' => 10
);
$instance = wp_parse_args( (array) $instance, $default );
$cat = esc_attr($instance['cat']);
$cat2 = esc_attr($instance['cat2']);
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);

$terms = get_terms('category', array(
'orderby'    => 'name',
'hide_empty' => TRUE
));
$cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
foreach ($terms as $term) {
$cats_output .= '<option value="' . $term->term_id . '"';
if ($term->term_id == $cat) {
$cats_output .= 'selected="selected"';
}
$cats_output .= '>' . $term->name . '</option>';
}
$cats_output .= '</select></p>';

echo $cats_output;
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['cat'] = strip_tags($new_instance['cat']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
return $instance;
}

function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$post_number = $instance['post_number'];
$cat = $instance['cat'];
$random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
?>


<h3><a href="<?php echo get_category_link($cat)?>"><?php echo $title ?></a></h3>
<div class="warrper_box">
<div class="bottom-news">

<ul>

<?php
if ($random_query->have_posts()):
while( $random_query->have_posts() ) :
$random_query->the_post();
?>

<li>
<div class="thumb">
<a href="<?php the_permalink()?>" title="<?php the_title()?>"><img width="334" height="190" src="<?php the_post_thumbnail_url('size330')?>" alt="kenton-node" />
</a>
</div>
<div class="sumary_product">
<h4><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h4>
</div>
<div class="info_product"> 

<span class="item"><i class="fa fa-home" aria-hidden="true"></i> <?php the_field('dien_tich')?></span> 
<span class="item"><i class="fa fa-bath" aria-hidden="true"></i> <?php the_field('phong_wc')?></span> 
<span class="item last"><i class="fa fa-bed" aria-hidden="true"></i><?php the_field('phong_ngu')?></span>
<div class="property-info">
<div class="text_price"><?php the_field('gia')?></div>
<div class="text_detail"><a href="<?php the_permalink()?>" title="<?php the_title()?>">Xem chi tiết</a>
</div>
</div>
</div>
</li>


<?php 
endwhile;
endif; ?>

</ul>
</div>
</div>




<?php
}
}

add_action( 'widgets_init', 'create_randompost_widget3334' );
function create_randompost_widget3334() {
register_widget('cat_Post3334');
}





class cat_post33345 extends WP_Widget {

function __construct() {
parent::__construct(
'cat_post33345',
'BÀI VIẾT BOX 4',
array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
);
}

function form( $instance ) {
$default = array(
'title' => 'Tiêu đề widget',
'cat'   => 1,
'post_number' => 10
);
$instance = wp_parse_args( (array) $instance, $default );
$cat = esc_attr($instance['cat']);
$cat2 = esc_attr($instance['cat2']);
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);

$terms = get_terms('category', array(
'orderby'    => 'name',
'hide_empty' => TRUE
));
$cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
foreach ($terms as $term) {
$cats_output .= '<option value="' . $term->term_id . '"';
if ($term->term_id == $cat) {
$cats_output .= 'selected="selected"';
}
$cats_output .= '>' . $term->name . '</option>';
}
$cats_output .= '</select></p>';

echo $cats_output;
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['cat'] = strip_tags($new_instance['cat']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
return $instance;
}

function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$post_number = $instance['post_number'];
$cat = $instance['cat'];
$random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
?>



<ul>

<?php
$i=0;
if ($random_query->have_posts()):
while( $random_query->have_posts() ) :
$random_query->the_post();
$y=$i++;
?>

<li><a href="<?php the_permalink() ?>"><?php echo $y ?>.<?php the_title() ?></a> </li>
<?php 
endwhile;
endif; ?>	

</ul>


<?php
}
}

add_action( 'widgets_init', 'create_randompost_widget33345' );
function create_randompost_widget33345() {
register_widget('cat_Post33345');
}





class cat_post3334555 extends WP_Widget {

function __construct() {
parent::__construct(
'cat_post3334555',
'BÀI VIẾT BOX 5',
array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
);
}

function form( $instance ) {
$default = array(
'title' => 'Tiêu đề widget',
'cat'   => 1,
'post_number' => 10
);
$instance = wp_parse_args( (array) $instance, $default );
$cat = esc_attr($instance['cat']);
$title = esc_attr($instance['title']);
$title2 = esc_attr($instance['title2']);
$post_number = esc_attr($instance['post_number']);

$terms = get_terms('category', array(
'orderby'    => 'name',
'hide_empty' => TRUE
));
$cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
foreach ($terms as $term) {
$cats_output .= '<option value="' . $term->term_id . '"';
if ($term->term_id == $cat) {
$cats_output .= 'selected="selected"';
}
$cats_output .= '>' . $term->name . '</option>';
}
$cats_output .= '</select></p>';

echo $cats_output;
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Nhập tiêu đề 2<input type="text" class="widefat" name="'.$this->get_field_name('title2').'" value="'.$title2.'"/></p>';

echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['title2'] = strip_tags($new_instance['title2']);
$instance['cat'] = strip_tags($new_instance['cat']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
return $instance;
}

function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$title2 = apply_filters( 'widget_title', $instance['title2'] );
$post_number = $instance['post_number'];
$cat = $instance['cat'];
$random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
?>


<section id="home-testimonials-feedback">
<div class="wrapper">
<div class="inner">
<div class="grid">
<div class="grid__item large--six-twelfths">
<div class="testimonials-wrapper">
<h2><?php echo $title ?></h2>


<?php
if ($random_query->have_posts()):
while( $random_query->have_posts() ) :
$random_query->the_post();
?>

<div class="a-testimonial clearfix">
<div class="testi-img">
<div class="testi-img-wrapper">
<img src="<?php the_post_thumbnail_url('size200')?>" alt="<?php the_title() ?>" />
</div>
</div>
<div class="testi-desc">
<p class="quote">
<?php the_excerpt()?>
</p>
<p class="customer">
<?php the_title() ?>
</p>
</div>
</div>

<?php 
endwhile;
endif; ?>	


</div>
</div>
<div class="grid__item large--six-twelfths">
<div class="feedback-wrapper text-center">
<h2><?php echo $title2 ?></h2>
<div class="feedback-form-wrapper text-left">
<div class="form-vertical feedback-form">
	<?php echo do_shortcode('[contact-form-7 id="3087"]'); ?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<?php
}
}

add_action( 'widgets_init', 'create_randompost_widget3334555' );
function create_randompost_widget3334555() {
register_widget('cat_Post3334555');
}




class cat_post33345556 extends WP_Widget {

function __construct() {
parent::__construct(
'cat_post33345556',
'BÀI VIẾT BOX 6',
array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
);
}

function form( $instance ) {
$default = array(
'title' => 'Tiêu đề widget',
'cat'   => 1,
'post_number' => 10
);
$instance = wp_parse_args( (array) $instance, $default );
$cat = esc_attr($instance['cat']);
$title = esc_attr($instance['title']);
$title2 = esc_attr($instance['title2']);
$post_number = esc_attr($instance['post_number']);

$terms = get_terms('category', array(
'orderby'    => 'name',
'hide_empty' => TRUE
));
$cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
foreach ($terms as $term) {
$cats_output .= '<option value="' . $term->term_id . '"';
if ($term->term_id == $cat) {
$cats_output .= 'selected="selected"';
}
$cats_output .= '>' . $term->name . '</option>';
}
$cats_output .= '</select></p>';

echo $cats_output;
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';

echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['cat'] = strip_tags($new_instance['cat']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
return $instance;
}

function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$post_number = $instance['post_number'];
$cat = $instance['cat'];
$random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
?>

<section id="home-products-articles">
<div class="wrapper">
<div class="inner">
<div class="articles-wrapper">
<h2><?php echo $title ?></h2>
<div class="articles-slider-wrapper grid">
<div id="owl-home-articles-slider" class="owl-carousel owl-theme">
<?php
if ($random_query->have_posts()):
while( $random_query->have_posts() ) :
$random_query->the_post();
?>	
<div class="item grid__item">
<a class="a-article text-center" href="<?php the_permalink() ?>" >
<div class="article-img">
<img src="<?php the_post_thumbnail_url('size257')?>" alt="<?php the_title() ?>" />
</div>
<div class="article-desc">
<h3><?php the_title() ?></h3>
</div>
</a>
</div>

<?php 
endwhile;
endif; ?>

</div>
</div>
</div>
</div>
</div>
</section>



<?php
}
}

add_action( 'widgets_init', 'create_randompost_widget33345556' );
function create_randompost_widget33345556() {
register_widget('cat_Post33345556');
}




class cat_post_3 extends WP_Widget {

function __construct() {
parent::__construct(
'cat_post_3',
'BÀI VIẾT SIDEBAR 2',
array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
);
}

function form( $instance ) {
$default = array(
'title' => 'Tiêu đề widget',
'cat'   => 1,
'post_number' => 10
);
$instance = wp_parse_args( (array) $instance, $default );
$cat = esc_attr($instance['cat']);
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);

$terms = get_terms('category', array(
'orderby'    => 'name',
'hide_empty' => TRUE
));
$cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
foreach ($terms as $term) {
$cats_output .= '<option value="' . $term->term_id . '"';
if ($term->term_id == $cat) {
$cats_output .= 'selected="selected"';
}
$cats_output .= '>' . $term->name . '</option>';
}
$cats_output .= '</select></p>';
echo $cats_output;
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['cat'] = strip_tags($new_instance['cat']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
return $instance;
}

function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$post_number = $instance['post_number'];
$cat = $instance['cat'];
$random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
?>


<h3><a href="<?php echo get_category_link($cat)?>"><?php echo $title ?></a></h3>
<ul> 
<?php
if ($random_query->have_posts()):
while( $random_query->have_posts() ) :
$random_query->the_post(); ?>
<li> <div class="thumb"><a href="<?php the_permalink()?>" title="<?php the_title()?>"><img width="97" height="97" src="<?php the_post_thumbnail_url('size330') ?>" alt="new-city-thu-thiem-voi-2-tieu-chi"></a></div> <figure> <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4> <date><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('d/m/Y') ?></date> </figure> <p><?php echo get_the_excerpt() ?></p> </li> 
<?php endwhile;
endif; ?>


</ul>




<?php
}
}

add_action( 'widgets_init', 'create_post_widget_3' );
function create_post_widget_3() {
register_widget('cat_Post_3');
}








class cat_post_4 extends WP_Widget {

function __construct() {
parent::__construct(
'cat_post_4',
'BÀI VIẾT SIDEBAR 1',
array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
);
}

function form( $instance ) {
$default = array(
'title' => 'Tiêu đề widget',
'cat'   => 1,
'post_number' => 10
);
$instance = wp_parse_args( (array) $instance, $default );
$cat = esc_attr($instance['cat']);
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);

$terms = get_terms('category', array(
'orderby'    => 'name',
'hide_empty' => TRUE
));
$cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
foreach ($terms as $term) {
$cats_output .= '<option value="' . $term->term_id . '"';
if ($term->term_id == $cat) {
$cats_output .= 'selected="selected"';
}
$cats_output .= '>' . $term->name . '</option>';
}
$cats_output .= '</select></p>';
echo $cats_output;
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['cat'] = strip_tags($new_instance['cat']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
return $instance;
}

function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$post_number = $instance['post_number'];
$cat = $instance['cat'];
$random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
?>

<div class="news-post-items item-sidebar">
<h2 class="title"><?php echo $title ?></h2>
<ul>

<?php
if ($random_query->have_posts()):
while( $random_query->have_posts() ) :
$random_query->the_post(); ?>

<li>
<h3> <a href="<?php the_permalink()?>" title="<?php the_title()?>" rel="bookmark"> <div class="thumb"><img width="300" height="300" src="<?php the_post_thumbnail_url('size330')?>" alt="vị trí the sun avenue quận 2"> </div> <?php the_title()?> </a> </h3>
<date><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_time('d/m/Y')?></date>
<p><?php echo get_the_excerpt() ?></p>
</li>

<?php endwhile;
endif; ?>

</ul>
</div>



<?php
}
}

add_action( 'widgets_init', 'create_post_widget_4' );
function create_post_widget_4() {
register_widget('cat_Post_4');
}





class cat_post12 extends WP_Widget {

function __construct() {
parent::__construct(
'cat_post12',
'Hỗ trợ trực tuyến',
array( 'description'  =>  'Hỗ trợ trực tuyến' )
);
}

function form( $instance ) {
$default = array(
'title' => 'Yahoo',
'you' => '01626110223',
'face' => '01626110223',
'skype' => '01626110223',
'twi' => '01626110223',
);
$instance = wp_parse_args( (array) $instance, $default );
$title = esc_attr($instance['title']);
$you = esc_attr($instance['you']);
$face = esc_attr($instance['face']);
$skype = esc_attr($instance['skype']);
$twi = esc_attr($instance['twi']);


echo '<p>Yahoo<input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Email <input type="text" class="widefat" name="'.$this->get_field_name('face').'" value="'.$face.'"/></p>';
echo '<p>Telephone <input type="text" class="widefat" name="'.$this->get_field_name('you').'" value="'.$you.'"/></p>';
echo '<p>skype <input type="text" class="widefat" name="'.$this->get_field_name('skype').'" value="'.$skype.'"/></p>';
echo '<p>Telephone 2 <input type="text" class="widefat" name="'.$this->get_field_name('twi').'" value="'.$twi.'"/></p>';

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['you'] = strip_tags($new_instance['you']);
$instance['face'] = strip_tags($new_instance['face']);
$instance['skype'] = strip_tags($new_instance['skype']);
$instance['twi'] = strip_tags($new_instance['twi']);
return $instance;
}

function widget( $args, $instance ) {
extract($args);
$title = $instance['title'];
$you = $instance['you'];
$face = $instance['face'];
$skype = $instance['skype'];
$twi = $instance['twi'];
?>
<div class="suport-online">

<ul class="supportUl">
<li class="support-item01"><a href="ymsgr:SendIM?<?php echo $title ?>">
<img style="margin-top: 2px!important; margin-right: 14px!important;" border="0" src="<?php echo get_template_directory_uri()?>/images/onlineyh.png"> <div style="padding-top:7px;">Hỗ trợ Yahoo</div></a></li>
<li class="support-item02"><a href="skype:<?php echo $skype ?>?call"><i class="fa fa-skype" style="color: #00aff0; font-size: 23px;padding-right:10px; text-shadow: none!important"></i> Hỗ trợ Skype</a></li>
<li style="width: 99%;"><a href="<?php echo $face ?>"><i class="fa fa-envelope" style="color: #0492DB; font-size: 20px;padding-right:10px; text-shadow: none!important; cursor: pointer;">
</i> Thắc mắc _ góp ý</a></li>
<li style="width: 99%;"><a href="<?php echo $you ?>"><i class="fa fa-phone-square" style="color: #0492DB; font-size: 23px;padding-right:10px; text-shadow: none!important; cursor: pointer;">
</i> <span class="text-orange"><?php echo $you ?></span> &nbsp;_ &nbsp;<span class="text-bule"><?php echo $twi ?></span></a></li>
</ul>

</div>

<?php


}

}

add_action( 'widgets_init', 'create_randompost_widget12' );
function create_randompost_widget12() {
register_widget('cat_Post12');
}






class slider extends WP_Widget {

function __construct() {
parent::__construct(
'slider',
'SLIDER',
array( 'description'  =>  'Footer Top' )
);
}

function form( $instance ) {
$default = array(
);
$instance = wp_parse_args( (array) $instance, $default );

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
return $instance;
}

function widget( $args, $instance ) {
extract($args);
global $vpw_theme;
?>

<div class="main-sl">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/flexslider.css">
<script src="<?php echo get_template_directory_uri()?>/js/jquery.flexslider.js"></script>
<div class="mslide">
    <div class="box-slide hide-on-mobile">
        <section class="slider">
            <div class="flexslider" id="bigslideshow">
              <ul class="slides">
              	<?php foreach ($vpw_theme['opt-slides'] as $slider) {?>
                <li>
                     <a href="" target=""><img src="<?php echo $slider['image']?>" alt="<?php echo $slider['title']?>" width="100%"/></a>
                 </li>
                 <?php } ?>
              </ul>
            </div>
          </section>
          
          <script type="text/javascript">
            $(function(){
              $('#bigslideshow').flexslider({
                animation: "slide",
        slideshowSpeed: 5000,        
        animationDuration: 600, 
                start: function(slider){}
              });
            });
          </script>
    </div>
    <div class="bgtran">&nbsp;</div>  
</div>
<div class="c"></div>
</div>
<?php


}

}

add_action( 'widgets_init', 'slider' );
function slider() {
register_widget('slider');
}







class search extends WP_Widget {

function __construct() {
parent::__construct(
'search',
'search',
array( 'description'  =>  'Footer Top' )
);
}

function form( $instance ) {
$default = array(
);
$instance = wp_parse_args( (array) $instance, $default );

}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
return $instance;
}

function widget( $args, $instance ) {
extract($args);
?>

<div class="search">
<div class="search-tit">
<span class="m-search">TRA CỨU VĂN BẢN</span>
<div class="note-serach">
<i class="icontkl-note"></i>
<p class="guide">
Từ khoá:<em> Số Hiệu, Tiêu đề hoặc Nội dung ngắn gọn</em>
</p>

</div>
<div class="clearfix"></div>
</div>

<form action="<?php echo home_url()?>" method="get">
<div class="search-group">
<div class="icon-inputs">
<i class="icontkl-inputs"></i>
</div>
<input type="text" name="s" class="search-form-control" id="txtKeyword" placeholder="Nhập nội dung cần tìm...">

<?php
$terms = get_terms('category', array(
'orderby'    => 'name',
'hide_empty' => TRUE
));
$cats_output .= '<select class="form-control-option" name="cat"><option value="" selected="selected">Tất cả nội dung</option>';
foreach ($terms as $term) {
$cats_output .= '<option value="' . $term->term_id . '"';

$cats_output .= '>' . $term->name . '</option>';
}
$cats_output .= '</select>';
echo $cats_output;
?>
<button type="submit" class="search-btn">
Tra cứu
</button>

<div class="sgSearch" style="display: none;">
</div>
</div>
</form>
<div class="searchNhanh">
<div>
Tra cứu nhanh:
</div>
<ul>
<li><a href="javascript:$('#myModalLogin').modal('show');" onmouseover="LS_Tootip_Type_ThongBao_Login();" onmouseout="hideddrivetip();" class="disible"><i class="fa fa-search"></i>&nbsp;Mới bị Sửa đổi bổ sung</a></li>
<li><a href="javascript:$('#myModalLogin').modal('show');" onmouseover="LS_Tootip_Type_ThongBao_Login();" onmouseout="hideddrivetip();" class="disible"><i class="fa fa-search"></i>&nbsp;Mới được hướng dẫn</a></li>
<li><a href="javascript:$('#myModalLogin').modal('show');" onmouseover="LS_Tootip_Type_ThongBao_Login();" onmouseout="hideddrivetip();" class="disible"><i class="fa fa-search"></i>&nbsp;Thời điểm áp dụng</a></li>
<li><a href="javascript:$('#myModalLogin').modal('show');" onmouseover="LS_Tootip_Type_ThongBao_Login();" onmouseout="hideddrivetip();" class="disible"><i class="fa fa-search"></i>&nbsp;Tình trạng hiệu lực</a></li>

</ul>
</div>
<div style="clear: both;">
</div>
</div>

<?php


}

}

add_action( 'widgets_init', 'search' );
function search() {
register_widget('search');
}






class cat_post33 extends WP_Widget {

function __construct() {

parent::__construct(

'cat_post33',

'Danh mục trang chủ dạng tab',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}

function form( $instance ) {

$default = array(

'title' => 'Tiêu đề widget',

'post_number' => 10

);

$instance = wp_parse_args( (array) $instance, $default );

$tab2 = esc_attr($instance['tab2']);

$title = esc_attr($instance['title']);

$tab = esc_attr($instance['tab']);

$post_number = esc_attr($instance['post_number']);



$terms = get_terms('category', array(

'orderby'    => 'name',

'hide_empty' => TRUE

));

$cats_output .= '<p>Chọn danh mục </br><div class="scroll">';

foreach ($terms as $term) {

$cats_output .= '<input style="

    width: 50px;

    margin-right: 10px;

" type="text" name="'.$this->get_field_name('tab2').'" value="' . $term->term_id . '"';

if ($term->term_id == $tab2) {

$cats_output .= 'checked';

}

$cats_output .= '/>' . $term->name . '</br>';

}

$cats_output .= '</div></p>';

echo $cats_output;



echo '<p>ID Danh mục <input type="text" class="widefat" name="'.$this->get_field_name('tab').'" value="'.$tab.'"/></p>';
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';

echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';



}



function update( $new_instance, $old_instance ) {

$instance = $old_instance;

$instance['title'] = strip_tags($new_instance['title']);

$instance['tab'] = strip_tags($new_instance['tab']);

$instance['tab2'] = strip_tags($new_instance['tab2']);

$instance['post_number'] = strip_tags($new_instance['post_number']);

return $instance;

}



function widget( $args, $instance ) {

extract($args);

$title = apply_filters( 'widget_title', $instance['title'] );
$tab = $instance['tab'];
$post_number = $instance['post_number'];
$tab2 = $instance['tab2'];

?>

<div class="bg-light">

<div class="box-congtrinh-home">
<div class="c10"></div>
<div class="grid grid-pad">
<h2 class="title-box-news"><a class="text-title-box" title="" href="#"><?php echo $title ?></a></h2>
<div class="tab-home">
<div class="showtablist" id="tabtop34">
<div id="tabtoptext34"></div>
<i class="fa fa-angle-down"></i>
</div> 
<div class="tab-congtrinh tablist" id="tablisttop34"> 
<?php
$list= split('[,]', $tab);
$i=1;
foreach ($list as $idcat) { 
$y=$i++;

?>
<a href="tabhome_<?php echo $idcat ?>" <?php if($y==1) {?> class="active1" <?php } ?> ><?php echo get_cat_name($idcat) ?></a>

<?php
}
?>
<div class="c"></div>     
</div>
<div class="c30"></div>
<?php
$list= split('[,]', $tab);
$i2=1;
foreach ($list as $idcat) { 
$y2=$i2++;

?>
<div class="content-text content-detail-tab-congtrinh" id="tabhome_<?php echo $idcat ?>" <?php  if($y2==1){ ?>style="display:block" <?php }else{ ?> style="display:none"  <?php } ?>>
<div class="producthome">
<?php
$random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$idcat.'');
if ($random_query->have_posts()):
while( $random_query->have_posts() ) :
$random_query->the_post(); ?>
<div class="col-1-4 item-prohome">
<div class="img"><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('thumbnail')?>" alt="<?php the_title() ?>" width="100%"></a></div>
<h3 class="news-scroll-name"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
</div>
<?php endwhile;

endif;

?>
</div>
</div>  
<?php
}
?> 
<div class="c20"></div>
</div>                
</div>    
</div>

<script>
$(function(){
$('#tabtoptext34').text($('#tablisttop34 a.active').text());
$('#tabtop34').click(function(){

$('#tablisttop34').slideToggle(function(){});

});
$('#tablisttop34 a').click(function(){
$('#tabtoptext34').text($('#tablisttop34 a.active').text());
});
});
</script>


<?php

} 

}


add_action( 'widgets_init', 'create_randompost_widget33' );

function create_randompost_widget33() {

register_widget('cat_Post33');

}









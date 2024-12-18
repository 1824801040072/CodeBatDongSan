<?php
/**
* The Template for displaying all single products
*
* This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see 	    https://docs.woocommerce.com/document/template-structure/
* @author 		WooThemes
* @package 	WooCommerce/Templates
* @version     1.6.4
*/

if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly
}

global $post, $product, $woocommerce;

get_header( 'shop' ); ?>

<div class="container clear">
<div class="right-container mobile-full">

<?php while ( have_posts() ) : the_post(); ?>
<div class="detail-pro">
<h1 class="title"><?php the_title() ?></h1>
<div class="single-top">
<div class="detail-left mobile-full">
<div class="images">
<?php
if ( has_post_thumbnail() ) {
$attachment_count = count( $product->get_gallery_attachment_ids() );
$gallery          = $attachment_count > 0 ? '[product-gallery]' : '';
$props            = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
$image            = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
'title'	 => $props['title'],
'alt'    => $props['alt'],
) );
$attachment_ids = $product->get_gallery_attachment_ids();

}
$attachment_ids = $product->get_gallery_attachment_ids();
?>

<div class="owl-carousel img-big owl-theme">
<?php
$i=0;
foreach ( $attachment_ids as $attachment_id ) {
$y=$i++;
$props = wc_get_product_attachment_props( $attachment_id, $post );
echo '<div class="item" id="ex1" data-hash="data'.$y.'">';
echo '<img src="'.$props['url'].'" /> ';
echo '</div>';
}

?>
</div>
<div class="owl-carousel img-small owl-theme">
<?php
$i=0;
foreach ( $attachment_ids as $attachment_id ) {
$y=$i++;
$props = wc_get_product_attachment_props( $attachment_id, $post );
echo '<div class="item"><a href="#data'.$y.'">';
echo '<img src="'.$props['url'].'" /> ';
echo '</a></div> ';
}
?>
</div>

<script>


$(document).ready(function() {
$('.img-big').owlCarousel({
items: 1,
loop: false,
center: true,
margin: 10,
callbacks: true,
URLhashListener: true,
autoplayHoverPause: true,
startPosition: 'URLHash',
dots: false
});
})

$(document).ready(function() {
$('.img-small').owlCarousel({
items: 4,
nav: true,
margin: 6,
loop: false,
center: false,

});
})
</script>
</div>
</div>
<div class="detail-right mobile-full">
<div class="price_item_single">
<p>Giá : 
<span>
<?php 
$_product = wc_get_product(get_the_ID());
if($_product->get_sale_price()!==""){
echo number_format($_product->get_sale_price(),0,",",".") ;
echo 'VNĐ';
}else{
echo number_format($_product->get_regular_price(),0,",",".");
echo 'VNĐ';

}
?>
</span>


<?php 
if($_product->get_sale_price()!==""){
echo 'Giá cũ : ';
echo number_format($_product->get_regular_price(),0,",",".");
echo 'VNĐ';
}
?> 
</p>

</div>

<?php
// Availability
$availability      = $product->get_availability();
$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
?>

<?php if ( $product->is_in_stock() ) : ?>

<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="cart" method="post" enctype='multipart/form-data'>
<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
<table>
<tr>
<td>
<label>Số lượng</label>
</td><td>
<?php
if ( ! $product->is_sold_individually() ) {
woocommerce_quantity_input( array(
'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
) );
}
?>
</td><td>

<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

<button type="submit" class="single_add_to_cart_button button alt">Mua hàng</button>
</td></tr>
</table>
<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>

<div class="get-tel">
<?php
dynamic_sidebar('search-form');
?>
</div>

<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
<div  style="padding:10px 0px" class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>

</div>
<div class="sing-detail">
<h4 STYLE="font-size:17px;margin-bottom:20px">THÔNG TIN SẢN PHẨM</h4>
<?php the_content() ?>
</div>

</div>
</div>
<?php endwhile; // end of the loop. ?>

</div>
<div class="left-container mobile-full">
<?php
/**
* woocommerce_sidebar hook.
*
* @hooked woocommerce_get_sidebar - 10
*/
do_action( 'woocommerce_sidebar' );
?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
</div>
<?php get_footer( 'shop' ); ?>

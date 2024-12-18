<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li class="column-4">
    <div class="padding10">
<div class="inner-block padding10">

    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail('thumbnail') ?>
    </a>
<div class="box-text-small">
    <a href="<?php the_permalink() ?>">
        <h4 class="h4"><?php the_title() ?></h4>
    </a>
    <div class="price_item_shopping">
        <span class="giacu">
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
            <span class="giamoi">

               <?php 
            if($_product->get_sale_price()!==""){
               echo number_format($_product->get_regular_price(),0,",",".");
               echo 'VNĐ';
           }
               ?> 
        </span>
    </div>
<div class="button">
 <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
</div>
</div>
</div>
</div>
</li>
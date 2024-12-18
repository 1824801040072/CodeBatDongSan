<?php
/**
* Template : Chi tiết
*/
?>

<?php get_header();the_post();
  ?>

<?php
if(get_field('kieu_bai_viet')=="canho2"){
 locate_template('part/duan-single.php', true);
}else{

locate_template('part/tintuc-single.php', true);
}
?>

<?php get_footer(); ?>
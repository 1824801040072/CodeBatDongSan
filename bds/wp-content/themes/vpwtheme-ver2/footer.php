<?php global $vpw_theme; ?>




<div id="adv_home"><div class="container">
<?php
dynamic_sidebar('footertop');
?>
</div></div>

<div class="doi-tac"> 
	<div class="container"> 
		<div class="title2">Đối tác</div> 
		<div class="partner-lst autoplay"> 
			<?php foreach($vpw_theme['doitac'] as $doitac){ ?>
			<div class="partner-item alpha"> 
				<img src="<?php echo $doitac['image']?>" alt="<?php echo $doitac['description']?>"> 
				<span class="autoCutStr_100"><p><?php echo $doitac['title']?></p></span> 
				<span class="autoCutStr_100 prj-name"><?php echo $doitac['description']?></span> 
			</div>
			<?php } ?>

			</div>

		</div>
	</div>



<div class="clear"></div>
<div class="footer_b">
<div class="container">
<div class="footer_l_b menu_ft footer_first">
<?php
dynamic_sidebar('footer1');
?>
</div>
<div class="footer_l_b menu_ft footer_second">
<?php
dynamic_sidebar('footer2');
?>  
</div>
<div class="footer_l_b menu_ft footer_last">
<?php
dynamic_sidebar('footer3');
?>
</div>
</div>
</div>
<div id="copyright">
<div class="menu-footer">
<div class="text"><?php echo $vpw_theme['copyright'] ?></div>
</div>
</div>
</div>




<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=438079372896789";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>

</body>
</html>
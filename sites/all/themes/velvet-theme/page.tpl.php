
<link rel="stylesheet"
	href="http://localhost/siteGroup/sites/all/themes/velvet-theme/css/styles.css">
<link rel="stylesheet"
	href="http://localhost/siteGroup/sites/all/themes/velvet-theme/css/styles(top_menu).css">
<link rel="stylesheet" type="text/css"
	href="http://localhost/siteGroup/sites/all/themes/velvet-theme/css/normalize.css" />
<link rel="stylesheet" type="text/css"
	href="http://localhost/siteGroup/sites/all/themes/velvet-theme/css/demo.css" />
<link rel="stylesheet" type="text/css"
	href="http://localhost/siteGroup/sites/all/themes/velvet-theme/css/tabs.css" />
<link rel="stylesheet" type="text/css"
	href="http://localhost/siteGroup/sites/all/themes/velvet-theme/css/tabstyles.css" />
<script
	src="http://localhost/siteGroup/sites/all/themes/velvet-theme/js/modernizr.custom.js"></script>
<script
	src="http://localhost/siteGroup/sites/all/themes/velvet-theme/js/cbpFWTabs.js"></script>
<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
		</script>
<link rel="stylesheet" href="http://ifont.ir/apicode/38">
<style type='text/css'>
div { /* نمونه ای با تگ */
	font-family: 'B yekan', tahoma;
	font-size: 14px;
}

.font { /*  نمونه ای با کلاس */
	font-family: 'B yekan', tahoma;
	font-size: 14px;
}
</style>


<div id="root">

	<div class="header-wrap">
		<!--
		  <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'aa', 'secondary-menu')))); ?>
		if i change fuckin $secondary-menu to every thing like in  page.tpl.php it will work.
		
		-->

		<div class="header">  <?php print render($page['header']); ?>  </div>
	</div>
	<!--
		<div class="nav-wrap">
			<div id="top_menu"> <?php //print theme('links', array('links' => $main_menu))?> </div>
		</div>
		-->
	<div class="body-wrap">
		<div class="body">
			<div class="slideshow">

				<div class="slide-content"> <?php print render($page['slideshow']); ?> </div>

				<!-- class="cssmenu"-->

				<div class="horizental_menu">
					<!--<?php // print theme('links', array('links' => $main_menu))?> -->
				</div>

			</div>

			<div class="page">
				<div class="page-content">	<?php print render($page['content']); ?> </div>
				<div class="page-right">  <?php print render($page['sidebar_second']); ?>  

                                
					</div>
			</div>

		</div>
	</div>

	<!-- SUB FOOTER GOES HERE -->
	<div class="sub-footer-wrap">
		<div class="sub-footer">

			<div class="stats-section">
				<section>حدیث روز : عیب رندان مکن ای زاهد پاکیزه سرشت</section>
				<section>که گناه دگران بر تو نخواهند نوشت</section>
			</div>
			
			<?php print render($page['sub_footer']); ?> 
			</div>
	</div>

	<!-- FOOTER GOES HERE -->
	<div class="footer-wrap ">
		<div class="footer ">
			
			<?php print render($page['footer']); ?> 
			
			
					
		</div>
	</div>

</div>
<script src="http://code.jquery.com/jquery-latest.min.js"
	type="text/javascript"></script>
<script type="text/javascript"
	src="http://localhost/siteGroup/sites/all/themes/velvet-theme/js/script(top_menu).js"></script>
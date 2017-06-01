		<?php ter_branding() ?>
		<?php ter_cta_sidebar(2000,500) ?>
		<footer id="colophon" role="contentinfo" class="home-footer">
			<div class="container">	
				<div class="col-xs-12 col-sm-3 footer-nav-col">
					<div id="footer-nav-row-1" class="row footer-nav-row ew-footer-head">
						<a href="#"><i class="fa fa-building" aria-hidden="true"></i>Buisness</a>
					</div>
					<?php wp_nav_menu(array('menu' => 'Footer 1')) ?>
				</div>
				<div class="col-xs-12 col-sm-3 footer-nav-col">
					<div id="footer-nav-row-1" class="row footer-nav-row ew-footer-head">
						<a href="#"><i class="fa fa-home" aria-hidden="true"></i>Homes</a>
					</div>
					<?php wp_nav_menu(array('menu' => 'Footer 2')) ?>
				</div>
				<div class="col-xs-12 col-sm-3 footer-nav-col">
					<div id="footer-nav-row-1" class="row footer-nav-row ew-footer-head">
						<a href="#"><i class="fa fa-wrench" aria-hidden="true"></i>Service Providers</a>
					</div>
					<?php wp_nav_menu(array('menu' => 'Footer 3')) ?>
				</div>
				<div class="col-xs-12 col-sm-3 footer-nav-col">
					<div id="footer-nav-row-1" class="row footer-nav-row ew-footer-head">
						<a href="#"><i class="fa fa-list" aria-hidden="true"></i>Resources</a>
					</div>
					<?php wp_nav_menu(array('menu' => 'Footer 4')) ?>
				</div>
			</div><!-- /.container -->
		</footer>
		<?php ter_back_to_top(1000,500) ?>	
	</div><!-- /#page -->
</div><!-- /#page-wrap - Opens in header -->
<?php do_action('ter_footer') ?>
<?php wp_footer() ?>
</body>
</html>
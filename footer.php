		<?php ter_branding() ?>
		<?php ter_cta_sidebar(2000,500) ?>
		<footer id="colophon" role="contentinfo" class="home-footer">			
			<div id="footer-top" class="text-center ov-hidden">
				<div class="text-center pad text-x-large">Footer Heading</div>
			</div><!-- /#footer-top -->
			<div class="container">
				<div id="footer-nav-row-1" class="row footer-nav-row">
					<div class="col-xs-12 col-sm-4 footer-nav-col"><?php wp_nav_menu(array('menu' => 'Footer 1')) ?></div>
					<div class="col-xs-12 col-sm-4 footer-nav-col"><?php wp_nav_menu(array('menu' => 'Footer 2')) ?></div>
					<div class="col-xs-12 col-sm-4 footer-nav-col"><em class="text-small">The footer system can be hardcoded with links or use the WP Menu system. Footer menus should be named Footer 1-Footer 3.</em></div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-12"><div id="copyright"><?php echo TER_COPYRIGHT ?></div></div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer>
		<?php ter_nav('standard','footer','navbar-default navbar-static-bottom') ?>	
		<?php ter_back_to_top(1000,500) ?>	
	</div><!-- /#page -->
</div><!-- /#page-wrap - Opens in header -->
<?php do_action('ter_footer') ?>
<?php wp_footer() ?>
</body>
</html>
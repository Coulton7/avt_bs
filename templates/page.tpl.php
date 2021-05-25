<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<script src="/sites/all/libraries/slick/slick/slick.min.js"></script>
<link rel="stylesheet" href="/sites/all/libraries/slick/slick/slick.css">
<link rel="stylesheet" href="/sites/all/libraries/slick/slick/slick-theme.css">

<div class="container-fluid bannercontainer">
	<div class="row bannerimage">
		<?php if ($page['advertising_board']): ?>
			<div class="row">
				<div class="col-sm-12 no-padding">
					<?php print render($page['advertising_board']); ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="row row-eq-height-header">
			<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
				<a title="<?php print t('Home'); ?>" class="logo-link" href="<?php print $front_page; ?>">
					<img class="img-responsive avt-logo" src="<?php print $logo?>" alt="logo">
				</a>
					<?php if ($logo): ?>
						<a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
						</a>
					<?php endif; ?>
			</div>


			<div class="col-lg-5 col-md-4 hidden-sm hidden-xs fullscreen">

			</div>

			<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
					<?php if($page['search']):?>
						<div class="row">
							<div class="col-sm-12 no-padding">
								<?php print render($page['search']);?>
							</div>
						</div>
					<?php endif;?>
			</div>
		</div>

	<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">

		<div class="<?php print $container_class; ?>">
			<div class="navbar-header">

				<?php if (!empty($site_name)): ?>
					<a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
				<?php endif; ?>

				<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only"><?php print t('Toggle navigation'); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<p class="navbar-toggle">Menu</p>
				<?php endif; ?>
			</div>
		</div>

		<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>

			<div class="navbar-collapse collapse">
				<div class="container-fluid navbar-container">

					<nav role="navigation">
						<?php if (!empty($primary_nav)): ?>
							<?php print render($primary_nav); ?>
						<?php endif; ?>

						<?php if (!empty($page['navigation'])): ?>
							<?php print render($page['navigation']); ?>
						<?php endif; ?>
					</nav>
				</div>
			</div>
			<div class="section-shadow-menu"></div>
		<?php endif; ?>

	</header>


	<?php if ($page['navigation_col']): ?>
		<div class="navigation_col row">
			<div class="col-sm-0 col-xs-0 fullscreen">
			</div>
			<div class="col-sm-12 col-xs-12 no-padding">
				<?php print render($page['navigation_col']);?>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($page['preface']): ?>
	<div class="preface">
			<?php print render($page['preface']);?>
	</div>
	<?php endif; ?>
	<div class="breadcrumb-wrap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
					<?php if (!empty($breadcrumb)): print t("You are here") . $breadcrumb; endif;?>
				</div>
			</div>
		</div>
	</div>

	<?php if ($page['wavelower']): ?>
	<div class="row wavelower row-eq-height">
		<div class="col-sm-9 col-xs-1 fullscreen">
			<div class="bottom-gap">
			</div>
		</div>

		<div class="col-sm-3 col-xs-10 fullscreen">

			<?php print render($page['wavelower']);?>

		</div>
	</div>
	<?php endif; ?>
	</div>
</div>

<div class="col-sm-12 fullscreen">
	<div class="mobile-search">
		<div class="row-deep">
		</div>
	</div>
			<?php if($page['header']):?>
				<div class="header">
					<?php print render($page['header']); ?>
				</div>
			<?php endif; ?>
</div>

<div class="main-container <?php print $container_class; ?>">
  <div class="container-fluid">
	<div class="row">
	 <div class="<?php if (empty($page['sidebar_first']) && empty($page['sidebar_second'])) { print 'col-sm-12 fullscreen'; }
					else if (empty($page['sidebar_first']) || empty($page['sidebar_second'])) { print 'col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2'; }
					else { print 'col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2'; } ?>">

          <?php if (!empty($title)): ?>
						<div class="page-gap"></div>
					<?php endif; ?>

		<div class="tablet-fix">
		<section id="main-content" class="

		<?php if (empty($page['sidebar_first']) && empty($page['sidebar_second'])) { print 'col-sm-12'; }
				else if (empty($page['sidebar_first']) || empty($page['sidebar_second'])) { print 'col-sm-8 col-md-9 col-md-push-3 col-sm-push-4'; }
				else { print 'col-sm-4 col-md-6 col-md-push-3 col-sm-push-4'; } ?> fullscreen">

			<div class="clearfix">
				<?php if (!empty($page['highlighted'])): ?>
					<div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
				<?php endif; ?>

					<a id="main-content"></a>
				<?php print render($title_prefix); ?>

				<?php print render($title_suffix); ?>
					<?php print $messages; ?>
			</div>

			<div class="<?php if (empty($page['sidebar_first']) && empty($page['sidebar_second'])) { print 'col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2'; }
				else if (empty($page['sidebar_first']) || empty($page['sidebar_second'])) { print 'col-sm-12 fullscreen'; }
				else { print 'col-sm-12 fullscreen'; } ?>">
				<div class="clearfix">
					<?php if (!empty($tabs)): ?>
							<?php print render($tabs); ?>
						<?php endif; ?>
					</div>
			</div>


			<div class="clearfix">
				<?php if (!empty($page['help'])): ?>
					<?php print render($page['help']); ?>
				<?php endif; ?>
			</div>

			<?php if (!empty($action_links)): ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>

			<?php print render($page['content']); ?>

		</section>
	</div>

	<?php if (!empty($page['sidebar_first'])): ?>
		<aside class="<?php if (empty($page['sidebar_second'])) { print 'col-sm-4 col-md-3 col-md-pull-9 col-sm-pull-8'; }
					else { print 'col-sm-4 col-md-3 col-md-pull-6 col-sm-pull-8'; } ?>" role="complementary">
			<?php print render($page['sidebar_first']); ?>
		</aside>  <!-- /#sidebar-first -->
	<?php endif; ?>

		<?php if (!empty($page['sidebar_second'])): ?>
			<aside class="col-sm-4 col-md-3 hidden-xs hidden-sm" role="complementary">
				<?php print render($page['sidebar_second']); ?>
			</aside>  <!-- /#sidebar-second -->
		<?php endif; ?>
   </div>
  </div>
 </div>


  	<?php if ($page['suffix']): ?>
		<div class="suffix">
				<?php print render($page['suffix']);?>
		</div>
	<?php endif; ?>


	<div class ="container-fluid">
		<div class="row">

			<?php if (!empty($page['postscript_fir'])): ?>
				<aside class="col-sm-4 col-md-3" role="complementary">
					<?php print render($page['postscript_fir']); ?>
				</aside>
			<?php endif; ?>

			<section class="

				<?php if (empty($page['postscript_fir']) && empty($page['postscript_last'])) { print 'col-sm-12'; }
					else if (empty($page['postscript_fir']) || empty($page['postscript_last'])) { print 'col-sm-8 col-md-9'; }
					else { print 'col-sm-4 col-md-6'; } ?>">

				<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
					<?php print render($page['postscript_mid']);?>
				</div>

			</section>

			<?php if (!empty($page['postscript_last'])): ?>
				<aside class="col-sm-4 col-md-3" role="complementary">
					<?php print render($page['postscript_last']);?>
				</aside>
			<?php endif; ?>

		</div>
	</div>

			<?php if (!empty($page['postscript'])): ?>
				<div class="postscript">
					<div class="section">
						<?php print render($page['postscript']); ?>
					</div>
				</div>
			<?php endif; ?>

		<footer>
			<?php if (!empty($page['footer'])): ?>
			  <div class="footer <?php print $container_class; ?>">
				<?php print render($page['footer']); ?>
			</div>
			<?php endif; ?>

			<?php if ($page['footer_lower']): ?>
				<div class="footer_lower <?php print $container_class; ?>">
						<?php print render($page['footer_lower']);?>
				</div>
			<?php endif; ?>
		</footer>

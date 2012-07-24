<?php
/**
 * FIXME: Edit Title Content
 *
 * FIXME: Edit Description Content
 *
 * Please do not edit this file. This file is part of the Response core framework and all modifications
 * should be made in a child theme.
 * FIXME: POINT USERS TO DOWNLOAD OUR STARTER CHILD THEME AND DOCUMENTATION
 *
 * @category Response
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
?>

<div id="secondary" <?php response_filter_sidebar_right_class(); ?>>
	
	<?php do_action( 'response_before_sidebar' ); ?>
	
	<div id="sidebar" class="container-fluid">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar( 'sidebar-right' ) ) : ?>

		<?php //TODO: ADD DEFAULT SIDEBAR INFO ?>
		
	<?php endif; ?>
	</div><!-- #sidebar .container-fluid -->
	
	<?php do_action( 'response_after_sidebar' ); ?>
	
</div><!-- #secondary .widget-area .span3 -->
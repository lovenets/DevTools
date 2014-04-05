<?php
/** 
 * Custom theme page to display a user registration form if the register_user plugin is enabled
 */
if (!defined('WEBPATH')) die();
if (function_exists('printRegistrationForm')) {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<?php zp_apply_filter('theme_head'); ?>
			<?php printHeadTitle(); ?>
			<meta charset="<?php echo LOCAL_CHARSET; ?>"><!-- HTML5 style -->
			<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" /><!-- Old HTML style - Fallback for older browsers -->
			<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/style.css" type="text/css" />
			<?php if (class_exists('RSS')) printRSSHeaderLink('Gallery',gettext('Gallery RSS')); ?>
		</head>
		<body>
			<?php zp_apply_filter('theme_body_open'); ?>
			<?php echo gettext('User Registration') ?>
			<?php printRegistrationForm(); ?>
			<?php printZenphotoLink(); ?>
			<?php zp_apply_filter('theme_body_close'); ?>
		</body>
	</html>
<?php
} else {
	include(SERVERPATH . '/' . ZENFOLDER . '/404.php');
}
?>
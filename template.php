 <?php
 /**
 * Example Application

 * @package Example-application
 */

require './class/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
//$smarty->debugging = true;
/*$smarty->caching = true;
$smarty->cache_lifetime = 120;*/
$smarty->template_dir = "./templates/";
$smarty->compile_dir = "./templates_c/";
$smarty->config_dir = "./configs/";
$smarty->cache_dir = "./cache/";
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';
?>

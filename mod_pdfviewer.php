<?php
/**
 *
 * @package    Pdf Viewer
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the wrapper functions only once
JLoader::register('ModPdfViewer', __DIR__ . '/helper.php');

$params = ModPdfViewer::getParams($params);
$path = htmlspecialchars($params->get('path'), ENT_COMPAT, 'UTF-8');
require JModuleHelper::getLayoutPath('mod_pdfviewer', $params->get('layout', 'default'));
?>

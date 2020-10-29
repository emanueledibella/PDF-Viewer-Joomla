<?php
/**
 *
 * @package    Pdf Viewer
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 */
 class ModPdfViewer {
    public function __construct(){
      return 0;
    }
    public static function getParams(&$params)
  	{
  		$params->def('path', '');

  		$path = $params->get('path');

  		$params->set('url', $path);

  		return $params;
  	}
}


?>

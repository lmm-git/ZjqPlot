<?php
/**
 * ZjqPlot
 *
 * @copyright  (c) Leonard Marschke
 * @license    GPLv3
 * @package    ZjqPlot
 * @subpackage Version
 */

/**
 * ZjqPlot Version Info.
 */
class ZjqPlot_Version extends Zikula_AbstractVersion
{
	public function getMetaData()
	{
		$meta = array();
		$meta['displayname']    = $this->__('ZjqPlot');
		$meta['description']    = $this->__('jqPlot integration for Zikula 1.3.x');
		//! module name that appears in URL
		$meta['url']            = $this->__('Zjq');
		$meta['version']        = '0.0.1';
		$meta['core_min']       = '1.3.3';
		$meta['core_max']       = '1.3.99';


		// Permissions schema
		$meta['securityschema'] = array();

		// Module depedencies
		$meta['dependencies'] = array();
		return $meta;
	}
}

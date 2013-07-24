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
 * ZjqPlot Grpah Api
 */
class ZjqPlot_Api_Graph extends Zikula_AbstractApi
{
	/**
	 * drawing a line graph
	 *
	 * @param $args Arguments
	 * @param $args['data']
	 * @param $args['data'][0]['value'] data for line one
	 * @param $args['data'][0]['value'][32] data for line one in the point 32|x
	 * @param $args['data'][0]['title'] Title of Graph
	 * @param $args['xaxisTitle'] Title of x-axis
	 * @param $args['xaxisMin'] Min-value of x-axis
	 * @param $args['xaxisMax'] Max-value of x-axis
	 * @param $args['yaxisTitle'] Title of y-axis
	 * @param $args['yaxisMin'] Min-value of y-axis
	 * @param $args['yaxisMax'] Max-value of y-axis
	 * @param $args['showMarker'] Show the markers of the lines?
	 * @param $args['lineWidth'] width of the lines
	 * @param $args['title'] Title of plot
	 *
	 * @version 1.0
	 * @author Leonard Marschke
	 * @return string: html
	 */
	public function lineGraph($args)
	{
		//Security check skipped; this should be done by the module
		
		$render = Zikula_View::getInstance('ZjqPlot', false);
		
		$render->assign('args', $args);
		$render->assign('id', 'ZjqPlot_Graph_' . md5(uniqid(rand())));
		
		if($args['showMarker'] == false && isset($args['showMarker']))
			$render->assign('showMarker', 'false');
		else
			$render->assign('showMarker', 'true');
		
		if($args['showHighlighter'] == true)
			$render->assign('showHighlighter', 'true');
		else
			$render->assign('showHighlighter', 'false');
		
		
		return $render->fetch('Graph/LineGraph.tpl');
		
	}
}

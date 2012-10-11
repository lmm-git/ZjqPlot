{pageaddvar name='javascript' value='jquery'}
{pageaddvar name='javascript' value='modules/ZjqPlot/javascript/jqplot.js'}
{pageaddvar name='javascript' value='modules/ZjqPlot/javascript/jqplot.cursor.js'}
{pageaddvar name='javascript' value='modules/ZjqPlot/javascript/jqplot.highlighter.js'}
{pageaddvar name='stylesheet' value='modules/ZjqPlot/style/jqplot.css'}
<div id="{$id}" style="height:400px;width:100%; "></div>

<script type="text/javascript">
jQuery.jqplot('{{$id}}',  
	{{strip}}[[
	{{foreach from=$args.data item='data'}}
		{{foreach from=$data item='row' key='key'}}
			[{{$key}}, {{$row}}],
		{{/foreach}}
		[{{$key}}, {{$row}}]
	{{/foreach}}
	
	]],{{/strip}} {
	title: '{{$args.title}}',
	seriesDefaults: {
		{{if $args.lineWidth}}lineWidth: {{$args.lineWidth}},{{/if}}
		showMarker: {{$showMarker}}
	},
	axes: {
		xaxis: {
			{{if $args.xaxisMin != ''}}min: {{$args.xaxisMin}},{{/if}}
			{{if $args.xaxisMax != ''}}max: {{$args.xaxisMax}},{{/if}}
			label: '{{$args.xaxisTitle}}'
		},
		yaxis: {
			{{if $args.yaxisMin != ''}}min: {{$args.yaxisMin}},{{/if}}
			{{if $args.yaxisMax != ''}}max: {{$args.yaxisMax}},{{/if}}
			label: '{{$args.yaxisTitle}}'
		}
	},
	cursor: {
		style: 'crosshair',
		show: true,
		tooltipLocation: 'so'
	},
	highlighter: {
		show: {{$showHighlighter}}
	}

});
</script>

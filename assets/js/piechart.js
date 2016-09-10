
/* Get Percent Value*/
$value = [];
for(var i=0;i<=4;i++){
	$value[i] = Number($('.fund li')[i].getAttribute("data-percent"));
}

$device_width = $( window ).width();
if($device_width < 400){
	$canvas_width = 240;
}
else{
	$canvas_width = 320;
}

/* Data Config */
var pie = new d3pie("pieChart", {
	"header": {
		"title": {
			"fontSize": 24,
			"font": "open sans"
		},
		"subtitle": {
			"color": "#999999",
			"fontSize": 12,
			"font": "open sans"
		},
		"location": "pie-center",
		"titleSubtitlePadding": 9
	},
	"footer": {
		"color": "#999999",
		"fontSize": 10,
		"font": "open sans",
		"location": "bottom-left"
	},
	"size": {
		"canvasWidth": $canvas_width,
		"pieOuterRadius": "90%"
	},
	"data": {
		"sortOrder": "value-desc",
		"smallSegmentGrouping": {
			"enabled": true
		},
		"content": [
			{
				"label": "在校學生/Students",
				"value": $value[0],
				"color": "#2484c1"
			},
			{
				"label": "畢業校友/Alumni",
				"value": $value[1],
				"color": "#0c6197"
			},
			{
				"label": "老師/Teachers",
				"value": $value[2],
				"color": "#4daa4b"
			},
			{
				"label": "行政人員/Staffs",
				"value": $value[3],
				"color": "#90c469"
			},
			{
				"label": "外校人士/Community",
				"value": $value[4],
				"color": "#daca61"
			}
		]
	},
	"labels": {
		"outer": {
			"pieDistance": 32
		},
		"inner": {
			"hideWhenLessThanPercentage": 3
		},
		"mainLabel": {
			"color": "#ffffff",
			"fontSize": 11
		},
		"percentage": {
			"color": "#ffffff",
			"decimalPlaces": 0
		},
		"value": {
			"color": "#adadad",
			"fontSize": 11
		},
		"lines": {
			"enabled": true
		},
		"truncation": {
			"enabled": true
		}
	},
	"effects": {
		"pullOutSegmentOnClick": {
			"effect": "linear",
			"speed": 400,
			"size": 8
		}
	},
	"misc": {
		"gradient": {
			"enabled": true,
			"percentage": 100
		}
	}
});

(function($) {
	if (!$.cursor) {
		$.extend({
			cursor: function(elm, command, args) {
				if (elm) {
					if (typeof elm === "string") {
						if ($(elm).length <= 0) {	//	elm is command string
							switch(elm.toLowerCase()) {
								case "clear":
									document.body.style.cursor = "default";
									break;
                                case "ishover":
									var retVal = [];
									$("*").each(function(i) {
										if ($(this).data("isHover")) retVal[retVal.length] = this;
										/*var cpos =  $.cursor.styles.position,
											tpos = $(this).position(),
											tos = {
												height: $(this).outerHeight(),
												width: $(this).outerWidth()
											};
										if (cpos.x - tpos.left > 0 && cpos.y - tpos.top > 0 && (tpos.left + tos.width) - cpos.x > 0 && (tpos.top + tos.height) - cpos.y > 0) retVal[retVal.length] = this;*/
									});
									return retVal;
									break;
								case "position":
									return $.cursor.styles.position;
									break;
								case "url":
									console.log('$cursor("url") = ', command ? (typeof command === "string" ? command : "default") : "default")
									document.body.style.cursor = command ? (typeof command === "string" ? command : "default") : "default";
									break;
								case "x":
									return $.cursor.styles.position.x;
									break;
								case "y":
									return $.cursor.styles.position.y;
									break;
								default:
									document.body.style.cursor = elm;
							};
							return document.body.style.cursor;
						}
						else {	//	elm was string, but maybe element ID or Class-name
							return $.cursor.initElm(elm, command, args);
						};
					}
					else if (typeof elm === "object") {
						return $.cursor.initElm(elm, command, args);
						
					};
				}
				else {
					return document.body.style.cursor;
				};
			}
		});
		$.fn.extend({
			cursor: function(command) {
				return $.cursor($(this), command, Array.prototype.slice.call(arguments, 1));
			}
		});
		$.cursor.initElm = function(e, c, a) {
			if (c === undefined) return e.css("cursor");
			if (c.toLowerCase() === "position") {
				var retVal = new Array();
				e.each(function(i) {
					var cpos =  $.cursor.styles.position,
						tpos = $(this).position();
					retVal[i] = {
						ele: $(this),
						x: cpos.x - tpos.left,
						y: cpos.y - tpos.top
					};
				});
				return retVal;
			}
			else if (c.toLowerCase() === "ishover") {
				var retVal;
				if (e.length === 1) {
					retVal = $(e).data("isHover");
					/*var cpos =  $.cursor.styles.position,
					tpos = $(e).position(),
					tos = {
							height: $(e).outerHeight(),
							width: $(e).outerWidth()
						};
					retVal = cpos.x - tpos.left > 0 && cpos.y - tpos.top > 0 && (tpos.left + tos.width) - cpos.x > 0 && (tpos.top + tos.height) - cpos.y > 0;*/
				}
				else if (e.length > 1) {
					retVal = new Array();
					e.each(function(i) {
						/*var cpos =  $.cursor.styles.position,
							tpos = $(this).position(),
							tos = {
								height: $(this).outerHeight(),
								width: $(this).outerWidth()
							};*/
						retVal[i] = {
							isHover: $(this).data("isHover") ? true : false, // cpos.x - tpos.left > 0 && cpos.y - tpos.top > 0 && (tpos.left + tos.width) - cpos.x > 0 && (tpos.top + tos.height) - cpos.y > 0,
							ele: $(this)
						};
					});
				};
				return retVal;
			};
			return e.each(function(index){
				if (typeof c === "string") {
					switch(c) {
						case "clear":
							$(this).css("cursor", "");
							break;
						/*case "position":	//	TODO
							return $.cursor.styles.position;
							break;*/
						case "url":
							$(this).css("cursor", a);
							if ($(this).css("cursor") != a[0]) $(this).css("cursor", "");
							break;
						/*case "x":	//	TODO
							return $.cursor.styles.position.x;
							break;*/
						/*case "y":	//	TODO
							return $.cursor.styles.position.y;
							break;*/
						default:
							$(this).css("cursor", c);
					};
				};
			});
		};
		$.cursor.styles = {
			'all-scroll': 'all-scroll',
			'array': new Array('all-scroll', 'auto', 'col-resize', 'crosshair', 'default', 'e-resize', 'help', 'inherit', 'move', 'n-resize', 'ne-resize', 'nw-resize', 'no-drop', 'not-allowed', 'pointer', 'progress', 'row-resize', 's-resize', 'se-resize', 'sw-resize', 'text', 'url', 'vertical-text', 'w-resize', 'wait'),
			auto: 'auto',
			'col-resize': 'col-resize',
			clear: 'default',
			crosshair: 'crosshair',
			'default': 'default',
			'e-resize': '',
			help: 'help',
			inherit: 'inherit',
			move: 'move',
			'n-resize': 'n-resize',
			'ne-resize': 'ne-resize',
			'nw-resize': 'nw-resize',
			'no-drop': 'no-drop',
			'not-allowed': 'not-allowed',
			pointer: 'pointer',
			position: {
				x: undefined,
				y: undefined
			},
			progress: 'progress',
			'row-resize': 'row-resize',
			's-resize': 's-resize',
			'se-resize': 'se-resize',
			'sw-resize': 'sw-resize',
			'string': 'all-scroll, auto, col-resize, crosshair, default, e-resize, help, inherit, move, n-resize, ne-resize, nw-resize, no-drop, not-allowed, pointer, progress, row-resize, s-resize, se-resize, sw-resize, text, url, vertical-text, w-resize, wait',
			text: 'text',
			'toArray': function() { return this.array; },
			'toString': function() { return this.string; },
			url: 'url',
			'url-regex': '/((ftp|http|https):\/\/(\w+:{0,1}\w*@))|(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/',
			'vertical-text': 'vertical-text',
			'w-resize': 'w-resize',
			wait: 'wait'
		};
		$(document).mousemove(function(e) {
			$.cursor.styles.position.x = e.pageX;
			$.cursor.styles.position.y = e.pageY;
		});
		$("*").hover(function(eIn) {
			$(this).data("isHover", true);
		}, function(eOut) {
			$(this).data("isHover", false);
		});
	};
})(jQuery);
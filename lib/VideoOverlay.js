
function VideoOverlay(callback){
	console.log("[VideoOverlay]");
	
	// ------------------------ 
	// -- PRIVATE PROPERTIES -- 
	// ------------------------ 
	var _callback = callback;
	
	// ----------------------- 
	// -- PUBLIC PROPERTIES -- 
	// ----------------------- 
	
	// --------------------
	// == PUBLIC METHODS ==
	// --------------------
	this.open = function(videoId){

		$.fancybox.open([{href:"#videoOverlay_wrapper"}],{
			openEffect  : 'fade',
			closeEffect : 'fade',
			width : "100%",
			height : "100%",
			autoSize : false,
			margin : [40, 0, 40, 0],
			padding : 0,
			scrolling : 'no',
			beforeShow: function(){
							
				__YTPlayerLarge = new YT.Player('videoOverlay_player', {
					width: "100%",
					height:"100%",
					videoId: videoId,
					playerVars: { 'autoplay': 1},
					events : {
						'onReady' : function(){

						},
						'onStateChange': onPlayerStateChange	
					}	
				});
			},
			afterShow: function(){
				// fix cookies to appear under youtube light box
				$('iframe').each(function(){
					var url = $(this).attr("src"), char = url.indexOf("?") != -1 ? '&' : '?';
					
					if(url.indexOf("youtube") != -1){ 
						$(this).attr("src",url+char+"wmode=transparent");
						$(this).attr("wmode","Opaque");
					}
				});
				
			},
			beforeClose: function(){
				__YTPlayerLarge.destroy();
			}
		});
	}
	
	// ---------------------
	// == PRIVATE METHODS ==
	// ---------------------

	function init(){
		// create the html for overlay
		$("body").append('<div id="videoOverlay_wrapper"><div id="videoOverlay_player"></div></div>');


		// kick off the youtube api
		var tag = document.createElement('script');
	
		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		// run the call back
		if(_callback){
			_callback();
		}
	}

	window.onYouTubeIframeAPIReady = function(){
		console.log("onYouTube api ready");
	}

	function onPlayerStateChange(e){
		console.log("onPlayerStateChange");
		if (e.data == 0){
			console.log("onPlayerStateChange data = 0");
			 $.fancybox.close(true);
		  }
	}

	init();
}



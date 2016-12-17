var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player,
	time_update_interval = 0;
	video_arr = ["uxpDa-c-4Mc"];
var random_video_id = video_arr[Math.floor(Math.random() * video_arr.length)];
function onYouTubeIframeAPIReady() {
	player = new YT.Player('video-player', {
		width: 600,
		height: 400,
		videoId: random_video_id,
		playerVars: {
			autoplay:1,
			controls:0,
			disablekb:1,
			autohide:1,
			rel:0,
			showinfo:0,
			loop:1,
			playlist:random_video_id,
			fs:0,
			modestbranding:1,
			iv_load_policy:3,
			wmode:'transparent'
		},
		events: {
			onReady: initialize
		}
	});
}


function initialize(){
	player.mute();
	clearInterval(time_update_interval);
}
function mute_video(){
	if(player.isMuted()){
		player.unMute();
	}
	else{
		player.mute();
	}
}


// jQuery(document).ready(function($) {
//
// 	$("a.mute_video2").click(function(){
// 		$(this).stop().toggleClass("on");
// 	});
//
// });

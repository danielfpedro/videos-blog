$(function(){
	var page = 1;

	var videosPlaylistUrl = $('#container-playlist').data('playlist-videos-url');


	if (typeof videosPlaylistUrl != 'undefined') {
		var $ul = $('ul#playlist-videos');
		var playerUrl = $('#container-playlist').data('player-url');

		getVideos(page);
	}

	function getVideos(page){
		$.getJSON(videosPlaylistUrl, {page: page}, function(data){
			var videos = data.playlist.videos;
			if (videos.length > 0) {
				$.each(videos, function(index, val) {
					var $a = $('<a/>')
						.attr('href', playerUrl + '/'+val.slug+'?playlist=' + 1)
						.text(val.title);
					 $('<li/>')
					 	.html($a)
					 	.appendTo($ul);
				});

				page = page + 1;

				getVideos(page);
			} else {

			}
		});		
	}
});
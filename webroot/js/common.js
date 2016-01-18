$(function () {
    var $modalPlaylistsList = $('#modal-playlists-list');

    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });

    $('.btn-add-to-playlist').click(function(){
        var $this = $(this);
        var url = $modalPlaylistsList.data('myplaylists-url');
        var videoId = $this.data('video-id');

        var $ul = $('<ul/>');
        $ul.data('video-id', videoId);

        var $modalBody = $modalPlaylistsList.find('.modal-body > #content');
        $modalBody.html('Carregando...');

        $.getJSON(url, function(data){
            $modalBody.html('').append($ul);

            var playlists = data.playlists;

            $.each(playlists, function(index, val) {
                $('<li/>')
                    .data('playlist-id', val.id)
                    .text(val.name)
                    .appendTo($ul);
            });
        });
    });

    $modalPlaylistsList.on('click', 'li', function(){
        var $this = $(this);
        var addVideoUrl = $modalPlaylistsList.data('add-video-to-playlist-url');
        
        var playlistId = $this.data('playlist-id');
        var videoId = $this.parent('ul').data('video-id');

        $.post(addVideoUrl, {playlist_id: playlistId, video_id: videoId}, function(){
            $modalPlaylistsList.modal('hide');
        });
    });

    $('.btn-create-playlist').click(function(){
        var url = $modalPlaylistsList.data('playlist-add-url');
        alert(url);
        
        var playlistName = prompt('Informe o nome da Playlist:', '');

        if (playlistName) {
            $.post(url, {name: playlistName}, function(){

            });
        }
    });

});
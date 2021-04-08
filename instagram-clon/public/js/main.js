var url = "http://instagram.localhost/";

window.addEventListener("load", function(){
    $('.btn-like').css('cursor', 'pointer');
    $('.btn-dislike').css('cursor', 'poiner');

    // Botón de like
    function like() {
        $('.btn-like').unbind('click').click(function(){
            $(this).addClass('btn-dislike').removeClass('btn-like');
            $(this).attr('src', url+'img/heart-red.png');

            $.ajax({
                url: url + 'like/' + $(this).data('id'),
                type: 'GET',
                success: function(response) {
                    if(response.like) {
                        console.log('Has dado like a la publicación');
                    } else {
                        console.log('Error al dar like');
                    }
                }
            });

            dislike();
        });
    }
    like();

    // Botón dislike
    function dislike(){
        $('.btn-dislike').unbind('click').click(function(){
            $(this).addClass('btn-like').removeClass('btn-dislike');
            $(this).attr('src', url+'img/heart-gray.png');

            $.ajax({
                url: url + 'dislike/' + $(this).data('id'),
                type: 'GET',
                success: function(response) {
                    if(response.like) {
                        console.log('Has dado dislike a la publicación');
                    } else {
                        console.log('Error al dar dislike');
                    }
                }
            });

            like();
        });
    }
    dislike();
    
});
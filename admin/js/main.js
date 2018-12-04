/*
* https://www.youtube.com/watch?v=rIU9ovKthx8
*/

$(".article-list-item, input[type='submit']").on('click', function() {
    $(".cat-sound").stop().trigger('play').prop("volume", 0.2);
});
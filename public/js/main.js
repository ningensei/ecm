$(document).ready(function(){

if($('.grid').length) {
    var $grid = $('.grid').imagesLoaded( function() {
      // init Masonry after all images have loaded
      $grid.masonry({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: '.item',
        // use element for option
        percentPosition: true
      });
    });    
}


// $('li.has-dropdown').on('click', function(e) {
//     e.preventDefault();
//     setTimeout(function(){
//         console.log('aca');
//     }, 1000);
    
// })

});
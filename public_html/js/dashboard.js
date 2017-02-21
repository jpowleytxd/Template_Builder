$(document).ready(function(){
  $('.header-nav-button').on('click', function(event){
    var target = $(this).attr('id');
    target = target.replace('-link', '');
    var relocate = '/' + target + '/' + target + '.php'
    window.location.replace(relocate);
  });
});

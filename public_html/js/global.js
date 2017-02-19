$(document).ready(function(){
  //Dashboard function link highlight
  $('body').ready(function(){
    var page = $('body').attr('id');
    page = page.replace('-page', '');
    var nav = '#' + page + '-link';

    $(nav).addClass('nav-page');

    var url = window.location.href;
    url = url.replace(/http:\/\/template_builder.dev\/(.*).php/, '$1');
    var folders = url.split('/');

    $('.navigation-path').empty();

    if(url.indexOf('dashboard') >= 0){
      $('.navigation-path').append('<div class="folder-nav">Home</div>');
      $(folders).each(function(){
        $('.navigation-path').append('<span class="folder-divide">/</span>');
        $('.navigation-path').append('<div class="folder-nav">' + this + '</div>');
      });
    }
  });
});

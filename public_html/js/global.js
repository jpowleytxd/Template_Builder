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

    var title = document.title;

    $('.left-nav-title').empty();
    $('.left-nav-title').append(title);
  });

  $('.header-nav-button').on('click', function(event){
    var target = $(this).attr('id');
    target = target.replace('-link', '');
    var relocate = '/' + target + '/' + target + '.php'
    window.location.replace(relocate);
  });

  $('.header-nav-link').on('click', function(event){
    event.stopPropagation();

    var parent = $(this).parent().parent('.header-nav-button');
    var folder = parent.attr('id');
    folder = folder.replace('-link', '');

    var target = $(this).attr('id');
    target = target.replace('-link', '');
    var relocate = '/' + folder + '/' + target + '.php'
    window.location.replace(relocate);
  });
});

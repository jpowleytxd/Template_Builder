$(document).ready(function(){
  $('.left-nav-link').on('click', function(event){
    var id = $(this).attr('id');

    if(id === 'new_template_setup'){
      window.location.replace('/template_setup/new_style.php');
    } else if(id === 'existing_template_styles'){
      window.location.replace('/template_setup/existing_styles.php');
    }
  });

  $('input').on('keyup', function(event){
    var inputObject  = $(this);
    var parentObject = $(this).parent('.input-group');

    var input = inputObject.val();
    input = input.trim();
    input = input.replace('#', '');

    if(input === ''){
      input = parentObject.data('reset');

      var preview = parentObject.data('preview');
      preview = '.' + preview;
      var cssType = parentObject.data('css');
      var target = $(preview);

      if(cssType === 'background'){
        target.css({
          'background' : input
        });
      } else if(cssType === 'border-bottom-color'){
        target.css({
          'border-bottom-color' : input
        });
      } else if(cssType === 'border-bottom-width'){
        target.css({
          'border-bottom-width' : input
        });
      } else if(cssType === 'color'){
        target.css({
          'color' : input
        });
      } else if(cssType === "font-weight"){
        target.css({
          'font-weight' : input
        });
      } else if(cssType === 'border-color'){
        target.css({
          'border-color' : input
        });
      }
    } else{
      var validationType = parentObject.data('valid');
      var validInput = validation(input, validationType);

      if(validInput === true){
        var preview = parentObject.data('preview');
        preview = '.' + preview;
        var cssType = parentObject.data('css');
        var target = $(preview);

        if(cssType === 'background'){
          input = '#' + input;
          target.css({
            'background' : input
          });
        } else if(cssType === 'border-bottom-color'){
          input = '#' + input;
          target.css({
            'border-bottom-color' : input
          });
        } else if(cssType === 'border-bottom-width'){
          input = input + 'px';
          target.css({
            'border-bottom-width' : input
          });
        } else if(cssType === 'color'){
          input = '#' + input;
          target.css({
            'color' : input
          });
        } else if(cssType === 'font-weight'){
          target.css({
            'font-weight' : input
          });
        } else if(cssType === 'border-color'){
          input = '#' + input;
          target.css({
            'border-color' : input
          });
        }
      }
    }
  });

  $('select').on('click', function(event){
    var inputObject  = $(this);
    var parentObject = $(this).parent('.input-group');

    var input = inputObject.val();

    var preview = parentObject.data('preview');
    preview = '.' + preview;

    var cssType = parentObject.data('css');

    var target = $(preview);

    if(cssType === 'border-bottom-style'){
      target.css({
        'border-bottom-style' : input
      });
    } else if(cssType === 'font-weight'){
      target.css({
        'font-weight' : input
      });
    }
  });

  $('.remove-link').on('click', function(event){
    var inputObject = $(this);
    var parentObject = $(this).parent().parent('.input-group');
    var hyperlink = parentObject.next('.input-group');
    var containerObject = parentObject.parent('.input-section');

    parentObject.remove();
    hyperlink.remove();

    var sectionCount = containerObject.children('.nav-input').length;
    sectionCount = sectionCount / 2;

    if(sectionCount < 5){
      $('.add-nav-container').css({
        'display' : 'block'
      });
    }

    if(sectionCount === 0){
      $('.preview-navigation').css({
        'display' : 'none'
      });
    } else{
      $('.preview-navigation').css({
        'display' : 'block'
      });
    }

    var preview = parentObject.children('input').attr('id');
    preview = '.' + preview;
    $(preview).remove();

    var newWidth = 100 / sectionCount;
    newWidth = newWidth + '%';

    $('.preview-navigation-link').css({
      'width' : newWidth
    });
  });

  $('.add-nav-link').on('click', function(event){
    event.stopPropagation();
    event.preventDefault();

    $('.preview-navigation').css({
      'display' : 'block'
    });

    var inputObject = $(this);
    var parentObject = $(this).parent('.input-group');
    var containerObject = parentObject.parent('.input-section');

    var sectionCount = containerObject.children('.nav-input').length;
    sectionCount = sectionCount / 2;

    if(sectionCount < 5){
      var nav1Exists = $('.nav-input').hasClass('nav-input-1');
      var nav2Exists = $('.nav-input').hasClass('nav-input-2');
      var nav3Exists = $('.nav-input').hasClass('nav-input-3');
      var nav4Exists = $('.nav-input').hasClass('nav-input-4');
      var nav5Exists = $('.nav-input').hasClass('nav-input-5');

      var inputHTML;
      var navHTML;
      if(nav1Exists !== true){
        inputHTML = '<div class="input-group nav-input nav-input-1" data-preview="nav-link-1" data-valid="text" data-css="" data-reset="">' +
                  '<label><span class="remove-link">X</span>Link Title:</label>' +
                  '<input type="text" id="nav-link-1">' +
                '</div>' +
                '<div class="input-group nav-input nav-input-1" data-preview="nav-link-hyper-1" data-valid="link" data-css="" data-reset="">' +
                  '<label>Hyperlink:</label>' +
                  '<input type="text" id="hyper-link-one">' +
                '</div>';
        navHTML = '<div class="preview-navigation-link nav-link-1">' +
                    '<a href="#" class="nav-link-hyper-1 preview-underlined-link preview-nav-link" target="_blank">Link</a>' +
                  '</div>';
      } else if(nav2Exists !== true){
        inputHTML = '<div class="input-group nav-input nav-input-2" data-preview="nav-link-2" data-valid="text" data-css="" data-reset="">' +
                  '<label><span class="remove-link">X</span>Link Title:</label>' +
                  '<input type="text" id="nav-link-2">' +
                '</div>' +
                '<div class="input-group nav-input nav-input-2" data-preview="nav-link-hyper-2" data-valid="link" data-css="" data-reset="">' +
                  '<label>Hyperlink:</label>' +
                  '<input type="text" id="hyper-link-two">' +
                '</div>';

        navHTML = '<div class="preview-navigation-link nav-link-2">' +
                    '<a href="#" class="nav-link-hyper-2 preview-underlined-link preview-nav-link" target="_blank">Link</a>' +
                  '</div>';
      } else if(nav3Exists !== true){
        inputHTML = '<div class="input-group nav-input nav-input-3" data-preview="nav-link-3" data-valid="text" data-css="" data-reset="">' +
                  '<label><span class="remove-link">X</span>Link Title:</label>' +
                  '<input type="text" id="nav-link-3">' +
                '</div>' +
                '<div class="input-group nav-input nav-input-3" data-preview="nav-link-hyper-3" data-valid="link" data-css="" data-reset="">' +
                  '<label>Hyperlink:</label>' +
                  '<input type="text" id="hyper-link-three">' +
                '</div>';

        navHTML = '<div class="preview-navigation-link nav-link-3">' +
                    '<a href="#" class="nav-link-hyper-3 preview-underlined-link preview-nav-link" target="_blank">Link</a>' +
                  '</div>';
      } else if(nav4Exists !== true){
        inputHTML = '<div class="input-group nav-input nav-input-4" data-preview="nav-link-4" data-valid="text" data-css="" data-reset="">' +
                  '<label><span class="remove-link">X</span>Link Title:</label>' +
                  '<input type="text" id="nav-link-4">' +
                '</div>' +
                '<div class="input-group nav-input nav-input-4" data-preview="nav-link-hyper-4" data-valid="link" data-css="" data-reset="">' +
                  '<label>Hyperlink:</label>' +
                  '<input type="text" id="hyper-link-four">' +
                '</div>';

        navHTML = '<div class="preview-navigation-link nav-link-4">' +
                    '<a href="#" class="nav-link-hyper-4 preview-underlined-link preview-nav-link" target="_blank">Link</a>' +
                  '</div>';
      } else if(nav5Exists !== true){
        inputHTML = '<div class="input-group nav-input nav-input-5" data-preview="nav-link-5" data-valid="text" data-css="" data-reset="">' +
                  '<label><span class="remove-link">X</span>Link Title:</label>' +
                  '<input type="text" id="nav-link-5">' +
                '</div>' +
                '<div class="input-group nav-input nav-input-5" data-preview="nav-link-hyper-5" data-valid="link" data-css="" data-reset="">' +
                  '<label>Hyperlink:</label>' +
                  '<input type="text" id="hyper-link-five">' +
                '</div>';

        navHTML = '<div class="preview-navigation-link nav-link-5">' +
                    '<a href="#" class="nav-link-hyper-5 preview-underlined-link preview-nav-link" target="_blank">Link</a>' +
                  '</div>';
      }

      $('.add-nav-container').before(inputHTML);
      $('.preview-navigation').append(navHTML);

      var newWidth = 100 / sectionCount;
      newWidth = newWidth + '%';

      $('.preview-navigation-link').css({
        'width' : newWidth
      });
    }
  });
});

// function notValid(element){
//   element.css({
//     "background" : "#FC424B"
//   });
// }

function validation(input, type){
  if(type === 'color'){
    return validateColor(input);
  } else if((type === 'selection') || (type === 'number')){
    return true;
  } else{
    return 'error';
  }
}

function validateColor(color){
  color = color.replace('#', '');
  if(color.length <= 6){
    if(color.length <= 3){
      if(color.match(/([0-9A-Fa-f]{3})/)){
        return true;
      } else{
        return false;
      }
    } else{
      if(color.match(/([0-9A-Fa-f]{6})/)){
        return true;
      } else{
        return false;
      }
    }
  } else{
    return false;
  }
}

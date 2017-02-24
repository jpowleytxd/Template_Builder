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
    var validationType = parentObject.data('valid');

    var validInput = validation(input, validationType);

    console.log(validInput);
  });


  $('.input-group').on('click', function(event){
    var target = $(this).data('preview');
    var input = $.trim($(this).children('input').val());
    var valid = $(this).data('valid');

    var validationTest = false;

    if(input !== null){
      if(input !== ''){
        validationTest = validation(input, valid);
        // alert(validationTest);
      } else{
        input = $(this).children('select').val();
        if(input !== ''){
          validationTest = true;
        }
      }
    }

    // if(input !== ''){
    //   validation(input, valid);
    // } else{
    //   input = $(this).children('select').val();
    //   validation(input, valid);
    // }

    if(validationTest === true){
      // alert(input);
    } else{
      // alert('not-valid');
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
  } else if(type === 'selection'){
    return true;
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

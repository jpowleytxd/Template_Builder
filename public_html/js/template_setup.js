$(document).ready(function(){
  $('.left-nav-link').on('click', function(event){
    var id = $(this).attr('id');

    if(id === 'new_template_setup'){
      window.location.replace('/template_setup/new_style.php');
    } else if(id === 'existing_template_styles'){
      window.location.replace('/template_setup/existing_styles.php');
    }
  });
});

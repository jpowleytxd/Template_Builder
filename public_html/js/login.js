$(document).ready(function(){

  //On login form submit
  $('#login-form').on('submit', function(event){
    event.preventDefault();

    var username_entry = $('#username').val();
    var password_entry = $('#password').val();

    //console.log(username_entry + " : " + password_entry);

    $.ajax({
			method: "POST",
			url: "processes/login.php",
			data: {username : username_entry, password : password_entry},
			beforeSend: function() {
			},
			success: function(response) {
				if ($.trim(response) == 'success') {
          $('.feedback-text').empty();
          $('.feedback-text').append('Login Success');

          if($('#feedback-bar').hasClass('feedback-fail')){
            $('#feedback-bar').removeClass('feedback-fail');
          }
          $('#feedback-bar').addClass('feedback-success');
          $('#feedback-bar').css({
            "display" : "block"
          });

					window.location.replace("dashboard/dashboard.php");
				} else {
          $('.feedback-text').empty();
          $('.feedback-text').append('Incorrect User Credentials. Please Try Again.');

          if($('#feedback-bar').hasClass('feedback-success')){
            $('#feedback-bar').removeClass('feedback-success');
          }
          $('#feedback-bar').addClass('feedback-fail');
          $('#feedback-bar').css({
            "display" : "block"
          });
				}
			}
		});
  });

  $('.forgotten-password').on('click', function(event){
    event.preventDefault();

    $('.password-popup-outer').css({
      "display" : "block"
    });

    if($('#feedback-bar').css('display') === 'block'){
      $('#feedback-bar').css({
        "display" : "none"
      });

      $('#feedback-bar').removeClass();
      $('.feedback-text').empty();
    }
  });

  $('.password-popup-close').on('click', function(event){
    event.preventDefault();

    $('.password-field input').val("");
    $('.password-popup-outer').css({
      "display" : "none"
    });

    if($('#feedback-bar').css('display') === 'block'){
      $('#feedback-bar').css({
        "display" : "none"
      });

      $('#feedback-bar').removeClass();
      $('.feedback-text').empty();
    }
  });

  $('.password-popup-outer').on('click', function(event){
    event.preventDefault();

    $('.password-field input').val("");
    $('.password-popup-outer').css({
      "display" : "none"
    });

    if($('#feedback-bar').css('display') === 'block'){
      $('#feedback-bar').css({
        "display" : "none"
      });

      $('#feedback-bar').removeClass();
      $('.feedback-text').empty();
    }
  });

  $('.password-popup-inner').on('click', function(event){
    event.stopPropagation();
  });

  //Forgotten password
	$("#password-form").on('submit', function(event) {
		event.preventDefault();

    var username_entry = $('#reset-password').val();

		$.ajax({
			method: "POST",
			url: "processes/password_reset.php",
			data: {username : username_entry},
			beforeSend: function() {
			},
			success: function(response) {
        if ($.trim(response) == 'success') {
          $('.feedback-text').empty();
          $('.feedback-text').append('Password Reset Email Sent');

          if($('#feedback-bar').hasClass('feedback-fail')){
            $('#feedback-bar').removeClass('feedback-fail');
          }
          $('#feedback-bar').addClass('feedback-success');
          $('#feedback-bar').css({
            "display" : "block"
          });

					//window.location.replace("dashboard.php");
				} else {
          $('.feedback-text').empty();
          $('.feedback-text').append('Incorrect User Credentials. Please Try Again.');

          if($('#feedback-bar').hasClass('feedback-success')){
            $('#feedback-bar').removeClass('feedback-success');
          }
          $('#feedback-bar').addClass('feedback-fail');
          $('#feedback-bar').css({
            "display" : "block"
          });
				}
			}
		});
	});
});

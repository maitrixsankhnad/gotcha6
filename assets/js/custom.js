function validateForm() {
    var re = /^[a-zA-Z]+([_\.-]?[a-zA-Z0-9]+)*@[a-zA-Z0-9]+([\.-]?[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,4})+$/;
    var email = document.forms['register']['email'].value;
    var createpassword = document.forms['register']['createpassword'].value;
    var confirmpassword = document.forms['register']['confirmpassword'].value;
    if (email.search(re) == -1) {
        swal('Oops', 'You have entered an invalid email', 'error');
        return false;
    } else if (confirmpassword != createpassword) {
        swal('Oops', 'Your passwords do not match', 'error');
        return false;
    }
    return true;
}

if ($('.carousel').length > 0) {
    $('.carousel').carousel({
        interval: 15000 //changes the speed
    })
}

$(document).on("submit", "#register", function(e) {
    e.preventDefault();
    if (!validateForm()) return false;
	$('#preloader').fadeIn();
    $.ajax({
        url: base_url+'process/register',
        dataType: 'json',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(data) {
			$('#preloader').fadeOut();
			var result = data['id'];
			var isError = false;
			if(result == 'email-error'){
				var titleMsg = 'Already Registered';
				var txtMsg = "You are already registered with us. Please try to login";
				isError = true;
			}else if(result == 'user-error'){
				var titleMsg = 'Oops!!';
				var txtMsg = "The username you entered is not available. Please try again";
				isError = true;
			}
			if(isError){
				swal({
					title: titleMsg,
					text: txtMsg,
					confirmButtonColor: '#FF9494',
					type: 'warning'
				});	
			}else{
				swal({
					title: 'Registered Successfully!',
					text: "A confirmation message has been sent to your registered email address. Please follow the instructions in the email to activate your account. Once you have activated your account you will be able to login to Gotcha-6.",
					type: 'success',
					showCancelButton: false,
					confirmButtonColor: '#009688',
					confirmButtonText: 'Okay!'
				}).then(function () {
					window.location.href = "login";
				})
			}
        },
        error: function() {}
    });
});


$(document).on("submit", "#login-form", function(e) {
    e.preventDefault();
    $.ajax({
            url: base_url+'process/login',
            dataType: 'json',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
                var result = data['id'].trim();				
				if(result == 'error'){
					swal({
						title: 'Invalid Login',
						text: 'The email address or password you entered is not valid',
						confirmButtonColor: '#FF9494',
						type: 'warning'
					});				
				}else if(result == 'disabled'){
					swal({
						title: 'Sorry',
						text: 'Your account has been suspended. Please drop an email to support@gotcha6.com for the same. One of our support executives will get in touch with you soon.',
						confirmButtonColor: '#FF9494',
						type: 'error'
					});				
				}else if(result == 'inactive'){
					swal({
						title: 'Please Activate Your Account',
						text: 'Before you can login, you must active your account with the code sent to your email address. If you did not receive this email, please check your junk/spam folder.Click here to resend the activation email',
						confirmButtonColor: '#FF9494',
						type: 'warning',
						showCancelButton: true,
						confirmButtonColor: '#3085d6',
						cancelButtonColor: '#d33',
						confirmButtonText: 'Resend activation email',
						cancelButtonText: 'Cancel'
					}).then(function () {						
						$.ajax({
							url: base_url+'process/sendActivationLink/'+data['email'].trim(),
							type: 'POST',
							processData: false,
							contentType: false,
							success: function(data) {
								swal({
								  title: "Successfully!",
								  text: "Activation link has been sent once again to your registred mail-id",
								  type: "success",
								  closeOnConfirm: false,
								  closeOnCancel: false
								});
							},
							error: function() {}
					   });					 	
					});				
				}else{
					swal({
					  title: "Successfully!",
					  text: "Signed in successfully",
					  type: "success",
					  closeOnConfirm: false,
					  closeOnCancel: false
					});
					swal({
					  title: 'Successfully!',
					  text: "Signed in successfully",
					  animation: false,
					  showCancelButton: false,
					  showConfirmButton: false,
					  showConfirmButton: false,
					  showCloseButton: false,
					  timer: 2000,
					  customClass: 'animated tada'				  
					}).then(
					  function () {},
					  function (dismiss) {
						if (dismiss === 'timer') {
						  window.location.href = base_url+'dashboard';
						}
					  }
					)
				}
            
            },
            error: function() {}
        });
});




$(document).on("submit", "#login", function(e) {
    e.preventDefault();
    $.ajax({
            url: base_url+'process/login',
            dataType: 'json',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
                var result = data['id'];
				if(result == 'error'){
					swal({
						title: 'Invalid Login',
						text: 'The email address or password you entered is not valid',
						confirmButtonColor: '#FF9494',
						type: 'warning'
					});				
				}else if(result == 'activate'){
					swal({
						title: 'Activation Required',
						text: 'You are not activated yet. Please activate your account to login.',
						confirmButtonColor: '#FF9494',
						type: 'warning'
					});				
				}else{
					swal({
						title: 'Login Successfully!',
						text: 'Successfully Logged in',
						confirmButtonColor: '#009688',
						type: "success"
					});
					window.location.href = base_url+'dashboard';
				}
            },
            error: function() {}
        });
});

$(document).on("submit", "#adminlogin", function(e) {
    e.preventDefault();
	$.ajax({
            url: base_url+'process/adminlogin',
            dataType: 'json',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
                var result = data['id'];
				if(result == 'error'){
					swal({
						title: 'Invalid Login',
						text: 'The email address or password you entered is not valid',
						confirmButtonColor: '#FF9494',
						type: 'warning'
					});				
				}else if(result == 'activate'){
					swal({
						title: 'Activation Required',
						text: 'You account has been suspended. Please contact site owner',
						confirmButtonColor: '#FF9494',
						type: 'warning'
					});				
				}else{
					swal({
						title: 'Login Successfully!',
						text: 'Successfully Logged in',
						confirmButtonColor: '#009688',
						type: "success"
					});
					window.location.href = base_url+'superadmin';
				}
            },
            error: function() {}
        });
});

$(document).on("submit", "#contact", function(e) {
    e.preventDefault();
    $.ajax({
		url: base_url+'process/contact',
		type: 'POST',
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function(data) {
			swal({
				title: 'Successfully sent!',
				text: 'Your message has been Successfully. We will get back to you soon.',
				confirmButtonColor: '#009688',
				type: "success"
			});
			$('#contact')[0].reset();
		},
		error: function() {}
	});
});



function check_email_exists(selfObj) {
	var email = $(selfObj).val();
	if(!email) return false;
	$('#errorEmailMsg').hide();
	var postVal = "email="+ email;
	$.post( base_url+"register/filename_exists", postVal , function( data ) {
	  	if (data == 1){
			$('#errorEmailMsg').show();
		}
	});
}

function check_user_exists(selfObj) {
	var userName = $(selfObj).val();
    if (!userName) return false;
    userName = userName.replace(/\s/g, '');
    $(selfObj).val(userName);
    $('#errorUserNameMsg').hide();
    var postVal = "username=" + userName;
    $.post(base_url + "process/username_exists", postVal, function (data) {
        if (data == 1) {
            $('#errorUserNameMsg').show();
        }
    });
}


$(document).on("submit", "#ratingFeedback", function(e) {
    e.preventDefault();
    $.ajax({
		url: base_url+'process/ratingFeedback',
		dataType: 'json',
		type: 'POST',
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function(data) {
			swal({
				title: 'Successfully Sent!',
				text: 'Thank you so much for your rating!',
				confirmButtonColor: '#009688',
				type: "success"
			});
			$('#ratingFeedback')[0].reset();
			window.location.href = base_url+'invoice?iid='+$('.iid').val();
		},
		error: function() {}
	});
});


function toggleLostPass(type){
	if(type == '1'){
		$('.loginWalaForm').hide();
		$('.forgetPasswordWalaForm').slideDown()
	}else{
		$('.forgetPasswordWalaForm').hide();
		$('.loginWalaForm').slideDown()
	}
}


$(document).on("submit", "#forgetPassword", function(e) {
    e.preventDefault();	
    $.ajax({
		url: base_url+'process/forgetPassword',
		dataType: 'json',
		type: 'POST',
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function(data) {
			swal({
				title: 'Successfully Sent!',
				text: 'You will receive an email with instructions on how to reset your password in a few minutes. ',
				confirmButtonColor: '#009688',
				type: "success"
			});
			toggleLostPass(2);
		},
		error: function() {}
	});
});

$(document).on("submit", "#resetPassword", function(e) {
    e.preventDefault();	
	var nPassword = $('.nPassword').val();
	var cPassword = $('.cPassword').val();
	
	if(!nPassword){
		swal( 'Oops...','To change your password please enter New Password','error');
		return false;
	}
	if(!cPassword){
		swal( 'Oops...','To change your password please enter Confirm New Password','error');
		return false;
	}
	if(cPassword != nPassword){
		swal( 'Oops...','Your new password and confirmation password do not match, please retype','error');
		return false;
	}
    $.ajax({
		url: base_url+'process/resetPassword',
		dataType: 'json',
		type: 'POST',
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function(data) {
			swal({
				title: 'Successfully Sent!',
				text: 'You will receive an email with instructions on how to reset your password in a few minutes. ',
				confirmButtonColor: '#009688',
				type: "success"
			});
			toggleLostPass(2);
		},
		error: function() {}
	});
});

function payMethodRMSME(pt){
	$('input[name=payType]').val(pt);
	$('#rmPaymentFrm').submit();
}
function switchStripPay(sT){
	if(sT == '1'){
		$(".basicPayInfo").slideUp( 'slow', function(){ 
			$(".stripPayFrm").slideDown();
		});
	}else{
		$(".stripPayFrm").slideUp( 'slow', function(){ 
			$(".basicPayInfo").slideDown();
		});
	}
}
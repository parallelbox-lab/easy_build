$(document).ready(function(){
	
	console.log('here...................')
	
	$("#login").on('click', function(e){
	
		
		$("#login").val('Please Wait..');
		$("#login").attr('disabled', true);
		if($("#email").val() !="" && $("#password").val()){		
			fetchRecord();
		}else{
			swal({
						  title: "Missing Fields",
						  text: "Email Or Password Field Is Missing",
						  icon: "error",
						  button: "Close",
						});
						
						$("#login").val('Login');
						$("#login").attr('disabled', false);
		}
	
		
	});


function  fetchRecord(){
	

	$.ajax({
			url: "loginAjax.php",
			method:"POST",
				dataType:"json",
				data:{
					email:$("#email").val(),
					password:$("#password").val()
				},
				success:function(data){
					if (data >= 5) {
						console.log(data)
					window.location = "home.php"
                            swal({
                                title: "congrat!!",
                                text: "registration successful",
                                icon: "success",
                                button: "Close",
                         });
					$("#login").val('Login');
					$("#login").attr('disabled', false);
					} else {
						window.location ="home.php"
						$("#login").val('Login');
						$("#login").attr('disabled', false);
					}
					
				},
				error: function(err){
					swal({
						  title: "Oops!!",
						  text: "Email Or Password Incorrect!!",
						  icon: "error",
						  button: "Close",
					});
						$("#login").val('Login');
						$("#login").attr('disabled', false);
				}
	});
}

	
	});
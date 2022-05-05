$(document).ready(function(){
	
	console.log('here...................')
	
	$("#register").on('click', function(e){
	
		
		$("#register").html('Please Wait..');
		$("#register").attr('disabled', true);
		if($("#user_id").val() !="" && $("#password").val()){		
			login();
		}else{
			
			swal({
						  title: "Missing Fields",
						  text: "User Id Or Password Field Is Missing",
						  icon: "error",
						  button: "Close",
						});
		}
	
		
	});


function  login(){
	$.ajax({
				url: "includeAjax.php",
			method:"POST",
				dataType:"JSON",
				data:{
					user_id:$("#user_id").val(),
					password:$("#password").val()
				},
				success:function(res){
					if(res.status == "success"){
						
		$("#login").html('LOGIN');
		$("#login").attr('disabled', false);
					swal({
						  title: "Great",
						  text: "User ",
						  icon: "Success",
						  button: "Close",
						});
					}
					
				},
				error: function(err){
					$("#login").html('LOGIN');
		$("#login").attr('disabled', false);
					swal({
						  title: "Oops!!",
						  text: "User Id Or Password Incorrect!!",
						  icon: "error",
						  button: "Close",
						});
				}
				});
}

	
	});
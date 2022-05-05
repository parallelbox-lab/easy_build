$(document).ready(function(){

   $("#register").on('click', function (e) {

		$("#register").val('Please Wait..');
		// $("#register").attr('disabled', true);
		if ($("#first_name").val() != "" && $("#last_name").val() != "" && $("#email").val() != "" && $("#password").val() !== "" && $("#date").val() != "" && $("#address").val() != "" && $("#income").val() != "") {
			$("#register").attr('disabled', false);
			insertRecords();
		} else {
			swal({
				title: "Missing Fields",
				text: "Some compulsory fields missing! Complete the fields and try again",
				icon: "error",
				button: "Close",
			});
		};

	});


	function insertRecords() {
		$.ajax({
			url: "registerajax.php",
			method: "POST",
			dataType: "JSON",
			data: {
				first_name: $("#first_name").val(),
				last_name: $("#last_name").val(),
				email: $("#email").val(),
				password: $("#password").val(),
				date: $("#date").val(),
				address: $("#address").val(),
				income: $("#income").val(),
			},
			success: function (res) {
				if (res.status == "success") {
					
					swal({
						title: "Existing Record",
						text: "Record With Email " + $("#email").val() + " Already Exist.",
						icon: "error",
						button: "Close",
					});
					$("#register").attr('disabled', false);
				} else {
					window.location = "home.php";
					swal({
						title: "success",
						text: "Record With Email " + $("#email").val() + " Is Logged In",
						icon: "success",
						button: "Close",
					});
					$("#register").attr('disabled', false);
				}

			},
			error: function (err) {
				// window.location = "home.php";
				swal({
					title: "Oops!!",
					text: "Onboarding Failed!! Please Try Again",
					icon: "error",
					button: "Close",
				});
				$("#register").attr('disabled', false);
			}
		});
   };
});   
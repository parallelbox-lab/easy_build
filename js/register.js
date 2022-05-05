$(document).ready(function() {
    $("#register").click(function() {
        // var user_id = $("#user_id").val(); 
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var email = $("#email").val();
        var password = $("#password").val();


        if (first_name == '' || last_name == '' || email == '' || password == '') {
            swal({
                title: "Missing Fields",
                text: "Some compulsory fields missing! Complete the fields and try again",
                icon: "error",
                button: "Close",
            });

        } else {
            $.ajax({
                type: "POST",
                url: "registerAjax.php",
                data: {
                    first_name: first_name,
                    last_name: last_name,
                    email: email,
                    password: password
                },
                success: function(data) {
                    if (data == "success") {
                        window.location = "home.php"
                        swal({
                            title: "congrat!!",
                            text: "registration successful",
                            icon: "success",
                            button: "Close",
                        });

                    } else {
                        swal({
                            title: "Oops!!",
                            text: "User With This Email Aready Exist",
                            icon: "error",
                            button: "Close",
                        });
                    };
                },
                error: function(err) {
                    // window.location = "home.php";
                    swal({
                        title: "Error!!",
                        text: "Registration Failed",
                        icon: "error",
                        button: "Close",
                    });
                    //  $("#register").attr('disabled', false);
                }
            });
        }
    });
});
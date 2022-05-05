$(document).ready(function(){  
    $("#update").click(function(){ 
        var user_id = $("#user_id").val();
        var email = $("#email").val();
       
      
     if(user_id==''|| email=='')  {  
                swal({
                    title: "Missing Fields",
                    text: "Some compulsory fields missing! Complete the fields and try again",
                    icon: "error",
                    button: "Close",
                 });

                } else {
                $.ajax({  
                    type: "POST",  
                    url:  "profileAjax.php",  
                    data: {
                        user_id: user_id,
                        email: email,
                   }, 
                    success: function(res){  
                        if(res == success){
                            swal({
                                title: "congrat!!",
                                text: "Updated Sucessfully",
                                icon: "success",
                                button: "Close",
                         });
                         } else {
                            swal({
                                title: "Oops!!",
                                text: "Please Try Again",
                                icon: "error",
                                button: "Close",
                            });
                         };  
                    },
                      error: function (err) {
                         // window.location = "home.php";
                         swal({
                             title: "error!!",
                             text: "Update Failed",
                             icon: "error",
                             button: "Close",
                      });
                        //  $("#register").attr('disabled', false);
                }
            });  
        }
    });  
});
          
    
        
        
    
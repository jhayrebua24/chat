$(function(){
  // alert("test js");

  //REGISTER
  $("#form_register").on('submit', function(e){
    e.preventDefault();

    var user = $("#register_user").val();
    var pass = $("#register_password").val();

    $.ajax({
      url: 'data/register.php',
        type: 'post',
          dataType:'json',
            data:{
              user:user,
              pass:pass
            },
            success: function(data){
              console.log(data);
              alert(data.status);
              location.reload();
            },
            error: function(data){
              alert("ERROR REGISTER");
            }
    });

   }); ///END REGISTER


    //LOGIN
    $("#form_login").on('submit', function(e){
      e.preventDefault();

      var user = $("#login_user").val();
      var pass = $("#login_password").val();

      // alert(pass);
      // alert(user);
      $.ajax({
        url: 'data/login.php',
          type: 'post',
            dataType: 'json',
              data:{
                user:user,
                pass:pass
              },
              success:function(data){
                console.log(data);
                if(data.status == "yes"){
                  alert("Log In Success!");
                  location.href= data.url;
                }else
                  alert("Username or password is incorrect");
              },
              error:function(data){
                alert("ERROR LOG IN FUNCTION");
              }
      });

    });///end login



});//end function

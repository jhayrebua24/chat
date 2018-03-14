$(function (){
  // alert("test chat js");
  // global for user
  var user_id = $("#user_id").val();
  load_chat(user_id);
  scroll();

  // MESSAGE
  $("#message").on('keyup', function(e){
    e.preventDefault();
    var text = $(this).val();

    if(text != ""){
      $("#btn_submit").removeAttr('disabled');
    }else
      $("#btn_submit").prop('disabled','disabled');

  });// end message ( remove disable on button if user type a message)

  //SUBMIT Chat
  $("#chat").on('submit', function(e){
    e.preventDefault();

    var message = $("#message").val();

    $.ajax({
      url: 'data/submit_message.php',
        type:'post',
          data:{
            message:message,
            user:user_id
          },
          success:function(data){
            $("#message").val("").keyup();
            load_chat(user_id);
            scroll();
          },
          error:function(data){
            alert("ERROR SEND CHAT FUNCTION");
          }
    });

  }); ///END SUBMIT CHAT


  // FETCH CHAT
  function load_chat(user){
    ///check if there is new chat
    $.ajax({
      url: 'data/check_new_record.php',
        type: 'post',
          dataType: 'json',
            data:{
              user:user
            },
            success:function(data){
              console.log(data);
              if(data.result == 'true'){
                scroll();
              }
            },
            error: function(data){
              console.log("ERROR SCROLL");
            }

    });


    ///LOAD CHAT
    $.ajax({
      url: 'data/chatlog.php',
        type: 'post',
          data:{
            user:user
          },
          success: function(data){
            console.log("FETCH SUCCESS");
            $("#chatlist").html(data);
          },
          error: function(data){
            console.log("ERROR CANT FETCH CHAT");
          }
    });

    setTimeout(load_chat,1000,user_id);  //// function name,interval time,parameter
  } //END FUCNTION


  /// auto scroll if there is new chat
  function scroll(){
    $("#scroll").animate({ scrollTop: $(this).height() + 10000} , "1000");
    return false;
  }

});

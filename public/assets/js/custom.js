// Add your custom JS code here
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': CSRF_TOKEN
    }
});

$(document).on("submit", "#handleAjax", function() {
  var e = this;

  var phone = $('#phone').val();
  var passWord = $('#password').val();


  if($.trim(phone) == "" || $.trim(passWord) == ""){
    $(".alert2").remove();
    // $.each(data.errors, function (key, val) {
    $("#errors-list").append("<div class='alert2 alert-danger'> Хоосон байж болохгүй</div>");
    // });
    $("#phone").parent(".form-group").addClass("has-error");
    $("#phone").val('');
    $("#phone").focus();
    $("#password").parent(".form-group").addClass("has-error");
    $("#password").val('');
  }else{

    $(this).find("[type='submit']").html("Шалгаж байна...");

    $.ajax({
        url: $(this).attr('action'),
        data: $(this).serialize(),
        type: "POST",
        dataType: 'json',
        success: function (data) {

          console.log(data);

          $(e).find("[type='submit']").html("Нэвтрэх");

          if (data.status) {
              window.location = data.redirect;
          }else{
              $(".alert2").remove();
              // $.each(data.errors, function (key, val) {
              $("#errors-list").append("<div class='alert2 alert-danger'>" + data.errors + "</div>");
              // });
              $("#phone").parent(".form-group").addClass("has-error");
              $("#phone").val('');
              $("#phone").focus();
              $("#password").parent(".form-group").addClass("has-error");
              $("#password").val('');
              // console.log(data.errors)
          }

        }
    });
  }

  return false;
});

$("#nickname").keyup(function(){

  var nickname = $(this).val();
  var nicknameRegex = /^[a-zA-Z0-9]+$/;

  if(nicknameRegex.test(nickname) && nickname != ''){

    console.log(nickname);
    $.ajax({
      url: baseUrl + `/users/nickname`,
      type: 'post',
      data: {nickname: nickname, _token: CSRF_TOKEN},
      success: function(response){

          // console.log(response)

        }
    });

    $("#nickname_response").html("");
    $("#nickname").parent(".form-group").removeClass("has-error");
  }else{
    $("#nickname_response").html("<span style='color: red;'>Нэр тохиромжгүй байна</span>");
    $("#nickname").parent(".form-group").addClass("has-error");
    $("#nickname").focus();
  }

});
jQuery( document ).ready(function() {
    $('#reg_user').click(function () {
      let name = $('#username').val();
      let email = $('#useremail').val();
      let login = $('#login').val();
      let pass = $('#pass').val();

      $.ajax({
        url: 'ajax/reg.php',
        type: 'POST',
        cache : false,
        data: {
          'username' : name,
          'useremail' : email,
          'login' : login,
          'pass' : pass
        },
        dataType: 'html',
        success : function (data) {
          if (data == 'OK') {
            window.location.href = "authification.php";
          } else {
            $('#danger-warning').text(data);
            $('#danger-warning').css("display", "block");
          }
        }
      });
    });
});

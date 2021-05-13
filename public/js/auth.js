jQuery( document ).ready(function() {
    $('#auth_user').click(function () {
      let login = $('#login').val();
      let pass = $('#pass').val();

      $.ajax({
        url: 'ajax/auth.php',
        type: 'POST',
        cache : false,
        data: {
          'login' : login,
          'pass' : pass
        },
        dataType: 'html',
        success : function (data) {
          if (data == 'OK') {
            document.location.reload();
          } else {
            $('#danger-warning').text(data);
            $('#danger-warning').css("display", "block");
          }
        }
      });
    });
});

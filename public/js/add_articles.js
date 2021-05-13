jQuery( document ).ready(function() {
    $('#sand_article').click(function () {
      let title = $('#title').val();
      let intro = $('#intro').val();
      let text = $('#text').val();

      $.ajax({
        url: 'ajax/add_article.php',
        type: 'POST',
        cache : false,
        data: {
          'title' : title,
          'intro' : intro,
          'text' : text
        },
        dataType: 'html',
        success : function (data) {
          if (data == 'OK') {
            window.location.href = "/public";
          } else {
            $('#danger-warning').text(data);
            $('#danger-warning').css("display", "block");
          }
        }
      });
    });
});

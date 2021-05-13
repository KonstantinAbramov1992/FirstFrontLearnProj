jQuery( document ).ready(function() {
  $('#chat_send').click(function () {
    let mess = $('#chat_mess').val();
    $('#chat_mess').val('');

    $.ajax({
      url: 'ajax/chat_save_mess.php',
      type: 'POST',
      cache : false,
      data: {
        'mess' : mess,
      },
      dataType: 'html',
      success : function (data) {
        if (data == 'OK') {
          $('#danger-chat').text(data);
          $('#danger-chat').css("display", "none");
        } else {
          $('#danger-chat').text(data);
          $('#danger-chat').css("display", "block");
        }
      }
    });
  });

  setInterval(function() {

    $.ajax({
      url: 'ajax/chat_get_mess.php',
      type: 'POST',
      cache : false,
      data: {},
      dataType: 'html',
      success : function (data) {
        data = JSON.parse(data);
        data.forEach(function(item) {
          let shown_mess = $(`#${item['id']}`);

          if(!shown_mess.attr('id')) {
            $('#no_message').css('display','none');
            let div = $('<div>').attr({'class':'alert alert-info mt-3 chat_message', 'id': item['id']});
            div.html(`<b>Логин:</b> ${item['username']} <br> <b>Cообщение:</b><br>${item['mess']}`);
            $('#chat_container').append(div);
          }
        });
      }
    });
  }, 3000);
});

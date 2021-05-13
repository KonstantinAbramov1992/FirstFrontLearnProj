function deleteUser(user_id) {
  let id = user_id;
  $.ajax({
    url: 'ajax/delete_users.php',
    type: 'POST',
    cache : false,
    data: {
      'id' : id
    },
    dataType: 'html',
    success : function (data) {
      $(`#d${user_id}`).remove();
    }
  });
};

jQuery( document ).ready(function() {
  $.ajax({
    url: 'ajax/get_users.php',
    type: 'POST',
    cache : false,
    data: {},
    dataType: 'html',
    success : function (data) {
      data = JSON.parse(data);
      data.forEach(function(item, i, arr) {
        let div = $('<div>').attr({'class':'alert alert-info mt-3', 'id': `d${item['id']}`});
        let btn = $('<button>').attr({'class':'btn btn-danger', 'onclick':`deleteUser(${item['id']})`});
        btn.text('Удалить');
        div.html(`<b>Имя:</b> ${item['username']} <b>Логин:</b> ${item['login']}`);
        div.append(btn);
        $('#users').append(div);
      });
    }
  });
});

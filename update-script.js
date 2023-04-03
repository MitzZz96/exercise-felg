var editData = function (id) {
  $("#table-container").load("edit-form.php");
  $.ajax({
    type: "GET",
    url: "update-data.php",
    data: { editId: id },
    dataType: "html",
    success: function (data) {
      var userData = JSON.parse(data);
      $("input[name='inputName']").val(userData.name);
      $("input[name='inputPassword']").val(userData.password);
      $("input[name='inputUserName']").val(userData.userName);
      $("input[name='inputSurname']").val(userData.surname);
      $("input[name='inputDate']").val(userData.date);
      $("input[name='inputGroup']").val(userData.group);
    },
  });
};

$(document).on("submit", "#updateForm", function (e) {
  e.preventDefault();

  var id = $("input[name='id']").val();
  var name = $("input[name='inputName']").val();
  var password = $("input[name='inputPassword']").val();
  var firstName = $("input[name='inputUserName']").val();
  var surName = $("input[name='inputSurname']").val();
  var date = $("input[name='inputDate']").val();
  var group = $("input[name='inputGroup']").val();
  $.ajax({
    method: "POST",
    url: "update-datda.php",
    data: {
      updateId: id,
      name: name,
      password: password,
      userName: firstName,
      surname: surName,
      date: date,
      group: group,
    },
    success: function (data) {
      $("#msg").html(data);
      setTimeout(function () {
        window.location.reload();
      }, 1000);
    },
  });
});

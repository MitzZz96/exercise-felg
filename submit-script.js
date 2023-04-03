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
  var inputName = $("input[name='inputName']").val();
  var inputPassword = $("input[name='inputPassword']").val();
  var inputUserName = $("input[name='inputUserName']").val();
  var inputSurname = $("input[name='inputSurname']").val();
  var inputDate = $("input[name='inputDate']").val();
  var inputGroup = $("input[name='inputGroup']").val();
  $.ajax({
    method: "POST",
    url: "update-data.php",
    data: {
      updateId: id,
      name: inputName,
      password: inputPassword,
      userName: inputUserName,
      surname: inputSurname,
      date: inputDate,
      group: inputGroup,
    },
    success: function (data) {
      $("#msg").html(data);
    },
  });
});

function getAllUsers() {
  $.ajax({
    type: "GET",
    url: "backend.php",
    dataType: "html",
    success: function (data) {
      $("#table-container").html(data);
    },
  });
}

$(document).on("submit", "#userForm", function (e) {
  e.preventDefault();

  $.ajax({
    method: "POST",
    url: "submit.php",
    data: $(this).serialize(),
    success: function (data) {
      $("#msg").html(data);
      $("#userForm").find("input").val("");
    },
  });
});

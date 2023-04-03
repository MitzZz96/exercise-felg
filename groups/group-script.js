function getAllGroups() {
  $.ajax({
    type: "GET",
    url: "group-backend.php",
    dataType: "html",
    success: function (data) {
      $("#table-container").html(data);
    },
  });
}

$(document).on("submit", "#groupForm", function (e) {
  e.preventDefault();
  $.ajax({
    method: "POST",
    url: "submit-group.php",
    data: $(this).serialize(),
    success: function (data) {
      $("#msg").html(data);
    },
  });
});

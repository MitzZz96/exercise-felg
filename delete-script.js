var deleteData = function (id) {
  $.ajax({
    type: "GET",
    url: "delete-user.php",
    data: { deleteId: id },
    dataType: "html",
    success: function (data) {
      $("#msg").html(data);
      setTimeout(function () {
        window.location.reload();
      }, 1000);
    },
  });
};

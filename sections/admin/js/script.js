function view_UPdetails() {
  HoldOn.open({
    theme: "sk-circle",
    message: "<br><h2>Processing Please Wait... </h2>",
  });

  $.ajax({
    url: "viewUP.php",
    type: "get",
    success: function (result) {
      HoldOn.close();
      $("#UP").html(result);
    },
  });
}

$(function() {

  $("#todoList ul").sortable({
    items: "li:not('.listTitle, .addItem')",
    connectWith: "ul",
    dropOnEmpty: true,
    placeholder: "emptySpace"
  });

  $("input").keydown(function(e) {
    if (e.keyCode == 13) {
      var item = $(this).val();

      $(this).parent().parent().append("<li>" + item + "</li>");

      $(this).val("");
    }
  });

  $("#trash").droppable({
    drop: function(event, ui) {
      ui.draggable.remove();
    }
  }).hover(
    function() {

      $(this).text("");
      $(this).css("background", "white url('img/trash-can.png') center center no-repeat");

      //url('../img/trash-can.png') center center no-repeat
    }, function() {
      $(this).text("drop item here to delete it from list");
      $(this).css("background", "white");
    }
  );

});

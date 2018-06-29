$(function() {
  $.ajax({
    type: "GET",
    url: "Jenis/getAll/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: $(window).height(),
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "Jenis/getAll/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Jenis/add/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Jenis/update/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Jenis/delete/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "nama",
          title: "Nama",
          type: "text",
          width: 150
        },
        {
          name: "ratio",
          title: "Ratio",
          type: "text",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});

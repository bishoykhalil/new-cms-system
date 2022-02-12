// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

var table = $('#dataTable').DataTable( {
  buttons: [
      'copy'
  ]
} );

table.buttons().container()
  .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );

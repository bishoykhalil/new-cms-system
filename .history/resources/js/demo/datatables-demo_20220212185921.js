// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

var table = $('#dataTable').DataTable();

$(document).ready(function() {
  $('#dataTable').DataTable( {
      dom: 'Bfrtip',
      buttons: [
           'excel'
      ]
  } );
} );
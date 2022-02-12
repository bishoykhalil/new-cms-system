// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});
$('#myTable').DataTable( {
  buttons: [
      'excel'
  ]
} );
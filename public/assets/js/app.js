$(document).ready(function () {
  let table = new DataTable('#dataTable');

  $('select[name=client]').change(function () {
    $('#clientOptForm').submit();
  });
  
  $('select[name=status]').change(function () {
    $('#statusOptForm').submit();
  });
});
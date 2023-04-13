$(document).ready(function () {
  let table = new DataTable('#dataTable');

  $('select[name=clientOpt]').change(function () {
    if ($(this).val() != '-- Select Client --') {
      $('#clientName').attr('disabled', '');
      $('#clientAddress').attr('disabled', '');
    } else {
      $('#clientName').removeAttr('disabled');
      $('#clientAddress').removeAttr('disabled');
    }
  });
});
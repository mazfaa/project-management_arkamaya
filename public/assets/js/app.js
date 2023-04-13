$(document).ready(function () {
  let table = new DataTable('#dataTable');

  const clientNameForm = $('#clientName');
  const clientAddressForm = $('#clientAddress');
  const clientOption = $('select[name=client_opt]');

  clientOption.change(function () {
    if ($(this).val() != '-- Select Client --') {
      clientNameForm.attr('disabled', '');
      clientAddressForm.attr('disabled', '');
    } else {
      clientNameForm.removeAttr('disabled');
      clientAddressForm.removeAttr('disabled');
    }
  });

  $('input[name=client_name]').keyup(function () {
    if ($(this).val() != '') {
      clientOption.attr('disabled', '');
    } else {
      clientOption.removeAttr('disabled');
    }
  });

  $('.form-edit').each(function (i, e) {
    console.log(e.setAttribute('disabled', ''));
  })
});
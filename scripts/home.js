
$(document).on('click', '#showSitesBtn', function () {
  $('#sitesList').show();
  $('#showSitesBtn').hide();
  $('#hideSitesBtn').show();
});

$(document).on('click', '#hideSitesBtn', function () {
  $('#sitesList').hide();
  $('#showSitesBtn').show();
  $('#hideSitesBtn').hide();
});

$(document).on('click', '#goToStep2Btn', function () {

  legal_entity_name = $('#legal_entity_name').val();
  if(legal_entity_name.length < 3) {
    alert('Please enter a valid legal entity name.');
    return;
  }
  employee_count = $('#employee_count').val();
  if(employee_count.length < 1) {
    alert('Please enter an employee count.');
    return;
  }
  average_salary = $('#average_salary').val();
  if(average_salary.length < 1) {
    alert('Please enter an average salary.');
    return;
  }

  $(this).hide();
  $('#proccessingBtn').show();
  $('#legal_entity_profile').submit();
});

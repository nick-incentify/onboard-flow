
$(document).on('click', '.showAccountBlockBtn', function () {
  alert('The list and details of the programs that were analyzed are available to customers only. Please contact sales@incentify.com to learn more about the Incentify product.');
});

$(document).on('click', '.saveAnswersBtn', function () {
  $('.saveAnswersBtn').hide();
  $('#proccessingBtn').show();

  //Add save action to form so we can submit it
  save_action = $(this).data('action');
  $('#save_action').val(save_action);

  //Make request
  $.ajax({
    type: 'POST',
    dataType: 'json',
    data : $("#questionnaire_form").serialize(),
    url: $('#questionnaire_form').attr('action'),
    success: function (result) {

      //on success
      if (result.success == 1) {

        console.log('Success!');
        const base_url = $('#base_url').val();

        if (result.action == 'submit') {
          window.location.replace(base_url + "success");
        } else {
          $('.saveAnswersBtn').show();
          $('#proccessingBtn').hide();
          $('#savedConfirmation').fadeIn(1000).delay(4000).fadeOut(1000);
        }

      } else {
        alert('Something went wrong');
        console.log(result);
      }

    }
  });

});

function evaluateChildAnswerDependency(parent) {
  var child_question_id = $(parent).data('childquestions');
  var childaction = $(parent).data('childaction');
  //console.log(child_question_id + ' ' + childaction);
  if(childaction == 'show') {
    $('#childQuestions-'+child_question_id).show();
  } else {
    $('#childQuestions-'+child_question_id).hide();
  }
}

function evaluateAllChildAnswersOnLoad() {
  const parentQuestions = document.getElementsByClassName("parentQuestion");
  let value;
  for (var i = 0; i < parentQuestions.length; i++) {
      if (parentQuestions[i].type === 'radio' && parentQuestions[i].checked) {
          evaluateChildAnswerDependency(parentQuestions[i]);
      }
  }

}

$(document).on('click', '.parentQuestion', function () {
  evaluateChildAnswerDependency(this);
});

$(document).on('click', '#copyBtn', function () {
  // Get the text field
  var copyText = document.getElementById("copyInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  $(this).text('Copied!');

  // Alert the copied text
  console.log("Copied the text: " + copyText.value);

});

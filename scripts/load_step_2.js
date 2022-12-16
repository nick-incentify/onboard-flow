let base_url;
let processing_factor;
let loadingGif;
let preLink = '<a href="javascript:void(0)" class="showAccountBlockBtn underline">';
let preLinkRed = '<a href="javascript:void(0)" class="showAccountBlockBtn underline someGrayText">';
let preLinkBlue = '<a href="javascript:void(0)" class="showAccountBlockBtn underline blueText">';
let postLink = '</a>';

$(document).ready(function(){

  base_url = $('#base_url').val();
  processing_factor = parseInt($('#processing_factor').val());
  loadingGif = '<img src="'+base_url+'images/loading-1.gif" class="loading">';

  var show_questionnaire_on_load = $('#show_questionnaire_on_load').val();
  if(show_questionnaire_on_load == "show") {
    $('#questionnaireSection').show();
    $('#preparedQuestionnaire').show();
  }

  get_profile();

});

function pause(time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

async function get_profile() {

  const process_time = processing_factor * 3;
  const this_url = base_url + 'ajax/get_profile';

  pause(process_time)
  .then(() => {
    fetch(this_url, {
      method: 'GET',
      headers: {
          'Accept': 'application/json',
      },
    })
    .then(response => response.json())
    .then(() => {

      $('.profileDataPlaceholder').hide();
      $('.profileData').show();

      $("#siteProcessingBox").show();

      //State Loading
      $("#match-federal").html(loadingGif);
      $("#match-state").html(loadingGif);
      $("#match-zone").html(loadingGif);

      initiate_processing();

    })

  })

}

async function initiate_processing() {

  const process_time = processing_factor * 5;
  const this_url = base_url + 'ajax/initiate_processing';

  const match_federal = $('#match_federal').val();
  const match_state = $('#match_state').val();
  const match_zone = $('#match_zone').val();
  const match_total = $('#match_total').val();


  pause(process_time)
  .then(() => {
    fetch(this_url, {
      method: 'GET',
      headers: {
          'Accept': 'application/json',
      },
    })
    .then(response => response.json())
    .then(() => {

      //Federal Count
      $("#match-federal").html(preLink + match_federal + postLink);
      $("#match-state").html(preLink + match_state + postLink);
      $("#match-zone").html(preLink + match_zone + postLink);
      $("#match-total").html(preLink + match_total + postLink);

      //State Loading
      $("#ineligible-federal").html(loadingGif);
      $("#ineligible-state").html(loadingGif);
      $("#ineligible-zone").html(loadingGif);

      //City Loading
      $("#eligible-federal").html(loadingGif);
      $("#eligible-state").html(loadingGif);
      $("#eligible-zone").html(loadingGif);

      get_processing_results();

    })

  })

}

async function get_processing_results() {

  const process_time = processing_factor * 10;
  const this_url = base_url + 'ajax/get_processing_results';

  const ineligible_federal = $('#ineligible_federal').val();
  const ineligible_state = $('#ineligible_state').val();
  const ineligible_zone = $('#ineligible_zone').val();
  const ineligible_total = $('#ineligible_total').val();

  const eligible_federal = $('#eligible_federal').val();
  const eligible_state = $('#eligible_state').val();
  const eligible_zone = $('#eligible_zone').val();
  const eligible_total = $('#eligible_total').val();


  pause(process_time)
  .then(() => {
    fetch(this_url, {
      method: 'GET',
      headers: {
          'Accept': 'application/json',
      },
    })
    .then(response => response.json())
    .then(() => {

      //State Count
      $("#ineligible-federal").html(preLinkRed + ineligible_federal + postLink);
      $("#ineligible-state").html(preLinkRed + ineligible_state + postLink);
      $("#ineligible-zone").html(preLinkRed + ineligible_zone + postLink);
      $("#ineligible-total").html(preLinkRed + ineligible_total + postLink);

      //City Count
      $("#eligible-federal").html(preLinkBlue + eligible_federal + postLink);
      $("#eligible-state").html(preLinkBlue + eligible_state + postLink);
      $("#eligible-zone").html(preLinkBlue + eligible_zone + postLink);
      $(".eligible-total").html(preLinkBlue + eligible_total + postLink);

      $('#siteCreating').hide();
      $('#siteCreated').show();

      $('#questionnaireSection').show();

      build_questionnaire();

    })

  })

}

async function build_questionnaire() {

  const process_time = processing_factor * 5;
  const this_url = base_url + 'ajax/build_questionnaire';


  pause(process_time)
  .then(() => {
    fetch(this_url, {
      method: 'GET',
      headers: {
          'Accept': 'application/json',
      },
    })
    .then(response => response.json())
    .then(() => {

      $('#generatingQuestionnaire').hide();
      $('#preparedQuestionnaire').show();

      evaluateAllChildAnswersOnLoad();

    })

  })

}

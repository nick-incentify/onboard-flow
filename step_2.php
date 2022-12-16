
<?php include 'header.php';?>
<?php include 'get_entity.php' ?>
<?php include 'questionnaire_config.php' ?>

<script type="text/javascript" src="<?php echo $base_url; ?>scripts/load_step_2.js?ver=<?php echo $version; ?>"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>scripts/questionnaire.js?ver=<?php echo $version; ?>"></script>

<style>
  body {
    background-color:#f9fafe;
  }
  #copyInput{
   border:solid 1px #eaeaea;
   height: 30px;
   line-height: 30px;
   vertical-align: middle;
   width:60%;
   color:gray;
  }
  #copyBtn
  {
     border: solid 1px #d2d2d2;
     height: 30px;
     color:gray;
     cursor: pointer;
  }

</style>


<div class="w100 center">
  <div class="w100 dib vSpace24top pr leftAlign" style="max-width:1000px;background-color:#ffffff;border-radius:20px">

    <div style="padding:20px 20px 0px 20px">

      <p class="f18 bold borderBottom p8b">Business Profile</p>

      <div class="w100">
        <p class="f14 vSpace16bottom">Company Name <span class="profileDataPlaceholder fr"><img src="<?php echo $base_url; ?>images/loading-1.gif" class="loading"></span><span class="profileData fr bold" style="display:none"><?php echo $user_data['name']; ?></span></p>

      </div>
      <div class="w100">
        <p class="f14 vSpace16bottom">Site Locations <span class="profileDataPlaceholder fr"><img src="<?php echo $base_url; ?>images/loading-1.gif" class="loading"></span><span class="profileData fr bold" style="display:none"><?php echo COUNT($sites); ?></span></p>
      </div>
      <div class="w100">
        <p class="f14 vSpace16bottom">Industries / Sectors <span class="profileDataPlaceholder fr"><img src="<?php echo $base_url; ?>images/loading-1.gif" class="loading"></span><span class="profileData fr bold" style="display:none"><?php echo $sectors; ?></span></p>
      </div>
      <div class="w100">
        <p class="f14 vSpace16bottom">Estimated Number of Employees <span class="profileDataPlaceholder fr"><img src="<?php echo $base_url; ?>images/loading-1.gif" class="loading"></span><span class="profileData fr bold" style="display:none"><?php echo number_format($user_data['employee_count']); ?></span></p>
      </div>
      <div class="w100">
        <p class="f14 vSpace16bottom">Estimated Average Salary <span class="profileDataPlaceholder fr"><img src="<?php echo $base_url; ?>images/loading-1.gif" class="loading"></span><span class="profileData fr bold" style="display:none">$<?php echo number_format($user_data['average_salary']); ?></span></p>
      </div>

    </div>
  </div>
</div>


<form id="questionnaire_form" name="questionnaire_form" action="<?php echo $base_url; ?>save_answers.php?hash=<?php echo $user_data['hash']; ?>" method="post" accept-charset="utf-8" autocomplete="off">

  <input type="hidden" id="save_action" name="save_action" value="">

  <div id="siteProcessingBox" class="w100 center" style="display:none">
    <div class="w100 dib vSpace24top pr leftAlign" style="max-width:1000px;background-color:#ffffff;border-radius:20px">

      <div style="padding:20px 20px 0px 20px">

        <p class="f18 bold borderBottom p8b">Potential Incentive Eligibility</p>

        <div>

          <div class="w100 dib vSpace16bottom pr rightAlign borderBottom">
            <div class="fl w40p">
                <p class="f14 vSpace8bottom leftAlign">&nbsp;</p>
            </div>
            <div class="fl w20p">
              <p class="f14 vSpace8bottom bold">Program<br>Matches</p>
            </div>
            <div class="fl w20p">
              <p class="f14 vSpace8bottom bold">Determined<br>Ineligible</p>
            </div>
            <div class="fl w20p">
              <p class="f14 vSpace8bottom bold">Potentially<br>Eligible</p>
            </div>
          </div>

          <div class="w100 dib vSpace16bottom pr rightAlign borderBottom" style="height:35px">
            <div class="fl w40p">
                <p class="f14 vSpace8bottom leftAlign">Federal Programs</p>
            </div>
            <div class="fl w20p">
              <p id="match-federal" class="f14 vSpace8bottom">-</p>
            </div>
            <div class="fl w20p">
              <p id="ineligible-federal" class="f14 vSpace8bottom someGrayText">-</p>
            </div>
            <div class="fl w20p">
              <p id="eligible-federal" class="f14 vSpace8bottom blueText">-</p>
            </div>
          </div>

          <div class="w100 dib vSpace16bottom pr rightAlign borderBottom" style="height:35px">
            <div class="fl w40p">
                <p class="f14 vSpace8bottom leftAlign">Statewide Programs</p>
            </div>
            <div class="fl w20p">
              <p id="match-state" class="f14 vSpace8bottom">-</p>
            </div>
            <div class="fl w20p">
              <p id="ineligible-state" class="f14 vSpace8bottom someGrayText">-</p>
            </div>
            <div class="fl w20p">
              <p id="eligible-state" class="f14 vSpace8bottom blueText">-</p>
            </div>
          </div>

          <div class="w100 dib vSpace16bottom pr rightAlign borderBottom" style="height:35px">
            <div class="fl w40p">
                <p class="f14 vSpace8bottom leftAlign">Zone / Geo-Specific Programs (Federal &amp; State)</p>
            </div>
            <div class="fl w20p">
              <p id="match-zone" class="f14 vSpace8bottom">-</p>
            </div>
            <div class="fl w20p">
              <p id="ineligible-zone" class="f14 vSpace8bottom someGrayText">-</p>
            </div>
            <div class="fl w20p">
              <p id="eligible-zone" class="f14 vSpace8bottom blueText">-</p>
            </div>
          </div>

          <div class="w100 dib vSpace16bottom pr rightAlign bold" style="height:35px">
            <div class="fl w40p">
                <p class="f14 vSpace8bottom leftAlign">Total</p>
            </div>
            <div class="fl w20p">
              <p id="match-total" class="f14 vSpace8bottom">-</p>
            </div>
            <div class="fl w20p">
              <p id="ineligible-total" class="f14 vSpace8bottom someGrayText">-</p>
            </div>
            <div class="fl w20p">
              <p class="eligible-total f14 vSpace8bottom blueText bold">-</p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>


  <div id="questionnaireSection" class="w100 center" style="display:none;">
    <div class="w100 dib vSpace24top pr leftAlign" style="max-width:1000px;background-color:#ffffff;border-radius:20px">

      <div style="padding:20px 20px 0px 20px">

        <p class="f18 bold borderBottom p8b">Questionnaire</p>

        <p class="f14">Almost there! Let’s refine the potential eligible programs by responding to your custom questionnaire below.</p>

        <div id="generatingQuestionnaire" class="center vSpace48">

          <img src="<?php echo $base_url; ?>images/loading-1.gif" class="dib" width="100px">
          <p class="f14">Building Questionnaire for the <span class="eligible-total"></span> Programs...</p>

        </div>

        <div id="preparedQuestionnaire" style="display:none;">

          <div class="w100 vSpace48top">

            <p class="p14 bold vSpace0bottom pl15"><?php echo COUNT($questions); ?> Questions</p>

            <div class="w100 borderBottom vSpace8"></div>

            <?php $loopCount = 1; ?>
            <?php foreach($questions as $question) { ?>
              <?php
              $thisSavedAnswer = null;
              foreach($user_data['saved_answers'] as $saved_question_id => $saved_answer) {
                if($thisSavedAnswer == '' && $saved_question_id == $question['id']) {
                  $thisSavedAnswer = $saved_answer;
                }
              }
              ?>

              <div class="w100 dib pr leftAlign f14 hoverBlue p15lr p10tb">
                <div class="fl w75p">
                  <div class="fl"><?php echo $loopCount; ?>)</div>
                  <div class="pl25">
                    <div class=""> <?php echo $question['title'] ?> <?php //echo $requiredField; ?></div>
                  </div>
                </div>
                <div class="fr w25p">
                  <div class="w100 p5">
                    <?php if(isset($question['detail_inputs']) && COUNT($question['detail_inputs']) > 0) { ?>
                      &nbsp;
                    <?php } else { ?>
                      <label class="radio-inline mr15">
                        <input type="radio" id="answer-<?php echo $question['id'] ?>" name="answer-<?php echo $question['id'] ?>" value="yes" class="parentQuestion" data-childquestions="<?php echo $question['id'] ?>" data-childaction="show" <?= $thisSavedAnswer=='yes' ? 'checked' : '' ?>>Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" id="answer-<?php echo $question['id'] ?>" name="answer-<?php echo $question['id'] ?>" value="no" class="parentQuestion" data-childquestions="<?php echo $question['id'] ?>" data-childaction="hide" <?= $thisSavedAnswer=='no' ? 'checked' : '' ?>>No
                      </label>
                    <?php } ?>
                  </div>
                </div>
              </div>

              <?php if(isset($question['detail_inputs']) && COUNT($question['detail_inputs']) > 0) { ?>
                <?php foreach($question['detail_inputs'] as $detail_input) { ?>

                  <?php
                  $thisSavedAnswer = null;
                  foreach($user_data['saved_answers'] as $saved_question_id => $saved_answer) {
                    if($thisSavedAnswer == '' && $saved_question_id == $detail_input['id']) {
                      $thisSavedAnswer = $saved_answer;
                    }
                  }
                  ?>

                  <div class="w100 dib pr leftAlign f14 hoverBlue p15lr p10" style="padding-left:40px;">
                    <div class="fl w50p">
                      <div class="fl"> > </div>
                      <div class="pl25">
                        <div class="w100 mb5"> <?php echo $detail_input['title']; ?></div>
                        <div class="w100 pGray"> <?php echo $detail_input['description']; ?></div>
                      </div>
                    </div>
                    <div class="fr w50p">
                      <div class="w100 p5t">
                        <input type="text" id="answer-<?php echo $detail_input['id']; ?>" name="answer-<?php echo $detail_input['id']; ?>" value="<?php echo $thisSavedAnswer; ?>">
                      </div>
                    </div>
                  </div>

                <?php } ?>
              <?php } ?>

              <div class="w100 borderBottom"></div>

              <?php if(COUNT($question['child_questions']) > 0) { ?>
                <?php
                $hasSavedChildAnswers = false;
                foreach($question['child_questions'] as $child_question) {
                  foreach($user_data['saved_answers'] as $saved_question_id => $saved_answer) {
                    if($saved_question_id == $child_question['id']) {
                      $hasSavedChildAnswers = true;
                    }
                  }
                }
                ?>
                <div id="childQuestions-<?php echo $question['id'] ?>" style="<?= $hasSavedChildAnswers ? '' : 'display:none;'  ?>">
                  <?php foreach($question['child_questions'] as $child_question) { ?>

                    <?php
                    $thisSavedChildAnswer = null;
                    foreach($user_data['saved_answers'] as $saved_question_id => $saved_answer) {
                      if($thisSavedChildAnswer == '' && $saved_question_id == $child_question['id']) {
                        $thisSavedChildAnswer = $saved_answer;
                      }
                    }
                    ?>
                      <?php if(isset($child_question['input_type']) && $child_question['input_type'] == "textarea") { ?>
                        <div class="w100 dib pr leftAlign f14 hoverBlue p15lr p10tb" style="background-color:#fcfcfc;">
                          <div class="w100 pl15">
                            <div class="fl pl15"><span class="blueText bold">></span></div>
                            <div class="pl30">
                              <div class="w100 mb5"> <?php echo $child_question['title']; ?></div>
                              <?php if(isset($child_question['description']) && $child_question['description'] != "") { ?>
                                <div class="w100 pGray"> <?php echo $child_question['description']; ?></div>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="w100 pl40">
                            <div class="w100 p5">
                              <textarea id="answer-<?php echo $child_question['id'] ?>" name="answer-<?php echo $child_question['id'] ?>" rows="4"><?php echo $thisSavedChildAnswer; ?></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="w100 borderBottom"></div>

                      <?php } else if(isset($child_question['input_type']) && $child_question['input_type'] == "text") { ?>
                        <div class="w100 dib pr leftAlign f14 hoverBlue p15lr p10t" style="background-color:#fcfcfc;">
                          <div class="fl w50p pl15">
                            <div class="fl pl15"><span class="blueText bold">></span></div>
                            <div class="pl30">
                              <div class="w100 mb5"> <?php echo $child_question['title']; ?></div>
                              <?php if(isset($child_question['description']) && $child_question['description'] != "") { ?>
                                <div class="w100 pGray"> <?php echo $child_question['description']; ?></div>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="fr w49p">
                            <div class="w100">
                              <input type="text" id="answer-<?php echo $child_question['id']; ?>" name="answer-<?php echo $child_question['id']; ?>" value="<?php echo $thisSavedChildAnswer; ?>">
                            </div>
                          </div>
                        </div>
                        <div class="w100 borderBottom"></div>

                      <?php } else { ?>
                        <div class="w100 dib pr leftAlign f14 hoverBlue p15lr p10tb" style="background-color:#fcfcfc;">
                          <div class="fl w75p pl15">
                            <div class="fl pl15"><span class="blueText bold">></span></div>
                            <div class="pl30">
                              <div class="w100 mb5"> <?php echo $child_question['title']; ?></div>
                              <?php if(isset($child_question['description']) && $child_question['description'] != "") { ?>
                                <div class="w100 pGray"> <?php echo $child_question['description']; ?></div>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="fr w25p">
                            <div class="w100 p5">
                              <label class="radio-inline mr15">
                                <input type="radio" id="answer-<?php echo $child_question['id'] ?>" name="answer-<?php echo $child_question['id'] ?>" value="yes" <?= $thisSavedChildAnswer=='yes' ? 'checked' : '' ?>>Yes
                              </label>
                              <label class="radio-inline">
                                <input type="radio" id="answer-<?php echo $child_question['id'] ?>" name="answer-<?php echo $child_question['id'] ?>" value="no" <?= $thisSavedChildAnswer=='no' ? 'checked' : '' ?>>No
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="w100 borderBottom"></div>
                    <?php } ?>
                  <?php } ?>
                </div>

              <?php } ?>


              <?php $loopCount++; ?>
            <?php } ?>

          </div>

          <div class="w100 dib vSpace48 rightAlign">
            <div class="fl w60p leftAlign">
              <p class="f14 pGray vSpace8bottom" style="margin-top: -9px;">Want to review this questionnaire with your team?<br>Copy/share this URL with your colleagues. Don't forget to save your work.</p>
              <div class="w100 f14 pGray">
                <input type="text" id="copyInput" value="<?php echo $base_url; ?>questionnaire/<?php echo $hash; ?>" style="margin-bottom:0px;">
                <div id="copyBtn" class="dib p5 plr10">Copy</div>
              </div>
            </div>


            <a id="saveAnswers" href="javascript:void(0)" class="saveAnswersBtn p20 blueText mr10" data-action='save_only'>Save Progress</a>
            <a id="submitAnswersBtn" href="javascript:void(0)" class="saveAnswersBtn button-blue btn-size-1" data-action='submit'>Submit Answers ></a>
            <div id="proccessingBtn" class="button-gray btn-size-1 dib" style="margin-top:-10px;display:none;">Processing...</div>
          </div>

          <div id="savedConfirmation" class="center f16 p20" style="display:none;position:fixed;left:0;right:0;top:0;background-color:rgba(0, 166, 118, 1);color:white;">Your have successfully saved your questionnaire!</div>

        </div>

      </div>

    </div>
  </div>

  <div class="w100 vSpace96bottom"></div>
</form>

<input type="hidden" id="match_federal" value="<?php echo $match_federal; ?>">
<input type="hidden" id="match_state" value="<?php echo $match_state; ?>">
<input type="hidden" id="match_zone" value="<?php echo $match_zone; ?>">
<input type="hidden" id="match_total" value="<?php echo $match_total; ?>">

<input type="hidden" id="ineligible_federal" value="<?php echo $ineligible_federal; ?>">
<input type="hidden" id="ineligible_state" value="<?php echo $ineligible_state; ?>">
<input type="hidden" id="ineligible_zone" value="<?php echo $ineligible_zone; ?>">
<input type="hidden" id="ineligible_total" value="<?php echo $ineligible_total; ?>">

<input type="hidden" id="eligible_federal" value="<?php echo $eligible_federal; ?>">
<input type="hidden" id="eligible_state" value="<?php echo $eligible_state; ?>">
<input type="hidden" id="eligible_zone" value="<?php echo $eligible_zone; ?>">
<input type="hidden" id="eligible_total" value="<?php echo $eligible_total; ?>">

<input type="hidden" id="processing_factor" value="<?php echo $processing_factor; ?>">
<input type="hidden" id="show_questionnaire_on_load" value="<?php echo $_GET['questionnaire']; ?>">



<?php include 'footer.php';?>

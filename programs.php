
<?php include 'header.php';?>
<?php include 'questionnaire_config.php' ?>


<div class="w100 vSpace48top">

  <p class="p14 bold vSpace0bottom pl15"><?php echo COUNT($questions); ?> Incentive Programs in Questionnaire</p>

  <div class="w100 borderBottom vSpace8"></div>

  <?php $loopCount = 1; ?>
  <?php $program_name_tracker = []; ?>
  <?php foreach($questions as $question) { ?>

    <?php
    if(!in_array($question['program'], $program_name_tracker)) {
      $program_name_tracker[] = $question['program'];
    } else {
      continue;
    }
    ?>

    <div class="w100 dib pr leftAlign f14 hoverBlue p15lr p10tb">
        <div class="fl"><?php echo $loopCount; ?>)</div>
        <div class="pl25">
          <div class=""> <?php echo $question['program'] ?> (ID: <?php echo $question['id'] ?>)</div>
        </div>
    </div>
    <?php $loopCount++; ?>

    <?php foreach($question['child_questions'] as $child_question) { ?>
      <?php if(isset($child_question['related_program']) && $child_question['related_program'] != '') { ?>
        <div class="w100 dib pr leftAlign f14 hoverBlue p15lr p10tb">
            <div class="fl"><?php echo $loopCount; ?>)</div>
            <div class="pl25">
              <div class=""> <?php echo $child_question['related_program'] ?> (ID: <?php echo $child_question['id'] ?>)</div>
            </div>
        </div>
        <?php $loopCount++; ?>
      <?php } ?>
    <?php } ?>

  <?php } ?>

</div>


<?php include 'footer.php';?>

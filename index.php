<p id="siteWarning" class="f13 yellowBox p5 center vSpace0bottom">This is a trial version set up for pre-selected site location(s).</p>

<?php include 'header.php';?>

<script type="text/javascript" src="<?php echo $base_url; ?>scripts/home.js?ver=<?php echo $version; ?>"></script>


<header class="mainHero" style="background-color:#385cd0">
  <div class="w100 center dib">
    <div class="dib vSpace96 center whiteText" style="max-width:1000px">
      <p class="f36 bold">Welcome to Incentify, the credits and incentives discovery technology-led platform</p>
      <p class="f20">Please complete this onboarding flow to enable our Discover platform to uncover potential incentive programs for your business.</p>
    </div>
  </div>
</header>



<div class="w100 center" style="background-color:#f9fafe">
  <div class="w100 dib vSpace24top vSpace96bottom pr leftAlign" style="max-width:1000px;background-color:#ffffff;border-radius:20px">
    <div style="padding:30px">

      <form id="legal_entity_profile" name="legal_entity_profile" action="<?php echo $base_url; ?>save_entity.php" method="post" accept-charset="utf-8" autocomplete="off">

        <p class="f16 bold vSpace24bottom">About your Business</p>

        <p class="f14 vSpace32bottom">Please review the information below and add your estimated number of employees and estimated average salary.</p>

        <div class="w100 vSpace16bottom">
          <p class="f14 vSpace8bottom bold">Company Name <?php echo $requiredField; ?></p>
          <input type="text" id="legal_entity_name" name="legal_entity_name" value="<?php echo $legal_entity_name; ?>">
        </div>

        <div class="w100 vSpace16bottom">
          <p class="f14 vSpace8bottom bold">Industries / Sectors <?php echo $requiredField; ?></p>
          <input type="text" class="" value="<?php echo $sectors; ?>" style="background-color:#f3f3f3;" disabled>
        </div>

        <div class="w100 vSpace24bottom">
          <p class="f14 vSpace8bottom bold">Site Locations <?php echo $requiredField; ?></p>
          <?php if(COUNT($sites) < 6) { ?>
            <?php foreach($sites as $site) { ?>
              <input type="text" class="" value="<?php echo $site['name'] . " - " . $site['address']; ?>" style="background-color:#f3f3f3;" disabled>
            <?php } ?>
          <?php } else { ?>
            <p class="f14 vSpace8bottom"><?php echo COUNT($sites); ?> Pre-Selected Sites (<a id="showSitesBtn" href="javascript:void(0)" class="blueText">show</a><a id="hideSitesBtn" href="javascript:void(0)" class="blueText" style="display:none;">hide</a>)</p>
            <div id="sitesList" style="display:none;">
              <?php foreach($sites as $site) { ?>
                <input type="text" class="" value="<?php echo $site['name'] . " - " . $site['address']; ?>" style="background-color:#f3f3f3;" disabled>
              <?php } ?>
            </div>
          <?php } ?>



        </div>


        <div class="w100 dib pr leftAlign">
          <div class="fl w45p">

            <div class="w100 vSpace16bottom">
              <p class="f14 vSpace8bottom bold">Estimated Number of Employees <?php echo $requiredField; ?></p>
              <input type="text" id="employee_count" name="employee_count">
            </div>

          </div>
          <div class="fr w45p">

            <div class="w100 vSpace16bottom">
              <p class="f14 vSpace8bottom bold">Estimated Average Salary <?php echo $requiredField; ?></p>
              <input type="text" id="average_salary" name="average_salary">
            </div>

          </div>
        </div>


        <div class="w100 vSpace48top rightAlign">
          <p class="f14 pGray fl w70p leftAlign">Do you have questions? We're here to help, contact us at <a href="mailto:sales@incentify.com" class="blueText">sales@incentify.com</a></p>

          <a id="goToStep2Btn" href="javascript:void(0)" class="button-blue btn-size-1">Launch Discover ></a>
          <div id="proccessingBtn" class="button-gray btn-size-1 dib" style="margin-top:-10px;display:none;">Processing...</div>
        </div>

      </form>

    </div>
  </div>
</div>



<?php include 'footer.php';?>

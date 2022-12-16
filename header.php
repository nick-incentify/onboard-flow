<?php include 'config.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>Discover By Incentify</title>
  <link rel="stylesheet" href="<?php echo $base_url; ?>fonts.css" type="text/css"/>

  <link rel="stylesheet" href="<?php echo $base_url; ?>styles.css?ver=<?php echo $version; ?>" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <style>
    .mainHero {
      background: url(images/hero-1.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    .loading {
      width:40px;
      margin-top:-10px;
      margin-right:-10px;
    }
    .loadingTitle {
      width:40px;
      margin-top:-7px;
      margin-right:-10px;
    }

  </style>

  <!-- Hotjar Tracking Code for https://discover-trial.incentify.com/ -->
  <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3253653,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>

</head>
<body>

  <input type="hidden" id="base_url" value="<?php echo $base_url; ?>">

  <div class="w100" style="height:70px;background:#1A4FE5;padding:5px">
      <img src="<?php echo $base_url; ?>images/incentify-logo-2.png" style="height:40px;margin-top:10px;padding-left:30px">
  </div>

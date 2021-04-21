<?php
 /**
  * personal tune creator
  * v 1.0
  */
 require_once 'tags_pre_defined.php';
 require_once 'analyzeMedia.php';
 require_once 'tools.php';

?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8" />
 <title>NewTube</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="apple-touch-icon" sizes="180x180" href="<?php echo getUrl_wo_params(); ?>img/favicon/apple-touch-icon.png">
 <link rel="icon" type="image/png" sizes="32x32" href="<?php echo getUrl_wo_params(); ?>img/favicon/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="16x16" href="<?php echo getUrl_wo_params(); ?>img/favicon/favicon-16x16.png">
 <link rel="manifest" href="<?php echo getUrl_wo_params(); ?>site.webmanifest">
 <link rel="mask-icon" href="<?php echo getUrl_wo_params(); ?>img/favicon/safari-pinned-tab.svg" color="#000000">
 <meta name="msapplication-TileColor" content="#ffffff">
 <meta name="msapplication-TileImage" content="<?php echo getUrl_wo_params(); ?>img/favicon/mstile-144x144.png">
 <meta name="theme-color" content="#ffffff">

 <link href="css/tailwind-2.1.1.min.css" rel="stylesheet">
 <link href="css/video-js-7.12.1.min.css" rel="stylesheet">
 <link href="css/video-js-city-1.0.1.min.css" rel="stylesheet">
</head>
<body class="bg-pink-50">
 <div class="container px-2 mx-auto mt-4 mb-4">

  <nav class="bg-white py-2 md:py-4 mb-4 rounded-lg">
    <div class="container px-4 mx-auto md:flex md:items-center">

      <div class="flex justify-between items-center">
        <a href="<?php echo getUrl_wo_params(); ?>" class="font-bold text-xl text-indigo-600">NewTube</a>
        <a href="https://MrAdib.com/personalTube" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">About</a>
      </div>

      <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
<?php if($_GET && $_GET["id"]) {?>
        <a href="<?php echo getUrl_wo_params(); ?>" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Back</a>
<?php }?>
      </div>
    </div>
  </nav>


<?php
 if($_GET && $_GET["id"])
 {
  if(isset($MOVIES[$_GET["id"]]))
  {
   $thisVid = $MOVIES[$_GET["id"]];
   // we have id, show player
   require_once 'player.php';
  }
  else
  {
   echo "This Video is not exist!";
  }
 }
 else{
  require_once 'homepage.php';
 }
?>
 </div>
<script src="js/video-7.10.2.min.js"></script>
<script src="js/video-runner.js"></script>
</body>
</html>
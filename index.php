<?php require 'vendor/autoload.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>W74</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

  <!-- Mobile & Desktop Favicons -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://www.wolfram74.com/fav/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.wolfram74.com/fav/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.wolfram74.com/fav/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.wolfram74.com/fav/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://www.wolfram74.com/fav/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://www.wolfram74.com/fav/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="http://www.wolfram74.com/fav/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="http://www.wolfram74.com/fav/favicon-16x16.png" sizes="16x16" />
  <meta name="application-name" content="W74"/>
  <meta name="msapplication-TileColor" content="#333333" />
  <meta name="msapplication-TileImage" content="http://www.wolfram74.com/fav/mstile-144x144.png" />


  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="logo">
    <?php include('resc/logo-1-v.svg'); ?>
    <?php include('resc/logo-1-h.svg'); ?>
    <audio id="d3" src="resc/d3.mp3" autobuffer></audio>
    <audio id="e3" src="resc/e3.mp3" autobuffer></audio>
    <audio id="a3" src="resc/a3.mp3" autobuffer></audio>
  </div>
  <div id="wrapper">
		<?php include('comps/view_tree.php'); ?>
	</div>
	<?php #include('comps/view_console.php'); ?>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/g/jquery@2.2.3,velocity@1.2.3"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
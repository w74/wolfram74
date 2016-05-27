<?php require 'vendor/autoload.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>W74</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=640, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="logo">
    <?php include('img/logo-1-v.svg'); ?>
    <?php include('img/logo-1-h.svg'); ?>
  </div>
  <div id="wrapper">
		<?php include('comps/view_tree.php'); ?>
	</div>
	<?php #include('comps/view_console.php'); ?>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/g/jquery@2.2.3,velocity@1.2.3"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
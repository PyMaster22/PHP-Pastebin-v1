<?php
$paste_file = "pastes.php";
if(!file_exists($paste_file)){
  file_put_contents($paste_file, "<?php header(\"content-type:text/plain\"); if($_GET[\"pasteid\"]==\"0000000000\"){echo \"Pastes.\";}");
}
if($_POST){
  
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Patebin V1</title>
  <style>
    // Styles you want...
  </style>
</head>
<body>
  <form action="" method="post">
  </form>
</body>
</html>

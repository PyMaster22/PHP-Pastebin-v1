<?php
$paste_file = "pastes.php";
$list_file = "list.html";
if(!file_exists($paste_file)){
  file_put_contents($paste_file, "<?php header(\"content-type:text/plain\"); if($_GET[\"pasteid\"]==\"0000000000\"){echo \"Pastes.\";}");
}
if(!file_exists($list_file)){
  file_put_contents($list_file, "<!DOCTYPE html><html><body><table><thead><tr><th>Paste link</th></tr></thead><tbody><tr><th><a href=\"pastes.php?pasteid=0000000000\">0000000000</a></th></tr>");
}
function generateRandomString($length = 11) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
if($_POST){
  $pasteid = generateRandomString();
  file_put_contents($paste_file, file_get_contents($paste_file) . "elseif(\$_GET[\"$pasteid\"]){echo \"$_POST["text2paste"]\";}");
  file_put_contents($link_file, file_get_contents($link_file) . "<tr><th><a href=\"".$paste_file."?pasteid="$pasteid"\">".$pasteid."</a></th></tr>");
  echo "<a href=\"".$paste_file."?pasteid=".$pasteid."\">Your paste.</a>";
  exit;
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
    <textarea cols="50" rows="10" placeholder="Paste Content..." name="text2paste"></textarea><br>
    <p>BURN on view and disable listing comming later. :/</p>
    <input type="submit" value="Post!">
  </form>
</body>
</html>

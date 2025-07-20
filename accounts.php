<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Potato Jam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="css/template_2.css?60" rel="stylesheet" />
</head>
<body>
<section class="block4"><img class="center_img" src="img/logo.png" width="80%" />
<section class="block2">
<div class="first-text">

<div>
<?php
// check if the form is submitted
if (isset($_POST['submit'])) {
  // get the nickname and game name from the form
  $nickname = $_POST['nickname'];
  $game = $_POST['game'];

  // validate the input
  if (empty($nickname) || empty($game)) {
    // display an error message
    echo "<p>Please enter your nickname and select a game.</p>";
  } else {
    // send an email to the support team
    $to = "support@potatojam.com";
    $subject = "Account deletion request";
    $message = "The user with the nickname \n$nickname\n has requested to delete their account for the game \n$game";
    $headers = "From: support@potatojam.com";
    mail($to, $subject, $message, $headers);

    // display a confirmation message
    echo "<p>Thank you for your request. Your account will be removed during the next 3 days.</p>";
  }
} else {
  // display the form
  ?>
  <form action="" method="post">
    <p>Please fill out this form to request your account deletion.</p>
    <p>Nickname: <input type="text" name="nickname"></p>
    <p>Game: <select name="game" id="game" onchange="showLink()">
      <?php
      // get the query parameter from the user link
      $query = $_SERVER['QUERY_STRING'];
      // set the default value based on the query parameter
      if ($query == "1") {
        $default = "Onet Paradise";
      } elseif ($query == "2") {
        $default = "Onet Master";
      } else {
        $default = "";
      }
      ?>
      <option value="">Select a game</option>
      <option value="Onet Paradise" <?php if ($default == "Onet Paradise") echo "selected"; ?>>Onet Paradise</option>
      <option value="Onet Master" <?php if ($default == "Onet Master") echo "selected"; ?>>Onet Master</option>
    </select></p>
    <br>
    <p id="link"></p>
    <br>
    <p><input type="submit" name="submit" value="Request account removal"></p>
    <br><br><br>
  </form>
  <?php
}
?>
</div>
</div>
<script>
// define a function to show the link based on the game selection
function showLink() {
  // get the game element and the link element
  var game = document.getElementById("game");
  var link = document.getElementById("link");

  // get the game value and the game text
  var gameValue = game.value;
  var gameText = game.options[game.selectedIndex].text;

  // check the game value and set the link accordingly
  if (gameValue == "Onet Paradise") {
    link.innerHTML = "You can play <a href='https://play.google.com/store/apps/details?id=com.potatojam.onet_paradise.match_two_tiles'>" + gameText + "</a> here.";
  } else if (gameValue == "Onet Master") {
    link.innerHTML = "You can play <a href='https://play.google.com/store/apps/details?id=com.potatojam.onet.master.connect.match.pairs'>" + gameText + "</a> here.";
  } else {
    link.innerHTML = "";
  }
}
showLink();

</script>



</section>
</body>
</html>
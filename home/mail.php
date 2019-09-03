<?php

if (isset($_POST['mail'])) {

$to = "$_POST['mail']";
$subject = "New Sub";
$message = "";
mail($to, $subject, $message);

$your_email = "danielwnewman@icloud.com";
$subject_to_you = "someone subscribed to your news letter";
$message_to_you = "Add this to a list";
mail($your_email, $subject_to_you, $message_to_you);

}
?>
<html>
<body>
<form action="mail.php" method="post" class="newsletter" action="<?php echo $PHP_SELF;?>">
<h3>Subscribe to our Newsletter</h3><br>
<p>Be the first to hear about our new treatments, special offers and events</p></br>
<input type="text" name="email" placeholder="Enter email address" size=40 class="input"/>
<p><input type="submit" value="Subscribe" class="button" /></p>
</form>
</body>
</html>

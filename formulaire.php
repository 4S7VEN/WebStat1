<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>
    <div class="contact-form">
        <span class="heading">Contact Us</span>
        <form>
          <label for="name">Name:</label>
          <input type="text" required="">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required="">
          <label for="message">Message:</label>
          <textarea id="message" name="message" required=""></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>    
</body>
</html>';
?>

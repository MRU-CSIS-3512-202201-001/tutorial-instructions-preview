<?php
$orderNumber = mt_rand(1, 1000);
$paddedNumber = str_pad($orderNumber, 3, "0", STR_PAD_LEFT);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="index.js"></script>
  <title>Crush Form</title>
</head>

<body>
  <div class="container">
    <form action="" method="post">
      <header>
        <h1>A Crush For Your Crush Order Form</h1>
        <label style="display: none" for="order-number">Order Number:</label>
        <input type="text" name="order-number" id="order-number" value="<?= $paddedNumber ?>" readonly />
      </header>

      <ul>
        <li>
          <label for="recipient-name">Recipient Name?</label>
          <input type="text" name="recipient-name" id="recipient-name" />
        </li>
        <li>
          <fieldset>
            <legend>What grade is the recipient in?</legend>
            <input type="radio" id="grade-10" name="recipient-grade" value="10" />
            <label for="grade-10">grade-10</label><br />

            <input type="radio" id="grade-11" name="recipient-grade" value="11" />
            <label for="grade-11">grade-11</label><br />

            <input type="radio" id="grade-12" name="recipient-grade" value="12" />
            <label for="grade-12">grade-12</label>
          </fieldset>
        </li>
        <li>
          <label for="quantity">How many cans?</label>
          <input type="number" id="quantity" name="quantity" min="1" max="10" />
        </li>
        <li>
          <label for="purchaser-name">Your name?</label>
          <input type="text" name="purchaser-name" id="purchaser-name" />
        </li>
        <li>
          <label for="order-total">Total</label>
          <input type="text" name="order-total" id="order-total" readonly />
        </li>
        <li>
          <input type="submit" value="submit order" />
        </li>
      </ul>
    </form>
  </div>
</body>

</html>

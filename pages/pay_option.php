<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Choose Payment Option</title>
  <link rel="stylesheet" href="../stles/styles_payment.css"> <!-- Link your CSS file -->
</head>
<body>
  <?php include 'header.php'; ?>

  <main>
    <section class="payment-options">
      <div class="container">
        <h2>Choose Payment Option</h2>
        <div class="options">
          <div class="payment-option">
            <img src="assets/Paypal_2014_logo.png" alt="PayPal">
            <button class="btn">Pay with PayPal</button>
          </div>
          <div class="payment-option">
            <img src="assets/visa_logo.png" alt="Visa">
            <button class="btn">Pay with Visa</button>
          </div>
          <div class="payment-option">
            <img src="assets/MasterCard_Logo.svg.png" alt="Mastercard">
            <button class="btn">Pay with Mastercard</button>
        </div>
        <div class="payment-option">
            <img src="assets/American_Express_logo_(2018).svg.png" alt="American Express">
            <button class="btn">Pay with American Express</button>
        </div>
          <!-- Add more payment options as needed -->
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2024 EcoMarket. All rights reserved.</p>
    </div>
  </footer>

  <script src="../scripts/scripts.js"></script> <!-- Link your JavaScript file -->
</body>
</html>

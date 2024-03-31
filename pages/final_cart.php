<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Final Cart</title>
  <link rel="stylesheet" href="../styles/styles_fcart.css"> <!-- Link your CSS file -->
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <section class="cart">
      <div class="container">
        <h2>Your Cart</h2>
        <div class="cart-items">
          <!-- Cart items will be dynamically added here -->
          <div class="cart-item">
            <img src="../assets/product1.jpeg" alt="Product 1">
            
                <h3>Handcrafted Product 1</h3>
                <p class="price">$29.99</p>
            
          </div>
          <div class="cart-item">
            <img src="../assets/product2.jpeg" alt="Product 2">
            <h3>Handcrafted Product 2</h3>
            <p class="price">$19.99</p>
          </div>
          <!-- Add more cart items as needed -->
        </div>
        <div class="total">
          <h3>Total: $49.98</h3> <!-- Calculate and display the total dynamically using JavaScript -->
          <button class="btn">Checkout</button>
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop - EcoMarket: Handcrafted Materials</title>
  <link rel="stylesheet" href="../styles/styles_about.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <section class="shop">
      <div class="container">
        <h2>Featured Products</h2>
        <div class="product-grid">
          <div class="product-card">
            <img src="../assets/cutlery.jpeg" alt="Product 1">
            <h3>Cutleries</h3>
            <p class="price">$29.99</p>
            <button onclick="addToCart('Cutleries')">Add to Cart</button>
          </div>
          <div class="product-card">
            <img src="../assets/showpiece.jpeg" alt="Product 2">
            <h3>Showpiece Elephant</h3>
            <p class="price">$19.99</p>
            <button onclick="addToCart('Showpiece Elephant')">Add to Cart</button>
          </div>
          <div class="product-card">
              <img src="../assets/flowerPot.jpeg" alt="Product 1">
              <h3>Flower Pot</h3>
              <p class="price">$9.99</p>
              <button onclick="addToCart('Flower Pot')">Add to Cart</button>
          </div>
          <div class="product-card">
              <img src="../assets/handbag.jpeg" alt="Product 2">
              <h3>Organic Tote Bag</h3>
              <p class="price">$79.99</p>
              <button onclick="addToCart('Organic Tote Bag')">Add to Cart</button>
          </div>
          <div class="product-card">
              <img src="../assets/lantern.jpeg" alt="Product 1">
              <h3>Lantern</h3>
              <p class="price">$4.99</p>
              <button onclick="addToCart('Lantern')">Add to Cart</button>
          </div>
          <div class="product-card">
              <img src="../assets/wallpiece.jpeg" alt="Product 2">
              <h3>wallpiece</h3>
              <p class="price">$39.99</p>
              <button onclick="addToCart('Wallpiece')">Add to Cart</button>
          </div>
          <div class="product-card">
            <img src="../assets/woolen.jpeg" alt="Product 2">
            <h3>Woolen Shawl</h3>
            <p class="price">$35.99</p>
            <button onclick="addToCart('Woolen Shawl')">Add to Cart</button>
        </div>
          <!-- Add more product cards as needed -->
        </div>      
    </div>
    </section>
    <section class="cart-section" style="display: none;">
        <div class="container">
          <h2>Shopping Cart</h2>
          <div id="cart-items"></div>
          <a href="../pages/cart.php" class="btn">View Cart</a>
        </div>
      </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2024 EcoMarket. All rights reserved.</p>
    </div>
  </footer>
  <script src="../scripts/scripts_cart.js"></script>
</body>
</html>

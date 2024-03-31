<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoMarket: Handcrafted Materials</title>
  <link rel="stylesheet" href="../styles/styles_main.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <main>
    <section class="hero">
      <div class="container" id="welcome">
        <h2>Welcome to EcoMarket</h2>
        <p>Discover handcrafted materials that promote sustainability and craftsmanship.</p>
        <a href="shop.html" class="btn">Shop Now</a>
      </div>
    </section>


    <section class="categories">
      <div class="container">
          <h2>Categories</h2>
          <div class="category-slider">            
              <div class="category-grid">
                <div class="category-card">
                  <img src="../assets/flowerPot.jpeg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Home Decor</h3></span>
                  </div>
                </div>
                
                <div class="category-card">
                  <img src="../assets/jewelry.jpg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Jewelry</h3></span>
                  </div>
                </div>
                <div class="category-card">
                  <img src="../assets/woolen.jpeg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Clothing & Accessories</h3></span>
                  </div>
                </div>
                <div class="category-card">
                  <img src="../assets/showpiece.jpeg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Art and Sculptures</h3></span>
                  </div>
                </div>
                <div class="category-card">
                  <img src="../assets/cutlery.jpeg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Kitchenware</h3></span>
                  </div>
                </div>
                <div class="category-card">
                  <img src="../assets/flowerPot.jpeg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Paper goods</h3></span>
                  </div>
                </div>
                <div class="category-card">
                  <img src="../assets/flowerPot.jpeg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Toys and Games</h3></span>
                  </div>
                </div>
                <div class="category-card">
                  <img src="../assets/flowerPot.jpeg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Personal Care Products</h3></span>
                  </div>
                </div>
                <div class="category-card">
                  <img src="../assets/flowerPot.jpeg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Furniture</h3></span>
                  </div>
                </div>
                <div class="category-card">
                  <img src="../assets/flowerPot.jpeg" alt="Flower Pot">
                  <div class="category-text">
                    <span><h3>Gift sets</h3></span>
                  </div>
                </div>
              </div>
          </div>
          <button id="prevBtn">&lt;</button>
          <button id="nextBtn">&gt;</button>
      </div>
  </section>

    <section class="featured-products">
        <div class="container">
          <h2>Featured Products</h2>
          <div class="product-grid">
            <div class="product-card">
              <img src="../assets/cutlery.jpeg" alt="Product 1">
              <h3>Cutleries</h3>
              <p class="price">$29.99</p>
              <button>Add to Cart</button>
            </div>
            <div class="product-card">
              <img src="../assets/showpiece.jpeg" alt="Product 2">
              <h3>Showpiece Elephant</h3>
              <p class="price">$19.99</p>
              <button>Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="../assets/flowerPot.jpeg" alt="Product 1">
                <h3>Flower Pot</h3>
                <p class="price">$9.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="../assets/handbag.jpeg" alt="Product 2">
                <h3>Organic Tote Bag</h3>
                <p class="price">$79.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="../assets/lantern.jpeg" alt="Product 1">
                <h3>Lantern</h3>
                <p class="price">$4.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="../assets/wallpiece.jpeg" alt="Product 2">
                <h3>wallpiece</h3>
                <p class="price">$39.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-card">
              <img src="../assets/woolen.jpeg" alt="Product 2">
              <h3>Woolen Shawl</h3>
              <p class="price">$35.99</p>
              <button>Add to Cart</button>
          </div>
            <!-- Add more product cards as needed -->
          </div>      
      </div>
    </section>

    <section class="sustainability">
      <div class="container">
        <h2>Our Commitment to Sustainability</h2>
        <p>We believe in promoting sustainable living practices. Learn more about our commitment.</p>
        <a href="#" class="btn">Learn More</a>
      </div>
    </section>
  </main>

    <script>
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');
      const categorySlider = document.querySelector('.category-slider');
      let scrollAmount = 0;

      nextBtn.addEventListener('click', () => {
          scrollAmount += 300; // Adjust this value as needed
          categorySlider.scrollTo({
              top: 0,
              left: scrollAmount,
              behavior: 'smooth'
          });
      });

      prevBtn.addEventListener('click', () => {
          scrollAmount -= 300; // Adjust this value as needed
          categorySlider.scrollTo({
              top: 0,
              left: scrollAmount,
              behavior: 'smooth'
          });
      });

    </script>
  <footer>
    <div class="container">
      <p>&copy; 2024 EcoMarket. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>

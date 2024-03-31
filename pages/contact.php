<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - EcoMarket: Handcrafted Materials</title>
  <link rel="stylesheet" href="../styles/styles_contact.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <main>
    <section class="contact-form">
      <div class="container">
        <h2>Contact Us</h2>
        <form id="contact-form">
          <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit">Send Message</button>
        </form>
        <div id="success-message" class="hidden">Your message has been sent successfully!</div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2024 EcoMarket. All rights reserved.</p>
    </div>
  </footer>

  <script src="../scripts/scripts.js"></script>
  <script>
    // Contact form submission
    document.getElementById('contact-form').addEventListener('submit', function(event) {
      event.preventDefault();
      var formData = new FormData(this);
      var jsonData = {};
      formData.forEach(function(value, key) {
        jsonData[key] = value;
      });

      // You can replace this with your actual endpoint for handling form submissions
      // Here, we are just simulating a successful submission
      setTimeout(function() {
        document.getElementById('success-message').classList.remove('hidden');
      }, 1000);
    });
  </script>
</body>
</html>

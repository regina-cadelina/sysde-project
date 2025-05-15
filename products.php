<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Products - Isabelle Concepts & Prints</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header, footer {
      background-color: #222;
      color: #fff;
      padding: 2% 3%;
      text-align: center;
    }
    nav a {
      color: #fff;
      margin: 0 2%;
      text-decoration: none;
    }
    .container {
      padding: 3%;
    }
    h1 {
      text-align: center;
    }
    .product-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .product-card {
      width: 30%;
      margin-bottom: 3%;
      border: 1px solid #ccc;
      padding: 2%;
      box-sizing: border-box;
    }
    .product-card img {
      width: 100%;
      height: auto;
    }
    .product-card h3 {
      margin: 10px 0 5px;
    }
    .product-card p {
      font-size: 90%;
    }
    .product-card button {
      margin-top: 10px;
      padding: 8px 12px;
      background-color: #222;
      color: white;
      border: none;
      cursor: pointer;
    }
    .product-card button:hover {
      background-color: #444;
    }
    @media (max-width: 768px) {
      .product-card {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Isabelle Concepts & Prints</h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="products.html">Products</a>
      <a href="faqs.html">FAQ</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <div class="container">
    <h1>Our Products</h1>
    <div class="product-grid">
      <div class="product-card">
        <img src="shirt.jpg" alt="Custom T-Shirt">
        <h3>Custom T-Shirt</h3>
        <p>High-quality cotton shirts with personalized designs.</p>
        <button>Customize</button>
      </div>
      <div class="product-card">
        <img src="mug.jpg" alt="Personalized Mug">
        <h3>Personalized Mug</h3>
        <p>Add your own photo, text, or logo to our durable mugs.</p>
        <button>Order Now</button>
      </div>
      <div class="product-card">
        <img src="tarpaulin.jpg" alt="Tarpaulin Printing">
        <h3>Tarpaulin Printing</h3>
        <p>Custom banners for any event – birthdays, business, and more.</p>
        <button>Order Now</button>
      </div>
      <div class="product-card">
        <img src="invitation.jpg" alt="Custom Invitations">
        <h3>Custom Invitations</h3>
        <p>Stylish, personalized invites for weddings and parties.</p>
        <button>Customize</button>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Isabelle Concepts & Prints. All rights reserved.</p>
  </footer>

</body>
</html>

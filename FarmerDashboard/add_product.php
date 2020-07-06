<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FTVM Logo -->
    <link
      rel="icon"
      href="../image/LogoSample_ByTailorBrands (1).jpg"
      type="image/png"
    />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- css link -->
    <link rel="stylesheet" href="../css/add_product.css" />
    <link rel="stylesheet" href="../fontawesome-free-5.12.1-web/css/all.css" />
    
    
     <link rel="manifest" href="../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    
    
    <script src="../js/add_product.js"></script>
    <title>Add Product</title>
  </head>

  <body class="bg-info">
    <a href="Farmer_dashboard.html" class="text-warning ml-3 pt-3">Home</a>

    <div class="pt-5 size">
      <form
        action="message.html"
        onsubmit="return validate()"
        class="form-group bg-light p-3 m-5 rounded"
      >
        <h3 class="mb-4 text-secondary text-center">your Product Here</h3>

        <input
          type="text"
          placeholder="Enter Product Name"
          class="form-control mb-4"
          id="p_name"
        />

        <input
          type="text"
          placeholder=" Enter Product Country"
          class="form-control mb-4"
          id="p_location"
        />

        <input
          type="date"
          placeholder="Enter Product Expiry Date"
          class="form-control mb-4"
          id="p_expiry"
        />

        <input
          type="text"
          placeholder="Enter Product Intial price"
          class="form-control mb-4"
          id="p_price"
        />

        <input
          type="text"
          placeholder="Enter your Product weight in KG"
          class="form-control mb-4"
          id="p_weight"
        />
        <input type="file" id="p_picture" />

        <button class="btn btn-block btn-danger mt-3 mb-3" type="submit">
          Submit
        </button>
      </form>
    </div>
     
     <script src="../js/app.js"></script>
  </body>
</html>

<?php
include("./base/header.php");


if (isset($_POST['addProduct'])) {
  $productCategory = $_POST['productCategory'];
  $productName = $_POST['productName'];
  $productPrice = $_POST['productPrice'];
  $productStock = $_POST['productStock'];
  $productImage = $_POST['productImage'];
  $productDetail = $_POST['productDetail'];
  $productSalePrice = $_POST['productSalePrice'];

  $insert_query = "INSERT INTO products(product_category, product_name, product_price,	product_stock,	product_banner,	product_detail,	product_sale_price) VALUES('$productCategory', '$productName', $productPrice, $productStock, '$productImage', '$productDetail', $productSalePrice)";

  $execute = mysqli_query($conn, $insert_query);

  echo "<script>
      alert('Product Added Successfully');
  </script>";

}



?>

<div class="container">



  <div class="card border-light shadow-sm p-4 h-100">
    <h5 class="card-title mb-4">ADD New Product</h5>

    <!-- Text input -->

    <form method="POST" id="productForm">

      <div class="mb-3">
        <label for="productCategory" class="form-label-custom">Product Category</label>
        <select name="productCategory" class="form-control-custom" id="productCategory">
          <option value="">---</option>
          <option value="MEN">MEN</option>
          <option value="WOMEN">WOMEN</option>
        </select>
        <small class="error-msg text-danger"></small>
      </div>

      <div class="mb-3">
        <label for="productName" class="form-label-custom">Product Name</label>
        <input type="text" class="form-control-custom" id="productName" name="productName">
        <small class="error-msg text-danger"></small>
      </div>

      <div class="mb-3">
        <label for="productPrice" class="form-label-custom">Product Price</label>
        <input type="number" class="form-control-custom" id="productPrice" name="productPrice">
        <small class="error-msg text-danger"></small>
      </div>

      <div class="mb-3">
        <label for="productStock" class="form-label-custom">Product Stock</label>
        <input type="number" class="form-control-custom" id="productStock" name="productStock">
        <small class="error-msg text-danger"></small>
      </div>

      <div class="mb-3">
        <label for="productImage" class="form-label-custom">Product Banner</label>
        <input type="file" class="form-control-custom" id="productImage" name="productImage">
        <small class="error-msg text-danger"></small>
      </div>

      <div class="mb-3">
        <label for="productDetail" class="form-label-custom">Product Detail</label>
        <textarea name="productDetail" class="form-control-custom" id="productDetail"></textarea>
        <small class="error-msg text-danger"></small>
      </div>

      <div class="mb-3">
        <label for="productSalePrice" class="form-label-custom">Product Sale Price</label>
        <input type="number" class="form-control-custom" id="productSalePrice" name="productSalePrice">
        <small class="error-msg text-danger"></small>
      </div>

      <div>
        <button type="submit" class="btn-quick-action" name="addProduct">ADD Product</button>
      </div>
    </form>


  </div>



  <script>
    document.getElementById('productForm').addEventListener('submit', function (e) {
      let isValid = true;

      // Fields
      const category = document.getElementById('productCategory');
      const name = document.getElementById('productName');
      const price = document.getElementById('productPrice');
      const stock = document.getElementById('productStock');
      const image = document.getElementById('productImage');
      const detail = document.getElementById('productDetail');
      const salePrice = document.getElementById('productSalePrice');

      // Regex Patterns
      const nameRegex = /^[a-zA-Z0-9\s-_]{3,50}$/; // 3 to 50 characters (letters, numbers, spaces, dash, underscore)
      const numberRegex = /^[0-9]+(\.[0-9]{1,2})?/; // Positive integers or decimals (for price)
      const integerRegex = /^[0-9]+$/; // Only positive whole numbers (for stock)
      const imageRegex = /\.(jpg|jpeg|png|webp)$/i; // Allowed image extensions

      // Helper function to show error
      function setError(input, message) {
        input.style.border = '2px solid red';
        const errorSpan = input.parentElement.querySelector('.error-msg');
        if (errorSpan) {
          errorSpan.innerText = message;
        }
        isValid = false;
      }

      // Helper function to clear error
      function clearError(input) {
        input.style.border = '';
        const errorSpan = input.parentElement.querySelector('.error-msg');
        if (errorSpan) {
          errorSpan.innerText = '';
        }
      }

      // 1. Category Validation
      if (category.value === "" || category.value === "---") {
        setError(category, "Please select a product category.");
      } else {
        clearError(category);
      }

      // 2. Product Name Validation (Regex check)
      if (name.value.trim() === "") {
        setError(name, "Product name cannot be empty.");
      } else if (!nameRegex.test(name.value.trim())) {
        setError(name, "Name must be 3-50 characters long and contain valid characters.");
      } else {
        clearError(name);
      }

      // 3. Price Validation (Regex check for numbers/decimals)
      if (price.value === "" || !numberRegex.test(price.value) || Number(price.value) <= 0) {
        setError(price, "Please enter a valid positive price.");
      } else {
        clearError(price);
      }

      // 4. Stock Validation (Regex check for whole numbers only)
      if (stock.value === "" || !integerRegex.test(stock.value)) {
        setError(stock, "Stock must be a valid whole number.");
      } else {
        clearError(stock);
      }

      // 5. Image Validation (Regex check for file extensions)
      if (image.files.length === 0) {
        setError(image, "Please upload a product banner image.");
      } else {
        const fileName = image.files[0].name;
        if (!imageRegex.test(fileName)) {
          setError(image, "Only JPG, JPEG, PNG, or WEBP formats are allowed.");
        } else {
          clearError(image);
        }
      }

      // 6. Detail Validation
      if (detail.value.trim() === "") {
        setError(detail, "Product detail cannot be empty.");
      } else {
        clearError(detail);
      }

      // 7. Sale Price Validation (Optional field, but if filled, check with regex)
      if (salePrice.value.trim() !== "") {
        if (!numberRegex.test(salePrice.value) || Number(salePrice.value) < 0) {
          setError(salePrice, "Please enter a valid sale price.");
        } else if (Number(salePrice.value) >= Number(price.value)) {
          setError(salePrice, "Sale price must be less than the regular price.");
        } else {
          clearError(salePrice);
        }
      } else {
        clearError(salePrice);
      }

      // Stop form submission if any validation fails
      if (!isValid) {
        e.preventDefault();
      }
    });
  </script>

  <?php
  include("./base/footer.php");
  ?>
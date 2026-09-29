<?php
include("./base/header.php");

// PHP Backend Logic for Adding Category
if (isset($_POST['addCategory'])) {
    $categoryName = $_POST['categoryName'];
    $categoryDetail = $_POST['categoryDetail'];

    // Insert Query (Assume kiya hai table mein sirf category_name aur category_detail columns hain)
    $insert_query = "INSERT INTO categories (category_name, category_detail) VALUES ('$categoryName', '$categoryDetail')";
    
    $execute = mysqli_query($conn, $insert_query);

    if ($execute) {
        echo "<script>alert('Category Added Successfully');</script>";
    } else {
        echo "<script>alert('Database Error: Failed to add category');</script>";
    }
}
?>

<div class="container">
  <div class="card border-light shadow-sm p-4 h-100">
    <h5 class="card-title mb-4">ADD New Category</h5>

    <!-- Form without file upload -->
    <form method="POST" id="categoryForm">

      <div class="mb-3">
        <label for="categoryName" class="form-label-custom">Category Name</label>
        <input type="text" class="form-control-custom" id="categoryName" name="categoryName" placeholder="Enter category name">
        <small class="error-msg text-danger"></small>
      </div>

      <div class="mb-3">
        <label for="categoryDetail" class="form-label-custom">Category Detail</label>
        <textarea name="categoryDetail" class="form-control-custom" id="categoryDetail" placeholder="Enter category details"></textarea>
        <small class="error-msg text-danger"></small>
      </div>

      <div>
        <button type="submit" class="btn-quick-action" name="addCategory">ADD Category</button>
      </div>

    </form>
  </div>
</div>

<script>
  document.getElementById('categoryForm').addEventListener('submit', function (e) {
    let isValid = true;

    // Fields
    const catName = document.getElementById('categoryName');
    const catDetail = document.getElementById('categoryDetail');

    // Regex Pattern for Name
    const nameRegex = /^[a-zA-Z0-9\s-_]{3,50}$/; // 3 to 50 characters

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

    // 1. Category Name Validation
    if (catName.value.trim() === "") {
      setError(catName, "Category name cannot be empty.");
    } else if (!nameRegex.test(catName.value.trim())) {
      setError(catName, "Name must be 3-50 characters long and contain valid characters.");
    } else {
      clearError(catName);
    }

    // 2. Category Detail Validation
    if (catDetail.value.trim() === "") {
      setError(catDetail, "Category detail cannot be empty.");
    } else {
      clearError(catDetail);
    }

    // Stop form submission if validation fails
    if (!isValid) {
      e.preventDefault();
    }
  });
</script>

<?php
include("./base/footer.php");
?>
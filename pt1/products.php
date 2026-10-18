<?php
ob_start();
?>

<!-- Header Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
  <div class="card-body">
    <h2 class="mb-1">Products</h2>
    <p class="text-muted mb-0">Manage and track all custom sock inventory items</p>
  </div>
</div>

<!-- Form Card -->
<div class="card shadow-sm mb-4">
  <div class="card-body">
    <div class="row g-0 align-items-center mb-3">
      <div class="col">
        <h5 class="mb-0"><i class="bi bi-pencil-square text-primary me-2"></i>Product Form</h5>
        <small class="text-muted">Fill in the details of a sock product</small>
      </div>
      <div class="col-auto">
        <span class="badge bg-primary">* Required fields</span>
      </div>
    </div>
    <hr>
    <form action="" method="post" class="needs-validation" novalidate>
      <div class="row g-3">
        <div class="col-md-3">
          <label for="pid" class="form-label">Product ID <span class="text-danger">*</span></label>
          <input name="product_num" id="pid" type="text" class="form-control" placeholder="e.g. SK001" required>
        </div>
        <div class="col-md-3">
          <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
          <input name="product_name" id="name" type="text" class="form-control" placeholder="e.g. Nebula Crew Socks" required>
        </div>
        <div class="col-md-3">
          <label for="price" class="form-label">Price (RM) <span class="text-danger">*</span></label>
          <input name="product_price" id="price" type="number" step="0.01" min="0" class="form-control" placeholder="Enter Price" required>
        </div>
        <div class="col-md-3">
          <label for="brand" class="form-label">Brand / Series <span class="text-danger">*</span></label>
          <select name="product_brand" id="brand" class="form-select" required>
            <option value="">Select Series</option>
            <option value="Cosmic Collection">Cosmic Collection</option>
            <option value="Starlight Prints">Starlight Prints</option>
            <option value="Retro Nebula">Retro Nebula</option>
            <option value="Astro Sport">Astro Sport</option>
          </select>
        </div>
        <!-- Customized Sock Fields (Replacing Condition & Manufacturing Year) -->
        <div class="col-md-3">
          <label for="product_type" class="form-label">Sock Type <span class="text-danger">*</span></label>
          <select name="product_type" id="product_type" class="form-select" required>
            <option value="">Select Sock Type</option>
            <option value="Ankle">Ankle Socks</option>
            <option value="Crew">Crew Socks</option>
            <option value="Knee-High">Knee-High Socks</option>
            <option value="No-Show">No-Show Socks</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="sock_size" class="form-label">Sock Size <span class="text-danger">*</span></label>
          <select name="product_size" id="sock_size" class="form-select" required>
            <option value="">Select Size</option>
            <option value="S">Small (S)</option>
            <option value="M">Medium (M)</option>
            <option value="L">Large (L)</option>
            <option value="XL">Extra Large (XL)</option>
            <option value="Free Size">Free Size</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
          <input name="product_quantity" id="quantity" type="number" min="0" class="form-control" placeholder="Enter Stock Quantity" required>
        </div>
        <div class="col-md-3">
          <label for="product_image" class="form-label">Image Filename</label>
          <input name="product_image" id="product_image" type="text" class="form-control" placeholder="e.g. sock1.jpg">
        </div>
      </div>
      <hr class="mt-4 mb-3">
      <div>
        <button type="submit" name="create" class="btn btn-primary">
          <i class="bi bi-save me-1"></i>Create
        </button>
        <button type="reset" class="btn btn-secondary">
          <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Table Card -->
<div class="card shadow-sm">
  <div class="card-body">
    <div class="row align-items-center mb-3">
      <div class="col">
        <h5 class="mb-0"><i class="bi bi-table text-primary me-2"></i>Product List</h5>
        <small class="text-muted">View and manage all socks in the inventory</small>
      </div>
      <div class="col-auto">
        <span class="badge bg-success">Total: 1 items</span>
      </div>
    </div>
    <hr>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Series</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>SK001</td>
            <td>Nebula Purple Crew Socks</td>
            <td>RM 25.00</td>
            <td>Cosmic Collection</td>
            <td>
              <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
              <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
              <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
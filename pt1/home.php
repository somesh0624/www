<?php
ob_start();
?>

<!-- Welcome Banner -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
  <div class="card-body">
    <h2 class="mb-1">Welcome to Galaxy Socks Admin Portal</h2>
    <p class="text-muted mb-0">Manage custom sock inventory, track orders, customer information, and staff profiles.</p>
  </div>
</div>

<!-- Quick Statistics Row -->
<div class="row g-3 mb-4">
  <div class="col-md-3">
    <div class="card shadow-sm border-0 bg-primary text-white">
      <div class="card-body d-flex align-items-center">
        <i class="bi bi-bag-fill fs-1 me-3"></i>
        <div>
          <h6 class="mb-0">Products</h6>
          <h3 class="mb-0">20 Items</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm border-0 bg-success text-white">
      <div class="card-body d-flex align-items-center">
        <i class="bi bi-cart-check-fill fs-1 me-3"></i>
        <div>
          <h6 class="mb-0">Total Orders</h6>
          <h3 class="mb-0">12 Orders</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm border-0 bg-info text-white">
      <div class="card-body d-flex align-items-center">
        <i class="bi bi-people-fill fs-1 me-3"></i>
        <div>
          <h6 class="mb-0">Customers</h6>
          <h3 class="mb-0">8 Registered</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm border-0 bg-warning text-dark">
      <div class="card-body d-flex align-items-center">
        <i class="bi bi-person-badge-fill fs-1 me-3"></i>
        <div>
          <h6 class="mb-0">Active Staff</h6>
          <h3 class="mb-0">4 Staffs</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Quick Navigation Cards -->
<div class="card shadow-sm">
  <div class="card-body">
    <h5 class="card-title mb-3"><i class="bi bi-rocket-takeoff text-primary me-2"></i>Quick Navigation</h5>
    <div class="row g-3">
      <div class="col-md-3">
        <a href="products.php" class="btn btn-outline-primary w-100 py-3 text-start">
          <i class="bi bi-bag-plus fs-4 d-block mb-1"></i>
          <strong>Manage Products</strong><br>
          <small class="text-muted">Add & edit sock catalog</small>
        </a>
      </div>
      <div class="col-md-3">
        <a href="customers.php" class="btn btn-outline-success w-100 py-3 text-start">
          <i class="bi bi-person-plus fs-4 d-block mb-1"></i>
          <strong>Manage Customers</strong><br>
          <small class="text-muted">View client directory</small>
        </a>
      </div>
      <div class="col-md-3">
        <a href="staffs.php" class="btn btn-outline-info w-100 py-3 text-start">
          <i class="bi bi-person-badge fs-4 d-block mb-1"></i>
          <strong>Manage Staffs</strong><br>
          <small class="text-muted">View employee records</small>
        </a>
      </div>
      <div class="col-md-3">
        <a href="orders.php" class="btn btn-outline-warning w-100 py-3 text-start">
          <i class="bi bi-receipt fs-4 d-block mb-1"></i>
          <strong>Manage Orders</strong><br>
          <small class="text-muted">Process client sales</small>
        </a>
      </div>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
<?php
ob_start();
?>

<!-- Header Banner Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
  <div class="card-body">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h2 class="mb-1"><i class="bi bi-stars text-warning me-2"></i>Welcome to Galaxy Socks</h2>
        <p class="text-muted mb-0">Manage custom sock inventory, track customer orders, view staff records, and process invoices.</p>
      </div>
      <div class="col-md-4 text-md-end mt-3 mt-md-0">
        <span class="badge bg-primary fs-6 p-2"><i class="bi bi-shield-check me-1"></i>Admin Control Panel</span>
      </div>
    </div>
  </div>
</div>

<!-- Featured Announcement Carousel -->
<div class="card shadow-sm mb-4">
  <div class="card-body p-0 overflow-hidden rounded">
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active bg-dark text-white p-5 text-center">
          <i class="bi bi-rocket-takeoff text-warning fs-1 mb-2 d-block"></i>
          <h3>Cosmic Collection 2026 Released!</h3>
          <p class="text-white-50">Explore our new nebula-patterned crew and ankle socks in stock now.</p>
          <a href="products.php" class="btn btn-warning btn-sm fw-bold">View Inventory</a>
        </div>
        <div class="carousel-item bg-secondary text-white p-5 text-center">
          <i class="bi bi-bag-check text-info fs-1 mb-2 d-block"></i>
          <h3>Fast Order Processing</h3>
          <p class="text-white-50">Create customer orders and generate printable PDF invoices instantly.</p>
          <a href="orders.php" class="btn btn-info btn-sm text-white fw-bold">Manage Orders</a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

<!-- System Summary Statistics Grid -->
<div class="row g-3 mb-4">
  <div class="col-md-3">
    <div class="card shadow-sm border-0 bg-primary text-white h-100">
      <div class="card-body d-flex align-items-center">
        <i class="bi bi-bag-fill fs-1 me-3"></i>
        <div>
          <h6 class="mb-0 text-white-50">Products</h6>
          <h3 class="mb-0 fw-bold">20 Items</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm border-0 bg-success text-white h-100">
      <div class="card-body d-flex align-items-center">
        <i class="bi bi-people-fill fs-1 me-3"></i>
        <div>
          <h6 class="mb-0 text-white-50">Customers</h6>
          <h3 class="mb-0 fw-bold">2 Clients</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm border-0 bg-info text-white h-100">
      <div class="card-body d-flex align-items-center">
        <i class="bi bi-person-badge-fill fs-1 me-3"></i>
        <div>
          <h6 class="mb-0 text-white-50">Staffs</h6>
          <h3 class="mb-0 fw-bold">2 Members</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm border-0 bg-warning text-dark h-100">
      <div class="card-body d-flex align-items-center">
        <i class="bi bi-cart-check-fill fs-1 me-3"></i>
        <div>
          <h6 class="mb-0 text-dark-50">Orders</h6>
          <h3 class="mb-0 fw-bold">1 Total</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Quick Actions Card -->
<div class="card shadow-sm">
  <div class="card-body">
    <div class="row align-items-center mb-3">
      <div class="col">
        <h5 class="mb-0"><i class="bi bi-compass text-primary me-2"></i>Quick Operations</h5>
        <small class="text-muted">Direct navigation to core system modules</small>
      </div>
    </div>
    <hr>
    <div class="row g-3">
      <div class="col-md-3">
        <a href="products.php" class="btn btn-outline-primary w-100 py-3 text-start">
          <i class="bi bi-bag-plus fs-3 d-block mb-1"></i>
          <strong>Manage Products</strong><br>
          <small class="text-muted">Add & edit sock items</small>
        </a>
      </div>
      <div class="col-md-3">
        <a href="customers.php" class="btn btn-outline-success w-100 py-3 text-start">
          <i class="bi bi-person-plus fs-3 d-block mb-1"></i>
          <strong>Manage Customers</strong><br>
          <small class="text-muted">Register client details</small>
        </a>
      </div>
      <div class="col-md-3">
        <a href="staffs.php" class="btn btn-outline-info w-100 py-3 text-start">
          <i class="bi bi-person-badge fs-3 d-block mb-1"></i>
          <strong>Manage Staffs</strong><br>
          <small class="text-muted">Maintain employee list</small>
        </a>
      </div>
      <div class="col-md-3">
        <a href="orders.php" class="btn btn-outline-warning w-100 py-3 text-start">
          <i class="bi bi-receipt fs-3 d-block mb-1"></i>
          <strong>Manage Orders</strong><br>
          <small class="text-muted">Process client purchases</small>
        </a>
      </div>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
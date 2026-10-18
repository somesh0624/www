<?php
ob_start();
?>

<!-- Printable Header Bar -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4 print-hide">
  <div class="card-body">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="mb-1">Invoice</h2>
        <p class="text-muted mb-0">Order #0001</p>
      </div>
      <div class="col-auto">
        <button type="button" onclick="window.print()" class="btn btn-primary"><i class="bi bi-printer me-1"></i>Print</button>
      </div>
    </div>
  </div>
</div>

<!-- Invoice Content Card -->
<div class="card shadow-sm invoice-card">
  <div class="card-body p-4">
    <div class="row mb-4">
      <div class="col-md-6">
        <h4>Galaxy Socks</h4>
        <p class="text-muted mb-0">Sales Invoice</p>
      </div>
      <div class="col-md-6 text-md-end">
        <strong>Invoice No.: </strong>0001<br>
        <strong>Date: </strong>2026-10-03
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-md-6">
        <strong>Customer</strong><br>
        Alice Johnson<br>
        012-3456789
      </div>
      <div class="col-md-6 text-md-end">
        <strong>Staff</strong><br>
        Jane Smith<br>
        janesmith@example.com
      </div>
    </div>
    <hr>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Product</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th class="text-end">Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Nebula Purple Crew Socks</td>
            <td>RM 25.00</td>
            <td>2</td>
            <td class="text-end">RM 50.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="4" class="text-end">Grand Total</th>
            <th class="text-end">RM 50.00</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <a href="orderdetails.php" class="btn btn-secondary print-hide"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
  </div>
</div>

<!-- Print Stylesheet Rule -->
<style>
@media print {
  #mySidebar, #myBurger, .print-hide {
    display: none !important;
  }
  .card, .invoice-card {
    border: none !important;
    box-shadow: none !important;
  }
  body {
    background-color: #ffffff !important;
  }
}
</style>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
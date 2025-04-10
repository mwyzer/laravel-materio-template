@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
@vite('resources/assets/js/dashboards-analytics.js')
@endsection

@section('content')
<div class="row gy-4">
  <!-- First Card -->
  <div class="col-xl-3 col-md-6"> <!-- Changed to 3 units for 4 cards in a row -->
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="d-flex justify-content-center mb-3">
          <div class="border rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
            <i class="ri-line-chart-line ri-24px"></i>
          </div>
        </div>
        <h6 class="mb-1">Net Income</h6>
        <h4 class="mb-0">$0.00</h4>
      </div>
    </div>
  </div>

  <!-- Second Card -->
  <div class="col-xl-3 col-md-6"> <!-- Changed to 3 units for 4 cards in a row -->
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="d-flex justify-content-center mb-3">
          <div class="border rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
          <i class="ri-discount-percent-line"></i>
          </div>
        </div>
        <h6 class="mb-1">Taxes</h6>
        <h4 class="mb-0">$0.00</h4>
      </div>
    </div>
  </div>

    <!-- Third Card -->
  <div class="col-xl-3 col-md-6"> <!-- Changed to 3 units for 4 cards in a row -->
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="d-flex justify-content-center mb-3">
          <div class="border rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
            <i class="ri-gift-fill"></i>
          </div>
        </div>
        <h6 class="mb-1">Commision</h6>
        <h4 class="mb-0">$0.00</h4>
      </div>
    </div>
  </div>

    <!-- Fourth Card -->
  <div class="col-xl-3 col-md-6"> <!-- Changed to 3 units for 4 cards in a row -->
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="d-flex justify-content-center mb-3">
          <div class="border rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
           <i class="ri-refund-fill"></i>
          </div>
        </div>
        <h6 class="mb-1">Withdrawn Money</h6>
        <h4 class="mb-0">$0.00</h4>
      </div>
    </div>
  </div>

    <!-- Fifth Card -->
  <div class="col-xl-3 col-md-6"> <!-- Changed to 3 units for 4 cards in a row -->
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="d-flex justify-content-center mb-3">
          <div class="border rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
           <i class="ri-shopping-cart-2-line"></i>
          </div>
        </div>
        <h6 class="mb-1">Total Sales</h6>
        <h4 class="mb-0">$0.00</h4>
      </div>
    </div>
  </div>

    <!-- Sixth Card -->
  <div class="col-xl-3 col-md-6"> <!-- Changed to 3 units for 4 cards in a row -->
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="d-flex justify-content-center mb-3">
          <div class="border rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
           <i class="ri-grid-line"></i>
          </div>
        </div>
        <h6 class="mb-1">Total Gigs</h6>
        <h4 class="mb-0">$0.00</h4>
      </div>
    </div>
  </div>

    <!-- Seventh Card -->
  <div class="col-xl-3 col-md-6"> <!-- Changed to 3 units for 4 cards in a row -->
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="d-flex justify-content-center mb-3">
          <div class="border rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
           <i class="ri-group-line"></i>
          </div>
        </div>
        <h6 class="mb-1">Total Users</h6>
        <h4 class="mb-0">$0.00</h4>
      </div>
    </div>
  </div>

    <!-- Eight Card -->
  <div class="col-xl-3 col-md-6"> <!-- Changed to 3 units for 4 cards in a row -->
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="d-flex justify-content-center mb-3">
          <div class="border rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
            <i class="ri-mail-line"></i>
          </div>
        </div>
        <h6 class="mb-1">Total Messages</h6>
        <h4 class="mb-0">$0.00</h4>
      </div>
    </div>
  </div>

  <!-- Add two more similar card blocks for 4 cards -->
</div>
@endsection
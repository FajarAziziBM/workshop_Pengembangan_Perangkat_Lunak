@extends('layouts.user_type.auth')

@section('content')

<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Surat</p>
              <h5 class="font-weight-bolder mb-0">
                500
                <!-- <span class="text-danger text-sm font-weight-bolder">-2%</span> -->
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-secondary shadow text-center border-radius-md">
              <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah User</p>
              <h5 class="font-weight-bolder mb-0">
                2.500
                <!-- <span class="text-success text-sm font-weight-bolder">+3%</span> -->
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-secondary shadow text-center border-radius-md">
              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div>
  <div class="container-fluid">
    <div class="progress-wrapper ">
      <div class="progress-info">
        <div class="progress-percentage">
          <span class="text-sm font-weight-normal">60%</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
      </div>
    </div>

    <div class="progress-wrapper">
      <div class="progress-info">
        <div class="progress-percentage">
          <span class="text-sm font-weight-normal">60%</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar bg-gradient-secondary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
      </div>
    </div>

    <div class="progress-wrapper">
      <div class="progress-info">
        <div class="progress-percentage">
          <span class="text-sm font-weight-normal">60%</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
      </div>
    </div>

    <div class="progress-wrapper">
      <div class="progress-info">
        <div class="progress-percentage">
          <span class="text-sm font-weight-normal">60%</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
      </div>
    </div>

    <div class="progress-wrapper">
      <div class="progress-info">
        <div class="progress-percentage">
          <span class="text-sm font-weight-normal">60%</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
      </div>
    </div>

    <div class="progress-wrapper">
      <div class="progress-info">
        <div class="progress-percentage">
          <span class="text-sm font-weight-normal">60%</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
      </div>
    </div>
  </div>
</div>


<div class="row my-4">
  <div class="col-lg-4 col-md-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h6>Orders overview</h6>
        <p class="text-sm">
          <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
          <span class="font-weight-bold">24%</span> this month
        </p>
      </div>
      <div class="card-body p-3">
        <div class="timeline timeline-one-side">
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-bell-55 text-success text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-html5 text-danger text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-cart text-info text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-credit-card text-warning text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-key-25 text-primary text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
            </div>
          </div>
          <div class="timeline-block">
            <span class="timeline-step">
              <i class="ni ni-money-coins text-dark text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
        <div class="col-xl-6 mb-xl-0 mb-4">
          <div class="card bg-transparent shadow-xl">
            <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 p-3">
                <i class="fas fa-wifi text-white p-2"></i>
                <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                <div class="d-flex">
                  <div class="d-flex">
                    <div class="me-4">
                      <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                      <h6 class="text-white mb-0">Jack Peterson</h6>
                    </div>
                    <div>
                      <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                      <h6 class="text-white mb-0">11/22</h6>
                    </div>
                  </div>
                  <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                    <img class="w-60 mt-2" src="../assets/img/logos/mastercard.png" alt="logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fas fa-landmark opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">Salary</h6>
                  <span class="text-xs">Belong Interactive</span>
                  <hr class="horizontal dark my-3">
                  <h5 class="mb-0">+$2000</h5>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fab fa-paypal opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">Paypal</h6>
                  <span class="text-xs">Freelance Payment</span>
                  <hr class="horizontal dark my-3">
                  <h5 class="mb-0">$455.00</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-lg-0 mb-4">
          <div class="card mt-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Payment Method</h6>
                </div>
                <div class="col-6 text-end">
                  <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">
                  <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                    <img class="w-10 me-3 mb-0" src="../assets/img/logos/mastercard.png" alt="logo">
                    <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                    <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                    <img class="w-10 me-3 mb-0" src="../assets/img/logos/visa.png" alt="logo">
                    <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                    <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card h-100">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">Invoices</h6>
            </div>
            <div class="col-6 text-end">
              <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
            </div>
          </div>
        </div>
        <div class="card-body p-3 pb-0">
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                <span class="text-xs">#MS-415646</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $180
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                <span class="text-xs">#RV-126749</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $250
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                <span class="text-xs">#FB-212562</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $560
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                <span class="text-xs">#QW-103578</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $120
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                <span class="text-xs">#AR-803481</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $300
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 mt-4">
      <div class="card">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Billing Information</h6>
        </div>
        <div class="card-body pt-4 p-3">
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">Oliver Liam</h6>
                <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Viking Burrito</span></span>
                <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
              </div>
              <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">Lucas Harper</h6>
                <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Stone Tech Zone</span></span>
                <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">lucas@stone-tech.com</span></span>
                <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
              </div>
              <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">Ethan James</h6>
                <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Fiber Notion</span></span>
                <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">ethan@fiber.com</span></span>
                <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
              </div>
              <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-5 mt-4">
      <div class="card h-100 mb-4">
        <div class="card-header pb-0 px-3">
          <div class="row">
            <div class="col-md-6">
              <h6 class="mb-0">Your Transaction's</h6>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
              <i class="far fa-calendar-alt me-2"></i>
              <small>23 - 30 March 2020</small>
            </div>
          </div>
        </div>
        <div class="card-body pt-4 p-3">
          <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Netflix</h6>
                  <span class="text-xs">27 March 2020, at 12:30 PM</span>
                </div>
              </div>
              <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                - $ 2,500
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Apple</h6>
                  <span class="text-xs">27 March 2020, at 04:30 AM</span>
                </div>
              </div>
              <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                + $ 2,000
              </div>
            </li>
          </ul>
          <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Yesterday</h6>
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Stripe</h6>
                  <span class="text-xs">26 March 2020, at 13:45 PM</span>
                </div>
              </div>
              <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                + $ 750
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">HubSpot</h6>
                  <span class="text-xs">26 March 2020, at 12:30 PM</span>
                </div>
              </div>
              <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                + $ 1,000
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Creative Tim</h6>
                  <span class="text-xs">26 March 2020, at 08:30 AM</span>
                </div>
              </div>
              <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                + $ 2,500
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-exclamation"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Webflow</h6>
                  <span class="text-xs">26 March 2020, at 05:00 AM</span>
                </div>
              </div>
              <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                Pending
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
@push('dashboard')
<script>
  window.onload = function() {
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  }
</script>
@endpush
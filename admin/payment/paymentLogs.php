<?php
$title = "Payment Logs";
$pg = "payment";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- User Management Starts -->
         <h1 class="section-heading font-commons my-2 mb-4">User Management</h1>
        <div class="box">
          <!-- Search Filter Starts -->
          <div class="row align-items-end">
            <div class="col-xxl-9">
              <div class="d-xl-flex align-items-center mb-3">
                <div class="filter-box">
                  <label for="enries" class="d-block">Show Enries</label>
                  <select name="" id="enries" class="select-filter">
                    <option value="">05</option>
                    <option value="">01</option>
                    <option value="">02</option>
                    <option value="">03</option>
                  </select>
                </div>
                <div>
                  <label class="d-block" for="date">Date</label>
                  <div class="d-md-flex align-items-center text-center">
                    <div class="filter-box me-md-2">
                      <input type="date" class="filters" id="date">
                    </div>
                    <span class="d-inline-block me-md-2 prime-label">
                      -
                    </span>
                    <div class="filter-box">
                      <input type="date" class="filters" id="date2">
                    </div>
                  </div>
                </div>
                <div class="filter-box">
                  <label class="d-block" for="status">Subscription Package</label>
                  <select name="" id="status" class="filters">
                    <option value="">Select</option>
                    <option value="active">Active</option>
                    <option value="InActive">InActive</option>
                  </select>
                </div>
                <div class="filter-box">
                  <label class="d-block" for="status">Status</label>
                  <select name="" id="status" class="filters">
                    <option value="">Select</option>
                    <option value="active">Active</option>
                    <option value="InActive">InActive</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-md-6">
              <div class="search-wrap  mb-3">
                <input type="search" class="form-control search-inp" placeholder="Search">
                <i class="fas fa-search searchIcon"></i>
              </div>
            </div>
          </div>
          <!-- Search Filter Ends -->
          <div class="dataTables_wrapper">
            <div class="row row-table">
              <div class="main-tabble table-responsive">
                <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                  <div class="row">
                    <div class="col-12">
                      <table class="table table-borderless dataTable">
                        <thead>
                          <tr>
                            <th>S.No.</th>
                            <th>User First Name</th>
                            <th>User Last Name</th>
                            <th>Meal Plan</th>
                            <th>Date</th>
                            <th>Cost</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>john</td>
                            <td>Doe</td>
                            <td>Plan1</td>
                            <td>mm/dd/yyyy</td>
                            <td>$20</td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>john</td>
                            <td>Doe</td>
                            <td>Plan1</td>
                            <td>mm/dd/yyyy</td>
                            <td>$20</td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>john</td>
                            <td>Doe</td>
                            <td>Plan1</td>
                            <td>mm/dd/yyyy</td>
                            <td>$20</td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>john</td>
                            <td>Doe</td>
                            <td>Plan1</td>
                            <td>mm/dd/yyyy</td>
                            <td>$20</td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>john</td>
                            <td>Doe</td>
                            <td>Plan1</td>
                            <td>mm/dd/yyyy</td>
                            <td>$20</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pagination start -->
        <div class="row align-items-center  my-5 p-5 table-responsive">
          <div class="col-lg-5 col-sm-12 col-md-12">
            <h6 class="pagination-details"> Showing 05 out of 40 records </h6>
          </div>
          <div class="col-lg-7 col-sm-12 col-md-12">
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
              <ul class="pagination">
                <div class="pagination_wrapper d-flex align-items-center justify-content-center">
                  <li class="paginate_button page-item previous disabled"> <a href="#" class="page-link pure-black">Previous</a> </li>
                  <li class="paginate_button page-item active"> <a href="#" class="page-link">01</a> </li>
                  <li class="paginate_button page-item"> <a href="#" class="page-link">02</a> </li>
                  <li class="paginate_button page-item"> <a href="#" class="page-link">30</a> </li>
                  <li class="paginate_button page-item next disabled " i=""> <a href="#" class="page-link pure-black">Next</a> </li>
                </div>
              </ul>
            </div>
          </div>
        </div>
        <!-- Pagination End -->
        <!-- User Management Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>
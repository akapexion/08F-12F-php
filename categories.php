<?php
    include("./base/header.php");
?>


 <!-- START: Dashboard Header Banner -->
    <div class="page-header">
      <div>
        <h1 class="page-title">Categories</h1>
        <p class="page-subtitle">We offer multiple categories...</p>
      </div>
      <button class="btn-date-picker" type="button" id="date-picker-trigger">
        <i class="bi bi-calendar4-event"></i>
        <span id="selected-date-range">January 12, 2026 - January 23, 2026</span>
        <i class="bi bi-chevron-down ms-1"></i>
      </button>
    </div>
    <!-- END: Dashboard Header Banner -->

     <!-- START: Basic Table Card Container -->
    <div class="table-card-custom">
      <!-- Header Controls -->
      <div class="table-header-control">
        <!-- Search bar -->
        <div class="table-search-box">
          <i class="bi bi-search table-search-icon"></i>
          <input type="text" class="table-search-input" placeholder="Search orders or products...">
        </div>
        <!-- Action buttons / Filter options -->
        <div class="table-filter-group">
          <div class="dropdown">
            <button class="btn-table-action dropdown-toggle" type="button" id="dropdownFilterStatus"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-funnel"></i> Status Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownFilterStatus">
              <li><a class="dropdown-item" href="#">All Statuses</a></li>
              <li><a class="dropdown-item" href="#">Paid / Success</a></li>
              <li><a class="dropdown-item" href="#">Processing</a></li>
              <li><a class="dropdown-item" href="#">Cancelled / Failed</a></li>
            </ul>
          </div>
          <button class="btn-table-action" type="button">
            <i class="bi bi-file-earmark-arrow-down"></i> Export
          </button>
        </div>
      </div>

      <!-- Responsive Table Wrapper -->
      <div class="table-responsive">
        <table class="table-custom">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Customer</th>
              <th>Product Info</th>
              <th>Category</th>
              <th>Amount</th>
              <th>Order Date</th>
              <th>Status</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <td class="table-order-id">#ORD-9982</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_1.jpg" alt="Eleanor Pena" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Eleanor Pena</div>
                    <div class="table-user-sub">eleanor.pena@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Oversized Hoodie</td>
              <td>Apparel</td>
              <td class="table-amount">$89.90</td>
              <td>Feb 14, 2026</td>
              <td><span class="badge-table success">Paid</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            <!-- Row 2 -->
            <tr>
              <td class="table-order-id">#ORD-9981</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_2.jpg" alt="Wade Warren" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Wade Warren</div>
                    <div class="table-user-sub">wade.warren@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Gaming Console</td>
              <td>Electronics</td>
              <td class="table-amount">$499.00</td>
              <td>Feb 13, 2026</td>
              <td><span class="badge-table pending">Processing</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            <!-- Row 3 -->
            <tr>
              <td class="table-order-id">#ORD-9980</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_3.jpg" alt="Jane Cooper" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Jane Cooper</div>
                    <div class="table-user-sub">jane.cooper@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Premium T-Shirt</td>
              <td>Apparel</td>
              <td class="table-amount">$35.00</td>
              <td>Feb 12, 2026</td>
              <td><span class="badge-table success">Paid</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            <!-- Row 4 -->
            <tr>
              <td class="table-order-id">#ORD-9979</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_4.jpg" alt="Robert Fox" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Robert Fox</div>
                    <div class="table-user-sub">robert.fox@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Wireless Headset</td>
              <td>Accessories</td>
              <td class="table-amount">$129.99</td>
              <td>Feb 11, 2026</td>
              <td><span class="badge-table failed">Failed</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            <!-- Row 5 -->
            <tr>
              <td class="table-order-id">#ORD-9978</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_5.jpg" alt="Albert Flores" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Albert Flores</div>
                    <div class="table-user-sub">albert.flores@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Leather Wallet</td>
              <td>Accessories</td>
              <td class="table-amount">$45.00</td>
              <td>Feb 10, 2026</td>
              <td><span class="badge-table success">Paid</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            <!-- Row 6 -->
            <tr>
              <td class="table-order-id">#ORD-9977</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_6.jpg" alt="Kristin Watson" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Kristin Watson</div>
                    <div class="table-user-sub">kristin.watson@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Ergonomic Chair</td>
              <td>Furniture</td>
              <td class="table-amount">$249.00</td>
              <td>Feb 09, 2026</td>
              <td><span class="badge-table pending">Processing</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            <!-- Row 7 -->
            <tr>
              <td class="table-order-id">#ORD-9976</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_7.jpg" alt="Cody Fisher" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Cody Fisher</div>
                    <div class="table-user-sub">cody.fisher@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Mechanical Keyboard</td>
              <td>Accessories</td>
              <td class="table-amount">$119.00</td>
              <td>Feb 08, 2026</td>
              <td><span class="badge-table success">Paid</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            <!-- Row 8 -->
            <tr>
              <td class="table-order-id">#ORD-9975</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_8.jpg" alt="Bessie Cooper" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Bessie Cooper</div>
                    <div class="table-user-sub">bessie.cooper@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Fitness Tracker</td>
              <td>Electronics</td>
              <td class="table-amount">$79.99</td>
              <td>Feb 07, 2026</td>
              <td><span class="badge-table failed">Cancelled</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            <!-- Row 9 -->
            <tr>
              <td class="table-order-id">#ORD-9974</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_1.jpg" alt="Dianne Russell" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Dianne Russell</div>
                    <div class="table-user-sub">dianne.russell@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Coffee Mug Set</td>
              <td>Home</td>
              <td class="table-amount">$24.50</td>
              <td>Feb 06, 2026</td>
              <td><span class="badge-table success">Paid</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            <!-- Row 10 -->
            <tr>
              <td class="table-order-id">#ORD-9973</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_2.jpg" alt="Devon Lane" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Devon Lane</div>
                    <div class="table-user-sub">devon.lane@example.com</div>
                  </div>
                </div>
              </td>
              <td class="table-product-name">Desk Organizer</td>
              <td>Office</td>
              <td class="table-amount">$39.99</td>
              <td>Feb 05, 2026</td>
              <td><span class="badge-table success">Paid</span></td>
              <td>
                <div class="d-flex justify-content-center gap-1">
                  <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                  <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="table-btn-action delete" title="Delete row"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Footer Controls / Pagination -->
      <div class="table-footer-control">
        <span class="table-pagination-info">Showing 1 to 10 of 50 entries</span>
        <nav aria-label="Page navigation">
          <ul class="pagination mb-0 gap-1">
            <li class="page-item disabled"><a class="page-link border-0" href="#"><i class="bi bi-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link border-0" href="#">1</a></li>
            <li class="page-item"><a class="page-link border-0" href="#">2</a></li>
            <li class="page-item"><a class="page-link border-0" href="#">3</a></li>
            <li class="page-item"><a class="page-link border-0" href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- END: Basic Table Card Container -->





<?php
    include("./base/footer.php");
?>
<?php
include("./base/header.php");
?>


<!-- START: Dashboard Header Banner -->
<div class="page-header">
    <div>
        <h1 class="page-title">Products</h1>
        <p class="page-subtitle">Featured Items...</p>
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
                <i class="bi bi-file-earmark-arrow-down"></i> <a href="add_product.php">ADD</a> 
            </button>
        </div>
    </div>

    <!-- Responsive Table Wrapper -->
    <div class="table-responsive">
        <table class="table-custom">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Stock</th>
                    <th>Product Detail</th>
                    <th>Product Sale Price</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $select_query = "SELECT * FROM products";
                    $execute = mysqli_query($conn, $select_query);
                    while($display = mysqli_fetch_array($execute)){
                ?>
                <tr>
                    <td class="table-order-id"> <?php echo $display['product_id']?>  </td>
                    <td>
                        <?php echo $display['product_category']?>
                    </td>
                    <td class="table-product-name"><?php echo $display['product_name']?></td>
                    <td><?php echo $display['product_price']?></td>
                    <td class="table-amount"><?php echo $display['product_stock']?></td>
                    <td><?php echo $display['product_detail']?></td>
                    <td>
                        <?php echo $display['product_sale_price']?>
                    </td>
                    <td><span class="badge-table success">

                        <?php echo $display['product_status']?>
                    </span></td>
                    <td>
                        <div class="d-flex justify-content-center gap-1">
                            <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                            <a href="update_product.php?id=<?php echo $display['product_id']?>" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="table-btn-action delete" title="Delete row"><i
                                    class="bi bi-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>

    <!-- Footer Controls / Pagination -->
    <div class="table-footer-control">
        <span class="table-pagination-info">Showing 1 to 10 of 50 entries</span>
        <nav aria-label="Page navigation">
            <ul class="pagination mb-0 gap-1">
                <li class="page-item disabled"><a class="page-link border-0" href="#"><i
                            class="bi bi-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link border-0" href="#">1</a></li>
                <li class="page-item"><a class="page-link border-0" href="#">2</a></li>
                <li class="page-item"><a class="page-link border-0" href="#">3</a></li>
                <li class="page-item"><a class="page-link border-0" href="#"><i class="bi bi-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END: Basic Table Card Container -->





<?php
include("./base/footer.php");
?>
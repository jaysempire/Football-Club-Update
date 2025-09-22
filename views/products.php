<main id="main" class="main">
    <div class="pagetitle">
        <h1>Products</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active"><a href="products.html">Products</a></li>
            </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title mb-0">Product Inventory</h5>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#productModal" style="background-color: #003366; color: #ffffff; font-family: 'Poppins', sans-serif;">
                        <i class="bi bi-plus-circle me-2" ></i>Add Product
                    </button>
                </div>

                <?= $web_app->showAlert( $msg, true) ?>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 100px;">Preview</th>
                                <th>Product Name</th>
                                <th>Price (₦)</th>
                                <th>Quantity</th>
                                <th>Sold</th>
                                <th>Revenue (₦)</th>
                                <th>Status</th>
                                <th style="width: 200px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $output = '';
                                
                                foreach ($product_arr as $product) {

                                    $output .= $web_app->productTableItems($product, $upload_url);                                    
                                }

                                echo $output;
                            ?>
                            
                        </tbody>
                        <tfoot class="table-light table-group-divider">
                            <td style="width: 100px;">Preview</td>
                                <td>Product Name</td>
                                <td>Price (₦)</td>
                                <td>Quantity</td>
                                <td>Sold</td>
                                <td>Revenue (₦)</td>
                                <td>Status</td>
                                <td style="width: 200px;">Actions</td>
                        </tfoot>
                    </table>
                </div>

                <nav class="mt-4">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" >
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="product_name" placeholder="E.g., Nike Sneakers, Club Jersey" required>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="productPrice" class="form-label">Price (₦)</label>
                            <input type="number" class="form-control" name="product_price" placeholder="E.g., 1,000 or 20,000" required>
                        </div>
                
                        <div class="col-6 mb-3">
                            <label for="productQuantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="product_quantity" placeholder="E.g., 10 or 25" required>
                        </div>
                    </div>
                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-success" name="btn_submit"><i class="bi bi-save"></i> Save Product</button>
                  </div>
                  </form>              
                </div>
            </div>
        </div>
    </div>
</main><!-- End #main -->

  
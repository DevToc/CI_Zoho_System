<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="invoice-title row justify-content-between flex-center mb-4">

          <div class="w-auto">
            <!-- <a href="<?= base_url('addproduct'); ?>" class="btn btn-primary">Brand List</a> -->
            <h4 class=""> List of product</h4>
          </div>
          <div class="add w-auto">
          <a href="#" class="btn btn-warning"> <i class="fa fa-upload" aria-hidden="true"></i> upload product</a>
            <a href="<?= base_url('product-add'); ?>" class="btn btn-primary">+ Add product</a>
          </div>
        </div>
        <div class="filter mb-4">
            <div class="d-flex w-auto align-items-center mb-2">
              <label for="" class="col-3">Category:</label>
              <div class="col-4">
              <select class="form-select col-5" aria-label="Default select example">
                <option selected>category1</option>
                <option value="1">category1</option>
                <option value="2">category1</option>
                </select>
              </div>
              
            </div>
            <div class="d-flex w-auto align-items-center">
              <label for="" class="col-3">Brand:</label>
             <div class="col-4">
             <select class="form-select" aria-label="Default select example">
                <option selected>brand1</option>
                <option value="1">brand1</option>
                <option value="2">brand1</option>
                </select>   
             </div>
            </div>
        </div>
        <div class="search-wrapper row justify-content-between flex-center">
          <div class="entry w-auto d-flex align-items-center">
            <span>Show </span> <select class="form-select w-auto" aria-label="Default select example">
                <option selected>10</option>
                <option value="1">20</option>
                <option value="2">30</option>
                </select> <span> entries </span>
          </div>
          <div class="search w-auto d-flex align-items-center">
            <label for="" class="mb-0">search:</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <hr class="mt-2">
        <table class="table table-striped table-bordered">
          <thead>
            <tr style="border-bottom:2px solid black;">
              <th scope="col">
                <div class="d-flex">
                  <p class="m-0">Bar Code</p>
                  <p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
                </div>
              </th>
              <th scope="col">
                <div class="d-flex">
                  <p class="m-0">Code</p>
                  <p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
                </div>
              </th>
              <th scope="col">
                <div class="d-flex">
                  <p class="m-0">Name</p>
                  <p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
                </div>
              </th>
              <th>Image</th>
              <th scope="col">
                <div class="d-flex">
                  <p class="m-0">price</p>
                  <p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
                </div>
              </th>
              <th scope="col" class="bg-primary">
                <div class="d-flex">
                  <p class="m-0"> <i class="fa fa-hand-paper text-white" aria-hidden="true"></i> </p>
                  <p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
                </div>
              </th>
              <th scope="col" class="bg-success">
                <div class="d-flex">
                  <p class="m-0"> <i class="fa fa-ship text-white" aria-hidden="true"></i> </p>
                  <p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
                </div>
              </th>
              <th scope="col" class="bg-danger">
                <div class="d-flex">
                  <p class="m-0"> <i class="fa fa-file-invoice-dollar text-white" aria-hidden="true"></i> </p>
                  <p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
                </div>
              </th>
              <th scope="col" class="bg-warning">
                <div class="d-flex">
                  <p class="m-0"> <i class="fa fa-hand-paper text-dark" aria-hidden="true"></i> - <i class="fa fa-file-invoice-dollar text-dark" aria-hidden="true"></i>  </p>
                  <p class="m-0"><i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
                </div>
              </th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Logo</td>
              <td>Logo</td>
              <td>Logo</td>
              <td> <h6> <i class="fa fa-address-book" aria-hidden="true"></i></h6></td>
              <td> 0.00</td>
              <td> 1.00</td>
              <td> 0.00</td>
              <td> 0.00</td>
              <td> 0.00</td>
              <td>
                <a class="btn btn-warning btn-sm edit" title="Edit" href="http://localhost/product-brand/1">
                  <i class="fas fa-pencil-alt"></i>
                </a>
                <a class="btn btn-danger btn-sm" title="Delete" href="http://localhost/delete/brands/1">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Logo</td>
              <td>Logo</td>
              <td>Logo</td>
              <td> <h6> <i class="fa fa-address-book" aria-hidden="true"></i></h6></td>
              <td> 0.00</td>
              <td> 1.00</td>
              <td> 0.00</td>
              <td> 0.00</td>
              <td> 0.00</td>
              <td>
                <a class="btn btn-warning btn-sm edit" title="Edit" href="http://localhost/product-brand/1">
                  <i class="fas fa-pencil-alt"></i>
                </a>
                <a class="btn btn-danger btn-sm" title="Delete" href="http://localhost/delete/brands/1">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Logo</td>
              <td>Logo</td>
              <td>Logo</td>
              <td> <h6> <i class="fa fa-address-book" aria-hidden="true"></i></h6></td>
              <td> 0.00</td>
              <td> 1.00</td>
              <td> 0.00</td>
              <td> 0.00</td>
              <td> 0.00</td>
              <td>
                <a class="btn btn-warning btn-sm edit" title="Edit" href="http://localhost/product-brand/1">
                  <i class="fas fa-pencil-alt"></i>
                </a>
                <a class="btn btn-danger btn-sm" title="Delete" href="http://localhost/delete/brands/1">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Logo</td>
              <td>Logo</td>
              <td>Logo</td>
              <td> <h6> <i class="fa fa-address-book" aria-hidden="true"></i></h6></td>
              <td> 0.00</td>
              <td> 1.00</td>
              <td> 0.00</td>
              <td> 0.00</td>
              <td> 0.00</td>
              <td>
                <a class="btn btn-warning btn-sm edit" title="Edit" href="http://localhost/product-brand/1">
                  <i class="fas fa-pencil-alt"></i>
                </a>
                <a class="btn btn-danger btn-sm" title="Delete" href="http://localhost/delete/brands/1">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
           
          </tbody>
        </table>
        <div class="pagination-wrapper row justify-content-between flex-center">
          <div class="description w-auto">
            <span>Showing 1 to 10 of 29 entries</span>
          </div>
          <div class="pagination w-auto">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <span class="page-link">Previous</span>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item " aria-current="page">
                  <span class="page-link">2</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- <form class="row" method="post" action="<?= base_url('addBrand'); ?>">
                    <input type="hidden" name="id" value="<?= isset($result['id']) ? $result['id'] : '' ?>" />
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Brand Name <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="mdi mdi-shield-refresh-outline"></i></span>
                                <input type="text" class="form-control" name="brand" value="<?php echo old('brand') ? old('brand') : (isset($result['brand_name']) ? $result['brand_name'] : '') ?>" required>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-md-6">
                        <label class="form-label">&nbsp;</label>
                        <br />
                        <button type="submit" class="btn btn-primary w-md waves-effect waves-light">Submit</button>
                    </div>
                </form> -->
      </div>
    </div>
  </div>
</div>
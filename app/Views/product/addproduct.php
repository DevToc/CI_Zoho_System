<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="invoice-title">
                    <h4 class="float-end font-size-16">  <a href="<?= base_url('add-product'); ?>" class="btn btn-primary"> <i class="fa fa-save" aria-hidden="true"></i> Save</a></h4>
                    <div class="mb-4">
                        <a href="<?= base_url('product'); ?>" class="btn btn-outline-primary"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div>
                </div>
                <hr>
                <form method="post" action="<?= base_url('addProduct'); ?>" enctype='multipart/form-data' class="row">
                    
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Code <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-shield-refresh-outline"></i></span>
                            <input type="text" class="form-control" name="code"  required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Barcode <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-shield-refresh-outline"></i></span>
                            <input type="text" name="barcode"  class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-face-profile"></i></span>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Price <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-credit-card-minus"></i></span>
                            <input type="number" class="form-control" name="price" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Cost <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-credit-card-minus"></i></span>
                            <input type="number" class="form-control" name="cost"  required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Weight(kg) </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-weight-kilogram"></i></span>
                            <input type="number" class="form-control" name="weight" >
                        </div>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label">Length(cm) </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-tape-measure"></i></span>
                            <input type="number" class="form-control" name="length" >
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Width(cm) </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-tape-measure"></i></span>
                            <input type="number" class="form-control" name="width" >
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Height(cm) </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-tape-measure"></i></span>
                            <input type="number" class="form-control" name="height" >
                        </div>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label">Brand</label>
                        <select class="form-control select2" name="brand_id">
                            <option>Select Brand</option>
                         
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Category</label>
                        <select class="form-control select2" name="category_id">
                            <option>Select Category</option>
                         
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Tax </label>
                        <div class="input-group col-6">
                            <span class="input-group-text"><i class="mdi mdi-credit-card-minus"></i></span>
                            <input type="text" class="form-control" name="tax" >
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Description </label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>


                    <div class="mb-3 col-md-6">
                        <div class="row">
                            <label class="form-label">Type </label>
                            <div class="form-check col-4">
                                <input class="form-check-input" type="checkbox" name="buy" value="1"  id="buy">
                                <label class="form-check-label" for="buy">
                                    Buy
                                </label>
                            </div>
                            <div class="form-check col-4">
                                <input class="form-check-input" type="checkbox" name="sale" id="sale">
                                <label class="form-check-label" for="sale">
                                    Sale
                                </label>
                            </div>
                            <div class="form-check col-4">
                                <input class="form-check-input" type="checkbox" id="stock" name="stock_control" value="1">
                                <label class="form-check-label" for="stock">
                                    Stock Control
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Attachment </label>
                        <div class="input-group">
                            <input type="file" accept="image/x-png,image/gif,image/jpeg" name="image" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
              
                    </div>
                    <!-- <div class="mb-3 col-md-6">
                        <br />
                        <button type="submit" class="mt-2 btn btn-primary w-md waves-effect waves-light">Submit</button>
                    </div> -->

                </form>
            </div>
        </div>
    </div>
</div> 
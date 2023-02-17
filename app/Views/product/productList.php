<div class="row">
    <div class="col-12">
        <?php if (isset($info['status'])) { ?>
            <div class="alert alert-<?= $info['status']; ?> alert-dismissible fade show" role="alert">
                <?= $info['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        <?php } ?>
        <div class="card">
            <div class="card-body">
                <div class="invoice-title">
                    <h4 class="float-end font-size-16">Product List</h4>
                    <div class="mb-4">
                        <a href="<?= base_url('product'); ?>" class="btn btn-primary">Add Product</a>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Barcode</th>
                                <th>Price</th>
                                <th>Cost</th>
                                <th>Height</th>
                                <th>Width</th>
                                <th>Length</th>
                                <th>Weight</th>
                                <th>Tax</th>
                                <th>Sale</th>
                                <th>Buy</th>
                                <th>Stock Control</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($result as $row) { ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><img class="w-100" src="<?= base_url('assets/uploads/' . $row['image']); ?>" /></td>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['code']; ?></td>
                                    <td><?= $row['barcode']; ?></td>
                                    <td><?= $row['price']; ?></td>
                                    <td><?= $row['cost']; ?></td>
                                    <td><?= $row['height']; ?></td>
                                    <td><?= $row['width']; ?></td>
                                    <td><?= $row['length']; ?></td>
                                    <td><?= $row['weight']; ?></td>
                                    <td><?= $row['tax']; ?></td>
                                    <td><?= $row['sale']; ?></td>
                                    <td><?= $row['buy']; ?></td>
                                    <td><?= $row['stock_control']; ?></td>
                                    <td><?= $row['brand_id']; ?></td>
                                    <td><?= $row['category_id']; ?></td>
                                    <td><?= $row['description']; ?></td>
                                    <td>
                                        <a class=" btn btn-outline-secondary btn-sm edit" title="Edit" href="<?= base_url('product/' . $row['id']); ?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" title="Delete" href="<?= base_url('delete/products/' . $row['id']); ?>">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                                $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
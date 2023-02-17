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
                    <h4 class="float-end font-size-16">Category List</h4>
                    <div class="mb-4">
                        <a href="<?= base_url('product-category'); ?>" class="btn btn-primary">Add Category</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($result as $row) { ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $row['category_name']; ?></td>
                                    <td>
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit" href="<?= base_url('product-category/' . $row['id']); ?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" title="Delete" href="<?= base_url('delete/categories/' . $row['id']); ?>">
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
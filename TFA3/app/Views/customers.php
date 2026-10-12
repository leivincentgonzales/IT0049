<h2 class="mb-3">Customer Accounts</h2>

<div class="d-flex justify-content-end mb-3">
    <a href="<?= site_url('customers/new') ?>" class="btn btn-success">
        Add Customer
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($customers as $customer) { ?>
                <tr>
                    <td><?= esc($customer['id']) ?></td>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                    <td><?= esc($customer['created_at']) ?></td>
                    <td>
                        <a
                            href="<?= site_url('customers/edit/' . $customer['id']) ?>"
                            class="btn btn-warning btn-sm"
                        >
                            Edit
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?= view('partials/header') ?>

<h1>Customer Accounts</h1>

<p>Below is the list of customer records.</p>

<table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= view('partials/footer') ?>
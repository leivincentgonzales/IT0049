<h1>Customer Accounts</h1>
<table border="1" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($customers as $customer) { ?>
    <tr>
        <td><?php echo $customer['name']; ?></td>
        <td><?php echo $customer['email']; ?></td>
        <td><?php echo $customer['phone']; ?></td>

    </tr>
    <?php } ?>
</table>
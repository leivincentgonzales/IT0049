<h1>User Accounts</h1>
<table border="1" cellpadding="5">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Role</th>
    </tr>
    <?php foreach ($users as $user) { ?>
    <tr>
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['fullname']; ?></td>
        <td><?php echo $user['role']; ?></td>
    </tr>
    <?php } ?>
</table>
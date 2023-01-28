    <div class="container">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Last Update</th>
                <th>Last Update</th>
            </tr>
            <?php foreach ($clients as $client) { ?>
            <tr>
                <td><?=$client['customer_id'] ?></td>
                <td><?=$client['first_name'] ?></td>
                <td><?=$client['last_name'] ?></td>
                <td><?=$client['last_update'] ?></td>
                <td><a href="<?=base_url('client/liste_payement?customer_id='.$client['customer_id']) ?>"><button class="btn btn-dark">View Payement</button></a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
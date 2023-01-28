<div class="container">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Last Update</th>
            </tr>
            <?php foreach ($payements as $payement) { ?>
            <tr>
                <td><?=$payement['payment_id'] ?></td>
                <td><?=$payement['amount'] ?></td>
                <td><?=$payement['payment_date'] ?></td>
                <td><?=$payement['last_update'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
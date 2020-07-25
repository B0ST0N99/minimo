<?php
$subscriptions = allSubscriptions();
?>
<h1>My subscribers</h1>
<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th>#</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($subscriptions as $index => $subscription): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $subscription['subscriber_email'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

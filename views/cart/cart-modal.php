<?php if (!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Count</th>
                <th>Price</th>
            </tr>
            </thead>
            </tbody>
            <?php foreach ($session['cart'] as $id => $item):?>
                <tr>
                    <td><?= \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['alt' => $item['name'], 'height' => 50])?></td>
                    <td><?= $item['name']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['price']?></td>
                    <td><span data-id = "<?= $id ?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Itogo:</td>
                <td><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">Sum:</td>
                <td><?= $session['cart.sum']?></td>
            </tr>
            <tbody>

        </table>
    </div>
<?php else: ?>
    <h3>Cart is empty..</h3>
<?php endif; ?>

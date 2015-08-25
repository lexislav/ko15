<?php if (!empty($title)): ?>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>

        <div class="m-card_horizontal l-single">
        <?php print $row; ?>
        </div>

<?php endforeach; ?>
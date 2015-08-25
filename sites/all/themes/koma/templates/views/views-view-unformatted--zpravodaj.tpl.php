<?php if (!empty($title)): ?>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
        <div class="m-card_horizontal l-single">
        <?php print $row; ?>
        </div>
    </div>
<?php endforeach; ?>
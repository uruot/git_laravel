<body>
    <?php
    $val = 1;
    ?>

    <?php if ($val === 1): ?>
    <div>処理１がtrueの場合にこれが表示</div>
    <?php elseif ($val === 2): ?>
    <div>elseifがtrueの場合にこれが表示</div>
    <?php endif; ?>

    <?php if(empty($val)): ?>
    <div>emptyがtrueならこれが表示</div>
    <?php endif; ?>

    <?php if(isset($val)): ?>
    <div>issetがtrueならこれが表示</div>
    <?php endif; ?>

    <?php if ($val === 1){ ?>
        <?php if(empty($val)){ ?>
            <div>emptyがtrueならこれが表示</div>
            <?php if(isset($val)){ ?>
                <div>issetがtrueならこれが表示</div>
            <?php } ?>
        <?php } ?>
    <?php }elseif ($val === 2){ ?>
        <div>elseifがtrueの場合にこれが表示</div>
    <?php } ?>

    <?php
    $items = ['あいうえお', 'かきくけこ', 'さしすせそ'];
    ?>

    <?php foreach ($items as $item): ?>
    <li><?php echo $item; ?></li>
    <?php endforeach; ?>
</body>

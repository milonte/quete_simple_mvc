<!DOCTYPE html>
<html>
<head> ... </head>
<body>
    <section>
        <h1>Items</h1>
            <ul>
            <?php
            foreach ($items as $item) : ?>
                <li><a href="/item/<?= $item['id'] ?>"><?= $item['title'] ?></li>
            <?php endforeach ?>
            </ul>
        </section>
        <a href="/categories">Go to categories</a>
</body>
</html>

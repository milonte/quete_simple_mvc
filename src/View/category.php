<!DOCTYPE html>
<html>
<head> ... </head>
<body>
    <section>
        <h1>categories</h1>
            <ul>
            <?php
            foreach ($categorys as $category) : ?>
                <li><a href="/category/<?= $category['id'] ?>"><?= $category['title'] ?></li>
            <?php endforeach ?>
            </ul>
        </section>
        <a href="/">Go to items</a>
</body>
</html>

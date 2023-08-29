<?php require("views/partials/head.php") ?>
<?php require('views/partials/nav.php') ?>
<?php require("views/partials/banner.php") ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($books as $book) : ?>
                <li>
                    <a href="/book?id=<?= $book['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($book['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/book/create" class="text-blue-500 hover:underline">Create Book</a>
        </p>
    </div>
</main>
<?php require("views/partials/footer.php") ?>
<?php require(base_path("views/partials/head.php")) ?>
<?php require(base_path('views/partials/nav.php')) ?>
<?php require(base_path("views/partials/banner.php")) ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($books as $book) : ?>
                <li>
                    <a href="/book?id=<?= $book['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($book['book_title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/books/create" class="text-blue-500 hover:underline">Create Book</a>
        </p>
    </div>
</main>
<?php require(base_path("views/partials/footer.php")) ?>
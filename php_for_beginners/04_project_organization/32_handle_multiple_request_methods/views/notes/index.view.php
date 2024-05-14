<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<?php require base_path('views/partials/head.php') ?>

<body class="h-full">
    <div class="min-h-full">
        <?php require base_path('views/partials/nav.php') ?>

        <?php require base_path('views/partials/header.php') ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <?php foreach ($notes as $note) : ?>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-2xl text-gray-700 hover:text-gray-900">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                    <hr class="my-4" />
                <?php endforeach; ?>

                <p class="mt-6">
                    <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
                </p>
            </div>
        </main>
    </div>

</body>

</html>
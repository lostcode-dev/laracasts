<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<?php require 'partials/head.php' ?>

<body class="h-full">
    <div class="min-h-full">
        <?php require 'partials/nav.php' ?>

        <?php require 'partials/header.php'?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <?php foreach ($notes as $note) : ?>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-2xl text-gray-700 hover:text-gray-900">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                    <hr class="my-4" />
                <?php endforeach; ?>
            </div>
        </main>
    </div>

</body>

</html>
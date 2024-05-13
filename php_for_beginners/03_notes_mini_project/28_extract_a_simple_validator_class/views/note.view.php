<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<?php require 'partials/head.php' ?>

<body class="h-full">
    <div class="min-h-full">
        <?php require 'partials/nav.php' ?>

        <?php require 'partials/header.php' ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <p class="text-2xl text-gray-700 hover:text-gray-900">
                    <?= htmlspecialchars($note['body']) ?>
                </p>

                <p class="mt-4">
                    <a href="/notes" class="text-blue-500 hover:underline">Back to notes</a>
                </p>
            </div>
        </main>
    </div>

</body>

</html>
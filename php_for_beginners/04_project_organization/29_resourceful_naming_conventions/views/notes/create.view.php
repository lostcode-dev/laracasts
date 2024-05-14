<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<?php require('views/partials/head.php') ?>

<body class="h-full">
    <div class="min-h-full">
        <?php require('views/partials/nav.php') ?>

        <?php require('views/partials/header.php') ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <form action="" method="post">

                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
                                    <div class="mt-2">
                                        <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Here's an idea for a note..." required>
                                        <?= $_POST['body'] ?? '' ?>
                                        </textarea>
                                    </div>
                                    <span class="text-red-500 text-sm">
                                        <?php if (isset($errors['body'])) : ?>
                                            <?= $errors['body'] ?>
                                        <?php endif ?>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/notes" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

</body>

</html>
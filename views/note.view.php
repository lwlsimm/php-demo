<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<?php
/**
 * @var array $note
 */
?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 hover:underline">go back...</a>
            </p>
            <p>
                <?= $note['body'] ?>
            </p>
        </div>
    </main>

<?php require('partials/footer.php') ?>
<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/header.php"; ?>

<main>
    <div class="mx-auto max-w-7xl py-6">
        <a class="text-blue-500 hover:text-blue-700" href="/notes">Go Back...</a>
        <p><?= htmlspecialchars($note["body"]) ?></p>
    </div>
</main>

<?php require "partials/foot.php"; ?>
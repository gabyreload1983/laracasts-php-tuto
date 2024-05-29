<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/header.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6">
        <a class="text-blue-500 hover:text-blue-700" href="/notes">Go Back...</a>
        <p><?= htmlspecialchars($note["body"]) ?></p>
    </div>
</main>

<?php require base_path("views/partials/foot.php") ?>
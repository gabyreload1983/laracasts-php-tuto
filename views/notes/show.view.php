<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/header.php") ?>

<main>
    <div class="mx-auto max-w-3xl py-6 flex flex-col gap-3">
        <a class="text-blue-500 hover:text-blue-700" href="/notes">Go Back...</a>
        <p class="border rounded bg-gray-100 p-2"><?= htmlspecialchars($note["body"]) ?></p>
        <a class="text-lime-300 rounded p-2 hover:text-lime-400" href="/note/edit?id=<?= $note["id"] ?>">Edit</a>
    </div>
</main>

<?php require base_path("views/partials/foot.php") ?>
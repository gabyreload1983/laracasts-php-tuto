<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/header.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 flex flex-col gap-3">
        <a class="text-blue-500 hover:text-blue-700" href="/notes">Go Back...</a>
        <p class="border rounded bg-gray-100 p-2"><?= htmlspecialchars($note["body"]) ?></p>
        <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note["id"] ?>">
            <button class="bg-red-300 rounded p-2 hover:bg-red-400">Delete</button>
        </form>
    </div>
</main>

<?php require base_path("views/partials/foot.php") ?>
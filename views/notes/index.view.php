<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/header.php") ?>

<main>
    <div class="mx-auto max-w-3xl py-6">
        <ul class="p-5">
            <?php foreach($notes as $note) : ?>
            <li class="bg-lime-200 rounded p-3 mb-3">
                <a class="hover:text-green-600" href="/note?id=<?= $note["id"] ?>">
                    <?= htmlspecialchars($note["body"]) ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
        <a class="bg-gray-200 p-3 hover:bg-gray-300" href="/notes/create">Create Note</a>
    </div>
</main>

<?php require base_path("views/partials/foot.php") ?>
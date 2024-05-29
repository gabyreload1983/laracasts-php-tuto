<?php require "views/partials/head.php"; ?>
<?php require "views/partials/nav.php"; ?>
<?php require "views/partials/header.php"; ?>

<main>
    <div class="mx-auto max-w-7xl py-6">
        <ul class="p-5">
            <?php foreach($notes as $note) : ?>
            <li>
                <a class="hover:text-green-600" href="/note?id=<?= $note["id"] ?>">
                    <?= htmlspecialchars($note["body"]) ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
        <a class="bg-gray-200 p-3 hover:bg-gray-300" href="/notes/create">Create Note</a>
    </div>
</main>

<?php require "views/partials/foot.php"; ?>
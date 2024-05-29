<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/header.php"; ?>

<main>
    <div class="mx-auto max-w-7xl py-6">
        <?php foreach($notes as $note) : ?>
        <li>
            <a class="hover:text-green-600" href="/note?id=<?= $note["id"] ?>">
                <?= $note["body"] ?>
            </a>
        </li>
        <?php endforeach ?>
    </div>
</main>

<?php require "partials/foot.php"; ?>
<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/header.php"; ?>

<main>
    <div class="max-w-5xl mx-auto p-3">
        <p>Hello <?= $_SESSION["user"]["email"] ?? "Guest" ?> </p>
    </div>
</main>

<?php require "partials/foot.php"; ?>
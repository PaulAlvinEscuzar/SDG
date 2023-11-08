<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDG</title>
    <!--<link rel="stylesheet" href="<?= base_url('public/css/master_style.css') ?>"/>-->
    <link rel="stylesheet" href="<?= base_url("/css/main.min.css") ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <?= $this->include("partials/header")  ?>
    <?= $this->renderSection("body-contents")?>
    <?= $this->include("partials/footer") ?>
</body>
<script src="<?= base_url("public/js/popper.min.js"); ?>"></script>
<script src="<?= base_url("public/js/bootstrap.min.js"); ?>"></script>
<script src="<?= base_url("public/js/jquery-3.7.1.js"); ?>"></script>

</html>
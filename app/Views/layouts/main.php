<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= $title ?? 'Amity Style' ?></title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- CSS propio -->
    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/app.css') ?>"
    >
</head>

<body>

    <?= $this->renderSection('content') ?>

    <!-- Bootstrap -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

    <!-- Chart.js -->
    <script
        src="https://cdn.jsdelivr.net/npm/chart.js">
    </script>

    <!-- JavaScript propio -->
    <script
        src="<?= base_url('assets/js/app.js') ?>">
    </script>

    <?= $this->renderSection('scripts') ?>

</body>
</html>
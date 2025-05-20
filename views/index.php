<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECD – Environmental Conservation Department</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/static/css/styles.css">
    <link rel="stylesheet" href="/static/css/mobile.css">
</head>

<body>
    <?php
    require_once __DIR__.'/partials/back_to_top.php';
    require_once __DIR__ . '/partials/header.php';
    require_once __DIR__.'/../components/breadcrumb_nav.php';
    render_breadcrumb_nav();
    ?>
    <!-- header -->
    <main>
        <?php
        require_once __DIR__ . '/../container_viewer.php';
        ?>
        <!-- content will appear here -->
    </main>
    <!-- main -->
    <?php
    require_once __DIR__ . '/partials/footer.php';
    ?>
    <!-- footer -->
    <script src="static/js/app.js"></script>
</body>

</html>
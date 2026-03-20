<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InsightU - <?php echo $pageTitle ?? 'Home'; ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php if (isset($extraCss)): echo $extraCss; endif; ?>
    <link rel="stylesheet" href="globel.css">
</head>
<body>
<?php include 'page_loader.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?= view('sidenav') ?>
    <div id="main" style="transition: margin-left .5s; margin-left: 264px;">
        <?= view('header') ?>
            <main style="margin: 30px 100px 30px 100px;">
                <?= $this->renderSection('content') ?>
            </main>
        <?= view('footer') ?>
    </div>
</body>
</html>
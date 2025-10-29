<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/messageSucces.css') ?>">
</head>
<body>
<div id="successModal" class="modal">
    <div class="modal-content">
      <h2>✔ Succès !</h2>
      <p><?= $succes?></p>
    </div>
</div>
<script src="<?= base_url('assets/js/messageSucces.js') ?>"></script>
</body>
</html>
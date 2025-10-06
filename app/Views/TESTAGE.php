<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/TESTAGE.css') ?>">
    <title>Test Page</title>
</head>
<body>
 <!-- ################################################ -->   
    <!-- <button onclick="openModal()" class="btn btn-success">Test Modal</button>
                <div id="successModal" class="modal">
                    <div class="modal-content">
                    <h2>✔ Succès !</h2>
                    <p>cd</p>
                </div> -->

<!-- ################################################## -->

<!-- ################################################### -->
<!-- HTML (adaptable en CodeIgniter avec base_url) -->
<div id="car-360"
     data-folder="<?= base_url('assets/images/Mclaren/720S/') ?>" 
     data-filename="car_{index}.webp"
     data-amount="32"
     style="max-width:1350px; max-height:780px; position:relative; justify-content: center; touch-action:none; user-select:none; overflow:hidden;">
  <img id="car-image"
       src="<?= base_url('assets/images/Mclaren/720S/car_1.webp') ?>"
       alt="Car 360"
       style="width:100%; height:100%; object-fit:contain; display:block; -webkit-user-drag:none;">
  <div id="ci-loading" style="position:absolute;left:8px;top:8px;background:rgba(0,0,0,0.5);color:#fff;padding:4px 8px;border-radius:4px;font-size:12px;">Chargement...</div>
</div>

<script>

</script>



<script src="<?= base_url('assets/js/TESTAGE.js') ?>"></script>
</body>
</html>
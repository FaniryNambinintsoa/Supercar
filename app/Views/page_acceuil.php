<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<main>
  <div style="diplay: flex; position: fixed; justify-content: center; right: 20px; bottom: 20px; padding: 10px; background-color: lightgreen; border: 2px solid #333; border-radius: 8px;">
    <a href="<?= route_to('test') ?>">Test Page</a>
  </div>
  
    <div>
      <h1>Div1</h1>
    </div>
    <div>
      <h1>Div2</h1>  
    </div>
    <div>
      <h1>Div2</h1>  
    </div>
</main>

<script src="<?= base_url('assets/js/page_Acceuil.js') ?>"></script>
</body>
</html>
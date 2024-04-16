<?php
 require_once __DIR__ . '/data/functions.php';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form action="index.php" method="GET">
  <div class="row">
    <div class="col-6">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Numero caratteri </label>
        <input type="number" class="form-control" name="length">
      </div>
      <button type="submit" class="btn btn-primary" name="generatePassword">Genera Password</button>
      <button type="submit" class="btn btn-secondary">Annulla</button>
    </div>
  </div>
</form>
<div> <?php echo $random_string ?></div>
</body>
</html>

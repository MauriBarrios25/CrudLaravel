<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:#202225;">
<div class="container-sm">   
<br>
<h3 class="text-light bg-dark">Nombre<h3>
<input class="form-control" type="text" name="name" id="name" value="{{ isset($pet->name)?$pet->name:'' }}" />
<h3 class="text-light bg-dark">Cantidad<h3>
<input class="form-control" type="number" name="age" id="age" value="{{ isset($pet->age)?$pet->age:'' }}" /><br>
<button class="btn btn-outline-info" type="submit">Guardar</button>
</body>
</div>
</html>


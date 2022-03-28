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
<input class="form-control" type="text" name="nombre" id="nombre" value="{{ isset($sucur->nombre)?$sucur->nombre:'' }}" />
<h3 class="text-light bg-dark">Cantidad<h3>
<input class="form-control" type="number" name="cantidad" id="cantidad" value="{{ isset($sucur->cantidad)?$sucur->cantidad:'' }}" /><br>
<h3 class="text-light bg-dark">Precio Compra<h3>
<input class="form-control" type="number" name="precio_compra" id="precio_compra" step="any" value="{{ isset($sucur->precio_compra)?$sucur->precio_compra:'' }}" />
<h3 class="text-light bg-dark">Precio Venta<h3>
<input class="form-control" type="number" name="precio_venta" id="precio_venta" step="any" value="{{ isset($sucur->precio_venta)?$sucur->precio_venta:'' }}" /><br>
<h3 class="text-light bg-dark">Distribuidor<h3>
<input class="form-control" type="text" name="distribuidor" id="distribuidor" value="{{ isset($sucur->distribuidor)?$sucur->distribuidor:'' }}" /><br>
<button class="btn btn-outline-info" type="submit">Guardar</button>
</body>
</div>
</html>


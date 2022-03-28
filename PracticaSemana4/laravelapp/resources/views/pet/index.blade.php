<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva vida </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:#202225;">

@include('pet.nav')
<div class="container-sm">
<h1 class="text-light">Listado de Productos</h1>
<table class="table table-light table-sm">
    <thead>
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->age }}</td>
            <td>
            
            <div class="form-group">
            <div class="row">
            <form action="{{ url('/pet/'.$pet->id) }}" method="POST" >
                @csrf
                {{ method_field('DELETE') }}
                
                    <input type="submit" value="Eliminar"
                    onclick="return confirm('Desea eliminar el registro?')" class="btn btn-outline-danger">  
            
            
            </form>
            <form action="{{ url('/pet/'.$pet->id,'edit') }}" method="POST" >

                 @csrf
                {{ method_field('GET') }}
               
                    <input type="submit" value="Editar"
                    onclick="return confirm('Desea modificar el registro?')" class="btn btn-outline-success"> 


            </form>
</div>
</div>
            </td>
            <a></a>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</div>


</html>


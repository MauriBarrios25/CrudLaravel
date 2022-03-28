@include('sucursales.nav')
<div class="container-md">
<br>
<h1><b class="text-light bg-dark"><i>Registro de datos</i></b><h1>
<form action="{{ url('/sucur') }}" method="post">
    @csrf
    @include('sucursales.form')
</form>
</div>
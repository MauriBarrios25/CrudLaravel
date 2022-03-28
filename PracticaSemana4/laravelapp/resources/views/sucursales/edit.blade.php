@include('sucursales.nav')
Editar Registros
<form action="{{ url('/sucur/'.$sucur->id) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    @include('sucursales.form')
</form>

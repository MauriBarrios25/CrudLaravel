@include('pet.nav')
Editar Registros
<form action="{{ url('/pet/'.$pet->id) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    @include('pet.form')
</form>

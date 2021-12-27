@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de edicion de productos</h1>
        </div>
<form action="{{ route('itemcomanda.update',$itemcomanda->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('itemcomanda.form')
</form>
    </div>
</div>
@include('includes.footer')

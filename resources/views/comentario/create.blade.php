@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{url()->previous()}}"><i class="fas fa-arrow-left h2"></i></a>

</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Crear comentarios</h1>
        </div>
<form action="{{ route('comentario.store') }}" method="post">
    @csrf
    @include('comentario.form')
</form>
    </div>
</div>
@include('includes.footer')

@extends('errors::layout')
@section('title') Error 429 @endsection

@section('content')
<div class="container text-center">
    <div class="error-template">
        <h2 class="text-white mb-2">429<span class="fs-20">error</span></h2>
        <h5 class="error-details text-white">
            ¡Oops! Se ha producido un error. ¡No se ha encontrado la página solicitada!
        </h5>
        <div class="text-center">
            <a class="btn btn-primary mt-5 mb-5" href="javascript:;"> <i class="fa fa-long-arrow-left"></i> Volver al dashboard</a>
        </div>
    </div>
</div>
@endsection

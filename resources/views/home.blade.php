@extends('layouts.index')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fotolog Enfil </div>

                <div class="panel-body">
                    Bem vindo(a) - {{ ucfirst(Auth::user()->name )}} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

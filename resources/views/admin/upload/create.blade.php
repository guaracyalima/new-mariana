@extends('layouts.index')

@section('conteudo')


    <h3>Cadastrar novo item</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.upload.store', 'files' => true, 'class' => '']) !!}

    @include('admin.upload._form')

    {!! Form::submit('Salvar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection
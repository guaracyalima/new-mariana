@extends('layouts.admin')

@section('conteudo')



    <h3>Gerenciar dados de contato</h3>
    @include('errors._check')

    {!! Form::model($uploads,['route' => ['admin.upload.update', $uploads->id]]) !!}


    @include('admin.upload._form')

    {!! Form::submit('Alterar', ['class' => 'btn btn-primary center-block']) !!}


    {!! Form::close() !!}
@endsection
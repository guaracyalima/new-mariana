@extends('layouts.index')

@section('conteudo')


    <h3>Inserir imagens no album</h3>
    @include('errors._check')

    {!! Form::open(['route' => 'admin.asset.store', 'files' => true, 'class' => '']) !!}

    <div class="form-group">
        {!! Form::hidden('album_id', $album->id, null) !!}
    </div>
    <div class="form-group">
        {!! Form::file('img[]', array('multiple'=>true)) !!}
    </div>

    {!! Form::submit('Salvar', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
@endsection
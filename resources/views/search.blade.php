@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <h3 class="text-center">Albuns de images</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.upload') }}" class="btn btn-primary btn-sm">Voltar</a>

                        </div>
                        <div class="col-md-6">
                            {!! Form::open(['route' => 'admin.upload.search', 'files' => true, 'class' => '']) !!}
                            <div class="form-group">
                                {!! Form::input('date','date', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Buscar', ['class' => 'btn btn-primary center-block']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>

                    </div>
                    <br>
                    <br>
                </div>
                <div class="row">
                    @foreach($album as $file)
                        <div class="col-xs-3 col-md-3">
                            <div class="thumbnail">
                                <a href="{{ url('show', ['id' => $file->id]) }}">
                                    <img src="{{asset("img/uploads/$file->path")}}" alt="">
                                </a>


                                <div class="caption">
                                    <h4 class="text-center"><b>{{$file->name}}</b></h4>
                                    <p class="justify">{{$file->description}}</p>
                                    <hr>
                                    <p class="text-center">Data de criacao {{date('d-m-Y', strtotime($file->created_at))}}</p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
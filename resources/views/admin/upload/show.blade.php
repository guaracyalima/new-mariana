@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Galeria de Imagens Enfil - {{ $album->name }}<br></h1>
            </div>
            <div class="col-md-12">
                <a href="{{ route('admin.upload') }}" class="btn btn-primary btn-sm">Voltar</a>
                <a href="{{ route('admin.asset.create', ['album_id' => $album->id]) }}" class="btn btn-info btn-sm">Anexar imagens</a>
            </div>

            <div class="section">
                <div class="container">
                    <div class="row">
                        {{--<img src="{{asset("img/uploads/$album->path")}}" alt="" width="100" height="100">--}}
                    </div>
                    <br>

                    <div class="container">
                    <div class="owl-carousel owl-theme">
                        @foreach($images as $item)
                            <div class="item">
                                <a href="" data-lightbox="img">
                                    <img src="{{asset("img/uploads/album/$item->img")}}" width="400" height="480" class="image-responsive">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
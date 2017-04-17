@extends('layouts.index')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">

            <div class="portlet box red">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Album no sistema  {{ $album->name }}
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                        <a href="javascript:;" class="remove">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Nome
                                </th>

                                <th>
                                    Arquivo
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$album->id}}</td>
                                    <td>{{$album->name}}</td>
                                    <td>{{$album->description}}</td>
                                    <td><img src="{{asset("img/uploads/$album->path")}}" alt="" width="100" height="100"></td>

                                    @foreach($images as $item)
                                    <td>
                                        <img src="{{asset("img/uploads/album/$item->img")}}" alt="" width="100" height="100">
                                    </td>
                                    @endforeach
                                    <td>

                                        <a href="{{ route('admin.asset.create', ['album_id' => $album->id]) }}" class="btn btn-info btn-sm">Anexar imagens</a>
                                        <a href="{{ route('admin.upload.destroy', ['id' => $album->id]) }}" class="btn btn-danger btn-sm">Deletar</a>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
@extends('layouts.index')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">

            <div class="portlet box red">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Imagens no sistema
                    </div>
                    <a href="{{ route('admin.upload.create')}}" class="btn btn-success fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Nova imagem</span></a>
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
                            @foreach($files as $file)
                                <tr>
                                    <td>{{$file->id}}</td>
                                    <td>{{$file->name}}</td>
                                    <td>{{$file->description}}</td>
                                    <td><img src="{{asset("img/uploads/$file->path")}}" alt="" width="100" height="100"></td>
                                    <td>

                                        <a href="{{ route('admin.upload.edit', ['id' => $file->id]) }}" class="btn btn-info btn-sm">Editar</a>
                                        <a href="{{ route('admin.upload.destroy', ['id' => $file->id]) }}" class="btn btn-danger btn-sm">Deletar</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
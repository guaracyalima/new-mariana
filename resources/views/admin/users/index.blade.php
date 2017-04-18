@extends('layouts.index')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">

            <div class="container">
                <h3 class="text-center">Usuarios do sistema</h3>
                </div>
                <br>
                <br>
            </div>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data de cadastro</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $file)
                    <tr>
                        <td>{{$file->id}}</td>
                        <td>{{$file->name}}</td>
                        <td>{{$file->email}}</td>
                        <td>{{date('d-m-Y', strtotime($file->created_at))}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>




                    </div>

            </div>
    </div>
@endsection
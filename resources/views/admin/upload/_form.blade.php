


    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}

        {!! Form::text('name', null ,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Descriçao:') !!}

        {!! Form::textarea('description', null ,['class' => 'form-control', 'col' => '12', 'rows' =>'5']) !!}
    </div>

    <div class="form-group">

        {!! Form::file('path[]', array('multiple'=>true)) !!}
        {{--{!! Form::file('path[]', null ,['multiple' => true,'class' => 'form-control']) !!}--}}

    </div>


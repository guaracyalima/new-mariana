
@if(session('erro'))
    <div class="alert alert-danger">
        {{ session('erro') }}
    </div>
@endif

{{--@if($errors->any())--}}
    {{--<ul class="alert alert-danger">--}}
        {{--@foreach($errors->all() as $error)--}}
            {{--<li>{{ $error }}</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
{{--@endif--}}
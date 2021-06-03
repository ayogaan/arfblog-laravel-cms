@extends('admin.layout.layout')
@section('content')
    <script src="https://cdn.tiny.cloud/1/mez7sglcwsysmi8gyjtvpfg0kubn0g565n6l9bpgmgk5px94/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    @php
    $formtitle = !empty($category) ? 'Update':'New'
    @endphp


    <div class="container rounded shadow-sm bg-white p-3" style="margin-left:10%; margin-right:10%; height:100%" >
    <h4>{{$formtitle}} Article</h4>

    @include('partials.flash')
    @if(!empty($articles))
                {!! Form::model($articles,['url'=>['admin/article',$articles->id]]) !!}
                {!! Form::hidden('id')!!}
                <input name="_method" type="hidden" value="PUT">

    @else
    {!! Form::open(['url'=>'admin/article']) !!}
    @endif
    {!! Form::text('tittle',null,['class'=>'form-control mb-3 mt-3','placeholder'=>'Judul Article']) !!}
    {!! Form::text('img_url',null,['class'=>'form-control mb-3 mt-3','placeholder'=>'image url']) !!}
    
    {!! Form::textarea('article',null,['class'=>'form-control mb-3 mt-3','placeholder'=>'tulis disini']) !!}

    
                <button style="float:right;" type="submit" class="btn-primary btn p-3 m-3">Add Article</button>             
                {!! form::close() !!}
    
  
    </div> 
@endsection    
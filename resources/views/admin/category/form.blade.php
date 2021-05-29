@extends('admin.layout.layout')
@section('content')
    @php
    $formtitle = !empty($category) ? 'Update':'New'
    @endphp 
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">

            <div class="card-header card-header-border-bottom">
                <h2>{{$formtitle}} category</h2>
            </div>
            <div class="card-body">

            @include('partials.flash')

            @if(!empty($category))
                {!! Form::model($category,['url'=>['admin/categories',$category->id]]) !!}
                {!! Form::hidden('id')!!}
                <input name="_method" type="hidden" value="PUT">
                
            @else
                {!! Form::open(['url'=>'admin/categories']) !!}
            @endif    
            
            <div class="form-group">
                {!! Form::label('name','Name') !!}
                {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'category name']) !!}

            </div>
            <div class="form-footer pt-5 border-top">
                <button type="submit" class="btn-primary btn p-3">Add</button>             
                {!! form::close() !!}
            </div>
        </div>
    </div>
    </div>
   
@stop
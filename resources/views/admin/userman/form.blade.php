@extends('admin.layout.layout')
@section('content')
    @php
    $formtitle = !empty($users) ? 'Update':'New'
    @endphp 
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">

            <div class="card-header card-header-border-bottom">
                <h2>{{$formtitle}} User</h2>
            </div>
            <div class="card-body">

            @include('partials.flash')

            @if(!empty($category))
                {!! Form::model($users,['url'=>['admin/user',$users->id]]) !!}
                {!! Form::hidden('id')!!}
                <input name="_method" type="hidden" value="PUT">
                
            @else
                {!! Form::open(['url'=>'admin/user']) !!}
            @endif    
            
            <div class="form-group">
                {!! Form::label('name','Name',['class'=>'mb-3']) !!}
                {!! Form::text('nama',null,['class'=>'form-control mb-3','placeholder'=>'Nama User']) !!}
                {!! Form::label('name','Email',['class'=>'mb-3']) !!}
                {!! Form::text('email',null,['class'=>'form-control mb-3','placeholder'=>'E-Mail']) !!}
                {!! Form::label('name','Password',['class'=>'mb-3']) !!}
                {!! Form::text('password',null,['class'=>'form-control mb-3','placeholder'=>'password']) !!}
                {!! Form::label('name','Role',['class'=>'mb-3']) !!}                
                {!! Form::select('role', array('1' => 'Super', '0' => 'Regular'), 'S',['class'=>'form-control mb-3']); !!}
            </div>
            <div class="form-footer pt-5 border-top">
                <button style="float:right;" type="submit" class="btn-primary btn p-3">Add</button>             
                {!! form::close() !!}
            </div>
        </div>
    </div>
    </div>
   
@stop
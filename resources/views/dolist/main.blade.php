{{-- resources/views/admin/dashboard.blade.php --}}

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">

                <h3>Category List</h3>
                <ul id="tree1">
                    {{--@foreach($categories as $category)--}}
                    {{--<li>--}}
                    {{--{{ $category->title }}--}}
                    {{--@if(count($category->childs))--}}
                    {{--@include('manageChild',['childs' => $category->childs])--}}
                    {{--@endif--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Add New Category</h3>


                <form method="post" action="{{ route('todolist.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="name">Share Name:</label>
                        <input type="text" class="form-control" name="share_name"/>
                    </div>
                    <div class="form-group">
                        <label for="price">Share Price :</label>
                        <input type="text" class="form-control" name="share_price"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Share Quantity:</label>
                        <input type="text" class="form-control" name="share_qty"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>


                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    {{--{!! Form::label('Title:') !!}--}}
                    {{--{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}--}}
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>


                <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                    {{--{!! Form::label('Category:') !!}--}}
                    {{--{!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}--}}
                    <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                </div>


                <div class="form-group">
                    <button class="btn btn-success">Add New</button>
                </div>


                {{--{!! Form::close() !!}--}}


            </div>
        </div>


    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
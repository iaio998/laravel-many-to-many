@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">My technologies</h1>
        <div class="col-12">
            <button class="btn btn-success"><a href="{{route('admin.technologies.create')}}">Create new</a></button>
            @include('admin.technologies.partials.table')
        </div>
    </div>
</div>
@endsection
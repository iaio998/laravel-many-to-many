@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">My categories</h1>
        <div class="col-12">
            <button class="btn btn-success"><a href="{{route('admin.categories.create')}}">Create new</a></button>
            @include('admin.categories.partials.table')
        </div>
    </div>
</div>
@endsection
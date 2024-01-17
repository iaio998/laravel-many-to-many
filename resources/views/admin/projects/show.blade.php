@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Show</h1>

    <div class="col-12 col-md-12 text-center g-2">
        <button class="btn btn-success"><a href="{{route('admin.projects.edit', $project)}}">Edit</a></button>
        <div class="img-cont">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{$project->title}}">
        </div>
        <div class="">
            <h2 class="fs-4">
                {{ $project->title }}
            </h2>
            <p>Description: {{ $project->body }}</p>
            @if($project->category)
            <p>Category: {{ $project->category->name }}</p>
            @else
            <p>No category</p>
            @endif
            <a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}">Show more</a>
        </div>
        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection
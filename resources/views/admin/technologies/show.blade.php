@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Show technologies</h1>

    <div class="col-12 col-md-12 text-center g-2">
        <button class="btn btn-danger"><a href="{{route('admin.technologies.index')}}">Go back</a></button>
        <div class="">
            <h2 class="fs-4">
                {{ $technology->name }}
            </h2>
            <ul>
                @forelse ($technology->projects as $project)
                <li class="list-group-item">
                    <a href="{{route('admin.projects.show', $project)}}"
                        class="link-underline link-underline-opacity-0"> {{$project->name}}</a>
                </li>
                @empty
                <li>No posts</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
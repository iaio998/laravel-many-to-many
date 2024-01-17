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
                @foreach($technology->projects as $project)
                <li>
                    - {{$project->title}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
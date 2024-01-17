@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit: {{$project->title}}</h1>
    <form action="{{route('admin.projects.update', $project)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                required maxlength="200" minlength="3" value="{{old('title', $project->title)}}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{old('category_id' , $project->category_id)==$project->category_id ?
                    'selected'
                    : ''}}>
                    {{$category->name}}
                </option>
                @endforeach
            </select>
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body">Body:</label>
            <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body" cols="30" rows="10"
                value="{{old('body', $project->body)}}"></textarea>
            @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Image URL:</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                maxlength="200" minlength="3" value="{{old('image', $project->image)}}">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="url">Project URL:</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
                value="{{old('url', $project->url)}}">
            @error('url')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
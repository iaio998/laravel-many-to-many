@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create</h1>
    <form action="{{route('admin.projects.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                required maxlength="200" minlength="3" value="{{old('title')}}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{old('category_id')==$category->id ? 'selected' : ''}}>
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
                value="{{old('body')}}"></textarea>
            @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex">
            <div class="me-3">
                <img id="preview" width="100" src="https://via.placeholder.com/300x200" alt="">
            </div>
            <div class="mb-3">
                <label for="image">Image:</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                    maxlength="200" minlength="3" value="{{old('image')}}">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="url">Project URL:</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
                value="{{old('url')}}">
            @error('url')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
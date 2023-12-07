@extends('layouts.app')

@section('title', 'Create')

@section('content')
<form action="{{ route('note.store') }}" method="POST">
    @csrf
    <h1>Create New Note</h1>
    <div class="input-group has-validation">
        <div class="form-floating is-invalid">
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title">
            <label for="title">Title:</label>
        </div>
        <div class="invalid-feedback">
            @error('title')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="input-group has-validation">
        <div class="form-floating is-invalid">
            <textarea style="height:400px;" name="content" class="form-control @error('content') is-invalid @enderror" id="content"></textarea>
            <label for="content">Content:</label>
        </div>
        <div class="invalid-feedback">
            @error('content')
                {{ $message }}
            @enderror
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Save">
    <a href="{{ route('note.index') }}" class="btn btn-danger" role="button">Cancel</a>
</form>
@endsection
@extends('layouts.app')

@section('title', 'Edit')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Edit Note</h1>    
    </div>
    <div class="col-12">
    <form action="{{ route('note.update', [$id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="input-group has-validation">
            <div class="form-floating is-invalid">
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $title }}" id="title">
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
                <textarea style="height:400px;" name="content" class="form-control @error('content') is-invalid @enderror" id="content">{{ $content }}</textarea>
                <label for="content">Content:</label>
            </div>
        </div>
        <input type="submit" class="btn btn-success" value="Save Changes">
        <a href="{{ route('note.show', [$id]) }}" class="btn btn-danger" role="button">Cancel</a>
    </form>
    </div>
</div>
@endsection
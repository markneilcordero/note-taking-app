@extends('layouts.app')

@section('title', 'Edit')

@section('content')
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 my-3">
        <div class="card">
            <div class="card-header">
                <h1>Edit Note</h1>
            </div>
            <div class="card-body">
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
                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Save Changes">
                        <a href="{{ route('note.show', [$id]) }}" class="btn btn-danger" role="button">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

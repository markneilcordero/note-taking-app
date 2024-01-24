@extends('layouts.app')

@section('title', 'Create')

@section('content')
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 my-3">
        <div class="card">
            <h1 class="card-header">Create New Note</h1>
            <div class="card-body">
                <form action="{{ route('note.store') }}" method="POST">
                    @csrf
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
                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Save">
                        <a href="{{ route('note.index') }}" class="btn btn-danger" role="button">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
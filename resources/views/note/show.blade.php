@extends('layouts.app')

@section('title', 'Show')

@section('content')
<div class="row">
    @foreach ($notes as $note)
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 my-3">
        <div class="card">
            <div class="card-header">
                <h1>{{ $note->title }}</h1>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $note->content }}</p>
                <form action="{{ route('note.destroy', [$note->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="btn-group" role="group" aria-label="group button">
                        <a href="{{ route('note.edit', [$note->id]) }}" class="btn btn-primary" role="button">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{ route('note.index') }}" class="btn btn-secondary" role="button">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

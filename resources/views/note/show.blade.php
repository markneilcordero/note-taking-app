@extends('layouts.app')

@section('title', 'Show')

@section('content')
<div class="row">
    @foreach ($notes as $note)
    <div class="col-12">
        <h1>{{ $note->title }}</h1>
    </div>
    <div class="col-12">
        <p>{{ $note->content }}</p>
    </div>
    <div class="col-12">
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item mx-1 p-0 border border-0"><a href="{{ route('note.edit', [$note->id]) }}" class="btn btn-secondary" role="button">Edit</a></li>
            <li class="list-group-item mx-1 p-0 border border-0">
                <form action="{{ route('note.destroy', [$note->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </li>
        </ul>
        <a href="{{ route('note.index') }}" class="btn btn-primary my-2" role="button">Back</a>
    </div>
    @endforeach
</div>
@endsection
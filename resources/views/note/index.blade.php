@extends('layouts.app')

@section('title', 'Index')

@push('scripts')

@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Your Notes</h1>
    </div>
    @foreach ($notes as $note)
    <div class="col-6">
        <a href="{{ route('note.show', ['note' => $note->id]) }}">{{ $note->title }}</a>
    </div>
    <div class="col-6 text-truncate">
        <a href="{{ route('note.show', ['note' => $note->id]) }}">{{ $note->content }}</a>    
    </div>
    @endforeach
</div>
<a href="{{ route('note.create') }}" class="btn btn-secondary my-2" role="button">Create New Note</a>
@endsection
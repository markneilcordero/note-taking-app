@extends('layouts.app')

@section('title', 'Index')

@push('scripts')

@endpush

@section('content')
<div class="card my-3">
    <h1 class="card-header">Your Notes</h1>
    <div class="card-body">
        <a href="{{ route('note.create') }}" class="btn btn-success mb-3" role="button">Create New Note</a>
        <div class="row">
        @foreach ($notes as $note)
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ route('note.show', ['note' => $note->id]) }}" class="link-dark link-offset-2 link-underline link-underline-opacity-0">{{ $note->title }}</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="text-truncate">
                            <a href="{{ route('note.show', ['note' => $note->id]) }}" class="link-dark link-offset-2 link-underline link-underline-opacity-0">{{ $note->content }}</a>
                        </div>
                        <a href="{{ route('note.show', ['note' => $note->id]) }}" class="btn btn-light border mt-3">Open</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
{{ $notes->links() }}
@endsection

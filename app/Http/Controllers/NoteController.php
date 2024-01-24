<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('note.index', ['notes' => Note::all()]);
        return view('note.index', ['notes' => DB::table('notes')->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request)
    {
        $validated = $request->validated();
        $model = new Note;
        $model->title = $request->input('title');
        $model->content = $request->input('content');
        $model->save();
        return redirect()->route('note.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('note.show', ['notes' => Note::find($note)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('note.edit', ['id' => $note->id, 'title' => $note->title, 'content' => $note->content]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {
        $validated = $request->validated();
        $note->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        $id = $note->id;
        return redirect()->route('note.show', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index');
    }
}

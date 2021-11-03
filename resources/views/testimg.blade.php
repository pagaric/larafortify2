@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <h1>Test upload images</h1>
    
    <form method="POST" action="{{ route('img.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="img">Image</label>
        <input type="file" name="img" id="img">
        <br>
        <br>
        <button type="submit">Enregistrer</button>
    </form>

    <hr>

@endsection
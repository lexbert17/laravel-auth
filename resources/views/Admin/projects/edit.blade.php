@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Modifica il progetto</h2>
            
        <form class="mt-5" action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 has-validation">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ? : $project->title }}">
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{ old('content', $project->content) }}</textarea>
            </div>      
            
            <button class="btn btn-success" type="submit">Salva</button>

        </form>
    </div>
@endsection
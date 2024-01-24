@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Lista dei post</h2>

    <div class="text-end">
      <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Crea un nuovo post</a>
    </div>

    <table class="table table-striped mt-5">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>
                      <a class="btn btn-success" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">Dettagli</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
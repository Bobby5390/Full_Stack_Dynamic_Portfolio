@extends('admin.components.layout')

@section('content')
<div class="container mt-4">
    <h1>Skills</h1>
    <a href="{{ route('skills.create') }}" class="btn btn-primary mb-3">Add Skill</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
            <tr>
                <td>{{ $skill->id }}</td>
                <td>{{ $skill->name }}</td>
                <td>{{ $skill->level }}</td>
                <td>
                    <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

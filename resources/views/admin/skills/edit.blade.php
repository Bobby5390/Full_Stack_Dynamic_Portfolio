@extends('admin.components.layout')

@section('content')
<div class="container mt-4">
    <h1>Edit Skill</h1>
    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $skill->name }}" required>
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" name="level" value="{{ $skill->level }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

@extends('admin.components.layout')

@section('content')
<div class="container mt-4">
    <h1>Add Skill</h1>
    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" name="level" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection

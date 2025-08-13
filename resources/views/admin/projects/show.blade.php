@extends('admin.components.layout')

@section('content')
<div class="container mt-4">
    <h1>Project Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">{{ $project->description }}</p>
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection

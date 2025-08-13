@extends('admin.components.layout')

@section('content')
<div class="container mt-4">
    <h1>Skill Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $skill->name }}</h5>
            <p class="card-text">Level: {{ $skill->level }}</p>
            <a href="{{ route('skills.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection

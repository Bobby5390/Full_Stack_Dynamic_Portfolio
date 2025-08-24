@extends('admin.components.layout')

@section('content')
<style>
    body, .profile-glass-bg {
        background: #0f0f0f !important;
        color: #f0f0f0;
    }
    .profile-glass-bg {
        min-height: 100vh;
        padding: 40px 0;
        position: relative;
        overflow: hidden;
    }
    .profile-glass-bg::before {
        content: '';
        position: absolute;
        top: -100px; left: -100px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, #00fff7 0%, transparent 70%);
        opacity: 0.18;
        z-index: 0;
        filter: blur(10px);
    }
    .profile-glass-bg::after {
        content: '';
        position: absolute;
        bottom: -120px; right: -120px;
        width: 500px; height: 500px;
        background: radial-gradient(circle, #2d4df1 0%, transparent 70%);
        opacity: 0.13;
        z-index: 0;
        filter: blur(10px);
    }
    .profile-settings-card {
        border-radius: 24px;
        box-shadow: 0 8px 40px 0 rgba(0,255,255,0.10), 0 1.5px 8px 0 rgba(0,0,0,0.18);
        background: rgba(28, 28, 28, 0.85);
        backdrop-filter: blur(18px) saturate(140%);
        border: 1.5px solid rgba(0,255,255,0.18);
        padding: 2.5rem 2rem 2rem 2rem;
        max-width: 500px;
        margin: 0 auto;
        color: #f0f0f0;
        position: relative;
        z-index: 1;
        transition: box-shadow 0.2s;
    }
    .profile-settings-card:hover {
        box-shadow: 0 12px 60px 0 rgba(0,255,255,0.18), 0 2px 12px 0 rgba(0,0,0,0.22);
    }
    .profile-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, #2d4df1 0%, #00fff7 100%);
        box-shadow: 0 0 32px 0 rgba(0,255,255,0.18);
        border: 3px solid #00fff7;
        transition: border 0.2s;
    }
    .profile-img:hover {
        border: 3px solid #2d4df1;
    }
    .form-label {
        font-weight: 500;
        color: #00fff7;
        letter-spacing: 0.5px;
    }
    .form-control, .form-control:focus {
        background: rgba(24,24,24,0.95);
        color: #f0f0f0;
        border: 1.5px solid #222;
        border-radius: 14px;
        box-shadow: 0 1px 4px 0 rgba(0,255,255,0.04);
        transition: border 0.2s;
    }
    .form-control:focus {
        border: 1.5px solid #00fff7;
        box-shadow: 0 0 0 2px rgba(0,255,255,0.08);
    }
    .btn-save {
        background: linear-gradient(90deg, #00bcd4, #2d4df1);
        color: #fff;
        border: none;
        border-radius: 30px;
        padding: 0.6rem 2.7rem;
        font-weight: 600;
        font-size: 1.15rem;
        margin-top: 1.2rem;
        box-shadow: 0 2px 12px rgba(0,255,255,0.18);
        transition: background 0.2s, box-shadow 0.2s;
        letter-spacing: 0.5px;
    }
    .btn-save:hover {
        background: linear-gradient(90deg, #2d4df1, #00bcd4);
        box-shadow: 0 4px 24px rgba(0,255,255,0.22);
    }
    .profile-settings-card .text-center.mb-3 {
        margin-bottom: 2.2rem!important;
    }
</style>
<div class="profile-glass-bg">
    <div class="container">
        <div class="profile-settings-card">
            <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="text-center mb-3">
                    <img src="{{ $user->avatar ?? 'https://randomuser.me/api/portraits/men/32.jpg' }}" class="profile-img" alt="Profile Photo">
                    <div class="mt-2">
                        <input type="file" name="avatar" class="form-control form-control-sm" style="max-width:200px; margin:0 auto;">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Student ID</label>
                    <input type="text" name="student_id" class="form-control" value="{{ $user->student_id }}">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-save">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

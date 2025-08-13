<header class="bg-dark text-white py-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Admin Panel</h2>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="text-white me-3">Dashboard</a>
            <a href="{{ route('projects.index') }}" class="text-white me-3">Projects</a>
            <a href="{{ route('skills.index') }}" class="text-white me-3">Skills</a>
            <a href="{{ route('educations.index') }}" class="text-white me-3">Educations</a>
            <a href="{{ route('achievements.index') }}" class="text-white me-3">Achievements</a>
            <a href="{{ route('experiences.index') }}" class="text-white me-3">Experiences</a>
            <a href="{{ route('personal-details.index') }}" class="text-white me-3">Personal Info</a>
            <a href="{{ route('infos.index') }}" class="text-white me-3">Infos</a>
            <a href="{{ route('users.index') }}" class="text-white me-3">Users</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-link text-white p-0 m-0 align-baseline">Logout</button>
            </form>
        </nav>
    </div>
</header>

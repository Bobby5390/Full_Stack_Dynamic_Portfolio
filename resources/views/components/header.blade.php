<header>
    <h1>Sirajes Salakin</h1>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ url('/skills') }}" class="{{ request()->is('skills') ? 'active' : '' }}">Skills</a></li>
            <li><a href="{{ url('/education') }}" class="{{ request()->is('education') ? 'active' : '' }}">Education</a></li>
            <li><a href="{{ url('/work') }}" class="{{ request()->is('work') ? 'active' : '' }}">Work</a></li>
        </ul>
    </nav>
</header>

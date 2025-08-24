<style>
	.top-navbar {
		width: 100%;
		background: linear-gradient(90deg, #181c1f 60%, #232b3b 100%);
		box-shadow: 0 2px 16px 0 rgba(0,255,255,0.04);
		padding: 0.7rem 0;
		display: flex;
		align-items: center;
		justify-content: space-between;
		z-index: 1002;
		position: sticky;
		top: 0;
	}
	.top-navbar .logo {
		font-size: 1.5rem;
		font-weight: 700;
		color: #00fff7;
		text-decoration: none;
		display: flex;
		align-items: center;
		gap: 0.5rem;
		margin-left: 2rem;
		letter-spacing: 1px;
		text-shadow: 0 0 10px #00fff7, 0 0 20px #2d4df1;
	}
	.top-navbar .logo i {
		font-size: 2rem;
		color: #00fff7;
		filter: drop-shadow(0 0 6px #00fff7);
	}
	.top-navbar .nav {
		display: flex;
		align-items: center;
		gap: 1.2rem;
		margin-right: 2rem;
	}
	.top-navbar .nav-link {
		color: #f0f0f0;
		font-weight: 500;
		font-size: 1.08rem;
		text-decoration: none;
		padding: 0.4rem 1.1rem;
		border-radius: 18px;
		transition: background 0.2s, color 0.2s, box-shadow 0.2s;
		position: relative;
	}
	.top-navbar .nav-link.active, .top-navbar .nav-link:hover {
		background: linear-gradient(90deg, #00fff7 0%, #2d4df1 100%);
		color: #181c1f;
		box-shadow: 0 2px 12px 0 rgba(0,255,255,0.12);
		text-shadow: none;
	}
	.top-navbar .nav-link i {
		margin-right: 0.5rem;
	}
	.top-navbar .logout-form {
		display: inline-block;
		margin-left: 1.2rem;
	}
	.top-navbar .logout-btn {
		background: none;
		border: 1.5px solid #00fff7;
		color: #00fff7;
		border-radius: 18px;
		padding: 0.4rem 1.2rem;
		font-weight: 500;
		font-size: 1.08rem;
		transition: background 0.2s, color 0.2s;
		cursor: pointer;
		display: flex;
		align-items: center;
		gap: 0.5rem;
	}
	.top-navbar .logout-btn:hover {
		background: linear-gradient(90deg, #00fff7 0%, #2d4df1 100%);
		color: #181c1f;
	}
</style>
<nav class="top-navbar">
	<a href="/" class="logo">
		<i class="fas fa-rocket"></i> Portfolio Settings
	</a>
	<div class="nav">
		<a href="{{ route('admin.dashboard') }}" class="nav-link{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}">
			<i class="fas fa-home"></i> Dashboard
		</a>
		<a href="{{ route('admin.profile') }}" class="nav-link{{ request()->routeIs('admin.profile') ? ' active' : '' }}">
			<i class="fas fa-user"></i> Profile
		</a>
		<a href="{{ route('admin.analytics') }}" class="nav-link{{ request()->routeIs('admin.analytics') ? ' active' : '' }}">
			<i class="fas fa-chart-bar"></i> Analytics
		</a>
		<a href="/skills" class="nav-link{{ request()->is('skills') ? ' active' : '' }}">
			<i class="fas fa-code"></i> Skills
		</a>
		<a href="/education" class="nav-link{{ request()->is('education') ? ' active' : '' }}">
			<i class="fas fa-graduation-cap"></i> Education
		</a>
		<a href="/work" class="nav-link{{ request()->is('work') ? ' active' : '' }}">
			<i class="fas fa-briefcase"></i> Projects
		</a>
		<a href="/" class="nav-link{{ request()->is('/') ? ' active' : '' }}">
			<i class="fas fa-globe"></i> View Portfolio
		</a>
		<form method="POST" action="{{ route('logout') }}" class="logout-form">
			@csrf
			<button type="submit" class="logout-btn">
				<i class="fas fa-sign-out-alt"></i> Logout
			</button>
		</form>
	</div>
</nav>


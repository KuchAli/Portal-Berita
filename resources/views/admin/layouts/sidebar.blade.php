<style>
    .sidebar-admin {
        width: 260px;   
        height: 200vh;
        background-color: #1f2937; /* Mirip AdminLTE Dark */
        color: #cbd5e1;
        padding: 20px;
    }

    .sidebar-admin a {
        color: #cbd5e1;
        font-size: 15px;
        padding: 10px 14px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        transition: 0.2s;
    }

    .sidebar-admin a:hover {
        background-color: #374151;
        color: #fff;
    }

    .sidebar-admin .active {
        background-color: #201f33 !important; 
        color: #fff !important;
    }

    .sidebar-title {
        color: #fff;
        font-size: 20px;
        margin-bottom: 20px;
        font-weight: bold;
    }
</style>

<div class="sidebar-admin">

    <div class="d-flex align-items-center mb-4 gap-2">
        <img src="{{ asset('images/logo.png') }}" 
            alt="Logo Admin"
            style="width: 80px; height: 96px; border-radius: 6px; object-fit: cover;">

        <span class="sidebar-title">Admin Panel</span>
    </div>
    <hr>

    <ul class="nav nav-pills flex-column mb-auto">

        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}"
               class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.articles.index') }}"
               class="{{ request()->is('admin/articles*') ? 'active' : '' }}">
                <i class="bi bi-newspaper"></i> Artikel
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.categories.index') }}"
               class="{{ request()->is('admin/categories*') ? 'active' : '' }}">
                <i class="bi bi-list-ul"></i> Kategori
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.users.index') }}"
               class="{{ request()->is('admin/users*') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Pengguna
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('admin.comments.index') }}"
               class="{{ request()->is('admin/comments*') ? 'active' : '' }}">
                <i class="bi bi-chat-dots"></i> Komentar
            </a>
        </li>

        <li class="nav-item">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-link text-start p-3 mt-4 text-decoration-none" style="color: #bf4834;">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </li>
    </ul>
</div>

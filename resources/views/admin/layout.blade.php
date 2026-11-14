<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Clineva Research Laboratories</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/icomoon/style.css') }}">
    <style>
        :root {
            --primary: #0077C8;
            --primary-hover: #005FA3;
            --primary-light: rgba(0, 119, 200, 0.08);
            --dark: #0A1C32;
            --sidebar-bg: #0B192C;
            --sidebar-text: #94A3B8;
            --sidebar-active: #0077C8;
            --bg-body: #F4F7FB;
            --card-bg: #FFFFFF;
            --border-color: #E2E8F0;
            --text-main: #1E293B;
            --text-muted: #64748B;
            --success: #10B981;
            --warning: #F59E0B;
            --danger: #EF4444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
        }

        /* Sidebar */
        aside.admin-sidebar {
            width: 260px;
            background: var(--sidebar-bg);
            color: var(--sidebar-text);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 50;
            transition: transform 0.3s ease;
        }

        .sidebar-brand {
            padding: 24px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .sidebar-brand img {
            height: 38px;
            width: auto;
            background: #ffffff;
            padding: 4px 8px;
            border-radius: 8px;
        }

        .sidebar-brand-text {
            font-size: 15px;
            font-weight: 700;
            color: #FFFFFF;
            line-height: 1.2;
        }

        .sidebar-brand-text span {
            display: block;
            font-size: 11px;
            font-weight: 500;
            color: #38BDF8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 2px;
        }

        .sidebar-nav {
            padding: 20px 12px;
            flex: 1;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .nav-section-title {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            color: #64748B;
            padding: 12px 12px 6px;
            font-weight: 700;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            color: var(--sidebar-text);
            text-decoration: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .nav-link i {
            font-size: 17px;
            width: 20px;
            text-align: center;
        }

        .nav-link:hover {
            color: #FFFFFF;
            background: rgba(255, 255, 255, 0.06);
        }

        .nav-link.active {
            color: #FFFFFF;
            background: var(--primary);
            box-shadow: 0 4px 12px rgba(0, 119, 200, 0.35);
        }

        .nav-link.nav-link-logout {
            color: #F87171;
            margin-top: 4px;
        }

        .nav-link.nav-link-logout:hover {
            color: #EF4444;
            background: rgba(239, 68, 68, 0.12);
        }

        .sidebar-footer {
            padding: 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(0, 0, 0, 0.15);
        }

        .user-profile-widget {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .user-profile-info {
            display: flex;
            align-items: center;
            gap: 10px;
            overflow: hidden;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 999px;
            background: linear-gradient(135deg, #0077C8, #00A3E0);
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            flex-shrink: 0;
        }

        .user-meta {
            overflow: hidden;
        }

        .user-name {
            font-size: 13.5px;
            font-weight: 600;
            color: #FFFFFF;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-email {
            font-size: 11px;
            color: #94A3B8;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .logout-btn {
            background: none;
            border: none;
            color: #94A3B8;
            padding: 8px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .logout-btn:hover {
            color: #EF4444;
            background: rgba(239, 68, 68, 0.1);
        }

        /* Main Content Wrapper */
        .admin-main {
            margin-left: 260px;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Top Header */
        header.admin-header {
            background: #FFFFFF;
            border-bottom: 1px solid var(--border-color);
            padding: 14px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 40;
        }

        .header-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--dark);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .btn-live-site {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            background: #F1F5F9;
            color: #334155;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            transition: all 0.2s;
        }

        .btn-live-site:hover {
            background: #E2E8F0;
            color: #0F172A;
        }

        .badge-status-online {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 10px;
            background: rgba(16, 185, 129, 0.1);
            color: #059669;
            font-size: 12px;
            font-weight: 600;
            border-radius: 999px;
        }

        .badge-status-dot {
            width: 7px;
            height: 7px;
            border-radius: 999px;
            background: #10B981;
        }

        /* Content Area */
        .admin-content {
            padding: 28px;
            flex: 1;
        }

        /* Flash Alerts */
        .alert {
            padding: 14px 18px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success {
            background: #ECFDF5;
            color: #065F46;
            border: 1px solid #A7F3D0;
        }

        .alert-danger {
            background: #FEF2F2;
            color: #991B1B;
            border: 1px solid #FECACA;
        }

        /* Responsive Mobile Drawer */
        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 20px;
            color: var(--text-main);
            cursor: pointer;
        }

        /* Cards */
        .content-card {
            background: #FFFFFF;
            border-radius: 14px;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 12px rgba(10, 28, 50, 0.03);
            overflow: hidden;
            margin-bottom: 24px;
        }

        .card-head {
            padding: 18px 24px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }

        .card-head-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--dark);
        }

        .card-head-badge {
            font-size: 12px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 999px;
            background: #F1F5F9;
            color: #475569;
        }

        /* Statistics Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: #FFFFFF;
            border-radius: 14px;
            padding: 22px 24px;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 12px rgba(10, 28, 50, 0.03);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(10, 28, 50, 0.06);
        }

        .stat-info .stat-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-muted);
            margin-bottom: 6px;
        }

        .stat-info .stat-value {
            font-size: 28px;
            font-weight: 800;
            color: var(--dark);
            line-height: 1;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .stat-icon.primary { background: rgba(0, 119, 200, 0.1); color: #0077C8; }
        .stat-icon.success { background: rgba(16, 185, 129, 0.1); color: #10B981; }
        .stat-icon.warning { background: rgba(245, 158, 11, 0.1); color: #F59E0B; }
        .stat-icon.indigo  { background: rgba(99, 102, 241, 0.1); color: #6366F1; }

        /* Two Column Split */
        .dashboard-split {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
        }

        /* Tables */
        .table-responsive {
            overflow-x: auto;
            width: 100%;
        }

        table.admin-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13.5px;
            text-align: left;
        }

        table.admin-table th {
            background: #F8FAFC;
            padding: 12px 20px;
            text-align: left;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #64748B;
            border-bottom: 1px solid var(--border-color);
        }

        table.admin-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #F1F5F9;
            vertical-align: middle;
        }

        table.admin-table tr:hover td {
            background: #F8FBFF;
        }

        /* Badges */
        .badge-category {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-clinical { background: #E0F2FE; color: #0284C7; }
        .badge-babe     { background: #EDE9FE; color: #7C3AED; }
        .badge-medico   { background: #FEF3C7; color: #D97706; }

        .btn-action-view {
            padding: 6px 12px;
            font-size: 12.5px;
            font-weight: 600;
            color: var(--primary);
            background: #F0F9FF;
            border: 1px solid #BAE6FD;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.2s;
        }

        .btn-action-view:hover {
            background: var(--primary);
            color: #FFFFFF;
            border-color: var(--primary);
        }

        /* Forms */
        .form-control,
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px 14px;
            font-size: 14px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            background: #FFFFFF;
            color: var(--text-main);
            outline: none;
            transition: all 0.2s ease;
            box-sizing: border-box;
        }

        .form-control:focus,
        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(0, 119, 200, 0.12);
        }

        /* System Info List */
        .system-list {
            padding: 12px 20px;
        }

        .system-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 11px 0;
            border-bottom: 1px solid #F1F5F9;
            font-size: 13px;
        }

        .system-item:last-child {
            border-bottom: none;
        }

        .system-label {
            color: var(--text-muted);
            font-weight: 500;
        }

        .system-val {
            font-weight: 600;
            color: var(--dark);
        }

        /* Admin Accounts List */
        .admin-account-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 20px;
            border-bottom: 1px solid #F1F5F9;
        }

        .admin-account-item:last-child {
            border-bottom: none;
        }

        .admin-account-meta {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .admin-account-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--dark);
        }

        .admin-account-email {
            font-size: 12px;
            color: var(--text-muted);
        }

        @media (max-width: 1199px) {
            .stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .dashboard-split {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 991px) {
            aside.admin-sidebar {
                transform: translateX(-100%);
            }

            aside.admin-sidebar.open {
                transform: translateX(0);
            }

            .admin-main {
                margin-left: 0;
                width: 100%;
            }

            .mobile-toggle {
                display: block;
            }
        }

        @media (max-width: 575px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .admin-content {
                padding: 16px;
            }

            header.admin-header {
                padding: 12px 16px;
            }
        }
    </style>
    @yield('styles')
</head>
<body>

    <!-- Sidebar Navigation -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('image/logo/logo.svg') }}" alt="Clineva">
            <div class="sidebar-brand-text">
                Clineva
                <span>Admin Console</span>
            </div>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-section-title">Main Menu</div>
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="icon-advance"></i>
                <span>Dashboard</span>
            </a>

            <div class="nav-section-title">Content & SEO</div>
            <a href="{{ route('admin.blogs.index') }}" class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
                <i class="icon-file-word"></i>
                <span>Blog Posts</span>
                @php
                    try {
                        $publishedBlogsCount = \App\Models\BlogPost::where('is_published', true)->count();
                    } catch (\Throwable $e) {
                        $publishedBlogsCount = 0;
                    }
                @endphp
                @if($publishedBlogsCount > 0)
                    <span style="margin-left: auto; background: rgba(0, 126, 138, 0.15); color: var(--primary); font-size: 11px; padding: 2px 7px; border-radius: 999px; font-weight: 700;">{{ $publishedBlogsCount }}</span>
                @endif
            </a>
            <a href="{{ route('admin.blog-categories.index') }}" class="nav-link {{ request()->routeIs('admin.blog-categories.*') ? 'active' : '' }}">
                <i class="icon-tag"></i>
                <span>Categories</span>
            </a>

            <div class="nav-section-title">Careers Portal</div>
            <a href="{{ route('admin.jobs.index') }}" class="nav-link {{ request()->routeIs('admin.jobs.*') ? 'active' : '' }}">
                <i class="icon-suitcase"></i>
                <span>Job Postings</span>
            </a>

            <a href="{{ route('admin.applications.index') }}" class="nav-link {{ request()->routeIs('admin.applications.*') ? 'active' : '' }}">
                <i class="icon-file-word"></i>
                <span>Applications</span>
                @php
                    try {
                        $pendingAppsCount = \App\Models\JobApplication::where('status', 'pending')->count();
                    } catch (\Throwable $e) {
                        $pendingAppsCount = 0;
                    }
                @endphp
                @if($pendingAppsCount > 0)
                    <span style="margin-left: auto; background: #EF4444; color: #fff; font-size: 11px; padding: 2px 7px; border-radius: 999px; font-weight: 700;">{{ $pendingAppsCount }}</span>
                @endif
            </a>

            <div class="nav-section-title">Site Inquiries</div>
            <a href="{{ route('admin.inquiries.index') }}" class="nav-link {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
                <i class="icon-contacts"></i>
                <span>Contact Messages</span>
                @php
                    try {
                        $unreadInquiriesCount = \App\Models\Contact::where('status', 'unread')->count();
                    } catch (\Throwable $e) {
                        $unreadInquiriesCount = 0;
                    }
                @endphp
                @if($unreadInquiriesCount > 0)
                    <span style="margin-left: auto; background: #EF4444; color: #fff; font-size: 11px; padding: 2px 7px; border-radius: 999px; font-weight: 700;">{{ $unreadInquiriesCount }}</span>
                @endif
            </a>

            <div class="nav-section-title">Account</div>
            <form id="sidebarLogoutForm" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('sidebarLogoutForm').submit();" class="nav-link nav-link-logout">
                <i class="icon-arrow-right"></i>
                <span>Logout</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="user-profile-widget">
                <div class="user-profile-info">
                    <div class="user-avatar">
                        {{ strtoupper(substr(Auth::guard('admin')->user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <div class="user-meta">
                        <div class="user-name">{{ Auth::guard('admin')->user()->name ?? 'Administrator' }}</div>
                        <div class="user-email">{{ Auth::guard('admin')->user()->email ?? 'admin@clineva.in' }}</div>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="logout-btn" title="Sign Out">
                        <i class="icon-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="admin-main">
        <header class="admin-header">
            <div style="display: flex; align-items: center; gap: 14px;">
                <button class="mobile-toggle" onclick="document.getElementById('adminSidebar').classList.toggle('open')">
                    ☰
                </button>
                <h1 class="header-title">@yield('page_title', 'Dashboard')</h1>
            </div>

            <div class="header-actions">
                <span class="badge-status-online">
                    <span class="badge-status-dot"></span>
                    System Live
                </span>
                <a href="{{ route('home') }}" target="_blank" class="btn-live-site">
                    <span>View Public Site</span>
                    <i class="icon-arrow-right"></i>
                </a>
                <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="btn-live-site" style="color: #EF4444; cursor: pointer; border-color: rgba(239, 68, 68, 0.2);">
                        <span>Sign Out</span>
                    </button>
                </form>
            </div>
        </header>

        <main class="admin-content">
            @if(session('success'))
                <div class="alert alert-success">
                    ✓ {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    ✕ {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

</body>
</html>


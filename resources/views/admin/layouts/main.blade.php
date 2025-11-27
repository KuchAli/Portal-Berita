<!-- resources/views/admin/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f6fa;
        }
        .sidebar {
            width: 240px;
            height: 100vh;
            background: #1f2937;
            color: #fff;
            
        }
        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            padding: 12px ;
            display: block;
            border-radius: 6px;
        }
        .sidebar a:hover,
        .sidebar .active {
            background: #374151;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- SIDEBAR -->
   
        @include('admin.layouts.sidebar')
    
    <!-- MAIN CONTENT -->
    <main class="flex-grow-1 p-4">
        @yield('admin-content')
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

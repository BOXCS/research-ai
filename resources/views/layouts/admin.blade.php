<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Research AI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 fixed h-full px-4 py-8">
            <h1 class="text-2xl font-bold mb-8">Research AI Admin</h1>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('research-products.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->is('admin/research-products*') ? 'bg-gray-700' : '' }}">
                        <i class="fas fa-flask mr-2"></i> Research Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('publications.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->is('admin/publications*') ? 'bg-gray-700' : '' }}">
                        <i class="fas fa-book mr-2"></i> Publications
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengabdian.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->is('admin/pengabdian*') ? 'bg-gray-700' : '' }}">
                        <i class="fas fa-book mr-2"></i> Pengabdian
                    </a>
                </li>
                <li>
                    <a href="{{ route('team-member.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->is('admin/team-member*') ? 'bg-gray-700' : '' }}">
                        <i class="fas fa-book mr-2"></i> Team
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="ml-64 p-8">
            @yield('content')
        </div>
    </div>

    @stack('scripts')
</body>
</html>
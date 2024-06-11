<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-200">
    <div class="p-10">
            
        <a href="#" class="block max-w-lg mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img class="w-24 h-24 mb-3 object-cover rounded-full shadow-lg mx-auto" src="https://images.unsplash.com/photo-1511367461989-f85a21fda167?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $detail_user->name }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $detail_user->email }}</p>
        </a>
    
    </div>
</body>
</html>
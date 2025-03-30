<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place to Go</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="text-2xl font-bold">Place To Go</div>
            <nav class="space-x-6">
                <a href="{{URL::to('promotion')}}" class="hover:text-gray-300">Home</a>
                <a href="{{ URL::to('promotion/create') }}" class="hover:text-gray-300">Add Promotion</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4 flex-grow">
        @yield("isihalaman")
    </main>

<footer class="bg-blue-600 text-white py-6 mt-auto">
    <div class="container mx-auto text-center">
        <p>&copy; 2025 PlaceToGo. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>

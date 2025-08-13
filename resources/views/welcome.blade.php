<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      font-family: 'Segoe UI', sans-serif;
    }
  </style>
</head>

<body>
  
  <!-- Navbar -->
  <x-user-navbar></x-user-navbar>

  <!-- Page Container -->
  <div class="flex flex-col min-h-screen items-center py-10 px-4">

    <!-- Title -->
    <h1 class="text-4xl font-extrabold text-blue-800 drop-shadow-lg mb-6">
      Check Your Skills
    </h1>

    <!-- Search Box -->
    <div class="relative w-full max-w-md mb-10">
      <input 
        class="w-full px-5 py-3 text-gray-800 border border-gray-300 rounded-2xl shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition" 
        type="text" 
        placeholder="Search Quiz...">
      
      <button class="absolute right-3 top-3 bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-full shadow-md transition">
        <svg xmlns="http://www.w3.org/2000/svg" height="20px" 
          viewBox="0 -960 960 960" width="20px" fill="white">
          <path d="M784-120 532-372q-30 24-69 38t-83 
          14q-109 0-184.5-75.5T120-580q0-109 
          75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 
          44-14 83t-38 69l252 252-56 56ZM380-400q75 
          0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 
          0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
        </svg>
      </button>
    </div>

    <!-- Category List -->
    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
      <h2 class="text-2xl font-bold text-blue-600 text-center py-4 border-b border-gray-200">
        Category List
      </h2>
      
      <ul>
        <!-- Header -->
        <li class="bg-blue-50 font-semibold text-gray-700">
          <ul class="flex justify-between text-center py-3 px-4">
            <li class="w-1/6">S. No</li>
            <li class="w-1/4">Name</li>
            <li class="w-1/4">Quiz Count</li>
            <li class="w-1/6">Action</li>
          </ul>
        </li>

        <!-- Data Rows -->
        @foreach ($categories as $key=> $category)
        <li class="hover:bg-blue-100 transition">
          <ul class="flex justify-between text-center py-3 px-4 border-t border-gray-200">
            <li class="w-1/6 flex items-center justify-center font-medium">{{$key+1}}</li>
            <li class="w-1/4 flex items-center justify-center">{{ $category->name }}</li>
            <li class="w-1/4 flex items-center justify-center">{{ $category->quizzes_count }}</li>
            <li class="w-1/6 flex items-center justify-center gap-3">

              <!-- View Quiz Button -->
              <a href="user-quiz-list/{{$category->id}}/{{ $category->name }}" 
                 class="bg-green-500 hover:bg-green-600 text-white p-2 rounded-full shadow-md transition">
                <i class="fa-solid fa-eye"></i>
              </a>
            </li>
          </ul>
        </li>
        @endforeach

      </ul>
    </div>

  </div>
<x-footer-user></x-footer-user>
</body>
</html>

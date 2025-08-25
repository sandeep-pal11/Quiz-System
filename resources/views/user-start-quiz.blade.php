<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Quiz List</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      font-family: 'Segoe UI', sans-serif;
    }
  </style>
</head>

<body>

  <x-user-navbar></x-user-navbar>

  <div class="flex flex-col min-h-screen items-center py-10 px-4">

    <!-- Title + Quiz Info -->
    <div class="w-full max-w-4xl text-center space-y-4">
      <h1 class="text-3xl font-extrabold text-blue-800 drop-shadow-lg">
        {{$quizname}}
      </h1>

      <h2 class="text-lg text-blue-800 font-bold">
        This Quiz Contains {{$quizcount}} Questions and no limit to attempt this Quiz
      </h2>

      <h1 class="text-2xl text-blue-800 font-bold">
        Good Luck
      </h1>

    <a href="/user-signup" 
   class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md transition inline-block">
   Login / SignUp to Start Quiz
   </a>

    </div>

  </div>

</body>
</html>
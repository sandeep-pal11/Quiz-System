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

    <!-- Title + Back -->
    <div class="flex items-center justify-between w-full max-w-4xl mb-6">
      <h1 class="text-3xl font-extrabold text-blue-800 drop-shadow-lg">{{$quizname}}
        
      </h1>
    </div>
  </div>

</body>
</html>

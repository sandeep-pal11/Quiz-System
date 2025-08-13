<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Admin Categories Page</title>
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

  <x-navbar :email="$email" />

  <div class="flex flex-col items-center py-10 px-4 min-h-screen">

    <!-- Title -->
    <h1 class="text-4xl font-extrabold text-blue-800 drop-shadow-lg mb-8">
      Manage Categories
    </h1>

    <!-- Add Category Card -->
    <div class="w-full max-w-lg bg-white rounded-2xl shadow-xl p-6 mb-10">
      
      <h3 class="text-2xl font-bold text-center text-blue-700 mb-6">Add Category</h3>

      @if(session('success'))
      <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4 flex justify-between items-center">
        {{ session('success') }}
        <button type="button" onclick="this.parentElement.remove()">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      @endif

      @if($errors->any())
      <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4 flex justify-between items-center">
        {{ $errors->first() }}
        <button type="button" onclick="this.parentElement.remove()">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      @endif

      <form action="/add-category" method="POST" class="space-y-4">
        @csrf
        <div>
          <label for="category" class="block mb-1 font-medium text-gray-700">
            <i class="fas fa-tag me-2"></i>Category Name
          </label>
          <input type="text" id="category" name="category" 
                 value="{{ old('category') }}"
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 @error('category') border-red-500 @enderror">
          @error('category')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold shadow-md transition">
          Add
        </button>
      </form>
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
            <li class="w-2/4">Creator</li>
            <li class="w-1/6">Action</li>
          </ul>
        </li>

        <!-- Rows -->
        @foreach ($categories as $category)
        <li class="hover:bg-blue-100 transition">
          <ul class="flex justify-between text-center py-3 px-4 border-t border-gray-200">
            <li class="w-1/6 flex items-center justify-center font-medium">{{ $category->id }}</li>
            <li class="w-1/4 flex items-center justify-center">{{ $category->name }}</li>
            <li class="w-2/4 flex items-center justify-center">{{ $category->creator }}</li>
            <li class="w-1/6 flex items-center justify-center gap-3">
              
              <!-- Delete Button -->
              <a href="category/delete/{{$category->id}}" 
                 class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-full shadow-md transition">
                <i class="fa-solid fa-trash"></i>
              </a>

              <!-- View Quiz Button -->
              <a href="quiz-list/{{$category->id}}/{{ $category->name }}" 
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

  <p class="text-center mt-6 text-white">&copy; 2025 Admin Portal</p>

</body>
</html>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Admin Categories Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      border-radius: 1rem;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
    }

    .form-control {
      border-radius: 0.5rem;
    }

    .btn-primary {
      border-radius: 0.5rem;
      font-weight: bold;
    }

    .form-label {
      font-weight: 500;
    }

    .form-check-label {
      cursor: pointer;
    }
  </style>
</head>

<body class="bg-gray-100">

  <x-navbar :email="$email" />

  <section class="vh-100 d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="card p-4">
            <div class="card-body text-center">
              <h3 class="mb-4">Add Category</h3>
              @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @if($errors->any())
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first() }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif


              <form action="/add-category" method="POST">
                @csrf
                <div class="form-floating mb-3">
                  <input type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                    name="category" placeholder="Enter category name" value="{{ old('category') }}">
                  <label for="category"><i class="fas fa-tag me-2"></i>Enter Category Name</label>
                  @error('category')
                  <div class="text-danger text-start small">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Tailwind-styled Button -->
                <button type="submit"
                  class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded w-100 font-semibold transition duration-300 mt-3">
                  Add
                </button>
              </form>


            </div>
            <div class="w-full max-w-4xl mx-auto">
              <h1 class="text-2xl text-blue-500 text-center mb-4">Category List</h1>
              <ul class="border border-gray-200">

                <!-- Header Row -->
                <li class="p-2 font-bold">
                  <ul class="flex justify-between text-center">
                    <li class="w-1/6">S. No</li>
                    <li class="w-1/4">Name</li>
                    <li class="w-2/4">Creator</li>
                    <li class="w-1/6">Action</li>
                  </ul>
                </li>

                <!-- Data Rows -->
                @foreach ($categories as $category)
                <li class="even:bg-green-100 p-2">
                  <ul class="flex justify-between text-center">
                    <li class="w-1/6 flex items-center justify-center">{{ $category->id }}</li>
                    <li class="w-1/4 flex items-center justify-center">{{ $category->name }}</li>
                    <li class="w-2/4 flex items-center justify-center">{{ $category->creator }}</li>
                    <li class="w-1/6 flex items-center justify-center text-red-500 cursor-pointer">
                      <a href="category/delete/{{$category->id}}">
                         <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                        fill="#1f1f1f">
                        <path
                          d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                      </svg>
                      </a>

                      <a href="quiz-list/{{$category->id}}/{{ $category->name }}">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                      </a>
                      
                    </li>
                  </ul>
                </li>
                @endforeach

              </ul>
            </div>


          </div>
          <p class="text-center mt-3 text-muted">&copy; 2025 Admin Portal</p>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
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
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .form-control {
      border-radius: 0.5rem;
    }

    .btn-back {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #0d6efd;
      color: white;
      padding: 6px 14px;
      border-radius: 0.5rem;
      font-size: 0.9rem;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .btn-back:hover {
      background: #084298;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-decoration: none;
      color: white;
    }

    .table-header {
      background: rgba(0, 0, 0, 0.05);
      border-radius: 0.3rem;
      font-weight: 600;
    }

    .mcq-row {
      transition: background 0.3s ease;
    }

    .mcq-row:hover {
      background: rgba(13, 110, 253, 0.1);
    }
  </style>
</head>

<body class="bg-gray-100">

  <x-navbar :email="$email" />

  <section class="vh-100 d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <div class="card p-4">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0">Category Name : {{$category}}</h3>
                <a class="btn-back" href="/add-quiz">
                  <i class="fa fa-arrow-left"></i> Back
                </a>
              </div>

              <div class="w-full max-w-4xl mx-auto">
                <ul class="border border-gray-200 rounded">
                  <!-- Header Row -->
                  <li class="p-2 table-header">
                    <ul class="flex justify-between text-center">
                      <li class="w-30">Quiz Id</li>
                      <li class="w-140">Name</li>
                      <li class="w-30">Action</li>
                    </ul>
                  </li>

                  <!-- Data Rows -->
                  @foreach ($quizdata as $item)
                  <li class="p-2 mcq-row">
                    <ul class="flex justify-between text-center">
                      <li class="w-30 flex items-center justify-center">{{ $item->id }}</li>
                      <li class="w-140 flex items-center justify-center">{{ $item->name }}</li>
                      <li class="w-30">
                         <a href="{{ route('show.quiz', [$item->id, $item->name]) }}">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                      </a>
                    </li>
                    </ul>
                  </li>
                  @endforeach
                </ul>
              </div>
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

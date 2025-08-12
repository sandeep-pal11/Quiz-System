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
                <h3 class="mb-0">Quiz Name : {{$quizName}}</h3>
                <a class="btn-back" href="/add-quiz">
                  <i class="fa fa-arrow-left"></i> Back
                </a>
              </div>

              <div class="w-full max-w-4xl mx-auto">
                <ul class="border border-gray-200 rounded">
                  <!-- Header Row -->
                  <li class="p-2 table-header">
                    <ul class="flex justify-between text-center">
                      <li class="w-30">MCQ Id</li>
                      <li class="w-170">Question</li>
                    </ul>
                  </li>

                  <!-- Data Rows -->
                  @foreach ($mcqs as $mcq)
                  <li class="p-2 mcq-row">
                    <ul class="flex justify-between text-center">
                      <li class="w-30 flex items-center justify-center">{{ $mcq->id }}</li>
                      <li class="w-170 flex items-center justify-center">{{ $mcq->question }}</li>
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

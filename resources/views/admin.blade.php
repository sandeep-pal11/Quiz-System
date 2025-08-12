<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

    <!-- Rest of the page content -->

  </body>
</html>

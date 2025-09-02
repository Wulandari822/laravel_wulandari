<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #f2f2f2;
      font-family: 'Roboto', sans-serif;
    }
    h1 {
      font-family: 'Nunito', sans-serif;
      font-weight: 700;
      color: #0d6efd;
    }
    p {
      font-size: 1.1rem;
      color: #495057;
    }
    .card {
      width: 400px;
      border-radius: 15px;
    }
    .btn-primary {
      font-weight: 600;
    }
    .left-side {
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 15px;
      min-width: 250px;
    }
    .hospital-img {
      max-width: 400px;
      margin-right: 60px;
    }
  </style>
</head>
<body>

@if (session('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
  </div>
@endif

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
  <div class="d-flex gap-4 flex-wrap align-items-center justify-content-center w-100">
    
    <div class="left-side">
      <h1>Sistem Rumah Sakit</h1>
      <p>
        Ini adalah project tes teknis untuk demonstrasi login sistem rumah sakit. 
        Silakan masukkan akun Anda untuk mengakses dashboard dan mulai mengelola data rumah sakit secara efisien.
      </p>
    </div>

   
    <div>
        <img src="{{ asset('images/hospitality.png') }}"alt="Hospital" class="hospital-img">
    </div>

    <div class="card shadow p-4" style="max-width: 500px;">
    <h5 class="text-center mb-4">Silakan masuk dengan akun Anda</h5>
  
    <form action="{{ route('login') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Masukkan username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Masukkan password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100 rounded">Masuk</button>
  </form>
</div>

  </div>
</div>

</body>
</html>

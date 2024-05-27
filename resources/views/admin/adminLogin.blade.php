<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .card-header {
            background-color: #343a40;
            color: #fff;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">RestApp | Admin Panel</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Admin Giriş</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Email gir">
                                @error('email')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Parola</label>
                                <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control" placeholder="Parola gir">
                                @error('password')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger btn-block">Giriş</button>
                            </div>
                        </form>
                        @if (session('msg'))
                            <div class="alert alert-danger mt-3">{{ session('msg') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>  

</body>
</html>
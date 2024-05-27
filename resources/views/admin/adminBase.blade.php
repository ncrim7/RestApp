<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="{{route("admin.dashboard")}}" class="navbar-brand">RestApp | Admin Panel</a>

            <div class="navbar-nav nav">
                <a href="{{route("adminLogout")}}" class="nav-link nav-item">Çıkış Yap</a>
            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-dark bg-secondary py-0 small">
        <div class="container">
            <div class="navbar-nav nav">
                <a href="{{route("admin.dashboard")}}" class="nav-link nav-item">Ana Sayfa</a>
                <a href="{{route("admin.category")}}" class="nav-link nav-item">Kategori Düzenle</a>
                <a href="{{route("admin.products.index")}}" class="nav-link nav-item">Ürün Düzenle</a>
                <a href="{{route("admin.products.insert")}}" class="nav-link nav-item">Ürün Ekle</a>
            </div>
        </div>
    </div>

    @section('content')

    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
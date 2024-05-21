<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            padding: 20px;
        }
        .profile-img {
            max-width: 50%;
            max-height: 50%;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<header class="bg-dark text-white text-center py-4">
    <h1>Portofolio Saya</h1>
</header>

<div class="container">
    <div class="text-center">
        <img src="{{ asset('assets/profile.jpg') }}" alt="Foto Profil" class="profile-img img-fluid">
    </div>
    <h2 class="text-center">Data Diri</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>Nama:</strong> Febri Tri Purnama Putra</li>
        <li class="list-group-item"><strong>Alamat:</strong> Jl. Pabuaran, Cibadak, Tanah Sareal, Kota Bogor</li>
        <li class="list-group-item"><strong>Email:</strong> 222310067@student.ibik.ac.id</li>
        <li class="list-group-item"><strong>No. Telepon:</strong> 0895617675205</li>
    </ul>

    <h2 class="text-center">Pengalaman</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>2018 - Sekarang:</strong> Web Developer di Perusahaan ABC</li>
        <li class="list-group-item"><strong>2016 - 2018:</strong> Programmer di Perusahaan XYZ</li>
    </ul>

    <h2 class="text-center">Pendidikan</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>2022 - 2026:</strong> Sarjana Teknik Informatika, IBI Kesatuan</li>
    </ul>
</div>

<footer class="bg-dark text-white text-center py-3 mt-4">
    <p>&copy; 2024 Portofolio Saya</p>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

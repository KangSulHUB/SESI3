<!DOCTYPE html>
<html>
<head>
    <title>Mata Kuliah</title>
    <link rel="stylesheet" href="{{ asset('css/matakuliah.css') }}">
</head>
<body>
    <div class="container">
        <h1>Mata Kuliah</h1>
        <ul>
            @foreach ($mataKuliah as $mk)
                <li>{{ $mk }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post-excel')}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- Jika menggunakan Laravel, ini untuk menambahkan token CSRF -->
        <div class="input">
            <input type="file" name="file" id="file">
        </div>
        <button type="submit">Upload</button>
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <style>
        .input-container input,
        .input-container textarea {
            display: block;
        }
    </style>
</head>

<body>
    <br><br><br><br>
    <form method="post" action="{{ url('contact') }}">
        @csrf
        <div class="input-container">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama">
        </div><br>
        <div class="input-container">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div><br>
        <div class="input-container">
            <label for="pesan">Pesan</label>
            <textarea id="pesan" placeholder="Pesan Anda..." name="pesan"></textarea>
        </div><br>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>

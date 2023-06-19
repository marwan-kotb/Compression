<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    input[type="file"] {
        display: block;
        margin-bottom: 10px;
    }

    button[type="submit"] {
        display: block;
        margin: 0 auto;
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0069d9;
    }
</style>
    </head>
    <body>




<form method="post" action="{{ route('compress') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="video">Video file:</label>
        <input type="file" name="video" id="video" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Compress</button>
</form>



    </body>

</h tml>

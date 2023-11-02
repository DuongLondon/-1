<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Document</title>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>
<body>
    <h3>Detail</h3>
    <form action="{{ route('books.update',$book->id) }}" method="POST" class="my-2 mx-2">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Title: </label>
            <input type="text" name="Title" class="form-control" value="{{ $book->Title }} " required readonly>
        </div>
        <div class="form-group">
            <label for="bio">Author: </label>
            <textarea name="Author" class="form-control" required readonly>{{ $book->Author }}</textarea>
        </div>
        <div class="form-group">
            <label for="bio">Genre: </label>
            <textarea name="Genre" class="form-control" required readonly>{{ $book->Genre }}</textarea>
        </div>
        <div class="form-group">
            <label for="bio">PubliccationYear: </label>
            <textarea name="PubliccationYear" class="form-control" required readonly>{{ $book->PubliccationYear }}</textarea>
        </div>
        <div class="form-group">
            <label for="bio">ISBN: </label>
            <textarea name="ISBN" class="form-control" required readonly>{{ $book->ISBN }}</textarea>
        </div>
        <div class="form-group">
            <label for="bio">Cover Image URL: </label>
            <textarea name="CoverImageURL" class="form-control" required readonly>{{ $book->CoverImageURL }}</textarea>
        </div>
        <a href="{{ route('books.index') }}" class="btn btn-success">Return</a>
    </form>
</body>
</html>
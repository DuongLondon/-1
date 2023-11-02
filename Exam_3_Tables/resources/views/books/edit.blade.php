<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>
<body>
    <form action="{{ route('books.update',$book->id) }}" method="POST" class="my-2 mx-2">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Title: </label>
            <input type="text" name="Title" class="form-control" value="{{ $book->Title }} " required>
        </div>
        <div class="form-group">
            <label for="bio">Author: </label>
            <textarea name="Author" class="form-control" required>{{ $book->Author }}</textarea>
        </div>
        <div class="form-group">
            <label for="bio">Genre: </label>
            <textarea name="Genre" class="form-control" required>{{ $book->Genre }}</textarea>
        </div>
        <div class="form-group">
            <label for="bio">Publiccation Year: </label>
            <textarea name="PubliccationYear" class="form-control" required>{{ $book->PubliccationYear }}</textarea>
        </div>
        <div class="form-group">
            <label for="bio">ISBN: </label>
            <textarea name="ISBN" class="form-control" required>{{ $book->ISBN }}</textarea>
        </div>
        <div class="form-group">
            <label for="bio">Cover Image URL: </label>
            <textarea name="CoverImageURL" class="form-control" required>{{ $book->CoverImageURL }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</body>
</html>
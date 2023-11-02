<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Title: </label>
            <input type="text" name="Title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bio">Author: </label>
            <textarea name="Author" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="bio">Genre: </label>
            <textarea name="Genre" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="bio">PubliccationYear </label>
            <textarea name="PubliccationYear" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="bio">ISBN</label>
            <textarea name="ISBN" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="bio">CoverImageURL</label>
            <textarea name="CoverImageURL" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    
    </form>
</body>
</html>
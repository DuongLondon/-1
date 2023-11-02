<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Document</title>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>
<body>
    <form class="">
      <a href="{{ route('books.create') }}" class="btn btn-primary my-3 mx-2"> Add Woman</a>
      @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
            </div>
      @endif
      @if(session('successful'))
          <div class="alert alert-success">
            {{ session('successful') }}
            </div>
      @endif
      @if(session('successfully'))
          <div class="alert alert-success">
            {{ session('successfully') }}
            </div>
      @endif
        <table class="table mx-5">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Genre</th>
                <th scope="col">PubliccationYear</th>
                <th scope="col">ISBN</th>
                <th scope="col">CoverImageURL</th>
            </tr>
            </thead>
            <tbody>
            @foreach($book as $bo)    
            <tr>
                <th scope="row">{{ $bo->id }}</th>
                <td>{{ $bo->Title }}</td>
                <td>{{ $bo->Author }}</td>
                <td>{{ $bo->Genre }}</td>
                <td>{{ $bo->PubliccationYear }}</td>
                <td>{{ $bo->ISBN }}</td>
                <td>{{ $bo->CoverImageURL }}</td>
                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $bo->id }}">Delete</button>
                  <a href="{{ route('books.edit',$bo->id) }}" class="btn btn-primary">Edit</a>
                  <a href="{{ route('books.show',$bo->id) }}" class="btn btn-success">Show</a>
                </td>
            </tr> 
            <div class="modal fade" id="deleteModal-{{ $bo->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Delete Confirmation</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure to delete this woman?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <form action="{{ route('books.destroy',$bo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete
                          
                        </button>
                      </form>  
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </tbody>
        </table>
    </form>      
</body>
</html>
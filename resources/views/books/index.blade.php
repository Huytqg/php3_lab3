<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center m-3">Danh sách sách</h1>
        <a href="{{route('book.create')}}" class="btn btn-success mb-3">Thêm mới</a>
    </div>
    <table class="table container table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Thumbail</th>
                <th scope="col">publisher</th>
                <th scope="col">publication</th>
                <th scope="col">price</th>
                <th scope="col">quantity</th>
                <th scope="col">category name</th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->title}}</td>
                    <td><img src="{{$book->thumbnail}}" width="60" alt=""></td>
                    <td>{{$book->publisher}}</td>
                    <td>{{$book->publication}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->quantity}}</td>
                    <td>{{$book->name}}</td>
                    <td>
                        <a href="{{route('book.edit', $book->id)}}" class="btn btn-warning text-white">Sửa</a>
                        <form action="{{route('book.destroy', $book->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá không?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
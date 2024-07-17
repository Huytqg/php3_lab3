<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
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
        <h1 class="text-center m-3">Cập nhập sách</h1>
    </div>
    <form action="{{route('book.update', $book->id)}}" method="post" class="container">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$book->id}}">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="" placeholder="" value="{{$book->title}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Url thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" id="" placeholder="" value="{{$book->thumbnail}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">author</label>
            <input type="text" name="author" class="form-control" id="" placeholder="" value="{{$book->author}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Publisher</label>
            <input type="text" name="publisher" class="form-control" id="" placeholder="" value="{{$book->publisher}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Publication</label>
            <input type="date" name="publication" class="form-control" id="" placeholder="" value="{{$book->publication}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" step="0.1" name="price" class="form-control" id="" placeholder="" value="{{$book->price}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="" placeholder="" value="{{$book->quantity}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <select name="category_id" class="form-control" id="" placeholder="">
                @foreach($categories as $cate)
                    <option value="{{$cate->id}}"
                            @if($cate->id === $book->category_id)
                                selected
                            @endif
                            >
                        {{$cate->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Sửa</button>
            <a href="{{route('book.index')}}" class="btn btn-success">Back list</a>
        </div>
    </form>
</body>

</html>
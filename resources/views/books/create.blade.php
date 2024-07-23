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
        <h1 class="text-center m-3">Thêm mới sản phẩm</h1>
    </div>
    <form action="{{route('book.store')}}" method="post" class="container">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Url thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" id="" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">author</label>
            <input type="text" name="author" class="form-control" id="" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Publisher</label>
            <input type="text" name="publisher" class="form-control" id="" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Publication</label>
            <input type="date" name="publication" class="form-control" id="" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" step="0.1" name="price" class="form-control" id="" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <select name="category_id" class="form-control" id="" placeholder="">
                @foreach($categories as $cate)
                    <option value="{{$cate->id}}">
                        {{$cate->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Thêm</button>
            <a href="{{route('book.list')}}" class="btn btn-success">Back list</a>
        </div>
    </form>
</body>

</html>
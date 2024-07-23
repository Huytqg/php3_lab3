<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Đơn Giản</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div style="height: 50px;"></div>
    <!-- <header class="text-white py-3" style="background-color: #52A800;">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo h4">PongPet Shop</div>
            <div class="site-name h5">PongPet Shop</div>
            <form class="form-inline">
                <input class="form-control mr-2" type="search" placeholder="Tìm kiếm..." aria-label="Tìm kiếm">
                <button class="btn btn-outline-light" type="submit">Tìm kiếm</button>
            </form>
            <nav class="d-flex">
                <a class="btn btn-outline-light mx-2" href="#">Đăng nhập</a>
                <a class="btn btn-outline-light" href="#">Đăng ký</a>
            </nav>
        </div>
    </header> -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow" style="background-color: #52A800;">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('book.index')}}">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('book.list')}}">Danh sách sản phẩm</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
    <div class="container">
        <h1 class="text-center m-3">Danh sách sản phẩm</h1>
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
    </div>

    <footer class="text-white text-center py-3" style="background-color: #52A800;">
        <div class="container">
            <p>© 2024 Copyright Gia Huy</p>
            <!-- <p>Thông tin liên hệ: <a href="mailto:email@example.com" class="text-white">email@example.com</a></p>
            <p><a href="#" class="text-white">Chính sách bảo mật</a> | <a href="#" class="text-white">Điều khoản sử dụng</a></p>
            <p>Theo dõi chúng tôi trên <a href="#" class="text-white">Facebook</a>, <a href="#" class="text-white">Twitter</a></p> -->
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
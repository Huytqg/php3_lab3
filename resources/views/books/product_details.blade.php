<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div style="height: 40px;"></div>
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

    <main>
        <br>
        <!-- List sản phẩm -->
        @foreach ($books as $book)
            <div class="container">
                <div style="margin-top: 80px;">
                    <!-- CONTENT -->
                    <main class="d-flex">
                        <!-- Slide bar trai -->
                        <div class="bg-light border-end pt-4 m-4" style="width: 20%; height: calc(100% - 105px);">
                            <ul class="nav flex-column">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{$book->thumbnail}}" width="60" alt="" class="d-block w-100">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </ul>
                        </div>
                        <!-- Main content -->
                        <div>
                            <div class="container m-3">
                                <h1>{{$book->title}}</h1>
                                <span class="text-danger" style="font-weight: bold; font-size: 20px;">{{$book->price}} VNĐ</span><br>
                                <a class="btn btn mt-2" href="#" role="button" style="background-color: #52A800; color: white; font-weight: bold;">Mua ngay</a>
                                <a class="btn btn mt-2" href="#" role="button" style="background-color: #52A800; color: white; font-weight: bold;">Thêm vào giỏ hàng</a><br><br>
                                <span style="font-weight: bold;">Mô tả:</span><br>
                                <span style="margin-top: 50px;">{{$book->publisher}}</span>
                            </div>
                        </div>
                    </main>
                    <!-- END CONTENT -->
                </div>
            </div>
            </div>
            <!-- hết bảng mô tả chi tiết -->
        @endforeach
        <!-- Hết List sản phẩm -->

    </main>
    <div style="height: 300px;"></div>

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
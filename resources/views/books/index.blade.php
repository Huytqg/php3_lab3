<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Đơn Giản</title>

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
        <!-- slide -->
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-vector/flat-design-pet-shop-sale-banner-template_23-2150369068.jpg" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/premium-vector/pet-store-banner-template_578602-259.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/premium-vector/pet-store-banner-social-media-template_578602-514.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- hết slide -->
        <div class="container p-5">
            <!-- List sản phẩm -->
            <div class="container text-center">
                <div class="row row-cols-3">
                    @foreach ($books as $book)
                        <div class="col-xxl-4 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="row p-2">
                                <div class="col">
                                    <a href="{{route('book.product_details', $book->id)}}" style="text-decoration: none; color:black">
                                        <div class="card">
                                            <img src="{{$book->thumbnail}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$book->title}}</h5>
                                                <p class="card-text">{{$book->publisher}}</p>
                                                <a href="#" class="btn btn text-white m-3" style="background-color: #52A800;">Mua ngay</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Hết List sản phẩm -->

    </main>

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
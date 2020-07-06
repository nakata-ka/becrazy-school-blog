<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- BootStrapap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('../css/tax.css') }}">
</head>
<body class="bg-light">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-white ml-3" href="#">Kazuki Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-white" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/admin/home">管理者ページへ</a>
                  </li>
              </ul>
            </div>
          </nav>
    </header>
    <!-- contentsTitle　-->
    <div class="container-fluid bg-dark px-0">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a @if($link_navi=='home')class='nav-link active' @endif href="/bloghome" class="nav-link" >Home</a>
            </li>
            <li class="nav-item">
                <a @if($link_navi=='boardgame')class='nav-link active' @endif href="/category/boardgame" class="nav-link">BoardGame</a>
            </li>
            <li class="nav-item">
                <a @if($link_navi=='mountain')class='nav-link active' @endif href="/category/mountain" class="nav-link">Mountain</a>
            </li>
            <li class="nav-item">
                <a @if($link_navi=='book')class='nav-link active' @endif href="/category/book" class="nav-link">book</a>
            </li>
        </ul>
    </div>
    <!-- main -->
    <div class="container-fluid">
        <div class="row">
            <div class="container-main bg-white col-md-10">
                <div>
                    <h2 class="text-center py-3 my-3">@yield('maintitle')</h2>
                </div>
                @section('main')
                @show
            </div>
        <!-- Side -->
            <div class="container-aside col-md-2 side-content" >
                <div class="row bg-light text-center">
                    <div class="side-title py-3 my-3 col-md-12 text-center">
                        <h3>Profile</h3>
                    </div>
                    <img src="../img/profile.png" class="d-block mx-auto w-50 img-fluid rounded-circle">
                    <div class="profile-text py-3 my-3 col-md-12 text-center">
                        <h5>Name:nakata</h5>
                        26歳社会人の気ままな生活を公開中。
                        ボードゲーム、登山、本、音楽
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark">
        <div class="footer-text d-flex justify-content-end">
            <p class="text-white">--Copyright nakata,2020 All Rights Reserved.</p>
        </div>
    </footer>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

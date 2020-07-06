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
    <link rel="stylesheet" href="{{ asset('../css/admin.css') }}">
</head>
<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-white" href="/">Kazuki Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div clsass="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/login">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/logout">Logout</a>
                        </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/admin/home">管理者ページへ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- side -->
    <div class="container-fluid">
        <div class="row">
            @section('sidebar')
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a @if($link_navi=='articleadd')class='nav-link active' @endif class="nav-link" href="addArticle">
                                <i data-feather="file-plus"></i>
                                記事追加
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='articlelist')class='nav-link active' @endif class="nav-link" href=articleList>
                                <i data-feather="file"></i>
                                記事一覧
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='articleedit')class='nav-link active' @endif class="nav-link" href="articleEdit">
                                <i data-feather="file-text"></i>
                                記事編集
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='articledelete')class='nav-link active' @endif class="nav-link" href="articleDelete">
                                <i data-feather="file-minus"></i>
                                記事削除
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='register')class='nav-link active' @endif class="nav-link" href="register">
                                <i data-feather="users"></i>
                                初期ユーザ登録
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='userlist')class='nav-link active' @endif class="nav-link" href="userList">
                                <i data-feather="user"></i>
                                管理ユーザ一覧
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='pwupdate')class='nav-link active' @endif class="nav-link" href="pwSelect">
                                <i data-feather="user-x"></i>
                                パスワード変更
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='classadd')class='nav-link active' @endif class="nav-link" href="classAdd">
                                <i data-feather="layers"></i>
                                カテゴリー・タグ追加
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='classlist')class='nav-link active' @endif class="nav-link" href="classList">
                                <i data-feather="layers"></i>
                                カテゴリー・タグ一覧
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='classedit')class='nav-link active' @endif class="nav-link" href="classSelect">
                                <i data-feather="layers"></i>
                                カテゴリー・タグ編集
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @if($link_navi=='classdelete')class='nav-link active' @endif class="nav-link" href="classDelete">
                                <i data-feather="layers"></i>
                                カテゴリー・タグ削除
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            @show
    <!-- maincontent -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h4 >@yield('maintitle')</h4>
                </div>
                @section('main')
                @show
            </main>
        </div>
    </div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
    <!-- アイコン -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>

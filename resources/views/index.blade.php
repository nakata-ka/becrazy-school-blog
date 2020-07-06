@extends('layouts.blog')

@section('title','Home')

@section('maintitle','Blog Category')
@section('main')
@parent
<!-- カテゴリー関連 -->
<div class="row　o-3column">
    <div class="container-card d-flex justify-content-around">
        <div class="card my-2" style="width: 23rem;">
            <img src="../img/BoardGame.jpg" class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="https://www.designevo.com/apps/logo/?name=abstract-yellow-game-joystick" preserveAspectRatio="xMidYMid slice" focusable="false" role="png" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/>
            <div class="card-body">
                <h5 class="card-title text-center">BoardGame</h5>
                <p class="card-text text-center">世界中の人気ボードゲームを紹介</p>
                <button type="button" class="btn btn-warning  mx-auto d-block"><a href="/category/boardgame" class="text-body">詳細を見る</a></button>
            </div>
        </div>
        <div class="card my-2" style="width: 23rem;">
            <img src="../img/Mountain.jpg" class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="https://www.designevo.com/apps/logo/?name=abstract-yellow-game-joystick" preserveAspectRatio="xMidYMid slice" focusable="false" role="png" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/>
            <div class="card-body">
                <h5 class="card-title text-center">Mountain</h5>
                <p class="card-text text-center">関東近辺の管理者が登ってきた山を紹介</p>
                <button type="button" class="btn btn-warning  mx-auto d-block"><a href="/category/mountain" class="text-body">詳細を見る</a></button>
            </div>
        </div>
        <div class="card my-2" style="width: 23rem;">
            <img src="../img/Books.jpg" class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="https://www.designevo.com/apps/logo/?name=abstract-yellow-game-joystick" preserveAspectRatio="xMidYMid slice" focusable="false" role="png" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/>
            <div class="card-body">
                <h5 class="card-title text-center">Book</h5>
                <p class="card-text text-center">ミステリーを中心におすすめの本を紹介</p>
                <button type="button" class="btn btn-warning  mx-auto d-block"><a href="/category/book" class="text-body">詳細を見る</a></button>
            </div>
        </div>
    </div>
</div>
<!-- 新着情報関連 -->
<div class="container">
    <div class="text-title">
        <h2 class="text-center py-2 my-5">新着情報</h2>
    </div>
    <div class="article">
        <ul class="list-unstyled mx-3 my-3">
            <li>
                <div class="media">
                    <img src="../img/round.jpg" class="bd-placeholder-img mr-3" width="64" height="64" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 64x64">
                    <div class="media-body">
                        <h5 class="mt-0 text-info">2020.06.05　BLOGが開設されました</h5>
                        6月5日よりBLOGを開設いたしました。このBLOGでは趣味であるボードゲームの紹介や登ってきた山の紹介などを行なって参ります。<br>
                        不定期更新ではございますが是非見ていただければと思います。
                    </div>
                </div>
            </li>
            <li class="pt-3">
                <div class="media">
                    <img src="../img/round.jpg" class="bd-placeholder-img mr-3" width="64" height="64" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 64x64">
                    <div class="media-body">
                        <h5 class="mt-0 text-info">2020.06.07　Board Game記事が更新されました</h5>
                        BoardGameのコンテンツが更新されました。「カタン紹介」<br>
                        是非ご覧ください。
                    </div>
                </div>
            </li>
            <li class="pt-3">
                <div class="media">
                    <img src="../img/round.jpg" class="bd-placeholder-img mr-3" width="64" height="64" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 64x64">
                    <div class="media-body">
                        <h5 class="mt-0 text-info">2020.06.28　Board Game記事が更新されました</h5>
                        BoardGameのコンテンツが更新されました。「宝石の煌めき」<br>
                        おすすめのボードゲームとなりますので是非ご覧ください。
                    </div>
                </div>
            </li>
            <li class="pt-3">
                <div class="media">
                    <img src="../img/round.jpg" class="bd-placeholder-img mr-3" width="64" height="64" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 64x64">
                    <div class="media-body">
                        <h5 class="mt-0 text-info">2020.06.30　Book記事が開設されました</h5>
                        Bookカテゴリーに2冊の本紹介記事が追加されました。<br>
                        ミステリー小説として名作の「十角館の殺人」、横関大さんの話題作「スマイルメーカー」どちらもおすすめ作品となりますのでぜひご覧ください。
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- Tag関連 -->
<div class="container">
    <div class="tag-title pt-5">
        <h2 class="text-center">Tags</h2>
    </div>
    <div class="container py-5">
        <div class="row">
            <ul>
                @foreach ($categories as $category )
                <li class="border rounded border-dark mx-1 my-2" style="display:inline-block">
                    <div class="d-flex justify-content-around">
                        <a class="nav-link text-secondary" href="/tag/{{$category->slug}}">
                            <i data-feather="tag"></i>{{$category->name}}
                        </a>
                    </div>
                </li>
            @endforeach
        </div>
    </div>
</div>
    <!-- アイコン -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
@endsection





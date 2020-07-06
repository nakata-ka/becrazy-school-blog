@extends('layouts.blog')

@section('title','book')

@section('maintitle','Book')
@section('main')
@parent
<div class="container">
    <div class="row d-flex justify-content-around">
        <!-- 綾辻シリーズ -->
        <div class="card mb-3" style="max-width: 500px">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../img/zyukaku.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="https://www.designevo.com/apps/logo/?name=abstract-yellow-game-joystick" preserveAspectRatio="xMidYMid slice" focusable="false" role="png" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <h5 class="card-title mb-0">十角館の殺人</h5>
                            <footer class="blockquote-footer ml-2">2020/06/30</footer>
                        </blockquote>
                        <p class="card-text">ミステリーにハマったきっかけの本。本格ミステリーと呼ばれる新ジャンルを打ち出した綾辻行人さんのデビュー作</p>
                        <button type="button" class="btn btn-warning btn-sm mx-auto d-block"><a href="/category/book/zyukaku" class="text-body">詳細を見る</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- スマイルメーカー -->
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../img/smilemaker.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="https://www.designevo.com/apps/logo/?name=abstract-yellow-game-joystick" preserveAspectRatio="xMidYMid slice" focusable="false" role="png" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <h5 class="card-title mb-0">スマイルメーカー</h5>
                            <footer class="blockquote-footer ml-2">2020/07/01</footer>
                        </blockquote>
                        <p class="card-text">お人好しのタクシードライバーが家出少年や女性弁護士などと関わり、最後には1本の道につながる。。快感ミステリー</p>
                        <button type="button" class="btn btn-warning btn-sm mx-auto d-block"><a href="/category/book/smilemaker" class="text-body">詳細を見る</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


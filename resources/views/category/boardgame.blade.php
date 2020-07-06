@extends('layouts.blog')

@section('title','boardgame')

@section('maintitle','BoardGame')
@section('main')
@parent
<div class="container">
    <div class="row d-flex justify-content-around">
        <!-- カタン -->
        <div class="card mb-3" style="max-width: 500px">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../img/catan.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="https://www.designevo.com/apps/logo/?name=abstract-yellow-game-joystick" preserveAspectRatio="xMidYMid slice" focusable="false" role="png" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <h5 class="card-title mb-0">カタンの開拓者たち</h5>
                            <footer class="blockquote-footer ml-2">2020/06/17</footer>
                        </blockquote>
                        <p class="card-text">王道のボードゲーム。無人島を資源を用いて開拓していく。ただの運だけのゲームでなく交渉や戦略が勝負の鍵を握る。</p>
                        <button type="button" class="btn btn-warning btn-sm mx-auto d-block"><a href="/category/boardgame/catan" class="text-body">詳細を見る</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 宝石の煌めき -->
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../img/splendor.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="https://www.designevo.com/apps/logo/?name=abstract-yellow-game-joystick" preserveAspectRatio="xMidYMid slice" focusable="false" role="png" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <h5 class="card-title mb-0">宝石の煌めき</h5>
                            <footer class="blockquote-footer ml-2">2020/06/18</footer>
                        </blockquote>
                        <p class="card-text">カタン同様かなり知名度の高いゲーム。プレーヤーは宝石商となり宝石を用いて、資産を築いていくゲームとなる。</p>
                        <button type="button" class="btn btn-warning btn-sm mx-auto d-block"><a href="/category/boardgame/splendor" class="text-body">詳細を見る</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


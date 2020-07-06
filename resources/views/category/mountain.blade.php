@extends('layouts.blog')

@section('title','mountain')

@section('maintitle','Mountain')
@section('main')
@parent
<div class="container">
    <div class="row d-flex justify-content-around">
        <!-- 両神山 -->
        <div class="card mb-3" style="max-width: 500px">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../img/ryougami.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="https://www.designevo.com/apps/logo/?name=abstract-yellow-game-joystick" preserveAspectRatio="xMidYMid slice" focusable="false" role="png" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <h5 class="card-title mb-0">両神山</h5>
                            <footer class="blockquote-footer ml-2">2020/07/01</footer>
                        </blockquote>
                        <p class="card-text">埼玉県の西部にある百名山の1つ。標高1,723mで毎年多くの登山者が訪れる</p>
                        <button type="button" class="btn btn-warning btn-sm mx-auto d-block"><a href="/category/mountain/ryougami" class="text-body">詳細を見る</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 天城山 -->
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../img/amagi.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="https://www.designevo.com/apps/logo/?name=abstract-yellow-game-joystick" preserveAspectRatio="xMidYMid slice" focusable="false" role="png" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <h5 class="card-title mb-0">天城山</h5>
                            <footer class="blockquote-footer ml-2">2020/07/01</footer>
                        </blockquote>
                        <p class="card-text">百名山の1つで静岡県伊豆半島にある山。天城山は連山の総称で万三郎岳や万次郎岳がある。</p>
                        <button type="button" class="btn btn-warning btn-sm mx-auto d-block"><a href="/category/mountain/amagi" class="text-body">詳細を見る</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


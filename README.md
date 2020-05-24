# becrazy-school-blog

becrazyのPHPフルスタックエンジニア版最終課題プロジェクト(ブログ)

BeCrazyスクールにおける**PHPフルスタックエンジニアカリキュラム**の最終課題用ベースプロジェクトです。生徒の方はGitHubからフォークして自分専用のリポジトリを作成してください。

ブログ管理用画面やブログのフロントページを作成していただきます。

## 課題の概要

作成するのは自分専用のブログです。Laravel v6.0を利用して
自分専用のブログシステムを作成していただきます。

もちろん先生に課題の内容に関しての質問はOKです。
質問されたとしても直接答えを教えることはありません。
ヒント・質問内容の該当単元・調べるべき内容・自分が書いたコードが正しいかどうかに対する回答等は致します。

最低限作成するべき機能は以下の通りです。

* ブログ投稿機能(管理者ページ)

    管理者がブログを投稿し、下書き・公開・カテゴリーの登録等の機能の作成。

    * 記事追加
    * 記事一覧
    * 記事編集
    * 記事論理削除
    * カテゴリー一覧
    * カテゴリー追加
    * カテゴリー編集
    * カテゴリー物理削除(中間テーブルの対象レコードを先に削除しないと削除できないので注意)
    * タグ追加
    * タグ編集
    * タグ物理削除(こちらも中間テーブルの対象レコードを先に削除しないと削除できないので注意)

* ブログ閲覧機能

    一般ユーザー向け記事閲覧機能の作成。第三者への公開ページなので、認証の必要なし。

    * トップページ
    * 記事ページ
    * カテゴリー選択時の記事一覧

* 認証機能

    管理者ページ用の管理者認証機能の作成。
    管理者しか見れないページをきちんと作成できていればOK。

    * 初期ユーザー登録
    * 管理ユーザー一覧
    * 管理ユーザー登録(初期ユーザー以外の登録)
    * ログインユーザーのパスワード変更
    * ログイン・ログアウト

* メディアアップロード機能(管理者ページ) **※作成する時間があればでOK。任意**

    記事中やトップページ等で利用する画像ファイルなどを保存・管理する機能の作成。

    * メディア(画像)一覧
    * 画像追加
    * 画像削除

## 課題の進め方

本リポジトリは課題の基礎となるリポジトリです。このリポジトリには以下のものが同梱されています。

* Laravelフレームワーク

* Homesteadを起動するためのVagrantfile

* テーブル作成のためのマイグレーションファイル(Laravelでマイグレーションを行う)

実際に課題に取り掛かる場合には、GitHub.comのアカウントを作成した上で、[リポジトリURL](https://github.com/nrhrhysd616/becrazy-school-blog)から、自分のリポジトリへForkを行ってください。

作成するリポジトリは公開リポジトリ(public)で、先生がコミット状況を把握できるようにしてください。

公開リポジトリにすることで、エンジニアとして働く上でも、見せることのできる成果としてアピールできます。

公開リポジトリでフォーク後、上記の内容を開発し随時コミット&プッシュを進めてください。

### 開発開始までの手順

1. このリポジトリをフォークして自分のプロジェクトとして立ち上げる

2. クローンしてソースコードをダウンロード

3. `composer install`を行い、本プロジェクトで利用するライブラリをインストール

4. `.env.example`をコピーして`.env`ファイルを作成

5. ターミナルまたはコマンドプロンプトでプロジェクトディレクトリに移動し、`php artisan key:generate`コマンドを実行し、アプリケーションキーの生成

6. Homesteadを設定するために、以下のコマンドを実行

    macOSの場合:`php vendor/bin/homestead make`

    Windowsの場合:`vendor\bin\homestead make`

    場合によっては鍵生成も行うこと。鍵生成については[こちら](https://it.becrazy.jp/article/laravel-homestead-setting)

    その他Homesteadの設定を各自で変更してもOK

7. Homestead仮想マシンを起動`vagrant up`

8. `Homestead.yaml`ファイルに従いIPアドレスでアクセスして確認

    この時点でWelcomeページが表示可能

9. `vagrant ssh`で仮想マシンにログインし、マイグレーションを実行しテーブル作成

10. シードデータ(開発用にDBにインサートするデータ)を追加するために`php artisan db:seed`を実行

    これでデータベースへ、`/database/seeds`ディレクトリにあるシードデータの追加ができる。

11. 開発スタート！


## データベースについて

各テーブルスキーマについて以下に解説します。
マイグレーションを行い、テーブルとシードデータを投入て開発を始めます。

* usersテーブル

    ユーザー情報を格納するテーブルです。Laravelで標準で実装されているテーブル構造と変わりません。そのためUserモデルをそのまま利用できます。

* password_resetsテーブル

    パスワードリセット用のテーブルです。Laravelで標準で実装されているテーブルです。**今回の開発では利用しません**。

* failed_jobsテーブル

    Laravelで実装されているテーブルです。**今回の開発では利用しません**。

* postsテーブル

    投稿する記事及びメディアアップロード機能を実装した場合にはメディアの情報を保存するテーブルです。

* blog_optionsテーブル

    ブログオプション用のテーブルです。
    このテーブルにブログ全体に関わる設定情報を格納します。
    設定変更ができるようにしたい情報をキーバリュー形式で保存してください。シードとして2つ設定しています。

* taxonomyテーブル

    カテゴリー・タグを格納するテーブルです。
    下記のtaxonomy_relationshipsテーブルの中間テーブルにより、記事とカテゴリーを紐付けます。

* taxonomy_relationshipsテーブル

    記事とカテゴリー及びタグを紐付けるテーブルです。
    中間テーブルとして機能させることで、多対多のリレーションを実現できます。
    多対多のリレーションについてはまずは自分で調べてみましょう。調べてわからない状況であれば先生に聞いてください。
    Eloquentで多対多のリレーションを実現する方法もきちんとあります。

これでブログに関わる全ての機能を実現できます。
テーブルに設定している詳細のカラム情報についてはマイグレーションファイルを参照してください。(app/database/migrationsフォルダ)

### DB接続情報

`.env`ファイルのDB接続設定は以下の用にすると、仮想マシン内で接続可能

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

## 注意点

今回利用しているLaravelの **バージョンは6** です。
授業で教えていたLaravelはバージョン5.8でしたが最近新しいバージョンがリリースされました。
バージョン6ではいくつか変更が加わっているので注意してください。
特に認証機能の作成コマンドである`php artisan make:auth`が利用できなくなっています。
詳細はこちらの[バージョン6用のドキュメント](https://readouble.com/laravel/6.0/ja/authentication.html)を読んでください。

## Appendix

その他不明点あれば先生に聞いてください。

## test
テスト内容


# お問い合わせフォーム
## 環境構築
#### Doccerビルド

   1. git clone git@github.com:wwwbotten/confirmation-test.git
   2. doccer-compose up -d --build

※ MySQLは、OSによっては動作しない場合があるのでそれぞれのPCに合わせて doccer-compose.ymlファイルを編集してください。

#### Laravel環境構築

   1. doccer-compose exec php bash
   2. composer install
   3. env.exampleファイルから.envを作成し、環境変数を変更
   4. php artisan key:generate
   5. php artisan migrate
   6. php artisan db:seed

## 使用技術

   + php 7.4.9
   + Laravel 8.83.27
   + Mysql 8.0.26

## URL

   + 開発環境 : [http://localhost/](http://localhost/)
   + phpMyAdmin : [http://localhost:8080/](http://localhost:8080/)

# お問い合わせフォーム
## 環境構築
Dockerビルド
1. git@github.com:sae1026/coachtech_contact-form.git
2. docker-compose -d --build
＊MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

Laravel環境構築

1．docker-compose exec php bash

2. conposer install
  
3. .env.exampleファイルから、.envを作成し、環境変数を変更
 
4. php artisan key:generate

5. php artisan migrate

6. php artisan db:seed
## 使用技術(実行環境)
・PHP 8.4.2

・Laravel Framework 8.83.29

・mysql  Ver 8.0.26
## URL
開発環境：http://localhost/

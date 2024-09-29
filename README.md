# PH27 ECサイトのサンプル

## 環境構築

- このリポジトリをクローンする
- Docker の以下の設定に ec-sample のディレクトリを追加
  > Preferences -> Resources -> File Sharing
- `composer install`
- [このページ](https://github.com/conn-do/ec-sample/wiki/.env-sample)の内容をコピーして .env ファイルとして保存する
- Sail を起動する  
  `./vendor/bin/sail up`
- 別のターミナルでマイグレーションを実行する  
  `./vendor/bin/sail artisan migrate`
- フロントエンドのビルド  
  `npm i`  
  `npm run build`
- http://0.0.0.0/ にアクセスする

## MySQL

```
mysql -u sail -ppassword -h 127.0.0.1 laravel
```

## フロントエンド

- CSS / JS を書くときは `npm run dev` しておく
- 書き終わったら `npm run build` する

# Laravel-json2
# Laravel-json2

このリポジトリは Laravel と JSON Server を使用したプロジェクトです。

## 環境
- Laravel
- JSON Server
- PHP



## アプリケーションの起動

### Laravel サーバーの起動
```sh
cd laravel-json2/app/laravel-json-server
php artisan serve
```

### JSON Server の起動
```sh
cd laravel-json2/app
json-server --watch db.json --port 3000
```

## アクセス
- Laravel API: `http://127.0.0.1:8000`
- JSON Server: `http://localhost:3000/items`



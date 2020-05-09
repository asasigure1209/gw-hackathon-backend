# backend備忘録

## 環境構築
composer install
```
brew install composer
```

```
composer -v
```

```
composer global require "laravel/installer"
```
多分ZIPがないって怒られるのでPHP更新
```
brew update
brew install php@7.4
brew link php@7.4
```
もう一度実行
```
composer global require laravel/installer
```

## DB新設・更新
```
php artisan migrate:refresh
```
```
php artisan migrate
```
```
php artisan db:seed
```


## 開発環境の立ち上げ
gw-hackthon-backendへ移動

```
composer install
```

```bash
php artisan serve
```
http://127.0.0.1:8000/ にアクセスできるようになる

## 触るであろうところ
### app/Http/Controllers
DBを操作できるModelを使って必要なデータを返す場所。


## model&DB作成
```
php artisan make:model Article -m
```
作成されたmigrateファイルを編集して、
```
php artisan migrate
```
DBに反映

## controller作成
```
php artisan make:controller ArticlesController -r
```

### 対応一覧
- [get] /users -> index() 
- [post] /users -> store()
- [get] /users/{id} -> show()
- [put] /users/{id} -> update()
- [delete] /users/{id} -> delete()

## route設定
routes/web.php内で以下を追加
```
Route::resource('articles', 'ArticlesController');
```
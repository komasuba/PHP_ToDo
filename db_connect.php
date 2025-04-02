<?php
    date_default_timezone_set('Asia/Tokyo');
    require_once 'vendor/autoload.php';

    $capsule = new Illuminate\Database\Capsule\Manager; //composerでeloquentをインストール済み 
    $capsule->addConnection([
        'driver'    => 'mysql',
        'host' => '127.0.0.1', //localhostを明示
        'port' => '8889', //MAMP初期値
        'database'  => 'db', //phpmyadminでdbを作成してから接続
        'username'  => 'root',
        'password'  => 'root',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    
    use Illuminate\Database\Eloquent\Model;

    class MemoLists extends Model{
        protected $table = 'memo_lists';
    }
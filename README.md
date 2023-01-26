## こちらはLaravel9の学習記録で挙げています。


【学んだこと・感想】

・ルーティングや、シーダーファイルのクラスの呼び出しが以前学習していたLaravel6と書き方が少し違っていた。

例：ルーティングファイル(web.php)

``Route::get('/test', [TestController::class, 'show'])->name('test'); <-Laravel9``

``Route::get('/test', 'TestController@show')->name('test'); <-Laravel6``


・DatabaseSeeder.php に自分が作成したシーダーファイルを呼び出す必要がある。

例：シーダーファイル

`` $this->call([UserSeeder::class,]); <-Laravel9``

・Laravel Breezeのライブラリを使用したのですが、

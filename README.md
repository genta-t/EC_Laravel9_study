## こちらはLaravel9の学習記録で挙げています。


【学んだこと・感想】

ルーティングや、シーダーファイルのクラスの呼び出しが以前学習していたLaravel6と書き方が少し違っていた。

例：ルーティングファイル(web.php)

``Route::get('/test', [TestController::class, 'show'])->name('test'); <-Laravel9``

``Route::get('/test', 'TestController@show')->name('test'); <-Laravel6``


・DatabaseSeeder.php に自分が作成したシーダーファイルを呼び出す必要がある。

例：シーダーファイル

`` $this->call([UserSeeder::class,]); <-Laravel9``

Laravel Breezeのライブラリを使用したのですが、ログイン、新規登録、パスワード確認、リセットの機能が予め付いている。
 - ログイン、新規登録、パスワード確認、リセットの機能が予め付いている。
 - cssがTailwindcssを使用しており、細かい修正がしやすく使いやすい印象を受けた。　(以前Laravel6でBootstrapを少しだけ使ったのですが、細かい修正などが難しい印象でした。)

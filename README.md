# Laravel 7 檔案管理器

引入 unisharp 的 laravel-filemanager 套件來擴增像應用中的 Dropbox，能集中存放靜態內容，協助使用者管理內容。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 也可以經由 `/login` 來進行登入，登入後可以經由 `/laravel-filemanager` 來進行檔案管理器管理內容。

----

## 畫面截圖
![](https://i.imgur.com/Xbndz45.png)
> 登入後方允許進行檔案管理，考量防止未經授權的上傳及在多使用者模式下正常工作

![](https://i.imgur.com/C8nOFfE.png)
> 支援多檔案選擇及伺服器儲存集中管理
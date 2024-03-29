<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/costop.css')}}">
    <title>Document</title>
</head>
<body>
    <h1 class="rogu">ログイン</h1>
    <div class="form">
    <form  action="/login" method="post">
        @csrf
        <p>メールアドレス<br>
        <input type="text" name="mail"></p>
        <p>パスワード<br>
        <input type= "password" name="pw"><br>
        <a href="#">パスワードを忘れたときはコチラ</a></p>
        <p class="button"><input type="submit" value="ログイン" id="button" ></p>
    </form>
    </div>
</body>
</html>
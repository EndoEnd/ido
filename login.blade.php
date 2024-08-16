<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>EAR ログイン画面</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="anton-regular"><p>EAR</p>
       </div>
       <p1>アーティックキャリア株式会社<br>労務管理アプリ　β版</p1>
    </header>

    <div class="login">
        <form action method="post">
            <dl class="login">
                <h2>ログイン</h2>
                <div class="tab">
                    <dd>
                        <input type="text" name="mail" placeholder="メールアドレス">
                    </dd>
                    <dd>
                        <input type="password" name="pass" placeholder="パスワード">
                    </dd>
                    <dd>
                        <button type="submit">ログイン</button>
                    </dd>
                </div>
            </dl>
        </form>

        <div class="new-registration">
            <a href="{{ route('registration') }}" class="btn btn-primary">新規登録</a>
        </div>

    @include('partials.footer')
</body>
</html>


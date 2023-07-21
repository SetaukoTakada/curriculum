
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/bootstrap.js" defer></script>
</head>
<body>
<header>
   @include('tweets.header')
</header>
    <br>
<main>
   @yield('content')
   <br>
   @yield('comment')
</main>
</body>
</html>
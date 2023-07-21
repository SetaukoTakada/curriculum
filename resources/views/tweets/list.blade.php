

@extends('tweets.layout')
@section('title','つぶやき一覧')

<!--つぶやき投稿-->
@section('content')
<h1>ホーム</h1>
<section class="tweet">
<input type="text" class="textbox" placeholder=いまどうしてる？>
<br>
<input type="submit" class="tweetbutton" value="つぶやく">
</section>  
@endsection

<!--投稿一覧表示  -->
@section('comment')
<main class="tweetbox">
  <p class="name">名前</p>
  <p class="time">20xx/11/20</p>
 
</main>


@endsection


 



<?php $__env->startSection('title','つぶやき一覧'); ?>

<!--つぶやき投稿-->
<?php $__env->startSection('content'); ?>
<h1>ホーム</h1>
<section class="tweet">
<input type="text" class="textbox" placeholder=いまどうしてる？>
<br>
<input type="submit" class="tweetbutton" value="つぶやく">
</section>  
<?php $__env->stopSection(); ?>

<!--投稿一覧表示  -->
<?php $__env->startSection('comment'); ?>
<main class="tweetbox">
  <p class="name">名前</p>
  <p class="time">20xx/11/20</p>
 
</main>


<?php $__env->stopSection(); ?>


 
<?php echo $__env->make('tweets.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\6\resources\views/tweets/list.blade.php ENDPATH**/ ?>
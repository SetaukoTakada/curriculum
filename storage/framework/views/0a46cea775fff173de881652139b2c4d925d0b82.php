
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/bootstrap.js" defer></script>
</head>
<body>
<header>
   <?php echo $__env->make('tweets.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
    <br>
<main>
   <?php echo $__env->yieldContent('content'); ?>
   <br>
   <?php echo $__env->yieldContent('comment'); ?>
</main>
</body>
</html><?php /**PATH C:\xampp3\htdocs\6\resources\views/tweets/layout.blade.php ENDPATH**/ ?>
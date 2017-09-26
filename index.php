<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/webroot/styles.css"></link>
    <title>Book manager</title>
    <script src='/webroot/scripts.js'></script>
</head>
<body>
<div id='main'>
    <?php 
        include('./app/dispatcher.php');
        $dispatcher = (new Dispatcher())->run();
    ?>
</div>
</body>
</html>


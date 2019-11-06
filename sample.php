<?php
$result = '無し';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['btn']) === true){
        $result = omikuji();
    }
}

function omikuji(){
    $omikuji = ['大吉', '中吉', '吉', '小吉', '凶', '大凶'];
    return $omikuji[rand(0, count($omikuji) - 1)];
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

        <title>おみくじプログラム</title>
    </head>
    <body>
        <h1>おみくじプログラム</h1>
        <p>おみくじの結果：<?php echo htmlentities($result, ENT_QUOTES, 'UTF-8'); ?></p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <button type="submit" name="btn" class="btn btn-primary" value="draw">おみくじを引く</button>
        </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>
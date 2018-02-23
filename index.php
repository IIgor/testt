<?php
session_start();
if (isset($_SESSION['user'])) var_dump($_SESSION['user']);

//    if(count($_GET) != 0){
//        print_r($_GET);
//    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <title>Proposal</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <header class="header">
            <a href="/" class="header_logo">Logo</a>
            <?php if ( !isset($_SESSION['user']) ): ?>
                <a class="header_enter" href="https://api.worldoftanks.ru/wot/auth/login/?application_id=be8dcc1ce16763ad34eb081db8a94c4d&redirect_uri=http%3A%2F%2Fyour-number.top%2Flogin-return.php&display=popup&expires_at=30000&nofollow=0">Войти</a>
            <?php else: ?>
                <div><?=$_SESSION['user']['nickname']?></div>
            <?php endif; ?>
        </header>

        <section>
            <div>
                <h1 class="page_title">Proposal</h1>
            </div>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion_title">Title</div>
                    <div class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus accusantium animi cumque eligendi enim eos fuga illum laborum laudantium maiores maxime nemo numquam quisquam quod repellat, sapiente similique vel?</div>
                </div>
                <div class="accordion-item">
                    <div class="accordion_title">Title</div>
                    <div class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus accusantium animi cumque eligendi enim eos fuga illum laborum laudantium maiores maxime nemo numquam quisquam quod repellat, sapiente similique vel?</div>
                </div>
                <div class="accordion-item">
                    <div class="accordion_title">Title</div>
                    <div class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus accusantium animi cumque eligendi enim eos fuga illum laborum laudantium maiores maxime nemo numquam quisquam quod repellat, sapiente similique vel?</div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
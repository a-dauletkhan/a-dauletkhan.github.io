<?php
    require "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To-Do List website</title>
    <meta name="title" content="To-Do List website">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut risus lectus, rhoncus nec pulvinar non, dignissim in enim. Aliquam eu nunc eros. In posuere sodales enim quis finibus. Morbi convallis eros sed erat vehicula vulputate ut at orci. Nunc dapibus lorem ipsum, sit amet venenatis massa pulvinar a. Praesent convallis suscipit libero, at vestibulum sapien condimentum et. Fusce quis massa a lacus vehicula egestas et eu justo. Pellentesque a ante posuere metus cursus euismod. Ut orci nunc, eleifend id pellentesque vel, sodales et enim. Curabitur pellentesque odio ac aliquam lobortis. Maecenas nec ipsum sed nibh feugiat commodo eu et nulla. Praesent fermentum lacinia ex at viverra. Curabitur ut suscipit orci, quis aliquet mi. In elementum nisl ornare nulla convallis, a tincidunt nisi iaculis.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://a-dauletkhan.github.io/">
    <meta property="og:title" content="To-Do List website">
    <meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut risus lectus, rhoncus nec pulvinar non, dignissim in enim. Aliquam eu nunc eros. In posuere sodales enim quis finibus. Morbi convallis eros sed erat vehicula vulputate ut at orci. Nunc dapibus lorem ipsum, sit amet venenatis massa pulvinar a. Praesent convallis suscipit libero, at vestibulum sapien condimentum et. Fusce quis massa a lacus vehicula egestas et eu justo. Pellentesque a ante posuere metus cursus euismod. Ut orci nunc, eleifend id pellentesque vel, sodales et enim. Curabitur pellentesque odio ac aliquam lobortis. Maecenas nec ipsum sed nibh feugiat commodo eu et nulla. Praesent fermentum lacinia ex at viverra. Curabitur ut suscipit orci, quis aliquet mi. In elementum nisl ornare nulla convallis, a tincidunt nisi iaculis.">
    <meta property="og:image" content="/assets/img/preview.jpg">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://a-dauletkhan.github.io/">
    <meta property="twitter:title" content="To-Do List website">
    <meta property="twitter:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut risus lectus, rhoncus nec pulvinar non, dignissim in enim. Aliquam eu nunc eros. In posuere sodales enim quis finibus. Morbi convallis eros sed erat vehicula vulputate ut at orci. Nunc dapibus lorem ipsum, sit amet venenatis massa pulvinar a. Praesent convallis suscipit libero, at vestibulum sapien condimentum et. Fusce quis massa a lacus vehicula egestas et eu justo. Pellentesque a ante posuere metus cursus euismod. Ut orci nunc, eleifend id pellentesque vel, sodales et enim. Curabitur pellentesque odio ac aliquam lobortis. Maecenas nec ipsum sed nibh feugiat commodo eu et nulla. Praesent fermentum lacinia ex at viverra. Curabitur ut suscipit orci, quis aliquet mi. In elementum nisl ornare nulla convallis, a tincidunt nisi iaculis.">
    <meta property="twitter:image" content="/assets/img/preview.jpg">

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ececec">
    <meta name="msapplication-TileImage" content="/assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ececec">

    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div class="page">
        <canvas id="c">loooooooooooool</canvas>
        <header class="header header--not__main"> 
            <div class="container">
                <div class="header__top">
                    <div class="header__logo">
                        <a href="/"><img src="/assets/img/logo.svg" alt="To-Do List Logo"></a>
                    </div>
                    <nav class="header__nav">
                        <a href="#features" class="nav__link">Features</a>
                        <a href="#feedback" class="nav__link">Feedbacks</a>
                        <a href="#download" class="nav__link">Download</a>
                    </nav>
                    <div class="header__auth">
    
                    <?php if(isset($_SESSION['logged_user'])) : ?>
                    <div class="header__acc"><?php echo $_SESSION['logged_user']->login; ?></div>
                    <a href="/logout.php">Sign out</a>

                    <?php else : ?>
                        <a class="btn" href="/signup.php">Sign up</a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </header>
    
        <main class="main">
            <div class="signup">
                <div class="container">
                    <div class="signup__block">
                    <?php
                        $data = $_POST;
                        if(isset($data['do_login'])) {
                            $user = R::findOne('users', 'login = ?', array($data['login']));
                            if($user) {
                                if(md5($data['password'], $user -> password)) {
                                    $_SESSION['logged_user'] = $user;
                                    echo '<div style="color: green">Вы авторизованы</div>';
                                } else {
                                    $errors[] = 'Неверно введен пароль';
                                }
                            } else {
                                $errors[] = 'Пользователь не найден';
                            }
                            if(! empty($errors)) {
                                echo '<div style="color: red">'.array_shift($errors).'</div><hr>';
                            }
                        }
                    ?>
                        <form action="/login.php" method="POST">
                            <input type="text" name="login" placeholder="Login" value="<?php echo @$data['login']; ?>">
                            <input type="password" name="password" placeholder="Password" value="<?php echo @$data['password']; ?>">
                            <button type="submit" class="btn" name="do_login">Log in!</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    
        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer author">
                        ICT SAU 1 Term 3 by <span>Dauletkhan</span>
                    </div>
                    <p>&copy;No rights reserved</p>
                </div>
            </div>
        </footer> 
    </div>
</body>
</html>
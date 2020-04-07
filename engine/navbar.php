<!-- navbar -->
<div class="bloc sticky-nav bgc-white l-bloc" id="navbar">
    <div class="container ">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light row navbar-expand-md" role="navigation">
                    <a class="navbar-brand link-phpless-style" href="<?php echo URL; ?>">phpLess</a>
                    <button id="nav-toggle" type="button" class="ml-auto ui-navbar-toggler navbar-toggler border-0 p-0 menu-icon-circles" data-toggle="collapse" data-target=".navbar-3665" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-3665">
                        <ul class="site-navigation nav navbar-nav ml-auto">
                            <li class="nav-item"><a href="<?php echo URL; ?>" class="nav-link">Главная</a></li>
                            <?php
                            switch ($user['access']) {
                                case 1:
                                    echo '<li class="nav-item"><a href="' . URL . '/admin" class="nav-link a-btn">Админ-панель</a></li>';
                                    break;
                            }
                            switch (!$user) {
                                case 1:
                                    echo '
                                <li class="nav-item"><a href="' . URL . '/auth/" class="nav-link a-btn">Вход</a></li>
                                <li class="nav-item"><a href="' . URL . '/reg/" class="nav-link a-btn">Регистрация</a></li>';
                                    break;
                                case 0:
                                    echo '
                                    <li class="nav-item"><a href="' . URL . '/profile/" class="nav-link a-btn">Личный кабинет</a></li>
                                    <li class="nav-item"><a href="' . URL . '/?logout" class="nav-link a-btn">Выход</a></li>';
                                    break;
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- navbar END -->
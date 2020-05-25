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
                            <li class="nav-item"><a href="<?php echo URL; ?>" class="nav-link"><?php  echo $lang_nav['Main page']; ?></a></li>
                            <?php
                            switch ($user['access']) {
                                case 1:
                                    echo '<li class="nav-item"><a href="' . URL . '/admin" class="nav-link a-btn">'.$lang_nav['Admin panel'].'</a></li>';
                                    break;
                            }
                            switch (!$user) {
                                case 1:
                                    echo '
                                <li class="nav-item"><a href="' . URL . '/auth/" class="nav-link a-btn">'.$lang_nav['Login'].'</a></li>
                                <li class="nav-item"><a href="' . URL . '/reg/" class="nav-link a-btn">'.$lang_nav['Sign In'].'</a></li>';
                                    break;
                                case 0:
                                    echo '
                                    <li class="nav-item"><a href="' . URL . '/profile/" class="nav-link a-btn">'.$lang_nav['Profile'].'</a></li>
                                    <li class="nav-item"><a href="' . URL . '/?logout" class="nav-link a-btn">'.$lang_nav['Sign Out'].'</a></li>';
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
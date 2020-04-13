<!-- admin-navbar -->
<div class="bloc sticky-nav bgc-white l-bloc" id="admin-navbar">
    <div class="container ">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light row navbar-expand-lg" role="navigation">
                    <a class="navbar-brand link-style" href="<?php echo URL; ?>">phpLess admin</a>
                    <button id="nav-toggle" type="button" class="ml-auto ui-navbar-toggler navbar-toggler border-0 p-0 menu-icon-squares" data-toggle="collapse" data-target=".navbar-25384" aria-expanded="false" aria-label="admin-navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-25384">
                        <ul class="site-navigation nav navbar-nav ml-auto">
                            <li class="nav-item"><a href="<?php echo URL; ?>/" class="nav-link"><?php echo $lang_nav['Main page'];?></a></li>
                            <li class="nav-item"><a href="<?php echo URL; ?>/admin/list" class="nav-link"><?php echo $lang_nav['User list'];?></a></li>
                            <li class="nav-item"><a href="<?php echo URL; ?>/admin/edit" class="nav-link"><?php echo $lang_nav['Edit user'];?></a></li>
                            <li class="nav-item"><a href="<?php echo URL; ?>/admin/create-user" class="nav-link"><?php echo $lang_nav['New user'];?></a></li>
                            <li class="nav-item"><a href="<?php echo URL; ?>/profile" class="nav-link"><?php echo $lang_nav['Profile'];?></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- admin-navbar END -->
<!-- profile-bloc -->
<div class="bloc bloc-fill-screen bg-forrest tc-black l-bloc" id="profile-bloc">
    <div class="container">
        <div class="row">
            <div class="offset-lg-0 col-lg-3 offset-md-0 col-md-3 col-sm-4 col-5 d-sm-block d-none">
                <div class="card">
                    <img src="<?php echo URL; ?>/engine/img/lazyload-ph.png" data-src="<?php echo URL; ?>/engine/img/placeholder-user.png" class="img-fluid d-block img-margin-right lazyload" alt="placeholder user" />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mg-md text-center tc-black h3-margin-bottom btn-resize-mode"><?php echo htmlspecialchars($user['Login']); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-0 col-lg-9 bgc-white offset-md-0 col-md-9 col-sm-8">
                <h3 class="mg-md tc-black h3-margin-top"><span class="fa fa-user-circle-o"></span> Личный кабинет</h3>
                <p>Ваш логин: <?php echo htmlspecialchars($user['Login']); ?></p>
                <p data-placement="top" data-toggle="tooltip" title="ваш пароль надёжно защищен технолонией шифрования MD5">Ваш пароль:&nbsp;<a class="ltc-ferrari-red" href="<?php echo URL; ?>/profile/edit-passwd"><?php echo htmlspecialchars($user['Password']); ?></a></p>
                <p>Ваш уровень доступа: <?php echo access($user['access']); ?></p>
                <a href="<?php echo URL; ?>/profile/edit" class="btn btn-sm btn-black btn-style float-lg-none">Редактировать</a>
            </div>
        </div>
    </div>
</div>
<!-- profile-bloc END -->
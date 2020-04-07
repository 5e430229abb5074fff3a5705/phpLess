<!-- auth-bloc -->
<div class="bloc bg-forrest tc-black l-bloc" id="auth-bloc">
    <div class="container bloc-xxl">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 bloc-margin-bottom bgc-white shadow-box">
                <form method="post">

                    <h4 class="mg-md tc-black h4-margin-bottom btn-resize-mode">Авторизация</h4>

                    <?php
                    $login = $_POST['Login']; //Переменная Login
                    $password = md5($_POST['Password']); //Переменная Password
                    if ( !$user ) {
                        if ( isset($login, $password) ) {
                            if ( $result = !authentication($login, $password) ) {
                                echo '<span style="color: #FF0000; ">Данные введены не верно</span><br>';
                            } else {
                                $_SESSION = array(
                                    'Login' => $login,
                                    'Password' => $password
                                );
                                header('Location: ' . URL . '/');
                                exit;
                            }
                        }
                    }
                    else {
                        header('Location: ' . URL);
                        exit;
                    }
                    ?>

                    <div class="form-group container-div-margin-top">
                        <label for="login_input">Логин</label>
                        <input name="Login" id="login_input" class="form-control" placeholder="Введите логин" maxlength="32" required/>
                    </div>

                    <div class="form-group">
                        <label for="password_input">Пароль</label>
                        <input name="Password" id="password_input" type="password" class="form-control" placeholder="Введите пароль" maxlength="64" required/>
                    </div>

                    <button type="submit" class="bloc-button btn float-lg-right btn-margin-bottom btn-d">Вход</button>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- auth-bloc END -->
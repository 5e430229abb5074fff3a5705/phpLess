<!-- auth-bloc -->
<div class="bloc bloc-fill-screen bg-forrest tc-black l-bloc" id="auth-bloc">
    <div class="container bloc-xxl">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 bloc-margin-bottom bgc-white shadow-box">
                <form method="post">

                    <h4 class="mg-md tc-black h4-margin-bottom btn-resize-mode"><?php echo $lang_auth['Title']; ?></h4>

                    <?php
                    $login = $_POST['Login']; //Переменная Login
                    $password = md5($_POST['Password']); //Переменная Password
                    if ( !$user ) {
                        if ( isset($login, $password) ) {
                            if ( $result = !authentication($login, $password) ) {
                                echo '<span style="color: #FF0000; ">'.$lang_auth['Data entered incorrectly'].'</span><br>';
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
                    <br>
                    <div class="form-group container-div-margin-top">
                        <label for="login_input"><?php echo $lang_auth['Login']; ?></label>
                        <input name="Login" id="login_input" class="form-control" placeholder="<?php echo $lang_auth['Enter your login']; ?>" maxlength="32" required/>
                    </div>

                    <div class="form-group">
                        <label for="password_input"><?php echo $lang_auth['Password']; ?></label>
                        <input name="Password" id="password_input" type="password" class="form-control" placeholder="<?php echo $lang_auth['Enter the password']; ?>" maxlength="64" required/>
                    </div>

                    <button type="submit" class="bloc-button btn float-lg-right btn-margin-bottom btn-d"><?php echo $lang_auth['Continue']; ?></button>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- auth-bloc END -->
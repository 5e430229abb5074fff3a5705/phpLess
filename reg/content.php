<!-- reg-bloc -->
<div class="bloc bloc-fill-screen bg-forrest tc-black l-bloc" id="reg-bloc">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 bloc-margin-bottom bgc-white shadow-box">
                <form id="reg_form" method="POST">
                    <h4 class="mg-md tc-black h4-margin-bottom btn-resize-mode"><?php echo $lang_reg['Title']; ?></h4>
                    <?php
                    if ( isset($_POST['reg']) )
                    {
                        $Login = mysqli_real_escape_string($db, $_POST['Login']);
                        $Password = mysqli_real_escape_string($db, md5($_POST['Password']));
                        $access = mysqli_real_escape_string($db, $_POST['access']);

                        $regCheck = "SELECT Login FROM Accounts WHERE Login = '$Login'";
                        $getValue = mysqli_query($db, $regCheck);

                        if ( mysqli_num_rows($getValue) > 0 ) { echo '<span style="color: #FF0000; ">'.$lang_reg['Login already exists'].'!</span>'; }
                        elseif( $_POST['Login'] == '' ) { echo '<span style="color: #FF0000; ">'.$lang_reg['Enter new login'].'!</span><br>'; }
                        elseif( $_POST['Password'] == '' ) { echo '<span style="color: #FF0000; ">'.$lang_reg['Enter new password'].'!</span><br>'; }
                        elseif( !preg_match("/^[a-zA-Z0-9]+$/", $_POST['Login']) ) { echo '<span style="color: blue; ">'.$lang_reg['The Login can only consist of Latin letters and numbers'].'!</span><br>'; }
                        elseif( strlen($_POST['Password']) < 5 or strlen($_POST['Password']) > 64 ) { echo '<span style="color: blue; ">'.$lang_reg['The password must be at least 5 characters and no more than 64 characters'].'.</span>';}

                        else {
                            if (!mysqli_query($db, "INSERT INTO Accounts (Login,Password,access) VALUES ('$Login','$Password',0) ")) {
                                header('Refresh: 10');
                                echo $lang_reg['Something went wrong. The page will be updated in 10 seconds'];
                            } else {
                                if (isset($Login, $Password)) {
                                    if ($result = !authentication($Login, $Password)) {
                                        echo $lang_reg['An unknown error occurred'];
                                    } else {
                                        $_SESSION = array(
                                            'Login' => $Login,
                                            'Password' => $Password
                                        );
                                        header('Location: ' . URL);
                                        exit;
                                    }
                                }
                            }
                        }
                    }
                    ?><br>
                    <div class="form-group container-div-margin-top">
                        <label for="login_input"><?php echo $lang_reg['Login']; ?></label>
                        <input name="Login" id="login_input" class="form-control" placeholder="<?php echo $lang_reg['Enter new login']; ?>" maxlength="32" minlength="3" required/>
                    </div>
                    <div class="form-group">
                        <label for="password_input"><?php echo $lang_reg['Password']; ?></label>
                        <input name="Password" id="password_input" type="password" class="form-control" placeholder="<?php echo $lang_reg['Enter the password']; ?>" maxlength="64" minlength="5" required/>
                    </div>
                    <button class="bloc-button btn float-lg-right btn-margin-bottom btn-d" type="reset"><?php echo $lang_reg['Reset']; ?></button>
                    <button name="reg" class="bloc-button btn float-lg-right btn-margin-bottom btn-d" type="submit"><?php echo $lang_reg['Continue']; ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- reg-bloc END -->

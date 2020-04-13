<!-- newUser -->
<div class="bloc bloc-fill-screen l-bloc" id="newUser">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 offset-md-2 col-md-8">
                <form method="POST">
                    <h3 class="mg-md tc-black h3-style"><?php echo $lang_admin_panel['create-user title']; ?></strong></h3>
                    <?php
                    if ( isset($_POST['newUser']) )
                    {
                        $Login = mysqli_real_escape_string($db, $_POST['Login']);
                        $Password = mysqli_real_escape_string($db, md5($_POST['Password']));
                        $access = mysqli_real_escape_string($db, $_POST['access']);

                        $regCheck = "SELECT Login FROM Accounts WHERE Login = '$Login'";
                        $getValue = mysqli_query($db, $regCheck);

                        if ( mysqli_num_rows($getValue) > 0 ) { echo '<span style="color: #FF0000; ">'.$lang_reg['Login already exists'].'!</span>'; }
                        else {
                            if ( !mysqli_query($db, "INSERT INTO Accounts (Login,Password,access) VALUES ('$Login','$Password',0) ") )
                            {
                                header('Refresh: 10');
                                echo $lang_admin_panel['Error. The changes were not saved. The page will refresh in 10 seconds.'];
                            }
                            else
                                echo $lang_admin_panel['The user was created successfully'];
                        }
                    }
                    ?>
                    <div class="form-group">
                        <label for="login_input"><?php echo $lang_admin_panel['Login']; ?></label>
                        <input name="Login" id="login_input" class="form-control" placeholder="<?php echo $lang_admin_panel['Enter login']; ?>" maxlength="32" required/>
                    </div>

                    <div class="form-group">

                        <label for="password_input"><?php echo $lang_admin_panel['Password']; ?></label>
                        <input name="Password" type="text" id="password_input" placeholder="<?php echo $lang_admin_panel['Enter the password']; ?>" maxlength="64" class="form-control" required>

                        <div class="form-group">
                            <label for="access_input"><?php echo $lang_admin_panel['Access']; ?></label>
                            <select class="form-control option-select-margin-top" id="access_input">
                                <option value="0">User</option>
                                <option value="1">Administrator</option>
                            </select>
                        </div>

                    </div>
                    <button class="bloc-button btn btn-black float-lg-none" name="newUser" type="submit"><?php echo $lang_admin_panel['Save']; ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newUser END -->
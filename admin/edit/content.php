<?php
$id = $_GET['id'];

if ( empty($id) ) { header('Location: ' . URL . '/admin/list'); exit; }

if ($query_2 = mysqli_query($db,"SELECT * FROM `Accounts` WHERE `ID`='" . $id . "'"))
    $assoc_2 = mysqli_fetch_assoc($query_2);
{
    if (isset($_POST['editProfile']))
    {
        if ( $assoc_2['Password'] == md5($_POST['Password']) or $assoc_2['Password'] == $_POST['Password'] or $assoc_2['Password'] == empty($_POST['Password']) )  {
            //echo 'Пароль одинаковый<br>'; //Можете разкоментировать что-бы проверить
            $Login = mysqli_real_escape_string($db, $_POST['Login']);
            $Password = mysqli_real_escape_string($db, $assoc_2['Password']);
            $access = mysqli_real_escape_string($db, $_POST['access']);
        }
        else {
            //echo 'Пароль разный<br>'; //Можете разкоментировать что-бы проверить
            $Login = mysqli_real_escape_string($db, $_POST['Login']);
            $Password = mysqli_real_escape_string($db, md5($_POST['Password']));
            $access = mysqli_real_escape_string($db, $_POST['access']);
        }
        if (mysqli_query($db,"UPDATE Accounts SET Login='$Login',Password='$Password',access='$access' WHERE id = '$id';"))
        {
            header("Refresh: 3; ../list");
            echo $lang_admin_panel['The operation was completed successfully'];
        }
        else
        {
            header('Refresh: 10');
            echo $lang_admin_panel['Error. The changes were not saved. The page will refresh in 10 seconds.'];
        }

    }
}
?>
<!-- editor -->
<div class="bloc bloc-fill-screen l-bloc" id="editor">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 offset-md-2 col-md-8">
                <form method="POST">
                    <h3 class="mg-md tc-black h3-style"><?php echo $lang_admin_panel['Edit']; ?> <strong><?php echo htmlspecialchars($assoc_2['Login']); ?></strong></h3>

                    <div class="form-group">
                        <label for="login_input"><?php echo $lang_admin_panel['Login']; ?></label>
                        <input name="Login" id="login_input" class="form-control" value="<?php echo htmlspecialchars($assoc_2['Login']); ?>" placeholder="<?php echo $lang_admin_panel['Enter login']; ?>" maxlength="32" required/>
                    </div>

                    <div class="form-group">

                        <label for="password_input"><?php echo $lang_admin_panel['Password']; ?></label>
                        <input name="Password" type="text" id="password_input" value="<?php echo htmlspecialchars($assoc_2['Password']); ?>" placeholder="<?php echo $lang_admin_panel['Enter the password']; ?>" maxlength="64" class="form-control">

                        <div class="form-group">
                            <label for="access_input"><?php echo $lang_admin_panel['Access']; ?></label>
                            <select name="access" class="form-control option-select-margin-top" id="access_input">
                                <option value="<?php echo intval($assoc_2['access']); ?>"><?php echo $lang_admin_panel['Current']; ?>: <?php echo access($assoc_2['access']); ?></option>
                                <option disabled>_____________________</option>
                                <option value="0">User</option>
                                <option value="1">Administrator</option>
                            </select>
                        </div>

                    </div>
                    <button class="bloc-button btn btn-black float-lg-none" name="editProfile" type="submit"><?php echo $lang_admin_panel['Save']; ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- editor END -->
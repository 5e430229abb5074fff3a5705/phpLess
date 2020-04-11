<?php
$id = $_GET['id'];

if ( empty($id) ) {
    header('Location: ' . URL . '/admin/list'); exit;
}

if ($query_2 = mysqli_query($db,"SELECT * FROM `Accounts` WHERE `ID`='" . $id . "'"))
    $assoc_2 = mysqli_fetch_assoc($query_2);
{
    if (isset($_POST['editProfile']))
    {
        $Login = mysqli_real_escape_string($db, $_POST['Login']);
        $Password = mysqli_real_escape_string($db, md5($_POST['Password']));
        $access = mysqli_real_escape_string($db, $_POST['access']);

        if (mysqli_query($db,"UPDATE Accounts SET Login='$Login',Password='$Password',access='$access' WHERE id = '$id';"))
        {
            header("Refresh: 3; ../list");
            echo 'Операция выполнена успешно!';
        }
        else
        {
            header('Refresh: 10');
            echo 'Ошибка. Изменения не были сохранены. Страница обновится через 10 секунд.';
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
                    <h3 class="mg-md tc-black h3-style">Редактирование <strong><?php echo htmlspecialchars($assoc_2['Login']); ?></strong></h3>

                    <div class="form-group">
                        <label for="login_input">Логин</label>
                        <input name="Login" id="login_input" class="form-control" value="<?php echo htmlspecialchars($assoc_2['Login']); ?>" placeholder="Введите логин" maxlength="32" required/>
                    </div>

                    <div class="form-group">

                        <label for="password_input">Пароль</label>
                        <input name="Password" type="text" id="password_input" placeholder="<?php echo htmlspecialchars($assoc_2['Password']); ?>" maxlength="64" class="form-control" required>

                        <div class="form-group">
                            <label for="access_input">Доступ</label>
                            <select class="form-control option-select-margin-top" id="access_input">
                                <option value="<?php intval($assoc_2['access']); ?>">Текущий: <?php echo access($assoc_2['access']); ?></option>
                                <option disabled>_____________________</option>
                                <option value="0">Пользователь</option>
                                <option value="1">Администратор</option>
                            </select>
                        </div>

                    </div>
                    <button class="bloc-button btn btn-black float-lg-none" name="editProfile" type="submit">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- editor END -->
<!-- newUser -->
<div class="bloc bloc-fill-screen l-bloc" id="newUser">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 offset-md-2 col-md-8">
                <form method="POST">
                    <h3 class="mg-md tc-black h3-style">Создание нового пользователя</strong></h3>
                    <?php
                    if ( isset($_POST['newUser']) )
                    {
                        $Login = mysqli_real_escape_string($db, $_POST['Login']);
                        $Password = mysqli_real_escape_string($db, md5($_POST['Password']));
                        $access = mysqli_real_escape_string($db, $_POST['access']);

                        $regCheck = "SELECT Login FROM Accounts WHERE Login = '$Login'";
                        $getValue = mysqli_query($db, $regCheck);

                        if ( mysqli_num_rows($getValue) > 0 ) { echo '<span style="color: #FF0000; ">Логин занят!</span>'; }
                        else {
                            if ( !mysqli_query($db, "INSERT INTO Accounts (Login,Password,access) VALUES ('$Login','$Password',0) ") )
                            {
                                header('Refresh: 10');
                                echo '<span style="color: RED; ">Произошла какая-то ошибка. Страница обновится через 10 секунд</span>';
                            }
                            else
                                echo '<span style="color: green; ">Пользователь успешно был создан!</span>';
                        }
                    }
                    ?>
                    <div class="form-group">
                        <label for="login_input">Логин</label>
                        <input name="Login" id="login_input" class="form-control" placeholder="Введите логин" maxlength="32" required/>
                    </div>

                    <div class="form-group">

                        <label for="password_input">Пароль</label>
                        <input name="Password" type="text" id="password_input" placeholder="Введите пароль" maxlength="64" class="form-control" required>

                        <div class="form-group">
                            <label for="access_input">Доступ</label>
                            <select class="form-control option-select-margin-top" id="access_input">
                                <option value="0">Пользователь</option>
                                <option value="1">Администратор</option>
                            </select>
                        </div>

                    </div>
                    <button class="bloc-button btn btn-black float-lg-none" name="newUser" type="submit">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newUser END -->
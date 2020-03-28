Ваш логин: <?php echo htmlspecialchars($user['Login']); ?> <br>
Ваш пароль: <?php echo htmlspecialchars($user['Password']); ?> <br>
Ваши права: <?php echo access($user['access']); ?>
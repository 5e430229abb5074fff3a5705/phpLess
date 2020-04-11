<!-- hello -->
<div class="bloc bloc-fill-screen bg-mountains-italy none tc-white " id="hello">
    <div class="container">
        <div class="row">
            <div class="col">

                <?php
                switch (!$user) {
                    case 1:
                        echo '
              <h1 class="mg-md text-center btn-resize-mode h1-привет--style tc-white">Привет!</h1>
              <h3 class="mg-md float-none text-center tc-white btn-resize-mode h3-2-style">Ты не выполнил вход!</h3>';
                        break;
                    case 0:
                        echo '
              <h1 class="mg-md text-center btn-resize-mode h1-style tc-white">Привет, '.htmlspecialchars($user['Login']).'!</h1>
              <h3 class="mg-md float-none text-center tc-white btn-resize-mode h3-hello-style">Ты успешно авторизован!</h3>
              <p class="text-lg-center text-sm-center text-center btn-resize-mode p-style">Если у тебя имеется вопрос, можешь задать его в Telegram</p>
              <div class="text-center"><a href="https://linkbridge.ru/deep/?URL=tg://resolve?domain=MKC_Message_bot" rel="nofollow" target="_blank"><span class="fa fa-telegram icon-white icon-lg"></span></a></div>';
                        break;
                }
                ?>

            </div>
        </div>
    </div>
</div>
<!-- hello END -->
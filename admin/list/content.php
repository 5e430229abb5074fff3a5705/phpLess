<!-- user-list -->
<div class="bloc tc-black l-bloc" id="user-list">
    <div class="container bloc-lg">
        <div class="row">

            <?php
            $query_1 = mysqli_query($db,"SELECT * FROM Accounts");
            while ( $assoc_1 = mysqli_fetch_assoc($query_1) ) echo '

            <div class="col-lg-3 bloc-0-margin-bottom">
                <div class="card card-style">
                    <div class="card-body">
                        <img src="'.URL.'/engine/img/lazyload-ph.png" data-src="'.URL.'/engine/img/placeholder-user.png" class="img-fluid rounded-circle mx-auto d-block img-style lazyload" alt="' . htmlspecialchars($assoc_1['Login']) . '" />
                        <h4 class="mx-auto d-block p-margin-bottom text-lg-center">
                            <a class="ltc-black" href="'.URL.'/admin/edit/?id='.intval($assoc_1['ID']).'">' . htmlspecialchars($assoc_1['Login']) . '</a><br>
                        </h4>
                    </div>
                </div>
            </div>
            '; ?>

        </div>
    </div>
</div>
<!-- user-list END -->
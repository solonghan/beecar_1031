<?php include_once (dirname(dirname(__FILE__)) . "/quote/header.php"); ?>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">群組設定</div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="group section full">
            <ul class="listview custom-listview">
                <li>
                    群組名稱
                    <span class="text-info group_title">手排車聯盟</span>
                </li>
                <li>
                    群組碼
                    <span class="text-info group_code">car123123</span>
                </li>
                <li>
                    建立人
                    <span class="text-info group_creater">阿明</span>
                </li>
            </ul>
            <ul class="listview link-listview">
                <li>
                    <a href="#" data-toggle="modal" data-target="#droupOut">
                        退出群組
                    </a>
                </li>
            </ul>
        </div>



    </div>
    <!-- * App Capsule -->

    <!-- Dialog Basic -->
    <div class="modal fade dialogbox" id="droupOut" data-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">是否退出群組?</h5>
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="javascript:;" class="btn btn-text-secondary" data-dismiss="modal">否</a>
                        <a href="javascript:;" class="btn btn-text-primary drop_out">是</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Dialog Basic -->

    <?php include_once (dirname(dirname(__FILE__)) . "/quote/menu/car.php"); ?>
    <?php include_once (dirname(dirname(__FILE__)) . "/quote/footer.php"); ?>
    <script>
        sessionStorage.setItem('page','member');
    </script>
    <script src="<?=base_url()?>assets/custom/js/get-parameter.js"></script> <!-- 取得網址參數 -->
    <script src="<?=base_url()?>assets/custom/APIJs/group-set-notcreator.js"></script>
</body>

</html>
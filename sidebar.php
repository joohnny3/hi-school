<div id="sidebar" class="d-flex flex-column align-items-start justify-content-between px-5 py-4" style="text-align: center;">
    <div>
        <?php if (isset($_SESSION['school_nums'])) { ?>
            <span>
                <form method="post" action="backend.php?do=select_scores">
                    <input type="hidden" name="school_num" value="<?= isset($_POST['school_num']) ? $_POST['school_num'] : $_SESSION['school_nums'][0] ;?>">
                    <button type="submit" class="btn btn-link">成績查詢</button>
                </form>
            </span>
        <?php }; ?>
        <?php if (!isset($value['scores']) && isset($_POST['school_num'])) { ?>
            <span>
                <form method="post" action="backend.php?do=add_scores">
                    <input type="hidden" name="school_num" value="<?= $_POST['school_num'] ?>">
                    <button type="submit" class="btn btn-link">成績登入</button>
                </form>
            </span>
        <?php }; ?>
        <p>
            <a class="text-white" style="text-decoration: none;
    font-size: 18px;" href="backend.php?do=teacher_message">新增留言板訊息</a>
        </p>
    </div>
    <?php if (isset($_SESSION['login'])) { ?>
        <p class="bLogout"><a class="text-white" href="./api/logout.php">登出</a></p>
    <?php }; ?>
</div>
<div id="sidebar-button-wrapper">
    <button id="sidebar-button" class="border-0 bg-transparent text-white" onclick="toggleSidebar()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg></button>
</div>
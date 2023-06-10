<div id="sidebar">
    <ul>
        <?php if (!isset($value['scores']) && isset($_POST['school_num'])) { ?>
            <li>
                <form method="post" action="backend.php?do=add_scores">
                    <input type="hidden" name="school_num" value="<?= $_POST['school_num'] ?>">
                    <button type="submit">成績登入</button>
                </form>
            </li>
        <?php }; ?>
        <?php if (isset($_POST['school_num'])) { ?>
            <li>
                <form method="post" action="backend.php?do=select_scores">
                    <input type="hidden" name="school_num" value="<?= $_POST['school_num'] ?>">
                    <button type="submit">成績查詢</button>
                </form>
            </li>
        <?php }; ?>
        <?php if (isset($_SESSION['login'])) { ?>
            <li><a href="./api/logout.php">登出</a></li>
        <?php }; ?>
    </ul>
</div>
<div id="sidebar-button-wrapper">
    <button id="sidebar-button" onclick="toggleSidebar()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg></button>
</div>
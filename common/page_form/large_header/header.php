﻿<?php
session_start(); // 일반인, 회원가입자, 관리자 구분
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
else $userlevel = "";
if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";

?>

<div class="main_header">

    <div clsss="main_back_cover">

        <div class="main_header_top">
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php"><img src="./common/image/restaurant.png"></a>
            <ul class="main_menu">
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/small_header/common_page.php">검색</a></li>
                <li><a href="#">로그인</a></li>
                <li><a href="#">회원가입</a></li>
                <li><a href="#">도움말</a></li>
            </ul>
        </div>

        <div class="main_header_center">
            <a href="#">
                <div class="center_first"></div>
            </a>
            <a href="#">
                <div class="center_second"></div>
            </a>
            <a href="#">
                <div class="center_third"></div>
            </a>
        </div>

    </div>
    <!--end ::: back_top_cover -->

</div>
<!--end ::: header_main -->

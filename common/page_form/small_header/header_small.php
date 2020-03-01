<?php
//만약 라지 헤더에서 세션이 있다면 중복을 막음
if (!isset($_SESSION["userid"])) session_start();

// 일반인, 회원가입자, 관리자 구분
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";

if (isset($_SESSION["user_Email"])) $useremail = $_SESSION["user_Email"];
else $useremail = "";

if (isset($_SESSION["user_level"])) $userlevel = $_SESSION["user_level"];
else $userlevel = "";

if (isset($_SESSION["user_name"])) $username = $_SESSION["user_name"];
else $username = "";

if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";


?>


<div class="search_header">

  <div class="search_profile">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
  </div>

  <div class="search_top">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/restaurant.png"></a>

    <ul class="header_main_menu">

      <!-- 공통 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/search/index_search.php">검색</a></li>
      <?
      if(! $useremail){
      ?>
      <!-- 로그인 전 나타나야할 메뉴 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_login_select.php">로그인</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_join_main.php">회원가입</a></li>
      <?
      }else{

        $log = $useremail."(".$username."님] [Level:".$userlevel."Point:".$userpoint."]";
      ?>
      <li class="<?= COMMON::$css_header_menu; ?>"> <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_logout.php"><?=$log?></a></li>


      <li class="<?= COMMON::$css_header_menu; ?>"> <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_logout.php">로그아웃</a></li>




      <!-- 로그인 성공시 나타나야할 메뉴 -->
      <!-- <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">저장목록</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">일정</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">메세지</a></li> -->


        <!-- 각각 보여질 부분 -->
        <!-- <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_myinfo_index.php">관리자</a></li> -->

      <?
        }
      ?>

      <!-- 사용자 판매자 관리자 화면 나누는 부분 -->
      <?
        if($userlevel == 1){
      ?>
        <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_myinfo_index.php">유저</a></li>
     <?
        }
      ?>

      <?
        if($userlevel == 10){
      ?>


        <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_sellerinfo_index.php">셀러</a></li>
      <?
        }
      ?>

      <?
        if($userlevel == 100){
      ?>
        <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_myinfo_index.php">관리자</a></li>
      <?
        }
      ?>
      <!-- 끝 -->



      <!-- 공통 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/help_center/help_center_main.php">도움말</a></li>
    </ul>

  </div>
  <form class="" action="index_search.php" method="post">
    <input class="search_input" type="text" placeholder=" 식당이름을 검색해 주세요." name="r_name">
    <input class="search_input" type="hidden"  name="keywords" >
    <button class="search_result_btn">검색</button>
    <button type="button" name="button" class="search_result_btn" id="keyword_btn">&nbsp필터 ▼</button>
  </form>

</div>

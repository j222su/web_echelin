<?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/seller_register_step.css">
    <link rel="stylesheet" href="../common/css/user_seller.css">
    <link rel="stylesheet" href="/echelin/common/css/common.css">
    <link rel="stylesheet" href="/echelin/common/css/search.css">
  </head>
  <body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>

    <section>
      <div class="div_step">
        <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="">
        <span class="span_step_info">가게 등록 성공</span>
      </div>

      <progress value="100" max="100"></progress>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <span class="span_user_name">김지수</span>
          <span>님</span> </br>
          <span class="span_register_info">가게 등록에 성공하셨습니다!</span>


          <div class="div_except_button">
            <ul>
              <li><a href="../"><div class="">메인 페이지로 이동하기</div></a></li>
              <li><a href="./seller_info_page.php"><div class="">내 식당 정보로 이동하기</div></a></li>
            </ul>
          </div> <!-- div_except_button -->

        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>
  </body>
</html>

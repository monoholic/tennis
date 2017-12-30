<?php
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/login_style.css">', 0);
add_javascript('<script src="'.$member_skin_url.'/login.js"></script>', 1);

?>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

  <body>
    <div class="cont">
    <div class="demo">
      <div class="login">
        <div class="login__check"></div>
        <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
        <input type="hidden" name="url" value="<?php echo $login_url ?>">
        <div class="login__form">
          <div class="login__row">
            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
              <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
            </svg>
            <input type="text" name="mb_id" class="login__input name" placeholder="사용자 계정"/>
          </div>
          <div class="login__row">
            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
              <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
            </svg>
            <input type="password" name="mb_password" class="login__input pass" placeholder="비밀번호"/>
          </div>
        <input type="submit" value="로그인" class="btn_submit">
          <p class="login__signup">아직 계정이 없으신가요? &nbsp;<a>회원가입</a></p>
        </div>
      </form>
      </div>

    </div>
  </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  </body>

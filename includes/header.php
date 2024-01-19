
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/logg.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Для связи : </p>
              <a href="mailto:info@example.com">lorem_ipsum@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Служба поддержки: </p>
              <a href="tel:61-1234-5678-09">+8-800-555-35-35</a> </div>
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Войти / Зарегистрироваться</a> </div>
<?php }
else{

echo "Добро пожаловать";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Навигация</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Профиль</a></li>
              <li><a href="update-password.php">Обновить пароль</a></li>
            <li><a href="my-booking.php">Мои аренды</a></li>
            <li><a href="post-testimonial.php">Оставить отзыв</a></li>
          <li><a href="my-testimonials.php">Мой отзыв</a></li>
            <li><a href="logout.php">Выйти</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Профиль</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Обновить пароль</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Мои аренды</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Оставить отзыв</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Мой отзыв</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Выйти</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Поиск..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Главная</a>    </li>

          <li><a href="page.php?type=aboutus">О нас</a></li>
          <li><a href="page.php?type=faqs">ЧАВО</a></li>
          <li><a href="contact-us.php">Связаться с нами</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>

<?php require "./template/header.php" ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
  // jQuery's CountUp Animation
  $(function() {
    $(".loader").fadeOut("slow");

  });
  $(window).load(function() {
    $(".loader").fadeOut("slow");
    $(window).scroll(startCounter);
  });

  function startCounter() {

    if ($(window).scrollTop() > 300) {
        $(window).off("scroll", startCounter);
        $('.count').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 1000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
      }
    }
</script>
<div class="loader">
  <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
  <span class="sr-only">Loading...</span>
</div>
<div class="container-fluid about">
  <div class="top-hr">
      <hr></hr>
      <hr></hr>
  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="20000">
    <p class="about-title" style="">關於威力</p>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="about-talking1">
          <i class="fa fa-quote-left fa-4x" aria-hidden="true"></i>
          <p>威力攝影工作室為喜愛攝影與設計的楊威力合夥創辦，成立於2016年，成員為一群熱血的業餘攝影玩家，我們的初衷是把最美麗的瞬間凍結，因此攝影靠的不是設備，也不是技術，而是熱情。歡迎一起加入我們的行列，一同凍結日常生活上不平凡的美麗畫面。</p>
          <p>我認為，如果攝影可以改變現狀，我們何不付諸實行？它雖然不是你可以餬口的專業技術，但卻可以從中學習與成長，重點是工作是快樂的，這樣就夠了。</p>
          <p>Willy Yang</p>
        </div>
      </div>

      <div class="item">
        <div class="about-talking1">
          <i class="fa fa-quote-left fa-4x" aria-hidden="true"></i>
          <p>攝影不是為了賺錢，也許可以，但我們的目的是透過攝影結交許多不同領域的朋友，一同專研攝影、後製與構圖等技術，我曾經因為買不起鏡頭因此挫敗，如今我終於領悟，只要有熱血的態度，連傻瓜相機都可以拍出好畫面。</p>
          <p>不用買太多書，不用買太多頂級鏡頭，不用跟別人比較，認真專研與培養出屬於自己的風格，我想這就是攝影真正的藝術價值，所以，不要低估自己。</p>
          <p>相信自己。</p>
        </div>
      </div>

      <div class="item">
        <div class="about-talking1">
          <i class="fa fa-quote-left fa-4x" aria-hidden="true"></i>
          <p>威力攝影工作室也許不是最專業的工作室，但一群夥伴們在下班之餘玩樂在一起，像是讀書會一般，像是戶外組團抓寶一般，我們可以享受屬於我們自己的樂趣。</p>
          <p>不用太鑽牛角尖，不擇善固執，我們注重團隊默契與快樂的本質，所有的服務不會讓您不滿意，而會讓您享受攝影樂趣的本質，您可以選擇所有你想要的，不過…</p>
          <p>選擇我們絕對是對的。</p>
        </div>
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<div class="container-fluid info-card ">
  <ul>
    <li class="col-sm-4 col-xs-12">
      <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
      <p class="count" data-count="8356">8396</p>
      <p>張照片</p>
    </li>
    <li class="col-sm-4 col-xs-12">
      <i class="fa fa-camera fa-5x" aria-hidden="true"></i>
      <p class="count" data-count="4">4</p>
      <p>年拍照經驗</p>
    </li>
    <li class="col-sm-4 col-xs-12">
      <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
      <p class="count" data-count="215">215</p>
      <p>次景點造訪</p>
    </li>
  </ul>
</div>
<div class="container-fluid gallery-card">
  <p>
    同一個機身，<br>
    不同的旅程紀錄，<br>
    不同的攝影邀約，<br>
    不同的交友經驗，<br>
    但相同的是，<br><br>

    我那熱血澎湃的心，<br>
    還有一起陪伴我的好朋友們。<br>

  <a href="./gallery.php#photomap" class="btn btn-primary btn-lg" role="button">威力去過哪</a></p>
  <div class="for-photo-gallery"></div>
</div>
<div class="container-fluid before-footer">
  <p>
    如果想要了解更多，不用客氣大方聯絡我吧<br>
    <a href="./contactus.php" class="btn btn-primary btn-lg" role="button">聯絡我們</a></p>
  </p>
</div>

<style media="screen">

  .about {
    background: #fff;
    height: 600px;
    width: 100%;
    float: left;
  }

  .carousel-control {
    padding-top: 300px;
  }

  .container-fluid {
    padding: 0px;
    border-radius: 0px;
  }

  .carousel {
      position: relative;
      height: 100%;
  }

  .carousel-control.left, .carousel-control.right {
    background-image: none;
  }

  .about-title {
    height: 110px;
    width: 100%;
    text-align: center;
    color: #193441;
    font-size: 36px;
    padding-top: 40px;
    font-weight: bold;
    opacity: 1;
    transition: all 0.5s ease-in-out 0s;
    position: absolute;
    z-index: 1;
  }

  .carousel-inner {
    height: 100%;
  }

  .item:first-child {
    background: url('./img/about-info-bgcover.png') no-repeat right;
    background-position: 85% 50%;
    background-size: contain;
    width: 100%;
    height: 100%;
  }

  .carousel-inner .item:nth-of-type(2) {
    background: url('./img/about-info-bgcover2.png') no-repeat right;
    background-position: 100% 50%;
    background-size: contain;
    width: 100%;
    height: 100%;
  }

  .carousel-inner .item:nth-of-type(3) {
    background: url("./img/about-info-bgcover3.png") no-repeat;
    background-position: 100% 100%;
    background-size: 45%;
    width: 100%;
    height: 100%;
  }

  .about-talking1 {
    width: 50%;
    height: 450px;
    float: left;
    margin-top: 110px;
    margin-left: 100px;
    padding: 10px;
  }

  .about-talking1 i.fa, .info-card i.fa{
    color: #d1dbbd;
  }

  .about-talking1 p {
    font-size: 18px;
    color: #193441;
    line-height: 1.8em;
    padding-top: 10px;
  }

  .about-talking1 p:last-child {
    text-align: right;
    padding-right: 10px;

  }

  .carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
    left: 20%;
    margin-left: -10px;
  }

  .carousel-control .glyphicon-chevron-right, .carousel-control .icon-prev {
    right: 20%;
    margin-right: -10px;
  }

  .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev, .carousel-control .glyphicon-chevron-right {
    width: 50px;
    height: 50px;
    margin-top: -15px;
    font-size: 50px;
    color: #193441;
  }

  .carousel-control {
    font-size: 20px;
    color: #FFF;
    text-align: center;
    text-shadow: none;
  }

  .info-card {
    background: #193441;
    width: 100%;
    height: 300px;
    float: left;
    text-align: center;
  }

  .info-card li i {
    margin-top: 70px;
  }

  .info-card li p:nth-of-type(1) {
    font-family: 'Franklin Gothic';
    font-size: 72px;
    color: #d1dbbd;
    font-weight: bold;
  }

  .info-card li p:nth-of-type(2) {
    margin-top: -20px;
    font-size: 18px;
    color: #d1dbbd;
  }

  .gallery-card {
    background: #d1dbbd;
    width: 100%;
    height: 600px;
    float: left;
  }

  .btn-primary {
    color: #193441;
    background: none;
    border-radius: 10px;
    border: 1px;
    border-style: solid;
    border-color: #193441;
    margin-top: 30px;
    margin-right: 10px;
  }

  .gallery-card p {
    color: #193441;
    font-size: 18px;
    margin-top: 12%;
    margin-left: 8%;
    text-align: right;
    width: 20%;
    height: 60%;
    float: left;
    line-height: 1.8em;
  }

  .btn-primary:hover, .btn-primary:focus {
    background-color: #193441;
    color: #fff;
    border-color: rgba(0,0,0,0);
  }

  .before-footer {
    background: #d1dbbd url('./img/aboutus_before_footer.png') no-repeat;
    background-attachment: fixed;
    background-size: cover;
    width: 100%;
    height: 600px;
    float: left;
  }

  .before-footer p {
    font-size: 48px;
    margin-top: 20%;
    text-align: center;
    text-shadow: 1px 1px 7px #000000;
    color: #fcfff5;
  }

  .before-footer p .btn-primary {
    color: #fff;
    background: none;
    border-radius: 10px;
    border: 1px;
    border-style: solid;
    border-color: #fff;
    margin-top: 30px;
    margin-right: 10px;
    text-shadow: none;
  }

  .before-footer p .btn-primary:hover, .before-footer p .btn-primary:focus {
    background-color: #fff;
    color: #193441;
    border-color: rgba(0,0,0,0);
  }

  .for-photo-gallery {
    float: right;
    width: 70%;
    height: 100%;
    background: #d1dbbd url('./img/gallery_photo.png') no-repeat;
    background-size: cover;
    background-position: 100% 50%;
  }

  .top-hr {
    display: none;
  }

  @media only screen and (max-width: 1199px) {

    .gallery-card p {
      font-size: 14px;
      width: 25%;
      margin-left: 2%;
    }
  }

  @media only screen and (max-width: 767px) {
    .info-card {
      height: auto;
    }

    .about-talking1 {
      width: 70%;
      height: auto;
      padding: 10px;
      display: inline-block;
      float: none;
      margin-top: 30%;
      margin-left: 15%;
      background: rgba(255, 255, 255, 0.25) none repeat scroll 0% 0%;
    }

    .item:first-child {
      background: transparent url("./img/about-info-bgcover.png") no-repeat scroll 90% 100% / 30% auto;
    }

    .carousel-inner .item:nth-of-type(2) {
      background: transparent url("./img/about-info-bgcover2.png") no-repeat scroll 90% 100% / 60% auto;
    }

    .carousel-inner .item:nth-of-type(3) {
      background: transparent url("./img/about-info-bgcover3.png") no-repeat scroll 100% 100% / 70% auto;
    }



    .about-talking1 p {
    font-size: 12px;
    color: #193441;
    line-height: auto;
    padding-top: 10px;
    }

    .info-card ul {
      padding: 0px;
    }

    .info-card ul li:last-child {
      margin-bottom: 50px;
    }

    .gallery-card {

    }

    .before-footer p {
      font-size: 30px;
      margin-top: 50%;
    }

    .before-footer {
      background-attachment: scroll;
    }

    .gallery-card p {
      width: 95%;
      text-align: center;
      height: 50%;
    }

    .for-photo-gallery {
      width: 100%;
      height: 600px;
    }

    .btn-primary {
    }

    .gallery-card {
      height: auto;
    }

    .top-hr {
        display: block;
        position: absolute;
        width: 100%;
        height: 6px;
        margin-top: -1px;
    }

    .top-hr hr:nth-child(1),
    .top-hr hr:nth-child(2) {
        margin: 0px;
        float: left;
        height: 100%;
    }

    .top-hr hr:nth-child(1) {
        width: 40%;
        background: #193441;
    }

    .top-hr hr:nth-child(2) {
        width: 60%;
        background: #d1dbbd;
    }

    .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev, .carousel-control .glyphicon-chevron-right {
      width: 30px;
      height: 50px;
      margin-top: -15px;
      font-size: 20px;
      color: #d1dbbd;
    }

  }
</style>

<?php require "./template/footer.php" ?>

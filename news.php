<!DOCTYPE html>
<html>
<head><title>GreenLeaf Elektronics | ONLINE ELECTRONICS SHOPPING STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="recent-news-boxes.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.recentNews {
    background-color: #B0B0B0; /*rgb(20, 117, 175)  */
}
.recentNews .news-title {
    text-align:center;
    padding-top:30px;
    padding-bottom:30px;
    font-family: 'nimbus-sans-condensed', sans-serif;
    font-size:55px;
    font-weight:bold;
    color: #fff;
}
.recentNews .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 30px;
}
.recentNews .ct-blog {
    margin-bottom: 30px;
}
.ct-blog .inner {
    background-color: #FFF;
    padding: 10px;
    transition: all 0.2s ease-in-out 0s;
    cursor: pointer;
    height: 100%;
}
.ct-blog .inner:hover {
    background-color: #e6e6e6;
}
.ct-blog .fauxcrop {
    height: 180px;
    overflow: hidden;
}
.ct-blog .fauxcrop img {
    width: 100%;
}
.ct-blog-content {
    display: table;
    padding: 30px 0 28px;
}
.ct-blog-content .ct-blog-date {
    border-right: 1px solid #95A5A6;
    display: table-cell;
    font-family: "Lato", sans-serif;
    padding: 0px 18px 0px 15px;
    text-align: center;
}
.ct-blog-content .ct-blog-date span {
    font-size: 16px;
    color: rgb(20, 117, 175);  
    font-weight: 700;
    display: block;
    line-height: 1;
}
.ct-blog-content .ct-blog-date strong {
    font-size: 25px;
    color: rgb(20, 117, 175);  
}
.ct-blog-content .ct-blog-header {
    color: #000;
    display: table-cell;
    font-size: 22px;
    font-weight: 700;
    letter-spacing: -0.2px;
    line-height: 1.1;
    padding: 0 20px;
    vertical-align: top;
}
.btn-news {
    color: #333;
    font-size: 14px;
    font-weight: bold;
    padding-bottom: 30px;
    text-align: center;
}
.btn-news.btn-contests a {
    color: #fff;
    font-family: 'nimbus-sans-condensed', sans-serif;
    font-size: 24px;
    transition: all 0.2s ease-in-out 0s;
}
.btn-news.btn-contests a:hover {
    color: #000;
}
</style>
</head>
<body>
<?php require 'header_logged_out.php' ?>

<section class="recentNews">
  <div class="container">
    <h2 class="news-title">Recent News</h2>
    <div class="row">
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="#"><img alt="October Sale" src="images\news\octobersale.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>October</span><strong>1</strong>
            </div>
            <h3 class="ct-blog-header">
              October new stock sale. Bring it on. 20% OFF with AMEX credit cards.T&C Apply.
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="#"><img alt="Employement Opportunities" src="images\news\sepsale.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>September</span><strong>27</strong>
            </div>
            <h3 class="ct-blog-header">
              September Sale.
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="#"><img alt="Summer sales" src="images\news\backtoschool.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>August</span><strong>10</strong>
            </div>
            <h3 class="ct-blog-header">
              Summer: back to school offers for you.
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="#"><img alt="News Entry" src="images\news\job.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>August</span><strong>5</strong>
            </div>
            <h3 class="ct-blog-header">
              Software Developers needed.
            </h3>
          </div>
        </div>
      </div>
      <!--
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="#"><img alt="News Entry" src="https://www.solodev.com/assets/recent-news/news-entry-5.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>February</span><strong>20</strong>
            </div>
            <h3 class="ct-blog-header">
              Latest API Integrations Available through CMS 8
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="#"><img alt="News Entry" src="https://www.solodev.com/assets/recent-news/news-entry-6.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>February</span><strong>16</strong>
            </div>
            <h3 class="ct-blog-header">
              WebCorpCo's Latest Release (CMS 8) Available Today
            </h3>
          </div>
        </div>
      </div>
-->
    </div>
    <div class="btn-news btn-contests">
      <a href="#">VIEW ALL NEWS</a>
    </div>
  </div>
</section>

<?php require 'foot.php' ?>
</body>
</html>
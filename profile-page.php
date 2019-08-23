 
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/background.jpg');"></div>
      <div class="container">
        <div class="content-center">
        <?php
          $result=mysql_query("select * from info");
          while ($row=mysql_fetch_array($result)) {
          echo '<div class="cc-profile-image"><a href="#"><img src="images/'.$row[IMAGE].' " alt="Image"/></a></div>
            <div class="h2 title">'.$row['HOTEN'].'</div>';
          }
          
          ?>
          <p class="category text-white">Student</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="CV/CV_NguyenHuuThong.pdf" download="CV_NguyenHuuThong.pdf" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.facebook.com/huuthong.tom.6" rel="tooltip" title="Follow me on Facebook" target="_blank"><i class="fa fa-facebook"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
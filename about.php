<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p>Hello! I am Nguyen Huu Thong. I am Student.</p>
            <p>I'm learning Cao Thang technical colleges. </p>
            <p>I always hope to find a
            job matching with my forte and passion. I hope to meet your requirements</p>
          </div>
        </div>
        <?php
          $result=mysql_query("select * from info");
          while ($row=mysql_fetch_array($result)) {
            echo '<div class="col-lg-6 col-md-12">
                    <div class="card-body">
                      <div class="h4 mt-0 title">Basic Information</div>
                      <div class="row">
                        <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                        <div class="col-sm-8">'.$row['AGE'].'</div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                        <div class="col-sm-8">'.$row['EMAIL'].'</div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                        <div class="col-sm-8">'.$row['PHONE'].'</div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                        <div class="col-sm-8">'.$row['ADDRESS'].'</div>
                      </div>
                    </div>
                  </div>';
          }
        ?>
      </div>
    </div>
  </div>
</div>
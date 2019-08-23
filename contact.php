<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('images/map.jpg');">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact Me</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="mail.php" method="POST">
                      <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <?php
                $result=mysql_query("select * from info");
                    while ($row=mysql_fetch_array($result)) {
                      echo '<div class="col-md-6">
                            <div class="card-body">
                              <p class="mb-0"><strong>Address </strong></p>
                              <p class="pb-2">'.$row['ADDRESS'].'</p>
                              <p class="mb-0"><strong>'.$row['PHONE'].'</strong></p>
                              <p class="pb-2">+84336163905</p>
                              <p class="mb-0"><strong>Email</strong></p>
                              <p>'.$row['EMAIL'].'</p>
                            </div>
                            </div>';
                }
                ?>
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="https://www.facebook.com/huuthong.tom.6" target="_blank"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a></div>
      <?php
      $result=mysql_query("select * from info");
          while ($row=mysql_fetch_array($result)) {
          	echo '<div class="h4 title text-center">'.$row['HOTEN'].'</div>';
          }
      ?>
      <div class="text-center text-muted">
        <p>&copy;<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
      </div>
</footer>
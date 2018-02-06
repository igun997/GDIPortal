<!-- START FOOTER -->
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            Copyright © 2018 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">Graha Dhuafa Indonesia</a> All rights reserved.
            <span class="right"> Design and Developed by SystemFive</span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->


<!-- ================================================
Scripts
================================================ -->
<script type="text/javascript">
  var base_url = "<?= base_url() ?>";
</script>
<?php
  foreach ($js as $key => $value) {
      printf("<script src='%s'></script>\n",$value);;
  }
?>
<script type="text/javascript">
// Toast Notification
// $(window).load(function() {
//     setTimeout(function() {
//         Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
//     }, 1500);
//     setTimeout(function() {
//         Materialize.toast('<span>You can swipe me too!</span>', 3000);
//     }, 5000);
//     setTimeout(function() {
//         Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
//     }, 15000);
// });
</script>
</body>

</html>

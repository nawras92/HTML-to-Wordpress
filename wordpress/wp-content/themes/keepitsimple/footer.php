<!-- Footer
================================================== -->
<footer>

   <div class="row">

      <div class="six columns info">


        <?php
           if (is_active_sidebar('footer1')){
             dynamic_sidebar('footer1');
           }

        ?>


      </div>

      <div class="four columns">


        <?php
        if (is_active_sidebar('footer2')){
            dynamic_sidebar('footer2');
        }else{
          echo "there are no widgets";
        }
      ?>

      </div>

      <div class="two columns">

        <?php
        if (is_active_sidebar('footer3')){
            dynamic_sidebar('footer3');
        }else{
          echo "there are no widgets";
        }
      ?>

      </div>

      <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>

   </div> <!-- End row -->

   <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

</footer> <!-- End Footer-->


<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo  get_template_directory_uri();?>/assets/js/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>

<!-- START OF FOOTER -->
    <?php if ($hasfooter) { ?>
    <footer role="contentinfo" id="page-footer">
	<h1>welcome to the colophon</h1>	
	<nav role="navigation">
	 <!-- <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p> -->
	 Designed and built with all the love in the world la la la<br />
	 <?php
        echo $OUTPUT->login_info();
        // echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
      ?>
      <a href="#">Back to top</a>
	</nav>	
	
	</footer>	
	<?php } ?>			

</div><!-- close container -->	
</div><!-- close #page -->


<!-- silly css reset stuff that needs moving eventually..  -->


<?php echo $OUTPUT->standard_top_of_body_html(); ?> 
<?php echo $OUTPUT->standard_end_of_body_html() ?>
    <script type="text/javascript" src="<?php echo $CFG->wwwroot .'/theme/'.current_theme();?>/javascript/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $CFG->wwwroot .'/theme/'.current_theme();?>/javascript/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $CFG->wwwroot .'/theme/'.current_theme();?>/javascript/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo $CFG->wwwroot .'/theme/'.current_theme();?>/javascript/theme-specific.js"></script>
</body>
</html>
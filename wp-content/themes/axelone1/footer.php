<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plax.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#usine').plaxify({"xRange": 40, "yRange": 40})
        $('#persoheader').plaxify({"xRange": 20, "yRange": 20, "invert": true})
        $('#').plaxify({"xRange": 10, "yRange": 10, "invert": true})
        $.plax.enable()
    }
</script>


</body>
<?php wp_footer(); ?>
</html>

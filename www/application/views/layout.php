
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Optimized for legibility.">
    <meta name="author" content="Thomas Park">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- start: stylesheets-->
    <?php foreach($styles as $style):?>
        <?php echo HTML::style($style);?>
    <?php endforeach;?>
    <!-- end: stylesheets-->
   <script type="text/javascript">

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

   </script>

  </head>

  <body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
        <!-- header:start-->
        <?php foreach ($header as $single_header):?>
            <?php echo $single_header;?>
        <?php endforeach;?>
        <!-- header:end-->
        
        <!-- content_laft:start-->
        <?php foreach ($content_left as $single_left):?>
            <?php echo $single_left;?>
        <?php endforeach;?>
        <!-- content_left:end-->
        
        <!-- content_center:start-->
        <?php foreach ($content_center as $single_center):?>
            <?php echo $single_center;?>
        <?php endforeach;?>
        <!-- content_center:end-->
        
        <!-- content_right:start-->
        <?php foreach ($content_right as $single_right):?>
            <?php echo $single_right;?>
        <?php endforeach;?>
        <!-- content_right:end-->
        
        <!-- footer:start-->
        <?php foreach ($footer as $single_footer):?>
            <?php echo $single_footer;?>
        <?php endforeach;?>
        <!-- footer:end-->
        

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

        <?php foreach($scripts as $script):?>
            <?php echo HTML::script($script);?>
        <?php endforeach;?>


  </body>
</html>

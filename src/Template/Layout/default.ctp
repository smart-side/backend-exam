<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>   
        <?= $this->Html->meta('icon') ?>
        <title>
            <?= $this->fetch('title') ?>
        </title>


        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <?= $this->fetch('meta') ?>

        <!--easy pie chart-->
        <?= $this->Html->css('/js/jquery-easy-pie-chart/jquery.easy-pie-chart.css',['type'=>'text/css','media'=>'screen']) ?>

        <!--vector maps -->
        <?= $this->Html->css('/js/vector-map/jquery-jvectormap-1.1.1.css') ?>

        <!--right slidebar-->
        <?= $this->Html->css('slidebars.css') ?>

        <!--switchery-->
        <?= $this->Html->css('/js/switchery/switchery.min.css',['type'=>'text/css','media'=>'screen']) ?>


        <!--jquery-ui-->
        <?= $this->Html->css('/js/jquery-ui/jquery-ui-1.10.1.custom.min.css') ?>

        <!--iCheck-->
        <?= $this->Html->css('/js/icheck/skins/all.css') ?>

        <!--Carrocel-->
        <?= $this->Html->css('owl.carousel.css') ?>

        <!--common style-->
        <?= $this->Html->css('style.css') ?>

        <?= $this->Html->css('style-responsive.css') ?>   

        <?= $this->fetch('css') ?>

        <?= $this->fetch('script') ?>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="/js/html5shiv.js"></script>
        <script src="/js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="sticky-header">


        <section>
            
            <?= $this->element('sidebarleft'); ?>
            
            <!-- body content start-->
            <div class="body-content" >
                
                <?= $this->element('header'); ?>
                
                <?= $this->element('pageheader'); ?>
                
                <?= $this->fetch('content'); ?>
                
                
                <?= $this->element('footer'); ?>
                
            </div>
            <!-- body content end-->
            
            <?= $this->element('sidebarright'); ?>
        </section>

        <?= $this->fetch('cssBottom') ?>


        <!-- Placed js at the end of the document so the pages load faster -->
        <?= $this->Html->script('jquery-1.10.2.min.js') ?>

        <!--jquery-ui-->
        <?= $this->Html->script('jquery-ui/jquery-ui-1.10.1.custom.min.js',['type'=>'text/javascript']) ?>

        <?= $this->Html->script('jquery-migrate.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('modernizr.min.js') ?>

        <!--Nice Scroll-->
        <?= $this->Html->script('jquery.nicescroll.js',['type'=>'text/javascript']) ?>

        <!--right slidebar-->
        <?= $this->Html->script('slidebars.min.js') ?>

        <!--switchery-->
        <?= $this->Html->script('switchery/switchery.min.js') ?>

        <?= $this->Html->script('switchery/switchery-init.js') ?>

        <!--flot chart -->
        <?= $this->Html->script('flot-chart/jquery.flot.js') ?>

        <?= $this->Html->script('flot-chart/flot-spline.js') ?>

        <?= $this->Html->script('flot-chart/jquery.flot.resize.js') ?>

        <?= $this->Html->script('flot-chart/jquery.flot.tooltip.min.js') ?>

        <?= $this->Html->script('flot-chart/jquery.flot.pie.js') ?>

        <?= $this->Html->script('flot-chart/jquery.flot.selection.js') ?>

        <?= $this->Html->script('flot-chart/jquery.flot.stack.js') ?>

        <?= $this->Html->script('flot-chart/jquery.flot.crosshair.js') ?>


        <!--earning chart init-->
        <?= $this->Html->script('earning-chart-init.js') ?>


        <!--Sparkline Chart-->
        <?= $this->Html->script('sparkline/jquery.sparkline.js') ?>

        <?= $this->Html->script('sparkline/sparkline-init.js') ?>


        <!--easy pie chart-->
        <?= $this->Html->script('jquery-easy-pie-chart/jquery.easy-pie-chart.js') ?>
        <?= $this->Html->script('easy-pie-chart.js') ?>



        <!--vectormap-->
        <?= $this->Html->script('vector-map/jquery-jvectormap-1.2.2.min.js') ?>

        <?= $this->Html->script('vector-map/jquery-jvectormap-world-mill-en.js') ?>

        <?= $this->Html->script('dashboard-vmap-init.js') ?>

        <!--Icheck-->
        <?= $this->Html->script('icheck/skins/icheck.min.js') ?>

        <?= $this->Html->script('todo-init.js') ?>

        <!--jquery countTo-->
        <?= $this->Html->script('jquery-countTo/jquery.countTo.js',['type' => 'text/javascript']) ?>

        <!--owl carousel-->
        <?= $this->Html->script('owl.carousel.js') ?>

        <!--common scripts for all pages-->
        <?= $this->Html->script('scripts.js') ?>
            
        <?= $this->Html->script('underscore-min.js') ?>
        <?= $this->Html->script('backbone-min.js') ?>
        
        <?= $this->fetch('scriptBottom') ?>

    </body>
</html>

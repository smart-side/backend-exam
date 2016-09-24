<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?> 
        <?= $this->Html->meta('icon') ?>
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <link rel="shortcut icon" href="/img/ico/favicon.png">


        <!-- Base Styles -->
        <?= $this->Html->css('style.css') ?>

        <?= $this->Html->css('style-responsive.css') ?>
        <link href="/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="/js/html5shiv.min.js.html"></script>
        <script src="/js/respond.min.js"></script>
        <![endif]-->


    </head>

    <body class="login-body">

        <div class="login-logo">
            <?= $this->Html->image('login_logo.png') ?>
        </div>

        <h2 class="form-heading">login</h2>
        
        
        <div class="container log-row">
            
        
            <form class="form-signin" method="POST">
                <?= $this->Flash->render() ?>
                
                
                <div class="login-wrap">
                    <input type="text" name="email" class="form-control" placeholder="User ID" autofocus />
                    <input type="password" name="pass" class="form-control" placeholder="Password" />
                    <button class="btn btn-lg btn-success btn-block" type="submit">LOGIN</button>
                </div>
            </form>
        </div>

        <!--jquery-1.10.2.min-->
        <?= $this->Html->script('jquery-1.11.1.min.js') ?>

        <!--Bootstrap Js-->
        <?= $this->Html->script('bootstrap.min.js') ?>
    </body>
</html>

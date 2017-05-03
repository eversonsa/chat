<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css"/>
         <script type="text/javascript" src="assets/js/jquery.min.js"></script>
         <script type="text/javascript" src="assets/js/funcoes.js"></script>
         
    </head>
    <body>
        <div class="environment" style="background-color:<?php   
            if(isset($_SESSION['area']) && $_SESSION['area'] == 'suporte'){
                echo '#00ffff';
            }elseif (isset($_SESSION['area']) && ($_SESSION['area']) == 'cliente'){
                echo '#00ff00';
            }  else {
                echo '#000000';
            }
        ?>">
            
        </div>
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
       
        
    </body>
</html>
    

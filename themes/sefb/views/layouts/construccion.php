<?php /* @var $this Controller */ ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="language" content="es" />
        
        <!--BOOTSTRAP-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <!--NORMALIZE-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
        
        <style>
            body{
                background-color: #323232;
            }
        </style>
        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
    </head>
    <body>
        
        
        
        <?php echo $content; ?>
        
        
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                
            });
        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>catalago</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<body>
   
=======
<body
    <link rel="stylesheet" type="text/css" href="<?php> echo base_url(); ?>css/diseño.css">
>>>>>>> bc330a360e1468bfca21ad0231891ca757b22d45
    
<?php foreach ($eg_catalago as $catalago):?>

        
            
        
<div class="col-xs-6    col-sm-4    text-center">

         <a  href=" <?php echo base_url(); ?>news/view/<?= $catalago->id; ?> ">          
             <img    src="assets/uploads/images_catalago/<?= $catalago->imagen; ?> " class="img-thumbnail"   style="height:300px; width:200px">
         	
                      <h4 style="min-height:45px;margin:5px   0   10px    0"> <?= $catalago->nombre; ?>        
                      </h4>                               
                    </a>
                </div>  
            
<?php endforeach; ?>
           
    
</body>

</html> 
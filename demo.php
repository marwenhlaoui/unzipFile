<?php
/**
 * Created by PhpStorm.
 * User: Marwen Hlaoui
 * Date: 02/02/2016
 * Time: 22:09
 */ 

    require_once 'inc/init.php';
    require_once 'inc/upload_file.php';
    require_once 'inc/unzip_file.php';


    if(isset($_POST['unzip-submit'])){

        $file = $_FILES['fileZip'];
        if ($file['error'] == 0) {

            $dir = "lib/upload/package/zip";
            $lib = "lib/theme";
            $upload_file = new upload_file($file, $dir); 
            $unzip_file = new unzip_file($upload_file->name(),$lib);

        } 

    }

 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Demo UnzipFile</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/paper/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">

            <div class="jumbotron">
              <h1><i class="fa fa-file-archive-o"></i> Unzip File</h1>
              <p>
                I: Move import file to <span class="label label-warning">$dir = "lib/upload/package/zip"</span><br>
                II: Extract <span class="label label-info">zip</span> file to <span class="label label-warning">$lib = "lib/theme"</span>
              </p>
                
                
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" enctype="multipart/form-data" action="" class="navbar-form navbar-left" >
                            <div class="form-group">
                                <input type="file" name="fileZip" style="box-shadow: 1px 1px 4px rgba(0,0,0,0.4);padding: 3%;">
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg" name="unzip-submit"  value="Unzip File Now" >
                        </form>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://bootswatch.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>




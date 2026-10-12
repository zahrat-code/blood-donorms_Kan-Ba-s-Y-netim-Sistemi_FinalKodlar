<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KBYS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Yeni Kampanya Başlat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Lütfen aşağıdaki formu doldurun:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="addedcampaign.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Kampanya Adı</label>
                                            <input class="form-control" type="text" placeholder="Kampanyanın Adını Girin" name="cname" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Organizatör Adı</label>
                                            <input class="form-control" type="text" placeholder="Organizatörün Adını Girin" name="oname" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>İletişim Numarası</label>
                                            <input class="form-control" placeholder="+90 508 328 21 21" type="number" name="phn" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Kampanya Tarihi</label>
                                            <input class="form-control" type="date" name="cdate" required>
                                        </div>

                

                                        <div class="form-group">
                                            <label>Tanım</label>
                                            <textarea class="form-control" type="text" rows="4" name="descp" required></textarea>
                                        </div>
                                       
                                    
                                
                                        <button type="submit" href="" class="btn btn-success" style="border-radius:0%">Postala</button>
                
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>



</html>

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

    <?php include 'includes/donornav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">Kan Bağışı Bölümü</h1>
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
                                    <form role="form" action="useraddedblood.php" method="POST">
                                     
                                        <div class="form-group">
                                            <label>Tam Adınızı Girin</label>
                                            <input class="form-control" placeholder="Ali Kaya" type="text" name="name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Cinsiyet [ E/K ]</label>
                                            <input class="form-control" placeholder="Erkek için E ve Kadın için K" type="text" name="gender" required>
                                        </div>

                                        <div class="form-group">
                                            <label>D.O.B girin</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Ağırlığı Girin</label>
                                            <input class="form-control" type="number" placeholder="KG" name="weight" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Kan Grubunu Girin</label>
                                            <input class="form-control" type="text" placeholder="örnek: B+, O-, B-" name="bloodgroup" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Adresi Girin</label>
                                            <input class="form-control" type="text" placeholder="Tam Adres" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>İletişim Numarasını Girin</label>
                                            <input class="form-control" type="number" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Kan Miktarı</label>
                                            <input class="form-control" type="number" name="bloodqty" required>
                                        </div>

                                        <div class="form-group">
                                                <label>Toplama Tarihi</label>
                                                <input class="form-control" type="date" name="collection" required>
                                            </div>
                                       
                                    
                                
                                        <button type="submit"  class="btn btn-success">gönder</button>
                
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

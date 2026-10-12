<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="icofont-blood-drop"></i>Kan Bağışçısı Yönetim Sistemi</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
             
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li class="divider"></li> -->
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Çıkış Yap</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
               
                <!-- /.dropdown -->
            </ul>
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Ara...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>

                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Gösterge Paneli</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-heartbeat"></i> Kan Alma Detayları <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addblood.php">Kan Ekle</a>
                                </li>
                                <li>
                                    <a href="viewblood.php">Kanı Görüntüle</a>
                                </li>
                                <li>
                                    <a href="editblood.php">Kanı Düzenle</a>
                                </li>
                                <li>
                                    <a href="deleteblood.php">Kanı Kaldır</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="adddonor.php"><i class="fa fa-table fa-user-plus"></i> Bağışçı Ekle</a>
                        </li>
                        <li>
                            <a href="viewdonor.php"><i class="fa fa-edit fa-eye"></i> Bağışçı Ayrıntılarını Görüntüle</a>
                        </li>
                        <li>
                            <a href="editview.php"><i class="fa fa-edit fa-fw"></i> Bağışçı Ayrıntılarını Düzenle</a>
                        </li>
                        <li>
                            <a href="deleteview.php"><i class="fa fa-user-times"></i> Bağışçı Ayrıntılarını Sil</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-bullhorn"></i> Duyurular <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="makeannouncement.php">Duyuru Yap</a>
                                </li>
                                <li>
                                    <a href="viewannouncement.php">Duyuruyu Görüntüle</a>
                                </li>
                                <li>
                                    <a href="editannounceform.php">Duyuruyu Düzenle</a>
                                </li>
                                <li>
                                    <a href="deleteannouncement.php">Duyuruyu Kaldır</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href=""><i class="fa fa-flag"></i> Kampanyalar <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="newcampaign.php">Yeni Kampanya</a>
                                </li>
                                <li>
                                        <a href="viewcampaign.php">Kampanyayı Görüntüle</a>
                                    </li>
                                    <li>
                                        <a href="updatecampaign.php">Güncelleme Kampanyası</a>
                                    </li>
                                    <li>
                                        <a href="deletedcampaign.php">Kampanyayı Sil</a>
                                    </li>
                            </ul>
                        </li>
            
                        
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
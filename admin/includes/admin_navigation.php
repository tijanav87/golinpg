<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">GolinPG Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="../index.php">Home</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#sastanci_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Sastanci <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="sastanci_dropdown" class="collapse">
                            <li>
                                <a href="sastanci.php">Sastanci</a>
                            </li>
                            <li>
                                <a href="izvjestaj.php">Izvještaj</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#sadrzaj_dropdown"><i class="fa fa-fw fa-file"></i> Sadržaj <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="sadrzaj_dropdown" class="collapse">
                            <li>
                                <a href="sadrzaj.php">Sadržaj</a>
                            </li>
                            <li>
                                <a href="dodaj_pod_sadrzaj.php">Dodaj pod-sadržaj</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#slike_dropdown"><i class="fa fa-file-image-o"></i> Slike <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="slike_dropdown" class="collapse">
                           <li>
                                <a href="slike.php">Slike</a>
                            </li>
                            <li>
                                <a href="dodaj_slike.php">Dodaj slike</a>
                            </li>
                            
                        </ul>
                    </li>
                    

                    <li>
                        <a href="profile.php"><i class="fa fa-file-text"></i> Profil</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
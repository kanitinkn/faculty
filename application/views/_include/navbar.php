
<!-- Navbar ================================================================ -->
    
    <div class="container">
        <img class="img-responsive img-center" src="<?= base_url() . 'assets/img/logo.jpg' ?>" alt="Boss">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">

                    <!-- invisible col >= xs -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- brand-text-left -->
                    <a class="navbar-brand">FACULTY OF SCIENCE</a>
                </div>
                <div class="collapse navbar-collapse">
                    
                    <!-- menu -->                    
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if ($page == "index") echo 'class="active"' ?>><?= anchor('index', 'หน้าหลัก') ?></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">หลักสูตร <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li <?php if ($page == "bachelor") echo 'class="active"' ?>><?= anchor('bachelor', 'หลักสูตรปริญญาตรี') ?></li>
                                <li <?php if ($page == "master") echo 'class="active"' ?>><?= anchor('master', 'หลักสูตรปริญญาโท') ?></li>
                                <li <?php if ($page == "doctorate") echo 'class="active"' ?>><?= anchor('doctorate', 'หลักสูตรปริญญาเอก') ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ภาควิชา/หน่วยงาน <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li <?php if ($page == "bachelor") echo 'class="active"' ?>><?= anchor('bachelor', 'หลักสูตรปริญญาตรี') ?></li>
                                <li <?php if ($page == "master") echo 'class="active"' ?>><?= anchor('master', 'หลักสูตรปริญญาโท') ?></li>
                                <li <?php if ($page == "doctorate") echo 'class="active"' ?>><?= anchor('doctorate', 'หลักสูตรปริญญาเอก') ?></li>
                            </ul>
                        </li>
                        <li <?php if ($page == "personnel") echo 'class="active"' ?>><?= anchor('personnel', 'บุคลากร') ?></li>
                        <li><a href="#">นักเรียน/นักศึกษา</a></li>
                        <li><a href="#">สมาคมศิษย์เก่า</a></li>
                        <li><a href="#" style="margin-right:20px;">ติดต่อ</a></li>
                    </ul>
                </div>
            </div><!-- ./container -->
        </nav><!-- ./nav -->
    </div>

<!-- Navbar End ============================================================ -->

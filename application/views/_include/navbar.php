
<!-- Navbar ================================================================ -->
    
    <div class="container" style="margin-bottom:25px;">
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
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">หลักสูตร <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li <?php if ($page == "bachelor") echo 'class="active"' ?>><?= anchor('bachelor', 'หลักสูตรปริญญาตรี') ?></li>
                                <li <?php if ($page == "master") echo 'class="active"' ?>><?= anchor('master', 'หลักสูตรปริญญาโท') ?></li>
                                <li <?php if ($page == "doctorate") echo 'class="active"' ?>><?= anchor('doctorate', 'หลักสูตรปริญญาเอก') ?></li>
                                <li><a href="">หลักสูตรนานาชาติ</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ภาควิชา/หน่วยงาน <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li <?php if ($page == "bachelor") echo 'class="active"' ?>><?= anchor('bachelor', 'หลักสูตรปริญญาตรี') ?></li>
                                <li <?php if ($page == "master") echo 'class="active"' ?>><?= anchor('master', 'หลักสูตรปริญญาโท') ?></li>
                                <li <?php if ($page == "doctorate") echo 'class="active"' ?>><?= anchor('doctorate', 'หลักสูตรปริญญาเอก') ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">บุคลากร <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">ทุนพัฒนาและส่งเสริมด้านวิชาการ</a></li>
                                <li><a href="">แจ้งการโอนเงินหมุนเวียน</a></li>
                                <li><a href="">จดหมายเวียนออน์ไลน์</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">นักเรียน/นักศึกษา <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">ทุนอุดหนุนวิทยาศาสคร์</a></li>
                                <li><a href="">สโมสรนักศึกษา</a></li>
                                <li><a href="">วิทยานิพนธ์/การศึกษาอิสระ</a></li>
                                <li><a href="">งานแนะแนวและจัดหางาน</a></li>
                                <li><a href="">สัปดาห์วันวิทยาศาสตร์</a></li>
                                <li><a href="">พสวท.</a></li>
                                <li><a href="">ค่ายโอลิมบิกวิชาการ</a></li>
                            </ul>
                        </li>
                        <li <?php if ($page == "download") echo 'class="active"' ?>><?= anchor('download', 'ดาวน์โหลด') ?></li>
                        <li><a href="http://www.kkusca.org/" target="blank">สมาคมศิษย์เก่า</a></li>
                        <li style="margin-right:15px;" <?php if ($page == "contact") echo 'class="active"' ?>><?= anchor('contact', 'ติดต่อ') ?></li>
                    </ul>
                </div>
            </div><!-- ./container -->
        </nav><!-- ./nav -->
    </div>

<!-- Navbar End ============================================================ -->

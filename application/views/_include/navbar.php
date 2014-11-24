
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
                                <li><a target="blank" href="https://sites.google.com/site/kkubiologicalscience/">หลักสูตรนานาชาติ</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ภาควิชา/หน่วยงาน <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li <?php if ($page == "department") echo 'class="active"' ?>><?= anchor('department', 'ภาควิชา/ศูนย์วิจัย') ?></li>
                                <li <?php if ($page == "workin") echo 'class="active"' ?>><?= anchor('workin', 'หน่วยงานภายใน') ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">บุคลากร <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li <?php if ($page == "manager") echo 'class="active"' ?>><?= anchor('manager', 'คณะผู้บริหาร') ?></li>
                                <li><a target="blank" href="http://www.sc.kku.ac.th/office/researchsci/modules/wfdownloads/viewcat.php?cid=1">ทุนพัฒนาและส่งเสริมด้านวิชาการ</a></li>
                                <li><a target="blank" href="https://sc3.kku.ac.th/borrow/index.php">แจ้งการโอนเงินหมุนเวียน</a></li>
                                <li><a target="blank" href="http://www.sc.kku.ac.th/e-document/">จดหมายเวียนออน์ไลน์</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">นักเรียน/นักศึกษา <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a target="blank" href="http://www.sc.kku.ac.th/office/scholarship">ทุนอุดหนุนวิทยาศาสคร์</a></li>
                                <li><a target="blank" href="http://www.sckku-smo.in.th/">สโมสรนักศึกษา</a></li>
                                <li><a target="blank" href="http://www.sc.kku.ac.th/thesis/student/login.php">วิทยานิพนธ์/การศึกษาอิสระ</a></li>
                                <li><a target="blank" href="http://202.28.92.176/guidance/">งานแนะแนวและจัดหางาน</a></li>
                                <li class="divider"></li>
                                <li><a target="blank" href="http://www.sc.kku.ac.th/scweek/index.php">สัปดาห์วันวิทยาศาสตร์</a></li>
                                <li><a target="blank" href="http://www.sc.kku.ac.th/stdpst/">พสวท.</a></li>
                                <li><a target="blank" href="http://www.sc.kku.ac.th/olympic/">ค่ายโอลิมบิกวิชาการ</a></li>
                            </ul>
                        </li>
                        <li <?php if ($page == "download") echo 'class="active"' ?>><?= anchor('download', 'ดาวน์โหลด') ?></li>
                        <li><a target="blank" href="http://www.kkusca.org/">สมาคมศิษย์เก่า</a></li>
                        <li style="margin-right:15px;" <?php if ($page == "contact") echo 'class="active"' ?>><?= anchor('contact', 'ติดต่อ') ?></li>
                    </ul>
                </div>
            </div><!-- ./container -->
        </nav><!-- ./nav -->
    </div>

<!-- Navbar End ============================================================ -->

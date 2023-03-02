<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map</a></li>
                        <li><a href="#"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us</a></li>
                        <li class="nav-header">About US</li>
                        <li><a href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission</a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision</a></li>
                        <li  class="active"><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History</a></li>

                    </ul>
                </div>

            </div>

            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>NHCE History</strong>
                </div>


                <p>
                <div class="hero-unit-2">
The New Horizon College of Engineering (NHCE) is an autonomous private engineering college located near Marathahalli, in Bangalore, India. Established in 2001, the college is part of the New Horizon Educational Institution which was established in 1970.
 New Horizon College of Engineering is an Autonomous college affiliated to Visvesvaraya Technological University (VTU), approved by the All India Council for Technical Education (AICTE) & University Grants Commission (UGC). It is accredited by NAAC with ‘A’ grade & National Board of Accreditation (NBA). New Horizon college of Engineering is located in the heart of the IT capital of India, Bangalore. The college campus is situated in the IT corridor of Bangalore surrounded by MNCs and IT giants.
NHCE has a scenic and serene campus that provides an environment which is conducive for personal and intellectual growth. The infrastructure acts as a facilitator for the effective delivery of the curriculum. NHCE boasts of state-of-the-art facilities for its students. They are given utmost encouragement in their areas of interest by providing hi-tech facilities backed by faculty support.</div>
                </p>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>



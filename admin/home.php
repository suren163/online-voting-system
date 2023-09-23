<?php
include('session.php');
include('header.php');
include('dbcon.php');
?>
</head>

<body>
    <?php include('nav_top.php'); ?>
    <div class="wrapper">
        <div class="home_body">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav nav-pills">
                            <li>....</li>
                            <li class="active"><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
                            <li><a href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>

                            <li class=""><a href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>
                            <li><a href="canvassing_report.php"><i class="icon-book icon-large"></i>Canvassing Report</a></li>
                            <li><a href="History.php"><i class="icon-table icon-large"></i>History Log</a>
                                <div class="modal hide fade" id="about">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"> </button>
                                        <h3> </h3>
                                    </div>

                            <li>....</li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <?php $result = mysqli_query($conn, "select * from users where User_id='$id_session'");
                            $row = mysqli_fetch_array($result);
                            ?>
                            <font color="white">Welcome:<i class="icon-user-md"></i><?php echo $row['User_Type']; ?></font>
                            <a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
                            <div class="modal hide fade" id="myModal">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"> </button>
                                    <h3> </h3>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <font color="gray">Are You Sure you Want to LogOut?</font>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn" data-dismiss="modal">No</a>
                                    <a href="logout.php" class="btn btn-primary">Yes</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div id="element" class="hero-body">
                <div class="thumbnail_gallery">
                    <h2>SJC Gallery</h2>
                    <p>
                        <font color="black">Click the image to view more...</font>
                    </p>
                    <div id="myGallery" class="spacegallery">
                        <img src="images/c2.jpeg" alt="" />
                        <img src="images/c3.jpeg" alt="" />
                        <img src="images/c4.jpeg" alt="" />
                        <img src="images/c1.jpeg" alt="" />
                    </div>
                </div>
                <div class="thumbnail_mission">
                    <h2>Mission</h2>
                    <p>Laboratory School wly serving as a training ground for education students,seeks to develop in excellence
                        and with quality, the total personality of children.Vision Train and develop highly motivated and committed professional elementary and secondary teachers equipped.
                    </p>
                    <div class="modal hide fade" id="mission">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"> </button>
                            <h3> </h3>
                        </div>

                    </div>

                </div>
                <br>

                <div class="thumbnail_vission">
                    <h2>Objectives</h2>

                    <p>*develop an Enlightened commitment to the national ideals by cherishing,
                        preserving and developing the desirable aspects of Filipino heritage, spiritually,
                        morally and socialy.
                    </p>

                    <div class="modal hide fade" id="read_objectives">

                    </div>
                </div>

            </div>
            <?php include('footer.php') ?>
        </div>
    </div>
</body>

</html>
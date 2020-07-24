<?php include 'header.php'; ?>
<!-- slider_area_start -->
    <div class="slider_area slider_bg_1">
        <div class="slider_text">
            <div class="container">
                <div class="position_relv">
                    <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <div class="title_text title_text2 ">
                                    <h3>participate</h3>
                                    <a href="#" class="boxed-btn-white">Add to your Calendar</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="countDOwn_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_date">
                            <i class="ti-location-pin"></i>
                            <span>City Hall, New York City</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="single_date">
                            <i class="ti-alarm-clock"></i>
                            <span>12-15 Sep 2019</span>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-5">
                        <span id="clock"></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
     <!-- event_area_start -->
    <div class="event_area plus_padding">
        <h1 class="vr_text d-none d-lg-block">Event Schedule</h1>
        <div class="container">
            <div class="double_line">
                <div class="row">   <!-- start from here for dynamics -->
                    <div class="col-xl-3 col-lg-3">
                        <div class="date">
                            <h3>08 Feb 2020</h3>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        
                            
                        <?php
    $sql="SELECT * FROM `event_detail` WHERE `id`<= 3";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){

        while($row=mysqli_fetch_assoc($result)){
            ?>          
                    <div class="single_speaker">
                        <img src="img/speakers/seaker<?= $row['id']; ?>.png" alt="">
                            <div class="speaker-name">
                                <div class="heading d-flex justify-content-between align-items-center">
                                    <span><a href="https://allevents.in/manage/tickets/book.php?event_id=80003423099622"><?= $row['name'] ?></a></span>
                                    <div class="time">
                                        <?= $row['date'];?>
                                    </div>
                                </div>
                                <p><?= $row['detail'] ?></p>
                            </div>
                        </div>                      
            <?php
        }
    }
    ?>
                    </div>
                </div>      <!-- check for last two div close -->
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="date">
                        <h3>09 Feb 2020</h3>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <?php
    $sql="SELECT * FROM `event_detail` WHERE `id`>= 4";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){

        while($row=mysqli_fetch_assoc($result)){
            ?>          
                    <div class="single_speaker">
                        <img src="img/speakers/seaker<?= $row['id']; ?>.png" alt="">
                            <div class="speaker-name">
                                <div class="heading d-flex justify-content-between align-items-center">
                                    <span><a href="PaymentGatwayNeel/index.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></span>
                                    <div class="time">
                                        <?= $row['date'];?>
                                    </div>
                                </div>
                                <p><?= $row['detail'] ?></p>
                            </div>
                        </div>                      
            <?php
        }
    }
    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- event_area_end -->
 
<?php include 'footer.php'; ?>
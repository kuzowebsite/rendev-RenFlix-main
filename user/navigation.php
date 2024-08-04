<div class="renflix">
    <!-- Home Content Start -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!-- Home 1 -->
            <div class="swiper-slide container">
                <img src="../assets/img/home1.jpg" alt="">
                <div class="home-text">
                    <span>Марвелийн ертөнц</span>
                    <h1>Хор: Let There <br> Хохирол болох</h1>
                    <a href="#" class="btn">Одоо захиалаарай</a>
                    <a href="" class="play">
                        <i class="bx bx-play"></i>
                    </a>
                </div>
            </div>
            <!-- Box 2 -->
            <div class="swiper-slide container">
                <img src="../assets/img/home2.jpg" alt="">
                <div class="home-text">
                    <span>Марвелийн ертөнц</span>
                    <h1>Өшөө авагчид: <br> Хязгааргүйн дайн</h1>
                    <a href="#" class="btn">Одоо захиалаарай</a>
                    <a href="" class="play">
                        <i class="bx bx-play"></i>
                    </a>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="swiper-slide container">
                <img src="../assets/img/home3.jpg" alt="">
                <div class="home-text">
                    <span>Марвелийн ертөнц</span>
                    <h1>Хүн аалз : <br> Гэрээсээ хол</h1>
                    <a href="#" class="btn">Одоо захиалаарай</a>
                    <a href="" class="play">
                        <i class="bx bx-play"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- Movie Start -->
    <section style="background-color : black;" class="movies" id="movies">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading">Энэ долоо хоногт нээлтээ хийнэ</h2>
            </div>
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($movie as $row ) : ?>
                <div class="col-sm-4 mt-4 mov">
                    <div class="card" style="width: 15rem;">
                        <input type="hidden" name="id" placeholder="ID" value="<?= $row["id"];?>">
                        <img height="240px" width="auto" src="../assets/img/<?php echo $row['img'];?>"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $row['mv_name'];?>
                            </h5>
                            <p class="card-text">
                                <?php echo $row['genre_name'];?>
                            </p>
                            <a href="index.php?p=movie-player&id=<?php echo $row["id"];?>" class="btn
                                btn-primary">Үзэх</a>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <!-- Row End -->
        </div>
    </section>

    <!-- Movie End -->

    <!-- Coming Soon Start -->
    <section style="background-color : black;" class="coming" id="coming">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading">Удахгүй энэ жил</h2>
            </div>
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($new_movie as $row ) : ?>
                <div class="col-sm-4 mt-4 mov">
                    <div class="card" style="width: 15rem;">
                        <img height="240px" width="auto" src="../assets/img/<?php echo $row['img'];?>"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $row['mv_name'];?>
                            </h5>
                            <p class="card-text">
                                <?php echo $row['genre_name'];?>
                            </p>
                            <a href="index.php?p=trailer-player&id=<?php echo $row["id"];?>" class="btn
                                btn-primary">Трейлер үзэх</a>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <!-- Row End -->
        </div>
        <!-- Coming Soon End -->
    </section>

    <section class="subs" id="subs">
        <form class="form-inline my-2 my-lg-0 subscription">
            <input class="form-control mr-sm-2" type="search" placeholder="Enter Your Email..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Захиалга</button>
        </form>
    </section>
</div>
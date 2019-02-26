<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的店商網站</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="js\all.js"></script>
    <link rel="stylesheet" type="text/css" href="css\main.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <form>
        <div class="g-recaptcha" data-sitekey="6LdlkJMUAAAAAN_LtbFsvdFovnWHYNjTH7RlQ2Ii"></div>
    </form>
    <div id="mpanel"></div>
    <div class="container">
        <!-- 提示欄 -->
        <!-- <div id="emotion" class="alert alert-secondary" role="alert">
            <div class="row ">
                <p class="col-12 col-md-8">我們沒有店名</p>
                <p class="col-12 col-md-4">你還未登入 ! 請點擊
                    <a href="#" data-toggle="modal" data-target="#exampleModal"> 註冊 </a>或<a href="login.php"> 登入 </a>
                    <img src="img\cancel.png" class="closebar">
                </p>
            </div>
        </div>
        <div class="mx-auto mb-4" style="width: 200px;">
            <img src="img\logo100x200.png" alt="logo100x200">
        </div> -->

        <?php include('head.php'); ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">註冊帳號</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="register.php" method="post">
                            <div class="form-group1">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="InputEmail1" aria-describedby="emailHelp" placeholder="請輸入信箱">
                                <small id="emailHelp" class="form-text">請填寫正確的信箱，以利帳號認證</small>
                            </div>
                            <div class="form-group2">
                                <label for="exampleInputPassword1">密碼</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="InputPassword1" placeholder="請輸入密碼">
                                <small id="passwordHelp" class="form-text">請輸入八個字以上的英文數字組合，</small>
                            </div>
                            <div class="form-group3">
                                <label for="exampleInputPassword2">確認密碼</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" name="InputPassword2" placeholder="請再次輸入密碼">
                                <small id="repasswordHelp" class="form-text"></small>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        <button id="register" type="submit" class="btn btn-primary" disabled>註冊</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- 導航欄 -->
        <nav class=" navbar-expand-lg navbar-light bg-light sticky-top ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- 表單 -->
            <!-- 導航欄 -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
                <a class="navbar-brand" href="#">我們沒有店名</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">首頁 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">關於</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">分類一</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">分類二</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">分類三</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a class="nav-link" href="#">登入 <span class="sr-only">(current)</span></a>
                        <!-- Button trigger modal -->
                        <a class="nav-link" href="#" class="btn btn-primary mx-2" data-toggle="modal" data-target="#exampleModal">註冊 <span class="sr-only">(current)</span></a>
                        <!-- <button type="button" class="btn btn-primary mx-2" data-toggle="modal" data-target="#exampleModal">
                            註冊
                        </button> -->
                        <input class="form-control mr-sm-2" type="search" placeholder="找商品 ?" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜尋</button>
                    </form>
                </div>
            </nav>
            <!-- 長條背景圖 -->
            <!-- <div class=".container">
          <img src="http://lorempixel.com/output/fashion-q-c-1920-200-7.jpg" class="figure-img img-fluid rounded"
              height=100px>
      </div> -->
            <div class="d-flex justify-content-between mt-4">
                <!-- item
                <div class=" list-group col-12 col-md-2">
                    <button type="button" class="list-group-item list-group-item-action active">首頁
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">關於</button>
                    <button type="button" class="list-group-item list-group-item-action">分類一</button>
                    <button type="button" class="list-group-item list-group-item-action">分類二</button>
                    <button type="button" class="list-group-item list-group-item-action">分類三</button>
                </div> -->
                <!-- 輪播圖 -->
                <div class="col-12 col-md-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img\lorempixel1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img\lorempixel2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img\lorempixel3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, architecto? Similique nostrum corrupti
                repudiandae hic! Animi nam tempore expedita consequuntur, earum repellendus modi possimus odit placeat
                dignissimos vitae doloribus? A debitis aperiam quo optio, natus officiis voluptatem asperiores accusamus
                distinctio commodi placeat. Quaerat dolores molestiae reiciendis. Omnis, sed minus. Incidunt, natus. Veniam
                sint
                ipsa laudantium qui nam, accusantium omnis soluta voluptates asperiores at aliquid voluptatum impedit
                incidunt
                sapiente expedita hic architecto laboriosam in. Ipsam ullam dignissimos totam, nesciunt aut consequuntur
                iure
                maiores nisi accusantium quos deserunt molestiae necessitatibus. Veritatis cum hic, architecto amet est
                obcaecati deleniti et adipisci voluptatibus dicta ipsam doloribus ad iste eaque laboriosam in voluptatum
                voluptatem. Sequi molestiae sunt consequuntur reiciendis. Cupiditate error voluptates assumenda amet
                incidunt
                perspiciatis dolorum autem non minus. Tempore a blanditiis eligendi, qui beatae debitis commodi illo minus
                repudiandae aliquid eaque ea quia cum, pariatur quod rerum! Libero facilis, vel, omnis autem repellendus
                laboriosam veniam praesentium nostrum ea aperiam qui sed, saepe quasi. Aspernatur, omnis illo suscipit vero
                corrupti, iste at nesciunt labore nisi mollitia quasi, cupiditate soluta reprehenderit vitae perferendis
                sint
                quibusdam placeat nemo? Nihil laborum quis facere accusamus architecto aperiam vero enim praesentium
                assumenda
                soluta. Nemo maxime quod sed dolorem. Odit dolor nobis modi nisi pariatur! Dolorem ipsam ab consequatur non
                quam
                soluta? Ullam nesciunt sint nobis reprehenderit. In, harum possimus. Unde culpa fugiat veritatis ut
                corporis,
                sed deleniti. Et, perspiciatis culpa explicabo excepturi doloremque repellendus placeat pariatur hic ex
                debitis!
                Corrupti iste commodi neque ea omnis assumenda vitae illo necessitatibus est, nobis magni possimus nostrum
                autem
                unde perspiciatis eius sint laboriosam atque consectetur ut! Fugiat soluta dignissimos similique itaque,
                quis
                optio, rem quo magni odio saepe, obcaecati molestiae perferendis doloremque nobis consequuntur earum ut
                reiciendis illum ad aliquid officia ipsum. Dolores veritatis modi laboriosam maiores laudantium. Assumenda
                optio
                unde deleniti, aliquam numquam asperiores nisi repellat error quasi sed facere rem quia ut incidunt illo
                veniam
                magni excepturi. Perspiciatis eum et consequuntur? At ut dicta, neque quae suscipit nihil nam dolore eum
                vero
                ipsam quisquam possimus, laborum eligendi esse blanditiis asperiores corporis hic distinctio eaque odio
                magni,
                eos facere tempora sapiente. Inventore quas voluptas facere quia, placeat aliquam dicta facilis repellendus
                voluptates a fuga, neque dolore vitae obcaecati unde doloremque corrupti laudantium quibusdam dolorem
                voluptatum? Officiis soluta voluptate aliquam libero neque maiores quam dolor sint aliquid tempora
                consectetur
                molestiae fugiat, nam dicta omnis error sit repudiandae dolorem, ducimus modi pariatur. Commodi expedita
                culpa
                sapiente accusamus corporis voluptatum asperiores, suscipit, officiis eum ex cumque, ratione eos similique
                dolore cum repellat molestias voluptatem odio aut quia autem corrupti. Quo sequi enim sint doloribus velit
                porro, ratione deleniti iusto nemo hic inventore fugiat officiis dolore delectus! Voluptatem, neque laborum!
                Blanditiis earum officiis alias ipsum omnis. Eveniet quaerat impedit pariatur fugit nesciunt totam, beatae
                accusamus cum ut delectus iure itaque explicabo nam nisi molestias magni amet quae obcaecati cupiditate
                nihil?
                Ab laboriosam dolorem, amet, neque fuga nihil consequatur eligendi dolor magnam alias mollitia totam
                accusamus
                iure nostrum culpa nemo debitis harum dignissimos. Praesentium deleniti, eius repudiandae illum harum
                officiis
                nemo fugit nam ab autem sed, error, magni quas? Sequi deserunt laboriosam deleniti minima vitae labore
                mollitia,
                fugit, iste unde nihil eius assumenda reprehenderit error sed possimus ipsam optio enim quis eos, fugiat
                tempora
                quidem voluptatibus numquam. Ratione placeat perferendis, natus excepturi qui veniam, nostrum molestias
                necessitatibus sed nisi laboriosam laudantium maxime temporibus quod. Dignissimos corporis assumenda
                voluptates
                at ipsam voluptatibus autem perspiciatis deserunt. Tempore cumque possimus veritatis perferendis voluptatem
                reiciendis amet ipsa magnam nostrum esse rem consectetur vel, molestias nesciunt voluptatibus nisi dolorem
                mollitia quos doloremque ab quod repudiandae in! Eveniet vero fugit necessitatibus ut!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto veniam consequuntur tenetur eveniet ipsam
                blanditiis quibusdam reprehenderit cum, facilis impedit distinctio, quo, porro ab? Officiis, delectus
                consequuntur. Dignissimos veniam minus exercitationem consequuntur fugit cupiditate sapiente reiciendis
                beatae,
                a deserunt. Distinctio, nihil. Soluta consequuntur itaque inventore ex! Corporis repellendus et hic odio?
                Perferendis impedit quia nostrum voluptatibus vero nihil reprehenderit incidunt? Dolore ipsum maiores
                doloribus
                perferendis alias incidunt commodi officiis consectetur odit, laboriosam et quaerat accusantium molestiae
                modi
                quidem velit perspiciatis totam dolorum nam ullam, corporis natus quod! Amet voluptatibus quis qui
                distinctio
                eum officia necessitatibus suscipit aperiam sapiente quod numquam ratione alias possimus iste dolorum
                voluptatum
                quia ipsa officiis, dolore, dolorem sed laudantium voluptate eos. Ab porro ipsam soluta in deleniti aliquam
                sint
                asperiores, consequuntur dolor, nulla ut? Ipsum nam atque ipsam voluptates dicta tenetur doloribus sed nihil
                cumque adipisci nesciunt fuga, aliquam, enim pariatur. Facere incidunt veniam dicta, ipsa maiores vero
                officiis
                reiciendis esse, ducimus vel debitis voluptates eius aperiam nesciunt maxime doloribus? Ut, tenetur. Dolore
                sapiente odio, modi dolor inventore obcaecati natus? Officia pariatur perspiciatis officiis, reprehenderit
                accusamus voluptates numquam impedit, error aspernatur ab quae ipsa nisi exercitationem fugit architecto
                repellendus alias dolore. Atque cupiditate deserunt velit blanditiis?</p>
    </div>
</body>

</html> 
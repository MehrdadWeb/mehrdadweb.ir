<!-- portfolios بخش کاربری  -->
<!-- front end -->
<section id="portfolio" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title" style="direction: ltr;">
                Portfolio نمونه کارها
            </h3>
        </header>

        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All همه</li>
                    @foreach ($tags as $item)
                        <li data-filter=".filter-{{ $item->tag }}">{{ $item->tag }}</li>
                    @endforeach
                    <!--<li data-filter=".filter-app">App</li> app=$item->tag , App=$item->tag
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>-->
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            @foreach ($portfolios as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->tag }}">
                    <!-- filter-app -->
                    <div class="portfolio-wrap">
                        <img src="{{ $item->image }}" class="img-fluid" alt="{{ $item->image }}">
                        <!-- src="front/img/portfolio/app1.jpg" , src=" $item->image " -->
                        <div class="portfolio-info">
                            <h4><a href="{{ $item->link }}">{{ $item->name }}</a></h4> <!-- App 1 -->
                            <p>{{ $item->description }}</p>
                            <div>
                                <a href="{{ $item->image }}" data-lightbox="portfolio"
                                    data-title="{{ $item->name }}" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>
                                </a>
                                <!-- href="front/img/portfolio/app1.jpg" , href=" $item->image " -->
                                <a href="{{ $item->link }}" class="link-details" title="More Details">
                                    <i class="ion ion-android-open"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!--<div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="front/img/portfolio/app1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">App 1</a></h4>
                        <p>App</p>
                        <div>
                            <a href="front/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1"
                                class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details">
                                <i class="ion ion-android-open"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                    <img src="front/img/portfolio/web3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Web 3</a></h4>
                        <p>Web</p>
                        <div>
                            <a href="front/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio"
                                data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i
                                    class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <img src="front/img/portfolio/app2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">App 2</a></h4>
                        <p>App</p>
                        <div>
                            <a href="front/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio"
                                data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i
                                    class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="front/img/portfolio/card2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Card 2</a></h4>
                        <p>Card</p>
                        <div>
                            <a href="front/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio"
                                data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i
                                    class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                    <img src="front/img/portfolio/web2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Web 2</a></h4>
                        <p>Web</p>
                        <div>
                            <a href="front/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio"
                                data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i
                                    class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <img src="front/img/portfolio/app3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">App 3</a></h4>
                        <p>App</p>
                        <div>
                            <a href="front/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio"
                                data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i
                                    class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="front/img/portfolio/card1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Card 1</a></h4>
                        <p>Card</p>
                        <div>
                            <a href="front/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio"
                                data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i
                                    class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                    <img src="front/img/portfolio/card3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Card 3</a></h4>
                        <p>Card</p>
                        <div>
                            <a href="front/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio"
                                data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i
                                    class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <img src="front/img/portfolio/web1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="#">Web 1</a></h4>
                        <p>Web</p>
                        <div>
                            <a href="front/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio"
                                data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i
                                    class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>

    </div>
</section><!-- #portfolio -->

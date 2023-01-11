<section id="services" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3 style="direction: ltr;">Services خدمات</h3>
            <h4 dir="rtl" class="BKoodak">
                معمولا ما در طراحی سایت و برنامه نویسی وب با دو رویکرد مواجه هستیم.<br>
                دسته اول مشتریان طراحی سایتی هستند
                که برای اولین بار می‌خواهند سایت داشته باشند ، من ابتدا نیازسنجی بازار و تحقیق را انجام می دهم و سپس
                وارد مرحله توسعه و طراحی و برنامه نویسی سایت می شوم.<br>
                دسته دوم مشتریانی که قبلا سایت داشته اند و نیاز به
                بروزرسانی و طراحی وب سایت اختصاصی بر اساس نیازهای جدید خود دارند . برای این دسته از مشتریان من برنامه
                نویسی اختصاصی را پیشنهاد می‌دهم . چراکه طراحی وب سایت و برنامه نویسی وب اختصاصی می‌تواند کلیه نیازهای
                آنها را پوشش دهد و در آینده نیز نگران گسترش نرم افزار خود نمی‌باشند .
            </h4>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters"
                    style="cursor: pointer;padding: 0;margin: 5px 0 35px 0;list-style: none;display:flex;justify-content: center;">
                    <li data-filter="*" class="filter-active m-4">All همه</li>
                    @foreach ($servicetags as $item)
                        <li class="m-4" data-filter=".filter-{{ $item->tag }}">{{ $item->tag }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach ($services as $item)
                <div dir="rtl" class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-{{ $item->tag }}"
                    data-wow-duration="1.4s">
                    <div class="box portfolio-wrap">
                        <img src="{{ $item->image }}" class="img-fluid" alt="{{ $item->image }}"
                            style="margin-top:15px;max-height:100px;">
                        <div class="portfolio-info">
                            <!--<div>
                                <a href="{{ $item->image }}" data-lightbox="portfolio"
                                    data-title="{{ $item->name }}" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>
                                </a>
                                <a href="{{ $item->link }}" class="link-details" title="More Details">
                                    <i class="ion ion-android-open"></i>
                                </a>
                            </div>-->
                            <div class="icon" style="background: {{ $item->icon_bgcolor }};">
                                <i class="{{ $item->icon_class }}" style="color: {{ $item->icon_color }};"></i>
                            </div>
                            <h4 class="title"><a href="{{ $item->link }}">{{ $item->name }}</a></h4>
                            <p class="description">
                                {{ $item->description }}
                            </p>

                        </div>
                    </div>
                </div>
            @endforeach
            <!--</div>

        <div class="row">
            
            <div class="col-md-6 col-lg-4 wow bounceInUp  portfolio-item filter-etc" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #fceef3;">
                        <i class="ion-ios-analytics-outline" style="color: #ff689b;"></i>
                    </div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">
                        Voluptatum deleniti atque corrupti quos dolores et quas molestias
                        excepturi sint
                        occaecati cupiditate non provident
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 wow bounceInUp  portfolio-item filter-etc"
                data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #fff0da;">
                        <i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i>
                    </div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea
                        commodo consequat tarad limino ata
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 wow bounceInUp  portfolio-item filter-etc"
                data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;">
                        <i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i>
                    </div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu
                        fugiat nulla pariatur
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 wow bounceInUp  portfolio-item filter-etc"
                data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #eafde7;">
                        <i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i>
                    </div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt
                        mollit anim id est laborum
                    </p>
                </div>
            </div>
           
            <div class="col-md-6 col-lg-4 wow bounceInUp  portfolio-item filter-etc"
                data-wow-delay="0.2s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e1eeff;">
                        <i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                        blanditiis
                        praesentium voluptatum deleniti atque
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 wow bounceInUp  portfolio-item filter-etc"
                data-wow-delay="0.2s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline"
                            style="color: #8660fe;"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                        tempore, cum
                        soluta nobis est eligendi
                    </p>
                </div>
            </div>-->

        </div>

    </div>
</section><!-- #services -->

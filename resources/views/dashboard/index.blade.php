@extends('layouts.main')

@section('head_scripts')
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/coin-slider/coin-slider/coin-slider.js"></script>
    <link rel="stylesheet" href="/assets/coin-slider/coin-slider/coin-sliders.css">
    <script src="/assets/js/jquery.min.js"></script>



    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/Treant.min.js"></script>
    <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/vendor/slick-carousel/slick.css">
    <link rel="stylesheet" href="/assets/examples/css/uikit/carousel.css">
    <link rel="stylesheet" href="/vendor/bootstrap-treeview/bootstrap-treeview.css">

    <script src="/js/components/owl-carousel.js"></script>
    <script src="/assets/examples/js/uikit/carousel.js"></script>
    <script src="/vendor/owl-carousel/owl.carousel.js"></script>


    <link rel="stylesheet" href="/vendor/bootstrap-treeview/bootstrap-treeview.css">

    <script src="/vendor/bootstrap-treeview/bootstrap-treeview.min.js"></script>
    <script src="/js/components/bootstrap-treeview.js"></script>
    <script src="/assets/examples/js/advanced/treeview.js"></script>
    <style>
        .scroll {
            height: 150px;
            overflow: scroll;
        }

        .scroll::-webkit-scrollbar {
            /* This is the magic bit */
            display: none;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .of_none {
            -ms-overflow-style: none;
        }
    </style>

@endsection

@section('content')
    <div class="content">
        <div class="row" style="padding: 25px 0;">
            <div class="col-md-3">

                <div class="col-lg-12 col-sm-12  panel">
                    <div class="example-wrap">
                        <h4 class="example-title">Categories</h4>
                        <div class="example">
                            <div data-plugin="treeview" data-source="getTreeview"
                                 data-expand-icon="icon md-check" data-collapse-icon="icon md-check-circle"
                                 data-node-icon="icon md-account" data-show-tags="true" id="exampleTagsAsBadges">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-9">
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/CASA_01.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">House 1</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>All of our houses are QUALITY CERTIFICATED.
                                    We make sure everything is beautiful & running for you, all you got do is to take
                                    the
                                    key
                                    Believe on your dreams make your beat & win a house for One Bitcoin, that can be a
                                    business for you.
                                    Win a house for one bit coin & sell for the Market Price.
                                    We can wait to see you win this beautiful home.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/CASA_02.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">House 2</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll  of_none">
                                <p>All of our houses are QUALITY CERTIFICATED.
                                    We make sure everything is beautiful & running for you, all you got do is to take
                                    the
                                    key
                                    Believe on your dreams make your beat & win a house for One Bitcoin, that can be a
                                    business for you.
                                    Win a house for one bit coin & sell for the Market Price.
                                    We can wait to see you win this beautiful home.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/1_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body" style="overflow: hidden;">
                            <h3 class="widget-title">Xbox One</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>An 8-core x86 processor lets you instantly switch between a game and your favorite
                                    entertainment apps with ease.
                                    Connect your cable or satellite box to your Xbox One and prepare for lift off. HDMI
                                    pass-through enables you to watch TV through your Xbox, which makes switching inputs
                                    seem almost pre-historic.
                                    8GB of RAM and a 500GB* hard drive give you plenty of memory for your games,
                                    demos, movies, apps, music, and more.
                                    Watch movies and play games in stunning HD with a Blu-ray player.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/3_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">The Samsung monitor</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p> Samsung UE590 UHD monitor offers PC viewing, gaming and more, all in stunning Ultra
                                    HD
                                    picture quality. With resolution that's
                                    four times higher than Full HD, this ultra high-definition (UHD) monitor delivers
                                    stunning images that use a staggering 8 million pixels for unparalleled realism.
                                    Enjoy
                                    the
                                    latest 4K content with incredible lifelike detail that makes you feel like you're
                                    actually
                                    there.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/4_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">The  Thunderbolt 27"</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>The Apple 27" Thunderbolt Display introduces Thunderbolt technology to the market,
                                    providing ultra-fast speeds. Thunderbolt is 20 times faster than USB 2.0 and up to
                                    12
                                    times faster that FireWire 800, poising this monitor in a position to change the way
                                    you
                                    work, play, and more! The 6 ports on the monitor include, of course, the Thunderbolt
                                    port, 3 powered USB 2.0 ports, a FireWire 800 port, a Gigabit Ethernet port, and a
                                    Kensington security slot. That's a lot of flexibility when it comes to connecting
                                    other
                                    devices to the monitor.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12  col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/5_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus f. verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                    rationibus periculum opinor propterea intuemur poetarum efficeretur
                                    interpretaris, labefactant aeternum reformidans, laborum inquit
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/6_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Dr. Dre</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>These Beats By Dr. Dre Pro Headphones will transform the way you listen to music.
                                    Equipped with dual headphone ports, these headphones will let you share your
                                    crystal-clear, pulse-pounding music with any 3.5mm-equipped device. Their durable
                                    construction and foldable design make these Beats Pro Headphones reliable and easily
                                    portable. The plush leather ear cups provide comfortable listening and can be
                                    rotated so
                                    that you can find just the right headphone position. For soaring highs and deep
                                    bass,
                                    these Beats over-ear headphones are the premier choice
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/7_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus f. verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                    rationibus periculum opinor propterea intuemur poetarum efficeretur
                                    interpretaris, labefactant aeternum reformidans, laborum inquit
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/8_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">The GoPro HERO3:</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>The GoPro HERO3: Silver Edition Camera is smaller and lighter than its predecessor.
                                    It's
                                    also Wi-Fi enabled. The HERO3 is designed for recording action sports and it comes
                                    with
                                    a rugged, waterproof housing that can go down to a depth of 197' (60 m). The camera
                                    captures up to Full HD 1920 x 1080p video at 30 fps, but it also captures 960p, 720p
                                    and
                                    480p video as well. Plus, it supports NTSC and PAL, and it can record up to 120 fps.
                                    For
                                    still images, the HERO3 supports 5, 8 and 11-megapixel photos. The HERO3 is
                                    compatible
                                    with the optional Wi-Fi Remote, LCD Touch BacPac and Battery BacPac (all sold
                                    separately). It comes with several mounts and mounting hardware for a variety of
                                    uses.
                                    The camera features an ultra-wide angle, 6-element aspherical lens, an 11-megapixel
                                    sensor and microSD card slot that accepts up to 64GB cards. There's a USB 2.0 port,
                                    a
                                    micro HDMI output and a port for optional accessories including the 3.5mm Stereo Mic
                                    Adapter and Composite A/V Adapter (both sold separately).To ensure you get the best
                                    shot
                                    possible, the HERO3 is equipped with advanced camera settings including video
                                    looping,
                                    Protune, manual white balance and more. Plus, it supports 11-megapixel burst
                                    shooting at
                                    10 fps and time-lapse recording at 0.5, 1, 2, 5, 10, 30 or 60 second intervals. The
                                    HERO3 also features AAC compression with AGC enhanced audio performance, as well as
                                    a
                                    1050 mAh rechargeable lithium-ion battery.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/10_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">GoPro </h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>HERO4 Black takes Emmy® Award-winning GoPro performance to the next level with our
                                    best
                                    image quality yet, plus a 2x more powerful processor1 that delivers super slow
                                    motion at
                                    240 frames per second. Incredible high-resolution 4K30 and 2.7K60 video combines
                                    with
                                    1080p120 and 720p240 slow motion to enable stunning, immersive footage of you and
                                    your
                                    world. Protune™ settings for both photos and video unlock manual control of Color,
                                    ISO
                                    Limit, Exposure and more. Waterproof to 131’ (40m) with 12MP photos at 30 frames per
                                    second and improved audio,1 HERO4 Black is the ultimate life-capture solution for
                                    those
                                    who demand.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/11_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus f. verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                    rationibus periculum opinor propterea intuemur poetarum efficeretur
                                    interpretaris, labefactant aeternum reformidans, laborum inquit
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/12_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Iphone 6 </h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>Innovation isn’t always obvious to the eye, but look a little closer at iPhone 6s and
                                    you’ll find it’s been fundamentally improved. The enclosure is made from a new alloy
                                    of
                                    7000 Series aluminum — the same grade used in the aerospace industry. The cover
                                    glass is
                                    the strongest, most durable glass used in any smartphone. And a new rose gold finish
                                    joins space gray, silver, and gold.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/15_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">PlayStation 4</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>Sony's PlayStation 4 was announced in February 2013 with some hardware specs but not
                                    much
                                    else. Fully unveiled at E3 2013, the PS4 is Sony's attempt at a gaming focused
                                    console,
                                    rather than one that tries to be a media center. Based on a "supercharged PC
                                    architecture," with an X86 processor, enhanced PC-style GPU, and 8GB of GDDR5
                                    unified
                                    high-speed memory, the PS4 is slightly more powerful than the Xbox One, despite its
                                    smaller size.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/16_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title"> Rolex Submariner </h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>Rolex Submariner Date with diamond dial and ceramic bezel, Reference Number 116613, V
                                    Serial Number Circa 2008. 40mm stainless steel and 18K yellow gold case with blue
                                    ceramic bezel and blue diamond serti dial, sapphire crystal, screw down crown. 18K
                                    yellow gold and stainless steel Rolex oyster bracelet will fit up to an 7 3/4"
                                    wrist.
                                    31J automatic movement is running and keeping time. This preowned watch is in
                                    excellent
                                    condition and comes with box, booklets, warranty card and hang tag. This is an
                                    excellent
                                    opportunity to own a like-new 18K Diamond.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/18_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title"> Apple Watch</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>Receive and respond to notiﬁcations in an instant. Track your daily activity. Control
                                    your music using only your voice. Pay for groceries just like that. With Apple
                                    Watch,
                                    important information and essential features are always just a raise of the wrist
                                    away.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6  masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/products/19_00000.png" alt=""
                                 width="200" height="200">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Sony Camera</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <div class="scroll of_none">
                                <p>Sony has taken their line of full-frame cameras to the next level with the Alpha a7
                                    II
                                    Mirrorless Digital Camera with FE 28-70mm f/3.5-5.6 OSS Lens , which features 5-axis
                                    SteadyShot INSIDE image stabilization with 4.5 stops of compensation for pitch, yaw,
                                    horizontal shift, vertical shift, and roll. Operation of the 24.3-megapixel series
                                    has
                                    been streamlined with a redesigned grip, shutter release button, and customizable
                                    controls. The a7 II also features a moisture- and dust-resistant design with a
                                    magnesium
                                    alloy body and a more robust lens mount. And, with refined algorithms and better
                                    utilization of the BIONZ X image processor, the a7 II has an enhanced Fast Hybrid AF
                                    system that is about 30% faster than the previous model along with a 5 fps burst
                                    rate
                                    with continuous autofocus as well as a 40% faster start time.
                                </p>
                            </div>
                            <div class="widget-body-footer">
                                <a class="btn btn-info waves-effect waves-light" href="javascript:void(0)">READ MORE</a>
                                <div class="widget-actions pull-right">
                                    <a href="javascript:void(0)">
                                        <i class="icon md-share"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-favorite"></i>
                                        <span>25</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="icon md-comment"></i>
                                        <span>18</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('script')

    <script>
        window.getTreeview = function () {
            return [{
                text: 'Parent 1a',
                href: '#parent1',
                tags: ['2'],
                nodes: [{
                    text: 'Child 1',
                    href: '#child1',
                    tags: ['2'],
                    nodes: [{
                        text: 'Grandchild 1',
                        href: '#grandchild1',
                        tags: ['0']
                    }, {
                        text: 'Grandchild 2',
                        href: '#grandchild2',
                        tags: ['0']
                    }]
                }, {
                    text: 'Child 2',
                    href: '#child2',
                    tags: ['0']
                }]
            }, {
                text: 'Parent 2',
                href: '#parent2',
                tags: ['2'],
                nodes: [{
                    text: 'Child 1',
                    href: '#child1',
                    tags: ['0']
                }, {
                    text: 'Child 2',
                    href: '#child2',
                    tags: ['0']
                }]

            }, {
                text: 'Parent 3',
                href: '#parent3',
                tags: ['0']
            }, {
                text: 'Parent 4',
                href: '#parent4',
                tags: ['0']
            }, {
                text: 'Parent 5',
                href: '#parent5',
                tags: ['0'],
                nodes: [{
                    text: 'Child 1',
                    href: '#child1',
                    tags: ['0']
                }, {
                    text: 'Child 2',
                    href: '#child2',
                    tags: ['0']
                }]
            }];
        };
    </script>
    <script src="/vendor/animsition/animsition.js"></script>
    <script src="/vendor/asscroll/jquery-asScroll.js"></script>
    <script src="/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="/vendor/asscrollable/jquery.asScrollable.all.js"></script>
    <script src="/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="/vendor/waves/waves.js"></script>

    <script src="/vendor/switchery/switchery.min.js"></script>
    <script src="/vendor/intro-js/intro.js"></script>
    <script src="/vendor/screenfull/screenfull.js"></script>
    <script src="/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="/vendor/toastr/toastr.js"></script>
    <script src="/vendor/bootstrap-treeview/bootstrap-treeview.min.js"></script>

    <script src="/js/core.js"></script>
    <script src="/assets/js/site.js"></script>
    <script src="/assets/js/sections/menu.js"></script>
    <script src="/assets/js/sections/menubar.js"></script>
    <script src="/assets/js/sections/sidebar.js"></script>
    <script src="/js/configs/config-colors.js"></script>
    <script src="/assets/js/configs/config-tour.js"></script>
    <script src="/js/components/asscrollable.js"></script>
    <script src="/js/components/animsition.js"></script>
    <script src="/js/components/slidepanel.js"></script>
    <script src="/js/components/switchery.js"></script>
    <script src="/js/components/tabs.js"></script>
    <script src="/js/components/toastr.js"></script>
    <script src="/js/components/bootstrap-treeview.js"></script>
    <script src="/assets/examples/js/advanced/treeview.js"></script>

@endsection

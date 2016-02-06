@extends('layouts.main')
@section('head_scripts')
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
    <div class="page animsition">
        <div class="page-header">
            <ol class="breadcrumb">
                <li><a href="../index.html">Home</a></li>
            </ol>
            <h1 class="page-title">Auctions</h1>
            <ul class="nav nav-tabs nav-tabs-line" role="tablist" data-plugin="nav-tabs">
                <li class="active" role="presentation">
                    <a href="#exampleList" aria-controls="exampleList" aria-expanded="true" role="tab"
                       data-toggle="tab" data-filter="*">All</a>
                </li>
                <li role="presentation">
                    <a href="#exampleList" aria-expanded="false" role="tab" data-toggle="tab" data-filter="houses">Houses</a>
                </li>
                <li role="presentation">
                    <a href="#exampleList" aria-expanded="false" role="tab" data-toggle="tab" data-filter="technology">Technology</a>
                </li>
                <li role="presentation">
                    <a href="#exampleList" aria-expanded="false" role="tab" data-toggle="tab" data-filter="jewelry">Jewelry</a>
                </li>
                <li role="presentation">
                    <a href="#exampleList" aria-expanded="false" role="tab" data-toggle="tab" data-filter="houseware">Houseware</a>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <ul class="blocks blocks-100 blocks-xlg-4 blocks-md-3 blocks-sm-2" id="exampleList"
                data-filterable="true">
                <li data-type="houses">
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
                </li>
                <li data-type="houses">
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
                </li>
                <li data-type="technology">
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
                </li>
                <li data-type="technology">
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
                </li>
                <li data-type="technology">
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
                </li>
                <li data-type="technology">
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
                </li>
                <li data-type="houseware">
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
                </li>
                <li data-type="jewelry">
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
                </li>
                <li data-type="technology">
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
                </li>
                <li data-type="technology">
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
                </li>
                <li data-type="technology">
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
                </li>
                <li data-type="technology">
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
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('script')
    <!-- Plugins -->
    <script src="/vendor/isotope/isotope.min.js"></script>
    <!-- Scripts -->
    <script src="/js/components/filterable.js"></script>
@endsection
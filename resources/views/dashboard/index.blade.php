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


@endsection

@section('content')
    <div class="content">
        <div class="row" style="padding: 25px 0;">
            {{--<div class="col-md-12">--}}
            {{--<div class="col-md-12 panel" style="--}}
            {{--margin-bottom: 15px;--}}
            {{--height: 220px;">--}}
            {{--<!-- Example Multiple Items -->--}}
            {{--<div class="example-wrap">--}}
            {{--<h4 class="example-title">Multiple Items</h4>--}}
            {{--<div class="example">--}}
            {{--<div class="slider slick-initialized slick-slider" id="exampleMultipleItems">--}}
            {{--<button type="button" data-role="none" class="slick-prev slick-arrow"--}}
            {{--aria-label="Previous"--}}
            {{--role="button" style="display: block;">Previous--}}
            {{--</button>--}}
            {{--<div aria-live="polite" class="slick-list draggable">--}}
            {{--<div class="slick-track" role="listbox"--}}
            {{--style="opacity: 1; width: 2115px; transform: translate3d(-846px, 0px, 0px);">--}}
            {{--<div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"--}}
            {{--tabindex="-1" style="width: 141px;">--}}
            {{--<h3>7</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"--}}
            {{--tabindex="-1" style="width: 141px;">--}}
            {{--<h3>8</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"--}}
            {{--tabindex="-1" style="width: 141px;">--}}
            {{--<h3>9</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"--}}
            {{--role="option" aria-describedby="slick-slide10" style="width: 141px;">--}}
            {{--<h3>1</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"--}}
            {{--role="option" aria-describedby="slick-slide11" style="width: 141px;">--}}
            {{--<h3>2</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1"--}}
            {{--role="option" aria-describedby="slick-slide12" style="width: 141px;">--}}
            {{--<h3>3</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide slick-current slick-active" data-slick-index="3"--}}
            {{--aria-hidden="false" tabindex="0" role="option"--}}
            {{--aria-describedby="slick-slide13"--}}
            {{--style="width: 141px;">--}}
            {{--<h3>4</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false"--}}
            {{--tabindex="0" role="option" aria-describedby="slick-slide14"--}}
            {{--style="width: 141px;">--}}
            {{--<h3>5</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false"--}}
            {{--tabindex="0" role="option" aria-describedby="slick-slide15"--}}
            {{--style="width: 141px;">--}}
            {{--<h3>6</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1"--}}
            {{--role="option" aria-describedby="slick-slide16" style="width: 141px;">--}}
            {{--<h3>7</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1"--}}
            {{--role="option" aria-describedby="slick-slide17" style="width: 141px;">--}}
            {{--<h3>8</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1"--}}
            {{--role="option" aria-describedby="slick-slide18" style="width: 141px;">--}}
            {{--<h3>9</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true"--}}
            {{--tabindex="-1" style="width: 141px;">--}}
            {{--<h3>1</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true"--}}
            {{--tabindex="-1" style="width: 141px;">--}}
            {{--<h3>2</h3>--}}
            {{--</div>--}}
            {{--<div class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true"--}}
            {{--tabindex="-1" style="width: 141px;">--}}
            {{--<h3>3</h3>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}


            {{--<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next"--}}
            {{--role="button" style="display: block;">Next--}}
            {{--</button>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<!-- End Example Multiple Items -->--}}
            {{--</div>--}}
            {{--</div>--}}
            <div class="col-md-3">

                <div class="col-lg-12 col-sm-12 panel">
                    <!-- Example Tags As Badges -->
                    <div class="example-wrap">
                        <h4 class="example-title">Categorias</h4>
                        <div class="example">
                            <div data-plugin="treeview" data-source="getExampleTreeview"
                                 data-expand-icon="icon md-check" data-collapse-icon="icon md-check-circle"
                                 data-node-icon="icon md-account" data-show-tags="true" id="exampleTagsAsBadges">
                                {{--<ul class="list-group">
                                    <li class="list-group-item node-exampleTagsAsBadges" data-nodeid="0"
                                        style="color:undefined;background-color:undefined;"><span
                                                class="icon expand-icon md-check"></span><span
                                                class="icon node-icon md-account"></span>Parent 1<span
                                                class="badge">4</span></li>
                                    <li class="list-group-item node-exampleTagsAsBadges node-selected"
                                        data-nodeid="5" style="color:#ffffff;background-color:#3949ab;"><span
                                                class="icon"></span><span
                                                class="icon node-icon md-account"></span>Parent 2<span
                                                class="badge">0</span></li>
                                    <li class="list-group-item node-exampleTagsAsBadges" data-nodeid="6"
                                        style="color:undefined;background-color:undefined;"><span
                                                class="icon"></span><span
                                                class="icon node-icon md-account"></span>Parent 3<span
                                                class="badge">0</span></li>
                                    <li class="list-group-item node-exampleTagsAsBadges" data-nodeid="7"
                                        style="color:undefined;background-color:undefined;"><span
                                                class="icon"></span><span
                                                class="icon node-icon md-account"></span>Parent 4<span
                                                class="badge">0</span></li>
                                    <li class="list-group-item node-exampleTagsAsBadges" data-nodeid="8"
                                        style="color:undefined;background-color:undefined;"><span
                                                class="icon"></span><span
                                                class="icon node-icon md-account"></span>Parent 5<span
                                                class="badge">0</span></li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <!-- End Example Tags As Badges -->
                </div>

            </div>

            <div class="col-md-9">
                <div class="col-md-4 col-xs-12 masonry-item">
                    <!-- Widget -->
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house.png" alt="">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus fugiendum verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                rationibus periculum opinor propterea intuemur poetarum efficeretur
                                interpretaris, labefactant aeternum reformidans, laborum inquit
                            </p>
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
                    <!-- End Widget -->
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <!-- Widget -->
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house.png" alt="">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus fugiendum verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                rationibus periculum opinor propterea intuemur poetarum efficeretur
                                interpretaris, labefactant aeternum reformidans, laborum inquit
                            </p>
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
                    <!-- End Widget -->
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <!-- Widget -->
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house.png" alt="">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus fugiendum verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                rationibus periculum opinor propterea intuemur poetarum efficeretur
                                interpretaris, labefactant aeternum reformidans, laborum inquit
                            </p>
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
                    <!-- End Widget -->
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <!-- Widget -->
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house.png" alt="">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus fugiendum verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                rationibus periculum opinor propterea intuemur poetarum efficeretur
                                interpretaris, labefactant aeternum reformidans, laborum inquit
                            </p>
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
                    <!-- End Widget -->
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <!-- Widget -->
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house.png" alt="">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus fugiendum verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                rationibus periculum opinor propterea intuemur poetarum efficeretur
                                interpretaris, labefactant aeternum reformidans, laborum inquit
                            </p>
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
                    <!-- End Widget -->
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <!-- Widget -->
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house.png" alt="">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus fugiendum verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                rationibus periculum opinor propterea intuemur poetarum efficeretur
                                interpretaris, labefactant aeternum reformidans, laborum inquit
                            </p>
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
                    <!-- End Widget -->
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <!-- Widget -->
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house.png" alt="">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus fugiendum verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                rationibus periculum opinor propterea intuemur poetarum efficeretur
                                interpretaris, labefactant aeternum reformidans, laborum inquit
                            </p>
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
                    <!-- End Widget -->
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <!-- Widget -->
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house.png" alt="">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus fugiendum verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                rationibus periculum opinor propterea intuemur poetarum efficeretur
                                interpretaris, labefactant aeternum reformidans, laborum inquit
                            </p>
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
                    <!-- End Widget -->
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <!-- Widget -->
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house.png" alt="">
                        </div>
                        <div class="widget-body">
                            <h3 class="widget-title">Possumus fugiendum verborum</h3>
                            <p class="widget-metas">Jan 16, 2015</p>
                            <p>Munere dictum dissentio dicturam mediocriterne honesta, morbi delectus
                                rationibus periculum opinor propterea intuemur poetarum efficeretur
                                interpretaris, labefactant aeternum reformidans, laborum inquit
                            </p>
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
                    <!-- End Widget -->
                </div>


            </div>
        </div>
    </div>



@endsection

@section('script')
    <script src="/vendor/jquery/jquery.js"></script>
    <script src="/vendor/bootstrap/bootstrap.js"></script>
    <script src="/vendor/animsition/animsition.js"></script>
    <script src="/vendor/asscroll/jquery-asScroll.js"></script>
    <script src="/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="/vendor/asscrollable/jquery.asScrollable.all.js"></script>
    <script src="/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="/vendor/waves/waves.js"></script>
    <!-- Plugins -->
    <script src="/vendor/switchery/switchery.min.js"></script>
    <script src="/vendor/intro-js/intro.js"></script>
    <script src="/vendor/screenfull/screenfull.js"></script>
    <script src="/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="/vendor/toastr/toastr.js"></script>
    <script src="/vendor/bootstrap-treeview/bootstrap-treeview.min.js"></script>
    <!-- Scripts -->
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


{{--<script src="/vendor/bootstrap-treeview/bootstrap-treeview.min.js"></script>
<script src="/assets/examples/js/advanced/treeview.js"></script>--}}
@endsection

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
            <div class="col-md-3">

                <div class="col-lg-12 col-sm-12 panel">
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
                <div class="col-md-4 col-xs-12 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house_200.png" alt="" width="200" height="200">
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
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house_200.png" alt="" width="200" height="200">
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
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house_200.png" alt="" width="200" height="200">
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
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house_200.png" alt="" width="200" height="200">
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
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house_200.png" alt="" width="200" height="200">
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
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house_200.png" alt="" width="200" height="200">
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
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house_200.png" alt="" width="200" height="200">
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
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house_200.png" alt="" width="200" height="200">
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
                </div>
                <div class="col-md-4 col-xs-12 masonry-item">
                    <div class="widget widget-article widget-shadow">
                        <div class="widget-header cover overlay overlay-hover">
                            <img class="cover-image overlay-scale" src="/assets/images/logos/dream_house_200.png" alt="" width="200" height="200">
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
                </div>
            </div>
        </div>
    </div>



@endsection

@section('script')

    <script>
        window.getTreeview = function() {
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

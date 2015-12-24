@extends('layouts.main')

@section('head_scripts')


@endsection

@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Page Widget -->
                <div class="widget widget-shadow text-center">
                    <div class="widget-header">
                        <div class="widget-header-content">
                            <a class="avatar avatar-lg" href="javascript:void(0)">
                                <img alt="..." src="../../../global/portraits/5.jpg">
                            </a>
                            <h4 class="profile-user">Terrance arnold</h4>
                            <p class="profile-job">Art director</p>
                            <p>Hi! I'm Adrian the Senior UI Designer at AmazingSurge. We hope
                                you enjoy the design and quality of Social.</p>
                            <div class="profile-social">
                                <a class="icon bd-twitter" href="javascript:void(0)"></a>
                                <a class="icon bd-facebook" href="javascript:void(0)"></a>
                                <a class="icon bd-dribbble" href="javascript:void(0)"></a>
                                <a class="icon bd-github" href="javascript:void(0)"></a>
                            </div>
                            <button class="btn btn-primary waves-effect waves-light" type="button">Follow</button>
                        </div>
                    </div>
                    <div class="widget-footer">
                        <div class="row no-space">
                            <div class="col-xs-4">
                                <strong class="profile-stat-count">260</strong>
                                <span>Follower</span>
                            </div>
                            <div class="col-xs-4">
                                <strong class="profile-stat-count">180</strong>
                                <span>Following</span>
                            </div>
                            <div class="col-xs-4">
                                <strong class="profile-stat-count">2000</strong>
                                <span>Tweets</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Widget -->
            </div>
            <div class="col-md-9">
                <!-- Panel -->
                <div class="panel">
                    <div class="panel-body nav-tabs-animate">
                        <ul class="nav nav-tabs nav-tabs-line" role="tablist" data-plugin="nav-tabs">
                            <li class="active" role="presentation"><a role="tab" aria-controls="activities" href="#activities" data-toggle="tab">Activities <span class="badge badge-danger">5</span></a></li>
                            <li role="presentation"><a role="tab" aria-controls="profile" href="#profile" data-toggle="tab">Profile</a></li>
                            <li role="presentation"><a role="tab" aria-controls="messages" href="#messages" data-toggle="tab">Messages</a></li>
                            <li class="nav-tabs-autoline" style="left: 0px; width: 122px; transition-duration: 0.5s, 1s; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1), cubic-bezier(0.4, 0, 0.2, 1);"></li></ul>
                        <div class="tab-content">
                            <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Ida Fleming
                                                    <span>posted an updated</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Julius
                                                    <span>uploaded 4 photos</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">
                                                    <img class="profile-uploaded" alt="..." src="../../../global/photos/placeholder.png">
                                                    <img class="profile-uploaded" alt="..." src="../../../global/photos/placeholder.png">
                                                    <img class="profile-uploaded" alt="..." src="../../../global/photos/placeholder.png">
                                                    <img class="profile-uploaded" alt="..." src="../../../global/photos/placeholder.png">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/4.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Owen Hunt
                                                    <span>posted a new note</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Integer nec odio. Praesent libero. Sed cursus ante
                                                    dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                                                    imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce
                                                    nec tellus sed augue semper porta. Mauris massa.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media media-lg">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/5.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Terrance Arnold
                                                    <span>posted a new blog</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">
                                                    <div class="media">
                                                        <a class="media-left">
                                                            <img class="media-object" alt="..." src="../../../global/photos/placeholder.png">
                                                        </a>
                                                        <div class="media-body padding-left-20">
                                                            <h4 class="media-heading">Getting Started</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit. Integer nec odio. Praesent libero. Sed
                                                                cursus ante dapibus diam. Sed nisi. Nulla quis
                                                                sem at nibh elementum imperdiet. Duis sagittis
                                                                ipsum. Praesent mauris.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Ida Fleming
                                                    <span>posted an new activity comment</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                                    metus.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Julius
                                                    <span>posted an updated</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Integer nec odio. Praesent libero. Sed cursus ante
                                                    dapibus diam.</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a class="btn btn-block btn-default profile-readMore waves-effect waves-light" role="button" href="javascript:void(0)">Show more</a>
                            </div>
                            <div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="media media-lg">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/5.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Terrance Arnold
                                                    <span>posted a new blog</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">
                                                    <div class="media">
                                                        <a class="media-left">
                                                            <img class="media-object" alt="..." src="../../../global/photos/placeholder.png">
                                                        </a>
                                                        <div class="media-body padding-left-20">
                                                            <h4 class="media-heading">Getting Started</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit. Integer nec odio. Praesent libero. Sed
                                                                cursus ante dapibus diam. Sed nisi. Nulla quis
                                                                sem at nibh elementum imperdiet. Duis sagittis
                                                                ipsum. Praesent mauris.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Ida Fleming
                                                    <span>posted an updated</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/4.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Owen Hunt
                                                    <span>posted a new note</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Integer nec odio. Praesent libero. Sed cursus ante
                                                    dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                                                    imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce
                                                    nec tellus sed augue semper porta. Mauris massa.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Ida Fleming
                                                    <span>posted an new activity comment</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                                    metus.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Julius
                                                    <span>uploaded 4 photos</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">
                                                    <img class="profile-uploaded" alt="..." src="../../../global/photos/placeholder.png">
                                                    <img class="profile-uploaded" alt="..." src="../../../global/photos/placeholder.png">
                                                    <img class="profile-uploaded" alt="..." src="../../../global/photos/placeholder.png">
                                                    <img class="profile-uploaded" alt="..." src="../../../global/photos/placeholder.png">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Ida Fleming
                                                    <span>posted an updated</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media media-lg">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/5.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Terrance Arnold
                                                    <span>posted a new blog</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">
                                                    <div class="media">
                                                        <a class="media-left">
                                                            <img class="media-object" alt="..." src="../../../global/photos/placeholder.png">
                                                        </a>
                                                        <div class="media-body padding-left-20">
                                                            <h4 class="media-heading">Getting Started</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit. Integer nec odio. Praesent libero. Sed
                                                                cursus ante dapibus diam. Sed nisi. Nulla quis
                                                                sem at nibh elementum imperdiet. Duis sagittis
                                                                ipsum. Praesent mauris.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/4.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Owen Hunt
                                                    <span>posted a new note</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Integer nec odio. Praesent libero. Sed cursus ante
                                                    dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                                                    imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce
                                                    nec tellus sed augue semper porta. Mauris massa.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" alt="..." src="../../../global/portraits/3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Julius
                                                    <span>posted an updated</span>
                                                </h4>
                                                <small>active 14 minutes ago</small>
                                                <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Integer nec odio. Praesent libero. Sed cursus ante
                                                    dapibus diam.</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>
        </div>
    </div>

@endsection
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>shop</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('assets/template/images/logo/apple-touch-icon.html') }}">
    <link rel="shortcut icon" href="{{ asset('assets/template/images/logo/favicon.png') }}">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="{{ asset('assets/template/vendor/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/template/vendor/PACE/themes/blue/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/template/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />

    <!-- page css -->

    <!-- core css -->
    <link href="{{ asset('assets/template/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/template/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/template/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/template/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/template/vendor/sweetalert/lib/sweet-alert.css') }}" rel="stylesheet">
    @yield('css')
    @stack('styles')
    <link href="{{ asset('assets/template/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shop.css') }}" rel="stylesheet">
</head>

<body>
<div class="app header-default side-nav-dark">
    <div class="layout">
        <!-- Header START -->
        @include('admin.layout.header_navbar')
        <!-- Header END -->

        <!-- Side Nav START -->
        @include('admin.layout.nav')
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">
            <!-- Quick View START -->
            <div class="quick-view">
                <ul class="quick-view-tabs nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#config" role="tab" data-toggle="tab">
                            <span>Config</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#quick-view-chat" role="tab" data-toggle="tab">
                            <span>Chat</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#activity" role="tab" data-toggle="tab">
                            <span>Activity</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content scrollable">
                    <!-- config START -->
                    <div id="config" role="tabpanel" class="tab-pane fade in active">
                        <div class="theme-configurator p-20">
                            <div class="m-v-20 border bottom">
                                <p class="text-dark text-semibold m-b-0">Solid Header</p>
                                <p class="m-b-15">Config header background (solid)</p>
                                <div class="theme-selector p-b-20">
                                    <label>
                                        <input type="radio" value="default" name="header-theme">
                                        <span class="theme-color bg-white border"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="primary" name="header-theme">
                                        <span class="theme-color bg-primary"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="info" name="header-theme">
                                        <span class="theme-color bg-info"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="success" name="header-theme">
                                        <span class="theme-color bg-success"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="warning" name="header-theme">
                                        <span class="theme-color bg-warning"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="danger" name="header-theme">
                                        <span class="theme-color bg-danger"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="dark" name="header-theme">
                                        <span class="theme-color bg-dark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="m-v-15 border bottom">
                                <p class="text-dark text-semibold m-b-0">Gradient Header</p>
                                <p class="m-b-15">Config header background (gradient)</p>
                                <div class="theme-selector p-b-15">
                                    <label>
                                        <input type="radio" value="primary-gradient" name="header-theme">
                                        <span class="theme-color bg-gradient-primary"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="info-gradient" name="header-theme">
                                        <span class="theme-color bg-gradient-info"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="success-gradient" name="header-theme">
                                        <span class="theme-color bg-gradient-success"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="warning-gradient" name="header-theme">
                                        <span class="theme-color bg-gradient-warning"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="danger-gradient" name="header-theme">
                                        <span class="theme-color bg-gradient-danger"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="m-v-15 border bottom">
                                <p class="text-dark text-semibold m-b-0">Side Nav Color</p>
                                <p class="m-b-15">Config side nav background</p>
                                <div class="theme-selector p-b-15">
                                    <label>
                                        <input type="radio" value="default" name="side-nav-color">
                                        <span class="theme-color bg-white border"></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="dark" name="side-nav-color">
                                        <span class="theme-color bg-dark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="m-v-15">
                                <p class="text-dark text-semibold m-b-0">RTL</p>
                                <p class="m-b-15">Toggle right to left</p>
                                <div class="theme-selector p-b-15">
                                    <div class="switch checkbox-inline">
                                        <input type="checkbox" name="rtl-toogle" id="rtl-toogle">
                                        <label for="rtl-toogle"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- config END -->
                    <!-- chat START -->
                    <div id="quick-view-chat" role="tabpanel" class="tab-pane fade">
                        <div class="quick-view-chat chat">
                            <div class="chat-user-list">
                                <div class="m-b-30 m-t-20">
                                    <h6 class="p-h-20 text-uppercase text-semibold">Online</h6>
                                    <ul class="list-media">
                                        <li class="list-item unread-msg">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                    <span class="status success"></span>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Marshall Nichols</span>
                                                    <span class="sub-title">Here's the story of a man...</span>
                                                    <div class="float-item">
                                                        <span class="chat-counter">2</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item unread-msg">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                    <span class="status success"></span>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Susie Willis</span>
                                                    <span class="sub-title">Do you see any Teletubbies...</span>
                                                    <div class="float-item">
                                                        <span class="chat-counter">1</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                    <span class="status success"></span>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Debra Stewart</span>
                                                    <span class="sub-title">Oh my God. I didn't even...</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="m-b-30">
                                    <h6 class="p-h-20 text-uppercase text-semibold">Away</h6>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Francisco Vasquez</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Jane Hunt</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Ava Alexander</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Shane Ross</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="m-b-30">
                                    <h6 class="p-h-20 text-uppercase text-semibold">Busy</h6>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                                    <span class="status busy"></span>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Erin Gonzales</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-9.jpg" alt="">
                                                    <span class="status busy"></span>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Alan Mills</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="quick-view-conversation conversation">
                                <div class="conversation-wrapper">
                                    <div class="conversation-header">
                                        <span class="recipient">Susie Willis</span>
                                        <ul class="tools">
                                            <li>
                                                <a class="text-gray" href="javascript:void(0)">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-gray conversation-toggler" href="javascript:void(0)">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="quick-view-conversation-body conversation-body scrollable">
                                        <div class="msg datetime">
                                            <span>7:57PM</span>
                                        </div>
                                        <div class="msg msg-recipient">
                                            <div class="user-img">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="bubble">
                                                <div class="bubble-wrapper">
                                                    <span>Hey, what are you doing?</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="msg msg-sent">
                                            <div class="bubble">
                                                <div class="bubble-wrapper">
                                                    <span>Texting the most beautiful girl in the world.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="msg msg-recipient">
                                            <div class="user-img">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="bubble">
                                                <div class="bubble-wrapper">
                                                    <span>Oh? How Cute</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="msg msg-sent">
                                            <div class="bubble">
                                                <div class="bubble-wrapper">
                                                    <span>Yup but she's not replying so texting you</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="msg msg-recipient">
                                            <div class="user-img">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="bubble">
                                                <div class="bubble-wrapper">
                                                    <span>Okay</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="msg datetime">
                                            <span>8:05PM</span>
                                        </div>
                                        <div class="msg msg-recipient">
                                            <div class="user-img">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="bubble">
                                                <div class="bubble-wrapper">
                                                    <span>Bye</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="msg msg-sent">
                                            <div class="bubble">
                                                <div class="bubble-wrapper">
                                                    <span>I'm just kidding..!!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="msg msg-sent">
                                            <div class="bubble">
                                                <div class="bubble-wrapper">
                                                    <span>Hello</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="msg msg-sent">
                                            <div class="bubble">
                                                <div class="bubble-wrapper">
                                                    <span>It's me..can you hear me..!!</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-footer">
                                        <button class="upload-btn">
                                            <i class="ti-face-smile"></i>
                                        </button>
                                        <input class="chat-input" type="text" placeholder="Type a message...">
                                        <button class="sent-btn">
                                            <i class="fa fa-send-o"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- chat END -->
                    <!-- activity START -->
                    <div id="activity" role="tabpanel" class="tab-pane fade">
                        <div class="quick-view-activity">
                            <ul class="list-media m-t-20">
                                <li class="list-item border bottom">
                                    <a href="javascript:void(0);" class="media-hover p-20">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Marshall Nichols</span>
                                            <span class="sub-title">has replied your mails.</span>
                                            <span class="sub-title font-size-11 p-t-5">8 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item border bottom">
                                    <a href="javascript:void(0);" class="media-hover p-20">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Susie Willis</span>
                                            <span class="sub-title">commented on your post's</span>
                                            <span class="sub-title font-size-11 p-t-5">12 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item border bottom">
                                    <a href="javascript:void(0);" class="media-hover p-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-primary">
                                                <i class="ti-settings"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title">System Notifications</span>
                                            <span class="sub-title">Your account updated</span>
                                            <span class="sub-title font-size-11 p-t-5">2 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item border bottom">
                                    <a href="javascript:void(0);" class="media-hover p-20">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Erin Gonzales</span>
                                            <span class="sub-title">commented on your post's</span>
                                            <span class="sub-title font-size-11 p-t-5">3 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item border bottom">
                                    <a href="javascript:void(0);" class="media-hover p-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-info">
                                                <i class="mdi mdi-file-outline"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title">New Attachment</span>
                                            <span class="sub-title">3 files has updated</span>
                                            <span class="sub-title font-size-11 p-t-5">5 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item border bottom">
                                    <a href="javascript:void(0);" class="media-hover p-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-success">
                                                <span>S</span>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title">Suzanne Lynch</span>
                                            <span class="sub-title">has sent you a message.</span>
                                            <span class="sub-title font-size-11 p-t-5">9 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item border bottom">
                                    <a href="javascript:void(0);" class="media-hover p-20">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-12.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Riley Newman</span>
                                            <span class="sub-title">commented on your post's</span>
                                            <span class="sub-title font-size-11 p-t-5">10 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item border bottom">
                                    <a href="javascript:void(0);" class="media-hover p-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-warning">
                                                <span>FW</span>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title">Franklin Weaver</span>
                                            <span class="sub-title">has sent you a message.</span>
                                            <span class="sub-title font-size-11 p-t-5">10 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item border bottom">
                                    <a href="javascript:void(0);" class="media-hover p-20">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-11.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Darryl Day</span>
                                            <span class="sub-title">commented on your post's</span>
                                            <span class="sub-title font-size-11 p-t-5">12 days ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- activity END -->
                </div>
            </div>
            <!-- Side Panel END -->
            <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- Content Wrapper END -->

            <!-- Footer START -->
            <footer class="content-footer">
                <div class="footer">
                    <div class="copyright">
                        <span>Copyright © 2018 <b class="text-dark">Theme_Nate</b>. All rights reserved.</span>
                        <span class="go-right">
                                <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="#" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                    </div>
                </div>
            </footer>
            <!-- Footer END -->
        </div>
        <!-- Page Container END -->

    </div>
</div>

<script src="{{ asset('assets/template/js/vendor.js') }}"></script>
<script>
    var CMS_URL = "{!! config('setting.cms_url') !!}"
</script>
<!-- page js -->
<script src="{{ asset('assets/template/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('assets/template/vendor/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/template/js/dashboard/default.js') }}"></script>
<script src="{{ asset('assets/template/vendor/sweetalert/lib/sweet-alert.js') }}"></script>
<script src="{{ asset('js/shop.js') }}"></script>
<script src="{{ asset('assets/template/js/app.min.js') }}"></script>
@yield('js')
@stack('scripts')

</body>
</html>

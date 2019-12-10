@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Customer Overview</h5>
                    <div class="float-right">
                        <ul class="list-inline d-none d-sm-block">
                            <li class="m-r-20">
                                <span class="status success"></span>
                                <span class="text-semibold m-l-5">Sales</span>
                            </li>
                            <li>
                                <span class="status info"></span>
                                <span class="text-semibold m-l-5">Products</span>
                            </li>
                            <li>
                                <span class="status primary"></span>
                                <span class="text-semibold m-l-5">Costs</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="m-t-10">
                        <canvas class="chart" id="customer-overview-chart" style="height: 320px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Your Sales</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="m-t-10">
                        <span class="status gradient info"></span>
                        <span class="m-b-10 font-size-16 m-l-5">Online Sales</span>
                        <div class="float-right">
                            <b class=" font-size-18 text-dark">15,872 </b>
                            <span>USD</span>
                        </div>
                        <div class="progress m-t-15">
                            <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="m-t-60">
                        <span class="status gradient success"></span>
                        <span class="m-b-10 font-size-16 m-l-5">Offline Sales</span>
                        <div class="float-right">
                            <b class=" font-size-18 text-dark">7,623 </b>
                            <span>USD</span>
                        </div>
                        <div class="progress m-t-15">
                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="m-t-60 m-b-20">
                        <p class="font-size-16">Total Sales</p>
                        <div class="row m-t-20">
                            <div class="col">
                                <span class=" font-size-23 text-dark">$23,495 </span>
                            </div>
                            <div class="col text-right">
                                <div id="sparkline-line-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Goals this Month</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="m-b-30">
                        <canvas class="chart" id="goal-chart" style="height: 200px"></canvas>
                    </div>
                    <div class="row m-b-10">
                        <div class="col-10 offset-1">
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">166</h2>
                                        <span class="status gradient info"></span>
                                        <span class="m-l-10">Sales</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">71</h2>
                                        <span class="status gradient"></span>
                                        <span class="m-l-10">In-Store Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Order</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-overflow">
                    <table class="table table-lg">
                        <thead>
                        <tr>
                            <td class="text-dark text-semibold">Customer</td>
                            <td class="text-dark text-semibold">Order ID</td>
                            <td class="text-dark text-semibold">Order Date</td>
                            <td class="text-dark text-semibold">Amount</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="list-media">
                                    <div class="list-item">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10 text-semibold">Marshall Nichols</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>#33667</td>
                            <td>08 May 2018</td>
                            <td> $168.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="list-media">
                                    <div class="list-item">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10 text-semibold">Susie Willis</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>#33683</td>
                            <td>05 May 2018</td>
                            <td>$433.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="list-media">
                                    <div class="list-item">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10 text-semibold">Debra Stewart</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>#33668</td>
                            <td>09 May 2018</td>
                            <td>$2488.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="list-media">
                                    <div class="list-item">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10 text-semibold">Erin Gonzales</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>#33684</td>
                            <td>16 May 2018</td>
                            <td>$762.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Connect</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="list-media m-b-20">
                    <li class="list-item">
                        <div class="p-v-15 p-h-20">
                            <div class="media-img">
                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                            </div>
                            <div class="info">
                                <span class="title p-t-10 text-semibold">Susie Willis</span>
                                <div class="float-item">
                                    <button class="btn btn-default btn-rounded m-b-0">Follow</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="p-v-15 p-h-20">
                            <div class="media-img">
                                <img src="assets/images/avatars/thumb-3.jpg" alt="">
                            </div>
                            <div class="info">
                                <span class="title p-t-10 text-semibold">Debra Stewart</span>
                                <div class="float-item">
                                    <button class="btn btn-default btn-rounded m-b-0">Follow</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="p-v-15 p-h-20">
                            <div class="media-img">
                                <img src="assets/images/avatars/thumb-8.jpg" alt="">
                            </div>
                            <div class="info">
                                <span class="title p-t-10 text-semibold">Erin Gonzales</span>
                                <div class="float-item">
                                    <button class="btn btn-default btn-rounded m-b-0">Follow</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="p-v-15 p-h-20">
                            <div class="media-img">
                                <img src="assets/images/avatars/thumb-6.jpg" alt="">
                            </div>
                            <div class="info">
                                <span class="title p-t-10 text-semibold">Ava Alexander</span>
                                <div class="float-item">
                                    <button class="btn btn-default btn-rounded m-b-0">Follow</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <span>Your Earning</span>
                        <span class="d-block text-gray font-size-13 m-t-10">Jan 7 - Mar 8 </span>
                    </h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <h2 class="font-weight-light font-size-28">$1,689.73</h2>
                    <p><span class="text-info text-semibold font-size-15">1.5%</span> services charge per sales</p>

                </div>
                <div class="m-t-45">
                    <canvas class="chart" id="earning-chart" style="height: 100px"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upcoming Event</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-t-15">
                    <ul class="list-unstyled">
                        <li class="p-v-15 border bottom">
                            <a href="#">
                                <div class="media">
                                    <div class="m-r-20">
                                        <img class="img-fluid" src="assets/images/others/img-35.jpg" alt="">
                                    </div>
                                    <div >
                                        <h5 class="text-link text-semibold m-b-0 m-t-5">Team Gathering</h5>
                                        <p class="text-semibold font-size-13">MAY 11, 2018</p>
                                        <p class="font-size-13">Efficiently unleash information </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="p-v-15">
                            <a href="#">
                                <div class="media">
                                    <div class="m-r-20">
                                        <img class="img-fluid" src="assets/images/others/img-34.jpg" alt="">
                                    </div>
                                    <div >
                                        <h5 class="text-link text-semibold m-b-0 m-t-5">Video Conference</h5>
                                        <p class="text-semibold font-size-13">MAY 18, 2018</p>
                                        <p class="font-size-13">Efficiently unleash information </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection


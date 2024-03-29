
 @extends('layouts.backend')
 @section('contents')

    <!-- breadcum -->
    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">Dashboard</h4>
        <ul class="db-breadcrumb-list">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
            <li>Dashboard</li>
        </ul>
    </div>
    <!-- End breadcum -->
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <section class="widget-medium bg-primary">
                <div class="symbol"><i class="fa fa-send"></i></div>
                <div class="value">
                    <h1 class="counter">345435</h1>
                    <p>Total Customer</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="widget-medium bg-info">
                <div class="symbol"><i class="fa fa-tags"></i></div>
                <div class="value">
                    <h1 class="counter">345435</h1>
                    <p>Item Sold</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="widget-medium bg-warning">
                <div class="symbol"><i class="fa fa-cloud-upload"></i></div>
                <div class="value white">
                    <h1 class="counter">345345</h1>
                    <p>Item Upload</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="widget-medium bg-success">
                <div class="symbol"><i class="fa fa-bullseye"></i></div>
                <div class="value">
                    <h1 class="counter">2345</h1>
                    <p>Unique Visit</p>
                </div>
            </section>
        </div>
    </div>

@endsection

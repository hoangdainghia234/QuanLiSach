@extends('admin.layouts.master')
@section('title','Float Chart')
@section('header','Float Chart')
@section('link')
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Charts</a></li>
    <li class="active">Float Chart</li>
@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Real Chart</h4>
                                <div class="flot-container">
                                    <div id="cpu-load" class="cpu-load"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Line Chart</h4>
                                <div class="flot-container">
                                    <div id="flot-line" class="flot-line"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Pie Chart</h4>
                                <div class="flot-container">
                                    <div id="flot-pie" class="flot-pie-container"></div>
                                </div>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Line Chart</h4>
                                <div class="flot-container">
                                    <div id="chart1" style="width:100%;height:275px;"></div>
                                </div>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Bar Chart</h4>
                                <div class="flot-container">
                                    <div id="flotBar" style="width:100%;height:275px;"></div>
                                </div>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Bar Chart</h4>
                                <div class="flot-container">
                                    <div id="flotCurve" style="width:100%;height:275px;"></div>
                                </div>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->
                </div><!-- /# row -->



            </div><!-- .animated -->
        </div>
@endsection
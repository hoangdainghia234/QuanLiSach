@extends('admin.layouts.master')
@section('title','Vector Map')
@section('header','Vector Map')
@section('link')
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Map</a></li>
    <li class="active">Vector Map</li>
@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>World</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Algeria</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap2" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Argentina</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap3" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Brazil</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap4" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>France</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap5" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Germany</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap6" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Greece</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap7" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Russia</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap10" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tunisia</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap11" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Europe</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap12" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>USA</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap13" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Turkey</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap14" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Inactive Regions</h4>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap15" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->



                </div>
                <!-- /# row -->


            </div><!-- .animated -->
        </div>
@endsection
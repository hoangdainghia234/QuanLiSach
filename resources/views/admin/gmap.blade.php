@extends('admin.layouts.master')
@section('title','Gmap')
@section('header','Gmap')
@section('link')
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Map</a></li>
    <li class="active">Gmap</li>
@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Basic Map</h4>
                            </div>
                            <div class="gmap_unix card-body">
                                <div class="map" id="basic-map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Fusion Tables layers</h4>
                            </div>
                            <div class="card-body">
                                <div id="map-2" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Geometry overlays</h4>
                            </div>
                            <div class="card-body">
                                <div class="map" id="map-3"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Elevation locations</h4>
                            </div>
                            <div class="card-body">
                                <div id="map-4" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Geolocation</h4>
                            </div>
                            <div class="card-body">
                                <div class="map" id="map-5"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>KML layers</h4>
                            </div>
                            <div class="card-body">
                                <div id="map-6" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Layers</h4>
                            </div>
                            <div class="card-body">
                                <div class="map" id="map-7"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Map events</h4>
                            </div>
                            <div class="card-body">
                                <div class="map" id="map-8"></div>
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
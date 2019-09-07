@extends('admin.layouts.master')
@section('title','Notifications')
@section('header','Notifications')
@section('link')
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">UI Elements</a></li>
    <li class="active">Notifications</li>
@endsection
@section('content')
    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="card">
                            <div class="card-header">
                                <h3 class="page-title">Notifications</h3>
                            </div>
                            <div class="card-body">
                                <div id="toastr-demo" class="panel">
                                    <div class="panel-body">
                                        <!-- CONTEXTUAL -->
                                        <h4>Context</h4><br>
                                        <p class="demo-button">
                                            <button type="button" class="btn btn-primary btn-toastr" data-context="info" data-message="This is general theme info" data-position="top-right">General Info</button>
                                            <button type="button" class="btn btn-success btn-toastr" data-context="success" data-message="This is success info" data-position="top-right">Success Info</button>
                                            <button type="button" class="btn btn-warning btn-toastr" data-context="warning" data-message="This is warning info" data-position="top-right">Warning Info</button>
                                            <button type="button" class="btn btn-danger btn-toastr" data-context="error" data-message="This is error info" data-position="top-right">Error Info</button>
                                        </p>
                                        <!-- END CONTEXTUAL -->
                                        <br>
                                        <!-- POSITION -->
                                        <h4>Position</h4><br>
                                        <p class="demo-button">
                                            <button type="button" class="btn btn-outline-secondary btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-right">Bottom Right</button>
                                            <button type="button" class="btn btn-outline-secondary btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-left">Bottom Left</button>
                                            <button type="button" class="btn btn-outline-secondary btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-left">Top Left</button>
                                            <button type="button" class="btn btn-outline-secondary btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-right">Top Right</button>
                                            <button type="button" class="btn btn-outline-secondary btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-full-width">Top Full Width</button>
                                            <button type="button" class="btn btn-outline-secondary btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-full-width">Bottom Full Width</button>
                                            <button type="button" class="btn btn-outline-secondary btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-center">Top Center</button>
                                            <button type="button" class="btn btn-outline-secondary btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-center">Bottom Center</button>
                                        </p>
                                        <!-- END POSITION -->
                                        <br>
                                        <!-- CALLBACK -->
                                        <h4>Callback</h4><br>
                                        <p class="demo-button">
                                            <button type="button" class="btn btn-outline-secondary btn-toastr-callback" id="toastr-callback1" data-context="info" data-message="onShown and onHidden callback demo">onShown and onHidden</button>
                                            <button type="button" class="btn btn-outline-secondary btn-toastr-callback" id="toastr-callback2" data-context="info" data-message="Please click me">onclick</button>
                                            <button type="button" class="btn btn-outline-secondary btn-toastr-callback" id="toastr-callback3" data-context="info" data-message="Please click close button">onCloseClick</button>
                                        </p>
                                        <!-- END CALLBACK -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
@endsection
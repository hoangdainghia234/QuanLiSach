@extends('admin.layouts.master')
@section('title','Alerts')
@section('header','Alerts')
@section('link')
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">UI Elements</a></li>
    <li class="active">Alerts</li>
@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="alerts">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Alerts</strong>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-primary" role="alert">
                                        This is a primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        This is a secondary alert—check it out!
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        This is a success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        This is a danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        This is a warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        This is a info alert—check it out!
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        This is a light alert—check it out!
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        This is a dark alert—check it out!
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Link Color Alerts</strong>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-primary" role="alert">
                                        This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Dismissing Alerts</strong>
                                </div>
                                <div class="card-body">
                                    <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                        <span class="badge badge-pill badge-primary">Success</span>
                                        You successfully read this important alert.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>

                                    <div class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
                                        <span class="badge badge-pill badge-secondary">Success</span>
                                        You successfully read this important alert.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>

                                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                        <span class="badge badge-pill badge-success">Success</span>
                                        You successfully read this important alert.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>

                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">Success</span>
                                        You successfully read this important alert.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>

                                    <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                                        <span class="badge badge-pill badge-warning">Success</span>
                                        You successfully read this important alert.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>

                                    <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                                        <span class="badge badge-pill badge-info">Success</span>
                                        You successfully read this important alert.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>

                                    <div class="sufee-alert alert with-close alert-light alert-dismissible fade show">
                                        <span class="badge badge-pill badge-light">Success</span>
                                        You successfully read this important alert.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>

                                    <div class="sufee-alert alert with-close alert-dark alert-dismissible fade show">
                                        <span class="badge badge-pill badge-dark">Success</span>
                                        You successfully read this important alert.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Contents</strong>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">Well done!</h4>
                                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <hr>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                    </div>

                                    <div class="alert alert-warning" role="alert">
                                        <h4 class="alert-heading">Well done!</h4>
                                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <hr>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                    </div>

                                    <div class="alert alert-danger" role="alert">
                                        <h4 class="alert-heading">Well done!</h4>
                                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <hr>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div> <!-- .alerts -->


            </div><!-- .animated -->
        </div>
@endsection
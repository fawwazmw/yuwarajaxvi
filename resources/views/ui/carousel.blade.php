@extends('layouts.vertical', ['page_title' => 'Carousel', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Slides only</h4>
                    <p class="sub-header">Here’s a carousel with slides only. Note the presence of the <code>.d-block</code>
                        and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="/images/small/img-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-3.jpg" alt="Third slide">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">With controls</h4>
                    <p class="sub-header">Adding in the previous and next controls:</p>

                    <!-- START carousel-->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="/images/small/img-4.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-1.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-2.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>

                </div>
            </div>
            <!-- END carousel-->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">With indicators</h4>
                    <p class="sub-header">You can also add the indicators to the
                        carousel, alongside the controls, too.</p>

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="/images/small/img-3.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-1.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">With captions</h4>
                    <p class="sub-header">Add captions to your slides easily with the <code>.carousel-caption</code>
                        element within any <code>.carousel-item</code>.</p>

                    <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="/images/small/img-1.jpg" alt="..." class="d-block img-fluid">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">First slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/images/small/img-3.jpg" alt="..." class="d-block img-fluid">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Second slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/images/small/img-2.jpg" alt="..." class="d-block img-fluid">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Third slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaption" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Crossfade</h4>
                    <p class="sub-header">Add <code>.carousel-fade</code> to your carousel to animate slides with a fade
                        transition instead of a slide.</p>

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="/images/small/img-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Individual interval</h4>
                    <p class="sub-header">Add <code>data-bs-interval=""</code> to a <code>.carousel-item</code> to change
                        the amount of time to delay between automatically cycling to the next item.</p>

                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="/images/small/img-2.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-3.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="/images/small/img-1.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@extends('layouts.vertical', ['page_title' => 'Pricing', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
<div class="row mt-2 justify-content-center">
    <div class="col-lg-10">
        <div class="row">
            
            <!--Pricing Column-->
            <article class="pricing-column col-xl-3 col-md-6">
                <div class="card">
                    <div class="inner-box card-body">
                        <div class="plan-header p-3 text-center">
                            <h3 class="plan-title">Basic</h3>
                            <h2 class="plan-price fw-normal">$19</h2>
                            <div class="plan-duration">Per Month</div>
                        </div>
                        <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                            <li>5 Projects</li>
                            <li>1 GB Storage</li>
                            <li>No Domain</li>
                            <li>1 User</li>
                            <li>24x7 Support</li>
                        </ul>

                        <div class="text-center">
                            <a href="#" class="btn btn-bordered-success btn-success rounded-pill waves-effect waves-light">Signup Now</a>
                        </div>
                    </div>
                </div>
            </article>


            <!--Pricing Column-->
            <article class="pricing-column col-xl-3 col-md-6">
                <div class="ribbon"><span>POPULAR</span></div>
                <div class="card">
                <div class="inner-box card-body">
                    <div class="plan-header p-3 text-center">
                        <h3 class="plan-title">Premium</h3>
                        <h2 class="plan-price fw-normal">$29</h2>
                        <div class="plan-duration">Per Month</div>
                    </div>
                    <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                        <li>5 Projects</li>
                        <li>1 GB Storage</li>
                        <li>No Domain</li>
                        <li>1 User</li>
                        <li>24x7 Support</li>
                    </ul>

                    <div class="text-center">
                        <a href="#" class="btn btn-success btn-bordered-success rounded-pill waves-effect waves-light">Signup Now</a>
                    </div>
                </div>
                </div>
            </article>


            <!--Pricing Column-->
            <article class="pricing-column col-xl-3 col-md-6">
                <div class="card">
                <div class="inner-box card-body">
                    <div class="plan-header p-3 text-center">
                        <h3 class="plan-title">Developer</h3>
                        <h2 class="plan-price fw-normal">$39</h2>
                        <div class="plan-duration">Per Month</div>
                    </div>
                    <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                        <li>5 Projects</li>
                        <li>1 GB Storage</li>
                        <li>No Domain</li>
                        <li>1 User</li>
                        <li>24x7 Support</li>
                    </ul>

                    <div class="text-center">
                        <a href="#" class="btn btn-success btn-bordered-success rounded-pill waves-effect waves-light">Signup Now</a>
                    </div>
                    </div>
                </div>
            </article>

            <!--Pricing Column-->
            <article class="pricing-column col-xl-3 col-md-6">
                <div class="card">
                <div class="inner-box card-body">
                    <div class="plan-header p-3 text-center">
                        <h3 class="plan-title">Business</h3>
                        <h2 class="plan-price fw-normal">$49</h2>
                        <div class="plan-duration">Per Month</div>
                    </div>
                    <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                        <li>5 Projects</li>
                        <li>1 GB Storage</li>
                        <li>No Domain</li>
                        <li>1 User</li>
                        <li>24x7 Support</li>
                    </ul>

                    <div class="text-center">
                        <a href="#" class="btn btn-success btn-bordered-success rounded-pill waves-effect waves-light">Signup Now</a>
                    </div>
                </div>
                </div>
            </article>

        </div><!-- end row -->
    </div>
</div>
<!-- end row -->

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="row">

            <!--Pricing Column-->
            <article class="pricing-column col-md-4">
                <div class="card">
                <div class="inner-box card-body">
                    <div class="plan-header p-3 text-center">
                        <h3 class="plan-title">Basic</h3>
                        <h2 class="plan-price fw-normal">$19</h2>
                        <div class="plan-duration">Per Month</div>
                    </div>
                    <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                        <li>5 Projects</li>
                        <li>1 GB Storage</li>
                        <li>No Domain</li>
                        <li>1 User</li>
                        <li>24x7 Support</li>
                    </ul>

                    <div class="text-center">
                        <a href="#" class="btn btn-success btn-bordered-success rounded-pill waves-effect waves-light">Signup Now</a>
                    </div>
                    </div>
                </div>
            </article>


            <!--Pricing Column-->
            <article class="pricing-column col-md-4">
                <div class="ribbon"><span>POPULAR</span></div>
                <div class="card">
                <div class="inner-box card-body">
                    <div class="plan-header p-3 text-center">
                        <h3 class="plan-title">Premium</h3>
                        <h2 class="plan-price fw-normal">$29</h2>
                        <div class="plan-duration">Per Month</div>
                    </div>
                    <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                        <li>5 Projects</li>
                        <li>1 GB Storage</li>
                        <li>No Domain</li>
                        <li>1 User</li>
                        <li>24x7 Support</li>
                    </ul>

                    <div class="text-center">
                        <a href="#" class="btn btn-success btn-bordered-success rounded-pill waves-effect waves-light">Signup Now</a>
                    </div>
                    </div>
                </div>
            </article>


            <!--Pricing Column-->
            <article class="pricing-column col-md-4">
                <div class="card">
                <div class="inner-box card-body">
                        <div class="plan-header p-3 text-center">
                            <h3 class="plan-title">Developer</h3>
                            <h2 class="plan-price fw-normal">$39</h2>
                            <div class="plan-duration">Per Month</div>
                        </div>
                        <ul class="plan-stats list-unstyled text-center p-3 mb-0">
                            <li>5 Projects</li>
                            <li>1 GB Storage</li>
                            <li>No Domain</li>
                            <li>1 User</li>
                            <li>24x7 Support</li>
                        </ul>

                        <div class="text-center">
                            <a href="#" class="btn btn-success btn-bordered-success rounded-pill waves-effect waves-light">Signup Now</a>
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection

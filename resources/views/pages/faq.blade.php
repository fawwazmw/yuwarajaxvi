@extends('layouts.vertical', ['page_title' => 'FAQs', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="text-center">
                            <h3>Frequently Asked Questions</h3>
                            <p class="text-muted"> Nisi praesentium similique totam odio obcaecati, reprehenderit,
                                dignissimos rem temporibus ea inventore alias! Beatae animi nemo ea
                                tempora, temporibus laborum facilis ut!</p>

                            <button type="button" class="btn btn-success waves-effect waves-light mt-1">Email us your question</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light mt-1">Send us a tweet</button>

                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row mt-4 justify-content-center">
                    <div class="col-xl-5">
                        <div class="p-2">
                            
                            <div class="accordion custom-accordion" id="accordionExample">
                                <div class="card mb-2">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title m-0">
                                            <a href="#" class="text-dark" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What is Lorem Ipsum?
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title m-0">
                                            <a href="#" class="text-dark" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Is safe use Lorem Ipsum?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title m-0">
                                            <a href="#" class="text-dark" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Why use Lorem Ipsum?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordian end -->

                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-5">
                        <div class="p-2">
                            <div class="accordion custom-accordion" id="accordionExample1">
                                <div class="card mb-2">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title m-0">
                                            <a href="#" class="text-dark" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                License & Copyright
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseFour" class="collapse show" data-bs-parent="#accordionExample1">
                                        <div class="card-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title m-0">
                                            <a href="#" class="text-dark" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                How many variations exist?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-bs-parent="#accordionExample1">
                                        <div class="card-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title m-0">
                                            <a href="#" class="text-dark" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Why use Lorem Ipsum?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" data-bs-parent="#accordionExample1">
                                        <div class="card-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordian end -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->


            </div>
        </div>
      
    </div><!-- end col -->
</div><!-- end row -->
@endsection

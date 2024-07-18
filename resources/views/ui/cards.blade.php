@extends('layouts.vertical', ['page_title' => 'Cards', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-xl-3">

        <!-- Simple card -->
        <div class="card">
            <img class="card-img-top img-fluid" src="/images/gallery/1.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Button</a>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-md-6 col-xl-3">

        <div class="card">
            <img class="card-img-top img-fluid" src="/images/gallery/2.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-md-6 col-xl-3">

        <div class="card">
            <img class="card-img-top img-fluid" src="/images/gallery/3.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
            </div>
        </div>

    </div><!-- end col -->


    <div class="col-md-6 col-xl-3">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
            </div>
            <img class="img-fluid" src="/images/gallery/4.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

    </div><!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-sm-6">
        <div class="card card-body">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card card-body">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-4">
        <div class="card card-body">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-body text-center">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-body text-end">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body">
                <blockquote class="card-bodyquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-muted">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top img-fluid" src="/images/gallery/5.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a
                    natural lead-in to additional content. This content is a little bit
                    longer.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a
                    natural lead-in to additional content. This content is a little bit
                    longer.</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
            </div>
            <img class="card-img-bottom img-fluid" src="/images/gallery/7.jpg" alt="Card image cap">
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-inverse text-white">
            <img class="card-img img-fluid" src="/images/gallery/6.jpg" alt="Card image">
            <div class="card-img-overlay">
                <h4 class="card-title text-white">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a
                    natural lead-in to additional content. This content is a little bit
                    longer.</p>
                <p class="card-text">
                    <small class="">Last updated 3 mins ago</small>
                </p>
            </div>
        </div>
    </div>

</div>
<!-- end row -->

<div class="row">
    <div class="col-md-4">
        <div class="card card-inverse text-white" style="background-color: #333; border-color: #333;">
            <div class="card-body">
                <h4 class="card-title text-white">Special title treatment</h4>
                <p class="card-text">With supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="#" class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-info">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-purple">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-pink">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-muted">Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-4">
        <div class="card border border-primary">
            <div class="card-body text-primary">
                <h5 class="card-title text-primary">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border border-secondary">
            <div class="card-body text-secondary">
                <h5 class="card-title text-secondary">Secondary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border border-success">
            <div class="card-body text-success">
                <h5 class="card-title text-success">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <h4 class="mt-2 mb-3">Card Group</h4>
        <div class="card-group">
            <div class="card mb-4">
                <img class="card-img-top img-fluid" src="/images/gallery/8.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is a little bit
                        longer.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card mb-4">
                <img class="card-img-top img-fluid" src="/images/gallery/9.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This card has supporting text below as a natural
                        lead-in to additional content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card mb-4">
                <img class="card-img-top img-fluid" src="/images/gallery/10.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a
                        natural lead-in to additional content. This card has even longer content
                        than the first to show that equal height action.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <h4 class="mt-2 mb-4">Navigation</h4>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header bg-transparent border-bottom">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="mb-1">Special title treatment</h4>
                        <p class="mb-3">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header bg-transparent border-bottom">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="mb-1">Special title treatment</h4>
                        <p class="mb-3">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <h4 class="mt-0 mb-3">Columns</h4>
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top img-fluid" src="/images/gallery/2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title that wraps to a new line</h4>
                        <p class="card-text">This is a longer card with supporting text below as a
                            natural lead-in to additional content. This content is a little bit
                            longer.</p>
                    </div>
                </div>
                <div class="card card-body">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer class="blockquote-footer text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top img-fluid" src="/images/gallery/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural
                            lead-in to additional content.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card card-body text-center">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat.</p>
                        <footer class="blockquote-footer text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="card card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to
                        additional content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <img class="card-img img-fluid" src="/images/gallery/4.jpg" alt="Card image cap">
                </div>
                <div class="card card-body text-end">
                    <blockquote class="card-bodyquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <footer class="blockquote-footer text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="card card-body">
                    <h4 class="card-title">Card title</h4>

                    <p class="card-text">This is a wider card with supporting text below as a
                        natural lead-in to additional content. This card has even longer content
                        than the first to show that equal height action.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection

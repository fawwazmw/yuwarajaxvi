@extends('layouts.vertical', ['page_title' => 'Email Read', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="mb-3 header-title">Basic action email</h4>
                        <a href="{{ route('second', ['email', 'templates-action']) }}" target="_blank"> <img src="/images/email/1.png" class="img-fluid" alt=""> </a>
                    </div>
                    <div class="col-md-4">
                        <h4 class="mb-3 header-title">Email alert</h4>
                        <a href="{{ route('second', ['email', 'templates-alert']) }}" target="_blank"> <img src="/images/email/2.png" class="img-fluid" alt=""> </a>
                    </div>
                    <div class="col-md-4">
                        <h4 class="mb-3 header-title">Billing email</h4>
                        <a href="{{ route('second', ['email', 'templates-billing']) }}" target="_blank"> <img src="/images/email/3.png" class="img-fluid" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
      
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection
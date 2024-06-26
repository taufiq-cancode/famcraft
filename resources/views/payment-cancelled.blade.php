@extends('admin-theme.theme-master')
@section('content')

<style>
    .body-error .error-code {
        font-size: 5.5rem;
        line-height: 5.8rem;
        letter-spacing: 0px;
    }
    .main-error {
        padding: 0 50px;
        margin-top: -90px;
    }

    @media screen and (max-width:796px){
        .body-error .error-code {
            font-size: 3.5rem;
            line-height: 3.8rem;
            letter-spacing: 0px;
        }

        .main-error {
            padding: 0 50px;
            margin-top: 150px;
        }
    }
</style>

<section role="main" class="content-body card-margin">

    <!-- start: page -->

    <section class="body-error error-inside">
        <div class="center-error">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-error mb-3 text-center">
                        <h2 class="error-code text-dark text-center font-weight-semibold m-0">
                            <i class="fa-solid fa-circle-xmark text-danger"></i>
                            <br>
                            Payment Cancelled
                        </h2>
                        <p class="error-explanation text-center">Your payment was cancelled.</p>
                        <a href="{{ route('dashboard') }}"> Go to Dashboard </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end: page -->
</section>

@endsection
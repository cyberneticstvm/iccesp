@extends("web.base")
@section("content")
<div role="main" class="main">
    <section class="section bg-transparent position-relative border-0 m-0 p-0 mt-5">
        <div class="container custom-container-background z-index-1 py-5">
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col-12 text-center">
                    <a href="{{ asset('/web/docs/ICCESP-2024-Paper-Formatting-Instructions.pdf') }}" target="_blank">Paper Submission Guidelines</a>
                </div>
                <div class="col-12 text-center mt-5">
                    <a href="{{ route('paper') }}" class="btn btn-secondary btn-outline btn-rounded font-weight-bold btn-px-5 py-3">SUBMIT PAPER</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
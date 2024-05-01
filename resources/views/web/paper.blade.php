@extends("web.base")
@section("content")
<div role="main" class="main">
    <section class="section bg-transparent position-relative border-0 m-0 p-0 mt-5">
        <div class="container custom-container-background z-index-1 py-5">
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col text-center">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">Submit Paper</h2>
                    <form class="" action="{{ route('paper.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label class="text-danger">Abstract ID</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="abstract_id" required="" placeholder="Abstract ID">
                                <small>(If you lose your abstract id, please contact +91 7907743147)</small>
                                @error('abstract_id')
                                <small class="text-danger">{{ $errors->first('abstract_id') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label class="text-danger">Paper</label>
                                <input type="file" class="form-control" name="doc" required="">
                                @error('doc')
                                <small class="text-danger">{{ $errors->first('doc') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label class="text-danger">Payment Screenshot</label>
                                <input type="file" class="form-control" name="payment_screenshot" required="">
                                @error('payment_screenshot')
                                <small class="text-danger">{{ $errors->first('payment_screenshot') }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col mb-0">
                                <button type="submit" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3 btn-submit">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
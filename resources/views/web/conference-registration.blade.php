@extends("web.base")
@section("content")
<div role="main" class="main">
    <section class="section bg-transparent position-relative border-0 m-0 p-0 mt-5">
        <div class="container custom-container-background z-index-1 py-5">
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col text-center">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">Conference Registration</h2>
                </div>
                <div class="col-12">
                    <dl class="text-start">
                        <dt>Mode of Payment</dt>
                        <dd>To complete your registration, kindly proceed with the payment by transferring the required amount to the following account:</dd>
                        <dd>Account Name: Habilete Learning Solutions Pvt, Ltd</dd>
                        <dd>Account Number: 10190200025184</dd>
                        <dd>IFSC: FDRL0001019</dd>
                        <dd>Federal Bank</dd>
                        <dd>Ravis Arcade, Near Iron Bridge, Kollam</dd>
                    </dl>
                    <p>Payment can be made on the above account or by scanning the QR Code provided below. Once payment is made kindly send us a screenshot along with your name and abstract id to whatsapp +91 7907743147</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <img src="{{ asset('/web/img/iccesp/qr.png') }}" class="img-fluid" alt="Habilete Payment QR Code" />
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
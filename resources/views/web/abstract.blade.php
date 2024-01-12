@extends("web.base")
@section("content")
<div role="main" class="main">
    <section class="section bg-transparent position-relative border-0 m-0 p-0 mt-5">
        <div class="container custom-container-background z-index-1 py-5">
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col-12 text-center">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">Abstract Guidelines</h2>
                    <p class="text-justify">The abstract should present a concise statement of the scope, principal findings, and conclusion of the paper. Abstracts must include sufficient information for reviewers to judge the nature and significance of the topic. Abstracts should be no more than 250 words, formatted in Microsoft Word, and single-spaced, using size 12 Times New Roman Font without any author / co-author details. All information about the corresponding author, co-authors should be provided only in respective submission fields. The file for the Abstract should include only the contents. The abstract file is to be submitted into the online submission field and the corresponding author must title the abstract file 'last_name'_'first_name'_'Title_of_the_theme_Abstract'. (For example file name for John Bunyan would be Bunyan_John_Transportation_Engineering_Abstact). A notification receipt will be received by the author once the abstract and other details are submitted online.</p>
                    <p class="text-justify">Any technical issues concernig online submission, kindly email to <a href="mailto:iccesp2024@gmail.com">iccesp2024@gmail.com</a> and alternatively, you can call on <a href="callto:+919562417322">+919562417322</a></p>
                    <a href="{{ route('register') }}" class="btn btn-secondary btn-outline btn-rounded font-weight-bold btn-px-5 py-3">SUBMIT ABSTRACT</a>
                </div>
                <div class="col-12 text-center mt-5">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">Registration and Publications</h2>
                    <dl class="text-start">
                        <dt>Registration Fee</dt>
                        <dd>Students / Research Scholar: ₹1200</dd>
                        <dd>Faculty Members: ₹2000</dd>
                        <dd>Industry / Corporate Delegates: ₹3000</dd>
                        <dd>Student Participants (Attendees): ₹750</dd>
                        <dd>Foreign Delegates: USD 100</dd>
                        <dt>Mode of Payment</dt>
                        <dd>Please mention ICCESP-2024 Conference Payment when you are making payment.</dd>
                        <dd>Habilete Learning Solutions</dd>
                        <dd>Federal Bank</dd>
                        <dd>Ravis Arcade, Near Iron Bridge, Kollam</dd>
                        <dd>Account Number: 10190200025184</dd>
                        <dd>IFSC: FDRL0001019</dd>
                    </dl>
                </div>
                <div class="col-12 text-center mt-5">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">Important Dates</h2>
                    <dl class="text-start">
                        <dd>Last date for Abstract Submission : April 1, 2024</dd>
                        <dd>Intimation and Acceptance of Abstract :May 1, 2024</dd>
                        <dd>Last date for full paper submission:</dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@extends("web.base")
@section("content")
<div role="main" class="main">
    <section class="section position-relative border-0 m-0" style="background-image: url('{{ asset('/web/img/iccesp/marian.jpeg') }}'); background-position: center; background-size: cover;">
        <div class="container position-relative pb-5 mb-5">
            <svg class="d-none d-lg-block custom-svg-position-1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1686.88 1095.86" data-appear-animation-svg="true">
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M87.95,1.4c6.82,9.14,15.53,21.59,24.68,36.94c6.82,11.45,27.18,46.82,42.55,96.51
								c22.8,73.68,21.39,136.02,20.51,156c-3.11,70.56-22.16,122.51-36,159.32c-10.88,28.95-11.68,24.38-59.74,125.62
								c-43.46,91.53-49.66,109.7-52.85,119.49C6.6,758.14,2.98,804.59,2.16,829.14c-1.49,44.72,4.54,70.82,6.47,78.64
								c3.54,14.35,10.42,41.25,29.79,70.47c6.64,10.01,30.84,44.6,76.77,69.11c42.9,22.9,81.52,24.6,110.47,25.87
								c45.57,2.01,79.98-6.18,113.02-14.3c30.83-7.58,58.4-18.38,113.53-40c59.55-23.35,66.43-28.58,110.47-43.91
								c35.63-12.41,57.67-19.98,89.36-25.7c25.68-4.64,55.3-9.77,94.3-6.3c12.43,1.11,53.97,5.59,102.13,27.74
								c32.05,14.74,53.03,30.87,57.53,34.38c24.26,18.91,41.05,38.65,51.91,53.45" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M119.44,34.42c8.99,12.85,20.33,30.49,31.66,52.43c26.28,50.9,36.35,93.84,39.15,106.55
								c3.12,14.2,10.77,52.5,9.53,102.81c-0.28,11.19-2.03,65.48-23.83,133.79c-9.82,30.78-21.07,54.56-43.57,102.13
								c-26.78,56.6-29.14,53.79-45.62,90.21c-19.84,43.85-42.56,94.07-48.68,161.02c-2.86,31.34-5.69,66.08,7.49,108.6
								c6.03,19.44,20.95,65.45,64,101.11c47.45,39.3,101.05,42.8,133.79,44.94c63.04,4.12,115.57-13.6,165.11-30.3
								c5.59-1.89,23.59-8.86,59.57-22.81c100.23-38.85,99.33-40.27,122.21-47.32c41.18-12.69,80.51-24.8,133.11-21.79
								c19.83,1.14,63.01,5.65,111.66,28.94c8.19,3.92,50.6,24.68,88.51,64.34c5.66,5.92,10.38,11.39,12.6,13.96
								c23.78,27.59,39.5,52.94,49.36,70.81" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M149.4,68.12c6.57,8.86,14.9,20.95,23.49,35.91c4.29,7.48,19.67,34.89,32.17,73.53
								c6.72,20.77,21.93,69.22,20.6,133.28c-1.3,62.06-17.49,108.17-28.94,139.91c-10.84,30.08-24.93,58.75-53.11,116.09
								c-20.68,42.08-23.94,45.72-33.7,69.11c-12.01,28.77-26.1,63.09-33.02,108.6c-5.01,32.91-10.64,69.92,1.7,115.4
								c5.5,20.27,17.08,60.94,53.45,94.64c42.55,39.43,93.06,45.28,119.49,48.34c54.36,6.29,98.94-6.87,146.04-20.77
								c14.56-4.3,31.27-10.58,64.68-23.15c90.64-34.09,94.12-40.57,133.45-51.74c33.81-9.61,71.69-20.37,122.21-16.68
								c58.83,4.3,99.83,25.64,107.91,29.96c40.02,21.39,65.7,49.16,77.96,62.64c8.35,9.18,14.84,17.39,19.4,23.49" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M179.69,101.14c6.75,9.74,13.52,20.4,20.09,32c22.79,40.27,33.1,74.23,35.4,82.04
								c5.33,18.08,15.6,58.21,14.64,110.3c-0.24,12.92-1.88,65.03-24.85,127.32c-3.1,8.42-7.74,18.89-17.02,39.83
								c-25.65,57.88-36.57,75.11-52.43,110.3c-18.12,40.19-31.28,69.39-39.83,110.64c-7.2,34.73-15.41,74.33-2.38,122.21
								c4.55,16.73,14.43,51.38,44.94,82.04c35.67,35.85,78.11,44.69,100.43,49.02c58.53,11.37,107.23-3.46,156.26-18.38
								c24.42-7.44,15.93-6.77,86.47-33.7c103.46-39.5,129.97-44.06,142.98-45.96c28.7-4.18,61.65-8.66,103.15,1.02
								c7.96,1.86,47.73,11.59,90.21,42.55c30.91,22.53,50.88,47.29,62.64,64.34" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M208.89,133.57c7.42,9.37,15.01,20.15,22.21,32.43c21.75,37.04,29.38,69.66,33.96,89.87
								c4.69,20.73,13.92,63.26,7.4,117.96c-4.84,40.58-16.18,69.74-28.09,100.34c-11.91,30.61-15.38,31.76-42.38,89.11
								c-24.66,52.37-36.99,78.56-44.68,105.45c-8.49,29.66-18.6,66.37-13.28,113.36c2.65,23.35,6.06,53.41,27.06,84
								c28.75,41.87,70.98,56.35,86.81,61.53c35.79,11.71,65.37,8.99,93.19,6.13c15-1.54,44-5.54,139.91-42.38
								c72.26-27.76,81.46-35.35,120.77-43.91c27.26-5.94,54.69-11.68,91.15-8.17c55.63,5.36,93.81,28.56,102.38,33.96
								c36.12,22.73,57.57,50.99,66.38,62.81c3.86,5.17,6.88,9.63,8.94,12.77" />
            </svg>
            <svg class="d-none d-lg-block custom-svg-position-2" width="780" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1034.87 621.92" data-appear-animation-svg="true">
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M1033.14,343.02c-15.35,3.35-35.43,6.53-59.06,7.15c-6.93,0.18-31.19,0.59-62.64-4.6
								c-17.43-2.87-66.48-11.4-119.49-41.36c-44.67-25.25-70.31-53.39-114.72-102.13c-41.11-45.11-36.16-48.69-77.11-91.57
								c-56.53-59.21-89.83-77.39-103.83-84.43C476.06,15.9,449.68,2.99,412.71,1.4c-12.99-0.56-43.99-1.53-77.96,14.64
								c-41.24,19.63-61.56,52.48-73.53,71.83c-23.33,37.71-29.81,74.12-34.04,97.87c-2.5,14.07-3.49,25.38-5.45,48
								c-3.15,36.29-2.4,50.69-3.91,84.09c-2.19,48.31-3.28,72.47-10.04,104c-5.37,25.04-10.9,49.9-27.06,79.15
								c-17.97,32.52-39.6,53.3-50.89,63.15c-11.85,10.34-37.13,30.25-74.72,43.74c-21.2,7.61-39.98,10.9-53.79,12.43" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M1001.31,353.83c-9.83,1.88-23.04,3.96-38.72,5.11c-41.64,3.05-75.12-2.32-93.96-6.3
								c-40.95-8.65-70.03-22.85-78.38-27.06c-38.81-19.59-63.61-42.55-82.47-60.26c-12.26-11.52-28.17-30.13-59.49-66.89
								c-50.46-59.23-51.93-63.36-70.21-81.19c-23.99-23.4-43.89-42.81-76.85-59.49c-17.8-9.01-50.48-25.07-94.21-24.26
								c-11.84,0.22-31.62,0.78-54.64,10.47c-26.56,11.18-42.26,28.14-52.85,39.83c-31.65,34.94-42.46,72.73-48,92.94
								c-6.72,24.51-8.36,44.66-11.23,79.91c-1.08,13.31-1.74,28.45-3.06,58.72c-1.92,44.01-1.36,47.29-3.06,64.85
								c-1.74,17.94-3.56,36.73-9.7,60.77c-4.86,19.04-10.57,40.74-25.28,65.87c-4.44,7.59-16.44,27.02-37.53,47.23
								c-25.95,24.88-51.32,37.19-60.51,41.36c-20.86,9.47-39.57,13.88-52.85,16.09" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M82.16,604.55c9.97-1.79,22.58-4.85,36.6-10.3c8.38-3.25,23.78-9.9,41.02-21.79
								c10.53-7.26,28.65-21.25,45.79-43.57c19.61-25.55,28.03-49.12,33.02-63.49c9.64-27.72,11.87-49.43,14.98-81.7
								c2.99-31.08,0.85-33.59,3.57-83.06c2.17-39.47,3.26-59.2,7.49-80c5.05-24.83,10.68-51.28,28.77-80.51
								c8.98-14.51,23.96-38.12,53.45-55.66c22.82-13.57,43.56-17.11,49.87-18.04c30.43-4.49,54,3.04,74.04,9.7
								c41.63,13.83,69.09,36.91,86.81,52.09c13.38,11.46,21.69,20.52,38.3,38.64c31.56,34.42,37.19,46.51,64.34,77.45
								c21.88,24.93,36.09,41.13,58.89,59.06c41.27,32.46,79.97,46.48,93.11,50.89c33.92,11.4,63.83,14.7,84.77,15.49
								c29.54,1.11,54.49-2.31,72.85-6.13" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M937.57,374.34c-5.44,1.12-12.86,2.48-21.7,3.57c-10.07,1.24-33.34,3.55-62.81,0.51
								c-36.87-3.8-64.54-14-76.09-18.64c-41.03-16.48-67.58-38.6-81.7-50.55c-16.08-13.62-26.54-25.15-40.09-40.09
								c-29.01-31.98-30.63-40.34-54.38-67.91c-16.91-19.63-39.47-45.44-75.06-68.94c-20.46-13.5-41.03-26.78-71.74-32.68
								c-14.69-2.82-39.94-7.35-69.45,2.55c-30.17,10.13-47.82,29.65-57.7,40.85c-24.49,27.76-32.67,56.86-38.3,76.85
								c-6.19,21.99-7.61,39.17-10.47,73.53c-1.46,17.52-0.81,17.82-3.06,61.53c-1.88,36.55-2.86,55.09-4.85,67.91
								c-3.37,21.72-6.4,41.25-17.11,64.85c-12.8,28.2-30.14,48.07-42.89,60.26c-29.82,28.48-60.52,39.77-69.7,42.89
								c-10.72,3.65-20.03,5.69-26.81,6.89" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M142.63,591.42c6.17-1.05,14.23-2.76,23.43-5.68c6.86-2.18,23.03-7.8,40.7-19.06
								c8.24-5.25,31.65-21.2,51.4-50.55c18.26-27.13,24.16-52,28.94-73.02c5.69-25.03,6.52-47.72,8.17-93.11
								c1.14-31.38,0.16-40.44,3.06-64.17c2.7-22.04,4.58-37.39,11.4-56.68c5.71-16.12,17.03-46.9,46.81-71.83
								c8.95-7.49,24.51-20.23,48.51-26.04c27.25-6.6,49.5-0.43,65.19,3.91c28.35,7.86,47.23,21.08,63.49,32.68
								c25.58,18.26,42.05,36.76,58.21,55.15c19.98,22.73,19.16,26.07,41.53,51.74c13.88,15.93,26.73,30.68,45.28,46.64
								c16.75,14.41,43.12,36.7,83.74,51.91c5.94,2.23,33.77,12.38,72.34,15.32c28.74,2.19,53.04-0.43,70.64-3.57" />
            </svg>

            <!--<img src="{{ asset('/web/img/demos/insurance/generic/generic-3.png') }}" class="img-fluid position-absolute top-10 right-0 z-index-1 d-none d-lg-block appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" alt="Woman Hero" />-->
            <div class="row align-items-center pb-5 mb-4">
                <div class="col-lg-12">
                    <!--<h1 class="font-weight-bold text-color-light custom-big-text-1 ws-nowrap pt-5 pb-5-5 mb-1 my-md-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
                        <span class="d-none d-lg-block">ASCE</span>
                    </h1>-->
                    <h2 class="text-color-dark line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">SECOND INTERNATIONAL CONFERENCE IN CIVIL ENGINEERING FOR A SUSTAINABLE PLANET (ICCESP 2024)</h2><br /><br />
                    <h3 class="text-color-dark line-height-3 mb-2 appear-animation font-weight-bold" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">Marian college of Engineering IN COLLABORATION WITH</h3>
                    <h3 class="text-color-dark line-height-3 mb-2 appear-animation font-weight-bold" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">American Society of Civil Engineers (ASCE), ASCE India Section, Southern Region &</h3>
                    <h3 class="text-color-dark line-height-3 mb-2 appear-animation font-weight-bold" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">Habilete learning solutions Pvt Ltd, </h3>

                    <p class="text-color-dark text-4 font-weight-medium mb-4-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100"></p>
                    <p class="text-dark"><strong>6,7,8 DECEMBER 2024</strong></p>
                    <a href="#" class="btn btn-primary btn-rounded border-0 font-weight-bold text-3 px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">REGISTER NOW</a>
                </div>
                <!--<div class="col-lg-3 ms-lg-auto mb-lg-5 d-none d-lg-block">
                    <ul class="list list-unstyled">
                        <li class="font-weight-bold text-color-light line-height-1 text-20 ws-nowrap ps-5-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">HOME</li>
                        <li class="font-weight-bold text-color-light line-height-1 text-20 ws-nowrap ps-5 ms-5 position-relative left-8 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">TRAVEL</li>
                        <li class="font-weight-bold text-color-light line-height-1 text-20 ws-nowrap ps-5 ms-5 position-relative left-12 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">&nbsp;LIFE</li>
                        <li class="font-weight-bold text-color-light line-height-1 text-20 ws-nowrap ps-5 ms-5 position-relative left-15 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200">CAR</li>
                    </ul>
                </div>-->
            </div>
        </div>
    </section>
    <section class="section bg-transparent position-relative border-0 m-0 p-0">
        <div class="container custom-container-background z-index-1 py-5">
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col text-center">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">Chief Convener's <strong>Message</strong></h2>
                </div>
            </div>
            <div class="row justify-content-center position-relative gy-5 z-index-1">
                <div class="col-md-9 col-lg-4 text-center appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="100">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <img src="{{ asset('/web/img/iccesp/kishorep.jpg') }}" class="img-fluid" alt="" style="width:50%">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner line-height-1">Dr. Kishore P, MBA, PhD, PMP, Pronce2, A.M.ASCE, Managing Director, Habilete Learning solution</span>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-md-9 col-lg-8 text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                    <p class="text-3-5 mb-0 text-justify">On Behalf of <a href="https://habilete.co.in" target="_blank">Habilete</a> it gives me great pleasure to extend to you a hearty welcome to the second International Conference in Civil Engineering for a Sustainable Planet 2024 (ICCESP-2024). Building on the well-established track of successful academic and research events in Engineering and Management issues. Habilete is privileged to partner with ASCE and Marian College of Engineering in bringing to you an impressive and leading academic, scholars, researchers and practitioners of civil engineering from around the world.</p>
                    <p class="text-end">Dr. Kishor P, PhD, PMP, MBA, Prince2, A.M.ASCE<br />Organizer, ICCESP 2024<br />Treasurer, ASCE India Section Southern Region</p>
                </div>
            </div>
            <div class="row py-5">
                <div class="col">
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-transparent position-relative border-0 m-0 p-0">
        <div class="container custom-container-background z-index-1 py-5">
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col text-center">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">SECOND INTERNATIONAL CONFERENCE IN CIVIL ENGINEERING FOR A SUSTAINABLE PLANET <strong>(ICCESP 2024)</strong></h2>
                </div>
            </div>
            <div class="row justify-content-center position-relative gy-5 z-index-1">
                <div class="col-md-12 col-lg-12 text-center appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                    <h3 class="text-color-dark text-transform-none text-5-6 font-weight-semibold mb-3">6, 7, 8 DECEMBER 2024</h3>
                    <h4 class="mb-0 text-success">MARIAN ENGINEERING COLLEGE IN COLLABORATION WITH AMERICAN SOCIETY FOR CIVIL ENGINEERS (ASCE) <br />ASCE India Section, Southern Region<br />&<br /> HABILETTE LEARNING SOLUTIONS PVT, LTD</h4>
                </div>
            </div>
            <div class="row py-5">
                <div class="col">
                    <hr>
                </div>
            </div>
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col text-center">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">OBJECTIVES OF <strong>ICCESP 2024</strong></h2>
                </div>
            </div>
            <div class="row justify-content-center position-relative gy-5 z-index-1">
                <div class="col-md-12 col-lg-12 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                    <p class="text-color-dark text-transform-none mb-3 text-justify">To make the participants aware of recent advancement in the field of Civil Engineering practice and research. Scope of further technological advancement in various fields will also be discussed in the Conference. Participants will be introduced to various new technologies and field problems which may be useful in enriching knowledge and innovative ideas.</p>
                    <h3 class="text-transform-none text-5-6 font-weight-semibold mb-3 text-success">Target Audience</h3>
                    <p class="text-justify">Academicians, researchers, technocrats, practitioners, and students of Civil Engineering and Architecture.</p>
                    <h4 class="text-transform-none">The conference welcomes papers within the specified themes but is open to considering submissions on other topics in civil engineering as well. The list of themes provided is not exhaustive, and submissions outside of the mentioned sub-themes will also be accommodated.</h4>
                    <ul class="list list-icons list-icons-style-2">
                        <!--<li><i class="fas fa-check"></i><strong>Building Technology and Resources Management: </strong> Sustainable planning, designing, and construction, Resoruces Management, Lean Construction Techniques, Risk Management, Construction Supply Chain Management, Information and Communication Technology (ICT) in Construction and Engineering Management, Alternate Builiding Technology, Green Buildings, Climate Responsive Architecture, Quality and Safety Construction</li>
                        <li><i class="fas fa-check"></i><strong>Sustainable Materials and Structural system: </strong>Innovative Cementitious Materials and Aggregates, Durability of Concrete, Retrofiting and Rehabilitation of Buildings and Bridges, Structural Health Monitoring, Risk Assessment and Structural Failures, Smart Structures and Prefabricated Buildings, Material Technology, Inductsrial and High-Rise Buildings, Marine and Offshore Structures, Disaster Resistent Structures</li>
                        <li><i class="fas fa-check"></i><strong>Transportation Engineering: </strong>Intelligent Transporting System, Traffic Engineering and Management, Transportation Planning and System Analysis, Traffic Flow Modeling, Safe Roads, Public Transport NMT (Non-Motorised Modes of ransport), COVID Impacts in the transportation sector, Highway and Airfield Pavements, Railway, Waterways, and Airways</li>
                        <li><i class="fas fa-check"></i><strong>Geotechnical Engineering: </strong>Ground Improvement Techniques, Analysis and Design of Foundation, Pavement Geotechnics, Environmental Geotechnics, Geosynthetics and Reinforced Soil Structures, Soil and Rock Slope Stability, Forensic Geotechnical Engineering</li>
                        <li><i class="fas fa-check"></i><strong>Hydraulics and Water Resources Engineering: </strong>Surface and Ground Water Hydrology, Advances in Fluid Mechanics, Application of Remote Sensing / GIS in Water Resource Engineering, Sediment Transport, Reservoir Sedimentation, Irrigation Technology, Analysis of Flood and Drought, Climate Change, River Modelling and Hydraulics, Sustainable Water Management</li>
                        <li><i class="fas fa-check"></i><strong>Environmental Engineering: </strong>Pollution Control, Management Bioremediation, Waste Water Treatment and Filtration Methods, Environmental Impact Assessment, Microbiological Treatments, Water Quality Assessment and Modelling</li>-->
                        <li><i class="fas fa-check"></i>Building Technology and Resources Management</li>
                        <li><i class="fas fa-check"></i>Sustainable Materials and Structural system</li>
                        <li><i class="fas fa-check"></i>Transportation Engineering</li>
                        <li><i class="fas fa-check"></i>Geotechnical Engineering</li>
                        <li><i class="fas fa-check"></i>Remote Sensing and GIS</li>
                        <li><i class="fas fa-check"></i>Marine Engineering and Offshore Structures</li>
                        <li><i class="fas fa-check"></i>Environment Engineering</li>
                        <li><i class="fas fa-check"></i>Construction project management</li>
                        <li><i class="fas fa-check"></i>Hydraulics and Water Resources Engineering</li>
                        <li><i class="fas fa-check"></i>Structural Engineering</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <p class="text-success">Local sightseeing can be arranged in the enchanting destination of God's Own Country, Kerala.<br />
                        For More information Contact<br />
                        Prof Abhijith R.P : +919567687372<br />
                        Prof Renju CM : +919400456728
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Important Dates</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <!--<div class="">
                    <img alt="Porto" width="123" height="46" src="{{ asset('/web/img/demos/insurance/iccesp-logo.png') }}">
                </div>
                <div class="mt-3">
                    <p class="text-4 mb-0 text-info">Last date for Abstract Submission : April 1, 2024</p>
                    <p class="text-4 mb-0 text-info">Intimation and Acceptance of Abstract :May 1, 2024</p>
                    <p class="text-4 mb-0 text-info">Last date for full paper submission: Will announce shortly</p>
                </div>-->
                <img src="{{ asset('/web/img/iccesp/brochure3.jpeg') }}" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts/layout')

@section('content')

<div class="bradcam_area breadcam_bg_2 bradcam_overlay">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Doctors</h3>
                    <p><a href="index.php">Home /</a> Doctors</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

<!-- expert_doctors_area_start -->
<div class="expert_doctors_area doctor_page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="single_expert mb-40">
                    <div class="expert_thumb">
                        <img src="img/experts/1.png" alt="">
                    </div>
                    <div class="experts_name text-center">
                        <h3>Mirazul Alom</h3>
                        <span>Neurologist</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single_expert mb-40">
                    <div class="expert_thumb">
                        <img src="img/experts/2.png" alt="">
                    </div>
                    <div class="experts_name text-center">
                        <h3>Mirazul Alom</h3>
                        <span>Neurologist</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single_expert mb-40">
                    <div class="expert_thumb">
                        <img src="img/experts/3.png" alt="">
                    </div>
                    <div class="experts_name text-center">
                        <h3>Mirazul Alom</h3>
                        <span>Neurologist</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single_expert mb-40">
                    <div class="expert_thumb">
                        <img src="img/experts/9.png" alt="">
                    </div>
                    <div class="experts_name text-center">
                        <h3>Mirazul Alom</h3>
                        <span>Neurologist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- expert_doctors_area_end -->

<!-- testmonial_area_start -->
<div class="testmonial_area">
    <div class="testmonial_active owl-carousel">
        <div class="single-testmonial testmonial_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="testmonial_info text-center">
                            <div class="quote">
                                <i class="flaticon-straight-quotes"></i>
                            </div>
                            <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                <br>
                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                            <div class="testmonial_author">
                                <h4>Asana Korim</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-testmonial testmonial_bg_2 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="testmonial_info text-center">
                            <div class="quote">
                                <i class="flaticon-straight-quotes"></i>
                            </div>
                            <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                <br>
                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                            <div class="testmonial_author">
                                <h4>Asana Korim</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

{{-- urgence --}}
@section('dringend')

<div class="Emergency_contact">
    <div class="conatiner-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-6">
                <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                    <div class="info">
                        <h3>For Any Emergency Contact</h3>
                        <p>Esteem spirit temper too say adieus.</p>
                    </div>
                    <div class="info_button">
                        <a href="#" class="boxed-btn3-white">+10 378 4673 467</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                    <div class="info">
                        <h3>Make an Online Appointment</h3>
                        <p>Esteem spirit temper too say adieus.</p>
                    </div>
                    <div class="info_button">
                        <a href="#" class="boxed-btn3-white">Make an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
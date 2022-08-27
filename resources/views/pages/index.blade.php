@section('title', 'Home | AEAP')
@extends('layouts.layout')

@section('content')


    @include('banner-section')

    {{--            Second Section         --}}

    <div class="welder-service-section section-margin-top each-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-welder-left">
                        <img src="{{asset('/assets/images/service-left.png')}}" alt="welder service">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-right pl-5">
                        <div class="section-heading">
                            <h2 class="text-left">In-house & on-site welder services</h2>
                        </div>
                        <div class="para-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eos illo laudantium omnis. A, commodi dolor expedita
                                fugit inventore iste modi nemo odio quae qui, reprehenderit soluta tenetur. At cumque distinctio earum laboriosam minima
                                molestias mollitia pariatur perferendis, possimus voluptates! Adipisci in nam quia sequi sit. Dolore eius facere nesciunt.
                            </p>
                        </div>
                        <ul class="list-style-cm">
                            <li>Welding and Cutting</li>
                            <li>Fabrication and Engineering</li>
                            <li>Coded Welding</li>
                            <li>Hydrostatic Testing</li>
                            <li>Basic Machining</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="get-work-section section-margin-top each-section">
        <div class="container">
            <div class="section-heading">
                <h2>lets's get to work</h2>
            </div>
            <div class="row">
                <div class="col-md-2 mt-4">
                    <div class="work-card">
                        <div class="work-icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <div class="work-title">
                            <p>new</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="work-card">
                        <div class="work-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <div class="work-title">
                            <p>used</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="work-card">
                        <div class="work-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="work-title">
                            <p>rental</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="work-card">
                        <div class="work-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="work-title">
                            <p>buy parts</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="work-card">
                        <div class="work-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="work-title">
                            <p>careers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="work-card">
                        <div class="work-icon">
                            <i class="fas fa-map-marked"></i>
                        </div>
                        <div class="work-title">
                            <p>locations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--            Brand Section           --}}

    <div class="brand-section section-margin-top each-section">
        <div class="container">
            <div class="section-heading">
                <h2>Brands</h2>
            </div>
            <div class="row" style="background: #1a1a1a; padding: 28px 14px;  border-radius: 12px;">
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-01.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-02.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-03.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-04.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-05.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-06.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-07.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-08.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-09.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-10.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-11.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/brand-12.png')}}" alt="brand images">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--            About us            --}}

    <div class="about-us-section section-margin-top each-section">
        <div class="container">
            <div class="section-heading">
                <h2>About us</h2>
            </div>
        </div>
        <div class="about-container">
            <div class="hero">
                <div class="left">
                    <div class="section-heading">
                        <h2 class="text-left" style="color: black">American equipment<br><span style="color: #ffff00"><b>and parts</b></span></h2>
                    </div>
                    <div class="para-text">
                        <p style="color: #000000">
                            American Equipment & parts is committed to serving the mining and construction industries with new, rebuilt, and quality
                            used replacement parts for off-highway heavy mobile equipment such as haul trucks, electric and hydraulic shovels, drills, loaders,
                            dozers, and much more. We have access to a growing inventory of diesel engines, transmissions, suspensions, hydraulic cylinders, final
                            drive parts, gears, differentials, electric motors, plus the smaller, harder to find parts you may need.
                        </p>
                    </div>
                </div>
                <div class="right">
                    <img src="{{asset('/assets/images/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection

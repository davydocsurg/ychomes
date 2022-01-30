@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/caro/caro2.css') }}"> --}}
@endsection

<section id="services" class="mt-5">
    <h1 class="text-center font-weight-bold">
        Our Services
    </h1>



    {{-- <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="featured-carousel owl-carousel">
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded"
                                    style="background-image: url({{ asset('images/caros/work-1.jpg') }});">
                                    <a href="#" class="icon d-flex align-items-center justify-content-center">
                                        <span class="ion-ios-search"></span>
                                    </a>
                                </div>
                                <div class="text pt-3 w-100 text-center">
                                    <h3><a href="#">Work 01</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded"
                                    style="background-image: url({{ asset('images/caros/work-2.jpg') }});">
                                    <a href="#" class="icon d-flex align-items-center justify-content-center">
                                        <span class="ion-ios-search"></span>
                                    </a>
                                </div>
                                <div class="text pt-3 w-100 text-center">
                                    <h3><a href="#">Work 02</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded"
                                    style="background-image: url({{ asset('images/caros/work-3.jpg') }});">
                                    <a href="#" class="icon d-flex align-items-center justify-content-center">
                                        <span class="ion-ios-search"></span>
                                    </a>
                                </div>
                                <div class="text pt-3 w-100 text-center">
                                    <h3><a href="#">Work 03</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded"
                                    style="background-image: url({{ asset('images/caros/work-4.jpg') }});">
                                    <a href="#" class="icon d-flex align-items-center justify-content-center">
                                        <span class="ion-ios-search"></span>
                                    </a>
                                </div>
                                <div class="text pt-3 w-100 text-center">
                                    <h3><a href="#">Work 04</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded"
                                    style="background-image: url({{ asset('images/caros/work-5.jpg') }});">
                                    <a href="#" class="icon d-flex align-items-center justify-content-center">
                                        <span class="ion-ios-search"></span>
                                    </a>
                                </div>
                                <div class="text pt-3 w-100 text-center">
                                    <h3><a href="#">Work 05</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded"
                                    style="background-image: url({{ asset('images/caros/work-6.jpg') }});">
                                    <a href="#" class="icon d-flex align-items-center justify-content-center">
                                        <span class="ion-ios-search"></span>
                                    </a>
                                </div>
                                <div class="text pt-3 w-100 text-center">
                                    <h3><a href="#">Work 06</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="wrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white card-has-bg click-col"
                        style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                            alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <small class="card-meta mb-2">Thought Leadership</small>
                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum
                                        Sit Amet Consectetur dipisi?</a></h4>
                                <small><i class="far fa-clock"></i> October 15, 2020</small>
                            </div>
                            {{-- <div class="card-footer">
                                <div class="media">
                                    <img class="mr-3 rounded-circle"
                                        src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png"
                                        alt="Generic placeholder image" style="max-width:50px">
                                    <div class="media-body">
                                        <h6 class="my-0 text-white d-block">Oz COruhlu</h6>
                                        <small>Director of UI/UX</small>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white card-has-bg click-col"
                        style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
                        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature"
                            alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <small class="card-meta mb-2">Thought Leadership</small>
                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum
                                        Sit Amet Consectetur dipisi?</a></h4>
                                <small><i class="far fa-clock"></i> October 15, 2020</small>
                            </div>
                            {{-- <div class="card-footer">
                                <div class="media">
                                    <img class="mr-3 rounded-circle"
                                        src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png"
                                        alt="Generic placeholder image" style="max-width:50px">
                                    <div class="media-body">
                                        <h6 class="my-0 text-white d-block">Oz COruhlu</h6>
                                        <small>Director of UI/UX</small>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white card-has-bg click-col"
                        style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
                        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design"
                            alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <small class="card-meta mb-2">Thought Leadership</small>
                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum
                                        Sit Amet Consectetur dipisi?</a></h4>
                                <small><i class="far fa-clock"></i> October 15, 2020</small>
                            </div>
                            {{-- <div class="card-footer">
                                <div class="media">
                                    <img class="mr-3 rounded-circle"
                                        src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png"
                                        alt="Generic placeholder image" style="max-width:50px">
                                    <div class="media-body">
                                        <h6 class="my-0 text-white d-block">Oz COruhlu</h6>
                                        <small>Director of UI/UX</small>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</section>

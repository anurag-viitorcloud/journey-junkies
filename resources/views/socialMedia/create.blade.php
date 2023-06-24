@extends('layouts.app')

@section('style')
    <style>
        :root {
            font-size: min(2vw, 2vh);
            font-family: sans-serif;
        }

        .mobile-data {
            height: 85vh;
            display: grid;
            place-items: center;
            margin: 0;
        }

        .device {
            aspect-ratio: 260 / 540;
            width: 15rem;
            border: solid 0.7rem black;
            border-radius: 2rem;
            position: relative;
            overflow: hidden;
        }

        .status {
            box-sizing: border-box;
            width: 100%;
            height: 2rem;
            padding: 0 1rem;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .status div {
            flex: 1;
            text-align: center;
        }

        .status .blank {
            flex: 1.5;
        }

        .floating {
            width: 5rem;
            aspect-ratio: 300 / 90;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            margin: 0.5rem 0;
            border-radius: 2rem;
            /* does not really matter */
            background: black;
        }

        .camera {
            box-sizing: border-box;
            width: 1rem;
            aspect-ratio: 1 / 1;
            position: absolute;
            top: 50%;
            right: calc(5rem / 300 * 90 * 0.25);
            /* center of border radius */
            transform: translateY(-50%);
            border-radius: 2rem;
            /* does not really matter */
            border: solid 0.1rem #121212;
            background: #00021D;
        }

        .blob {
            position: absolute;
            transform: translate(-50%, -50%);
            border-radius: 50%;
        }

        .white {
            width: 0.5rem;
            aspect-ratio: 14 / 6;
            top: 25%;
            left: 50%;
            background: white;
            filter: blur(0.1rem);
            opacity: 0.7;
        }

        .bbg {
            width: 0.5rem;
            aspect-ratio: 15 / 10;
            top: 75%;
            left: 50%;
            background: #151E9D;
            filter: blur(0.1rem);
        }

        .green {
            width: 0.2rem;
            aspect-ratio: 7 / 4;
            top: 65%;
            left: 65%;
            background: #0F7B3A;
            filter: blur(0.05rem);
        }

        .red {
            width: 0.17rem;
            aspect-ratio: 7 / 4;
            top: 80%;
            left: 50%;
            background: #D73838;
            filter: blur(0.05rem);
        }

        .home {
            width: 7rem;
            aspect-ratio: 300 / 15;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            margin: 0.3rem 0;
            border-radius: 2rem;
            /* does not really matter */
            background: black;
        }


        .btn.active {
            background-color: #2F2EE9 !important;
            color: #FFF !important;
            ;
            /* Set your desired background color here */
        }
    </style>
@endsection

@section('content')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="inputNumber" class="col-form-label">File Upload</label>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    {{-- <input class="form-control" type="file" id="formFile"> --}}
                                    <img src="" alt="Image">
                                </div>
                            </div>
                            <label for="inputNumber" class="col-form-label">Description</label>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <label for="inputNumber" class="col-form-label mt-3 font-bold">Description</label>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="9"></textarea>
                                </div>
                            </div>
                            <label for="inputNumber" class="col-form-label font-bold">How You Want It?</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button"
                                        class="w-fit text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2 ">😊
                                        Friendly</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button"
                                        class="w-fit text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">💎
                                        Luxury</button>
                                </div>

                                <div class="col-md-12">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">☺
                                        Relaxed</button>
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">💼
                                        Professional</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">🏞
                                        Adventurous</button>
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">💡
                                        Witty</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">🧠
                                        Persuasive</button>
                                </div>
                                <div class="col-md-12">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">🤗
                                        Empathetic</button>
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">💪
                                        Bold</button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="sumit" class="btn btn-primary go-pro" style="margin: 15px;">Write for me
                                    👉</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        {{-- <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab">Language</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#english-data">English</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#hindi-data">Hindi</button>
                            </li>

                        </ul>
                         --}}
                        <div class="tab-content pt-2">
                            <div class="mobile-data">
                                <div class="device">
                                    <div class="status">
                                        <div class="time">9:41</div>
                                        <div class="blank"></div>
                                        <div class="icons">
                                            <iconify-icon icon="ic:round-signal-cellular-alt" inline></iconify-icon>
                                            <iconify-icon icon="ic:round-wifi" inline></iconify-icon>
                                            <iconify-icon icon="gg:battery-full" inline></iconify-icon>
                                        </div>
                                    </div>
                                    <div class="floating">
                                        <div class="camera">
                                            <div class="blob white"></div>
                                            <div class="blob bbg"></div>
                                            <div class="blob green"></div>
                                            <div class="blob red"></div>
                                        </div>
                                    </div>

                                    <div class="home"></div>
                                </div>
                            </div>

                            <div class="tab-pane fade show active english-data" id="english-data">
                                <div>
                                    <button class="btn btn-light"><img src="{{ asset('images/copy.png') }}"> Copy</button>
                                    <button class="btn btn-light"><img src="{{ asset('images/instagram.png') }}"
                                            width="15px" height="15px"> Instagram</button>
                                    <button class="btn btn-light"><img src="{{ asset('images/twitter.png') }}">
                                        Twitter</button>

                                </div>

                            </div>


                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.btn.mode').click(function() {
                $(this).toggleClass('active');
            });
        });
    </script>
@endsection

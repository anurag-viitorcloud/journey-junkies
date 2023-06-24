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
        .flex-container {
  display: flex;
  flex-wrap: wrap;
}
.social{
    display: flex;
    align-items: center;
    margin-top: -50px;
}
    </style>
@endsection

@section('content')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <form action="{{route('create-caption')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="inputNumber" class="col-form-label font-bold">File Upload</label>
                            <div class="flex items-center justify-center w-100 h-70">
                                <label for="dropzone-file"
                                    class="flex flex-col items-center justify-center w-100 h-50 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-600 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-300" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-300"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-300">PNG or JPG</p>
                                    </div>
                                    <input id="dropzone-file" type="file" name="image" class="hidden" />
                                </label>
                            </div> 
                            <label for="inputNumber" class="col-form-label mt-3 font-bold">Description</label>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="6" name="desc" required></textarea>
                                </div>
                            </div>
                            <label for="inputNumber" class="col-form-label font-bold">How You Want It?</label>
                            <div class="flex-container">
                                <div class="">
                                    <button type="button"
                                        class="w-fit text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2" name="tag" value="Friendly">😊
                                        Friendly</button>
                                </div>
                                <div class="">
                                    <button type="button"
                                        class="w-fit text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">💎
                                        Luxury</button>
                                </div>

                                <div class="">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">☺
                                        Relaxed</button>
                                </div>
                                <div class="">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">💼
                                        Professional</button>
                                </div>
                                <div class="">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">🏞
                                        Adventurous</button>
                                    
                                </div>
                                <div class="">
                                    
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">💡
                                        Witty</button>
                                </div>
                                <div class="">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">🧠
                                        Persuasive</button>
                                </div>
                                <div class="">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">🤗
                                        Empathetic</button>
                                    
                                </div>
                                <div class="">
                                    
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">💪
                                        Bold</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button type="submit" class="btn btn-primary go-pro" id="writeContent">Write for me 👉</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
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
                                    <div class="gallery text-justify p-3">
                                        @if(!empty($filename))
                                          <img src="{{ asset('socialImage/'.$filename)}}" alt="Cinque Terre" width="600" height="400" id="preview" style="height:271px; max-height: 200px; max-width:336px; width: 200px;">
                                          @else
                                          <img src="{{ asset('images/profile-img.jpg')}}" alt="Cinque Terre" width="600" height="400" id="preview" style="height:271px; max-height: 200px; max-width:336px; width: 200px;">
                                        @endif
                                            <div class="desc mt-2">
                                                <h2 class="font-bold">{{'@'.auth()->user()->name}} </h2>
                                                <p class="mt-2" id="caption-txt"> 
                                                    @if(!empty($responseData))
                                                    @foreach ($responseData->choices as $caption)
                                                        {{ $caption->text ?? '' }}
                                                    @endforeach
                                                    @else
                                                        Write description to generate the caption...
                                                    @endif
                                                </p>
                                            </div>
                                      </div>
                                    <div class="home"></div>
                                </div>
                                <div class="tab-pane fade show active english-data" id="english-data">
                                    <div class="social"> 
                                        <button class="btn btn-light"><img src="{{ asset('images/copy.png') }}" data-clipboard-target="#caption-txt" id="copy-text"> Copy</button>
                                        <button class="btn btn-light"><img src="{{ asset('images/instagram.png') }}"
                                                width="15px" height="15px"> Instagram</button>
                                                <form method="POST" action="{{ route('sendToZapier') }}">
                                                    @csrf
                                        <button type="submit" class="btn btn-light"><img src="{{ asset('images/twitter.png') }}">
                                            Twitter</button>
                                                </form>
    
                                    </div>
    
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
    <script src="https://cdn.jsdelivr.net/clipboard.js/1.5.12/clipboard.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.btn.mode').click(function() {
                $(this).toggleClass('active');
            });
        });

    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#dropzone-file").change(function(){
    readURL(this);
});

$(function(){
  new Clipboard('#copy-text');
});
    </script>
@endsection

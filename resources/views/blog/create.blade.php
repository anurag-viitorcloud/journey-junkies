@extends('layouts.app')

@section('style')
    <style>
        .btn.active {
            background-color: #2F2EE9 !important;
            color: #FFF !important;;
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
                                    <textarea class="form-control" rows="9"></textarea>
                                </div>
                            </div>
                            <label for="inputNumber" class="col-form-label font-bold">How You Want It?</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button"
                                        class="w-fit text-dark btn btn-info mode font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">😊
                                        Friendly</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button"
                                        class="w-fit text-dark btn btn-info mode font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">💎
                                        Luxury</button>
                                </div>

                                <div class="col-md-12">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">☺
                                        Relaxed</button>
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">💼
                                        Professional</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">🏞
                                        Adventurous</button>
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">💡
                                        Witty</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">🧠
                                        Persuasive</button>
                                </div>
                                <div class="col-md-12">
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">🤗
                                        Empathetic</button>
                                    <button type="button"
                                        class="text-dark btn btn-info mode font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">💪
                                        Bold</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button type="sumit" class="btn btn-primary go-pro">Write for me 👉</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab">Language</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#english">English</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#hindi">Hindi</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active english" id="english">
                                <div>
                                    <p> Hiii </p>
                                </div>
                            </div>

                            <div class="tab-pane fade hindi pt-3" id="hindi">


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

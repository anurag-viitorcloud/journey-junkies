@extends('layouts.app')

@section('content')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <form action="{{ route('getImageData') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="inputNumber" class="col-form-label">File Upload</label>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <input class="form-control" type="file" name="image" id="formFile">
                                </div>
                            </div>
                            <label for="inputNumber" class="col-form-label">Description</label>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <label for="inputNumber" class="col-form-label">Mode</label>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <button class="btn btn-light mode">😊 Friendly</button>
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-light  mode">💎 Luxury</button>
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-light mode">☺ Relaxed</button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <button class="btn btn-light mode">💼 Professional</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-light mode">🏞 Adventurous</button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <button class="btn btn-light mode">💡 Witty</button>
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-light  mode">🧠 Persuasive</button>
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-light mode">💪 Bold</button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <button class="btn btn-light mode">🤗 Empathetic</button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button  type="sumit" class="btn btn-primary go-pro" style="margin: 15px;">Write for me 👉</button>
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

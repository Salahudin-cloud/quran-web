<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quran Web</title>
    {{-- load css --}}
    @include('imports.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-fooL3oIQvM+bsMQLsZoXH3Hx9M7YW6t1W0cVuZc+j9mJbZz/8WvNz5ohD/ZlK03Znx//OrPbmEK0Lvh+RwGzRg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .tm-search-form-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .tm-search-form {
            display: flex;
            align-items: center;
        }

        .my-title {
            margin: 0;
            color: #fff
        }

        .custom-card {
            border: none;
        }

        .black-card {
            background-color: #f7f9fc;
            color: #000;
        }

        .white-card {
            background-color: #fff;
            color: #000;
        }

        .tm-search-submit:hover {
            background-color: initial;
            color: initial;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="tm-main">

        {{-- welcome section --}}
        @include('templates.welcome_section')
        {{-- end welcome section  --}}


        {{-- body  --}}
        <div class="container">
            <div class="tm-search-form-container">
                <div class="tm-search-form">
                    <a href="{{ url()->previous() }}" class="btn form-inline tm-search-submit">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <h2 class="my-title">{{ $surah['name'] }}</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h3>Penjelasan</h3>
                    <p class="text-justify">{{ $surah['description'] }}</p>
                    <audio controls>
                        <source src="{{ $surah['audio'] }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col">

                    @foreach ($surah['ayahs'] as $key => $data)
                        <div class="card custom-card {{ $key % 2 == 0 ? 'black-card' : 'white-card' }}">
                            <div class="card-body">
                                <h4 class="font-weight-bold">{{ $data['number']['inSurah'] }}</h4>
                                <h1 class="card-title text-right">
                                    <button type="button" class="btn btn-sm border border-dark mr-3"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModalScrollable{{ $key }}">
                                        Tafsir
                                    </button>
                                    {{ $data['arab'] }}
                                </h1>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalScrollable{{ $key }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tafsir Ayat Ke
                                                    {{ $data['number']['inSurah'] }}</h5>

                                            </div>
                                            <div class="modal-body">
                                                {{ $data['tafsir']['kemenag']['short'] }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text">
                                    {{ $data['translation'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> <!-- .container -->

        {{-- end body --}}

        {{-- footer --}}
        @include('templates.footer')
    </div>




    {{-- load js  --}}
    @include('imports.js')
    <script>
        $(document).ready(function() {
            // No need to manually trigger modal, Bootstrap handles it

            // Optional: you can remove this click event handler
            $('button[data-bs-toggle="modal"]').click(function() {
                var targetModalId = $(this).attr('data-bs-target');
                $(targetModalId).modal('show');
            });
        });
    </script>
</body>

</html>

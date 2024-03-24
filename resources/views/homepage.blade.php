<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quran Web</title>

    {{-- load css --}}
    @include('imports.css')

    <style>
        /* Custom CSS to make the card rectangular */
        .card {
            height: 200px;
            /* Adjust the height as needed */
        }

        .card-link {
            color: #000;
            /* Change this to the color you want */
        }
    </style>

</head>

<body>


    <div class="tm-main">

        {{-- welcome section --}}
        @include('templates.welcome_section')
        {{-- end welcome section  --}}


        {{-- body  --}}
        @include('templates.body_container')
        {{-- end body --}}

        <!-- Pagination links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $quran->links('vendor.pagination.bootstrap-5') }}
        </div>
        {{-- footer --}}
        @include('templates.footer')
    </div>




    {{-- load js  --}}
    @include('imports.js')
</body>

</html>

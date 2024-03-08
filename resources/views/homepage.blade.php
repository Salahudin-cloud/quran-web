<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    {{-- load css --}}
    @include('imports.css')

</head>

<body>


    <div class="tm-main">

        {{-- welcome section --}}
        @include('templates.welcome_section')
        {{-- end welcome section  --}}


        {{-- body  --}}
        @include('templates.body_container')
        {{-- end body --}}


    </div>

    {{-- load js  --}}
    @include('imports.js')
</body>

</html>

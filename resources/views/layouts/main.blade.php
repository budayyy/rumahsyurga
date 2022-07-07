<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Syurga - {{ $title }}</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('mazer/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/vendors/iconly/bold.css') }}">
    
    <link rel="stylesheet" href="{{ asset('mazer/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/vendors/bootstrap-icons/bootstrap-icons.css') }}">

    {{-- chart js --}}
    <link rel="stylesheet" href="{{ asset('mazer/vendors/chartjs/Chart.min.css') }}">
    {{-- datatable --}}
    <link rel="stylesheet" href="{{ asset('mazer/vendors/simple-datatables/style.css') }}">

    {{-- mazer css --}}
    <link rel="stylesheet" href="{{ asset('mazer/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer/images/favicon.svg') }}" type="image/x-icon">

    {{-- fontwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('css/rumahsyurga.css') }}">
</head>

<body>
    <div id="app">
        
        @include('layouts.components.sidebar')

        <div id="main" class='layout-navbar'>
            
            @include('layouts.components.navbar')

            <div id="main-content">
                
                @yield('content')

                @include('layouts.components.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('mazer/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('mazer/js/bootstrap.bundle.min.js') }}"></script>

    {{-- chart js --}}
    <script src="{{ asset('mazer/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('mazer/js/pages/ui-chartjs.js') }}"></script>

    {{-- datatable --}}
    <script src="{{ asset('mazer/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{ asset('mazer/js/mazer.js') }}"></script>
</body>

</html>

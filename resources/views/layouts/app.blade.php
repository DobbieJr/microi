<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    @livewireStyles()
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}">
    <script src="{{ asset('leaflet/leaflet.js') }}"></script>

    <!-- Theme style -->

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @livewire('layout.top.nav-livewire')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @livewire('layout.aside.left-nav-livewire')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            {{ $slot }}
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        @livewire('layout.aside.right-nav-livewire')
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @livewireScripts()
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <x-livewire-alert::scripts />
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    {{-- mapscripts --}}
    <script>
        function updatemap(lat, long, text = '') {
            // console.log('hello');
            var location = [lat, long];
            var txt = text;
            map.setView(location, 13);
            L.marker(location).addTo(map)
                .bindPopup(txt + "</br>" + "<span>" + lat + " , " + long +"</span>")
                .openPopup();
        }
        var map = L.map('map').setView([15, 00, 30.00], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.google.com/copyright">Techlink</a>'
        }).addTo(map);

        function onMapClick(e) {
            alert("You clicked the map at " + e.latlng);
        }

        map.on('click', onMapClick);
    </script>
    {{-- <script>
        var platform = new H.service.Platform({
            'apikey': 'n9lsV19vwkUw2zJPk571zGhDWzkduD-cAIApwDZDNuY'

        });
        var defaultLayers = platform.createDefaultLayers();
        var map = new H.Map(document.getElementById('map'),
            defaultLayers.vector.normal.map, {
                center: {
                    // lat: -15.812474,
                    // lng: 35.070662

                    lat: 52.5159,
                    lng: 13.3777

                },
                zoom: 4,
                pixelRatio: window.devicePixelRatio || 1
            });



        // add a resize listener to make sure that the map occupies the whole container
        window.addEventListener('resize', () => map.getViewPort().resize());

        function addmarker() {
            var currentlocation = new H.map.Marker({
                lat: -15.812474,
                lng: 35.070662
            });

            map.setCenter({
                // lat: 52.5159,
                // lng: 13.3777

                lat: -15.812474,
                lng: 35.070662
            });
            // map.setZoom(14);

            map.addObject(currentlocation)
            // map.addObject(currentlocation1)
            // map.addObject(currentlocation2)
        }

        function view(longi, lati) {
            // console.log(longi,lati);
            // alert(longi+" "+lati );
            var location = new H.map.Marker({
                lat: lati,
                lng: longi
            });
            map.addObject(location);
            map.setCenter({
                lat: lati,
                lng: longi
            });
        }

        //Step 3: make the map interactive
        // MapEvents enables the event system
        // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

        // Create the default UI components
        var ui = H.ui.UI.createDefault(map, defaultLayers);

        // Now use the map as required...
        window.onload = function() {
            // addMarkersToMap(map);
        }
    </script> --}}


</body>

</html>

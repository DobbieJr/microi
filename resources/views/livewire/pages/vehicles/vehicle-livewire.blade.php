<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $vehicle_name }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Projects Detail</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="info-box bg-info">
                                        <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Subscription Usage</span>
                                            <span class="info-box-number">70%</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 70%"></div>
                                            </div>
                                            <span class="progress-description">
                                                15 days left
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="info-box bg-info">
                                        <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Bookmarks</span>
                                            <span class="info-box-number">41,410</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 70%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="info-box bg-info">
                                        <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Bookmarks</span>
                                            <span class="info-box-number">41,410</span>

                                            <div class="progress">
                                                <div class="progress-bar" style="width: 70%"></div>
                                            </div>
                                            <span class="progress-description">
                                                70% Increase in 30 Days
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                            <h3 class="card-title">
                                                <i class="fas fa-map-marker-alt mr-1"></i>
                                                Last registered location
                                            </h3>
                                            <!-- card tools -->
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-primary btn-sm daterange"
                                                    title="Date range">
                                                    <i class="far fa-calendar-alt"></i>
                                                </button>
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    data-card-widget="collapse" title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <div class="card-body">
                                            <div id="map"
                                                style="height: 500px; width: 100%; position: relative; outline-style: none;"
                                                class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                                                tabindex="0">
                                                <div id="panel"></div>
                                                <div class="leaflet-pane leaflet-map-pane"
                                                    style="transform: translate3d(-121px, 0px, 0px);">
                                                    <div class="leaflet-pane leaflet-tile-pane">
                                                        <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                                            <div class="leaflet-tile-container leaflet-zoom-animated"
                                                                style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);">
                                                                <img alt=""
                                                                    src="https://tile.openstreetmap.org/13/4095/3750.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(61px, 71px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4096/3750.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(317px, 71px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4095/3749.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(61px, -185px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4096/3749.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(317px, -185px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4095/3751.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(61px, 327px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4096/3751.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(317px, 327px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4094/3750.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(-195px, 71px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4097/3750.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(573px, 71px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4094/3749.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(-195px, -185px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4097/3749.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(573px, -185px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4094/3751.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(-195px, 327px, 0px); opacity: 1;"><img
                                                                    alt=""
                                                                    src="https://tile.openstreetmap.org/13/4097/3751.png"
                                                                    class="leaflet-tile"
                                                                    style="width: 256px; height: 256px; transform: translate3d(573px, 327px, 0px); opacity: 1;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="leaflet-pane leaflet-overlay-pane"></div>
                                                    <div class="leaflet-pane leaflet-shadow-pane"></div>
                                                    <div class="leaflet-pane leaflet-marker-pane"></div>
                                                    <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                                    <div class="leaflet-pane leaflet-popup-pane"></div>
                                                    <div class="leaflet-proxy leaflet-zoom-animated"
                                                        style="transform: translate3d(1.04858e+06px, 960179px, 0px) scale(4096);">
                                                    </div>
                                                </div>
                                                <div class="leaflet-control-container">
                                                    <div class="leaflet-top leaflet-left">
                                                        <div class="leaflet-control-zoom leaflet-bar leaflet-control">
                                                            <a class="leaflet-control-zoom-in" href="#"
                                                                title="Zoom in" role="button" aria-label="Zoom in"
                                                                aria-disabled="false"><span
                                                                    aria-hidden="true">+</span></a><a
                                                                class="leaflet-control-zoom-out" href="#"
                                                                title="Zoom out" role="button" aria-label="Zoom out"
                                                                aria-disabled="false"><span
                                                                    aria-hidden="true">−</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="leaflet-top leaflet-right"></div>
                                                    <div class="leaflet-bottom leaflet-left"></div>
                                                    <div class="leaflet-bottom leaflet-right">
                                                        <div class="leaflet-control-attribution leaflet-control"><a
                                                                href="https://leafletjs.com"
                                                                title="A JavaScript library for interactive maps"><svg
                                                                    aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" width="12"
                                                                    height="8" viewBox="0 0 12 8"
                                                                    class="leaflet-attribution-flag">
                                                                    <path fill="#4C7BE1" d="M0 0h12v4H0z"></path>
                                                                    <path fill="#FFD500" d="M0 4h12v3H0z"></path>
                                                                    <path fill="#E0BC00" d="M0 7h12v1H0z"></path>
                                                                </svg> Leaflet</a> <span aria-hidden="true">|</span> ©
                                                            <a href="https://www.google.com/copyright">Techlink</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body-->
                                        <div class="card-footer bg-transparent">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <div id="sparkline-1"><canvas width="80" height="50"
                                                            style="width: 80px; height: 50px;"></canvas></div>
                                                    <div class="text-white">Visitors</div>
                                                </div>
                                                <!-- ./col -->
                                                <div class="col-4 text-center">
                                                    <div id="sparkline-2"><canvas width="80" height="50"
                                                            style="width: 80px; height: 50px;"></canvas></div>
                                                    <div class="text-white">Online</div>
                                                </div>
                                                <!-- ./col -->
                                                <div class="col-4 text-center">
                                                    <div id="sparkline-3"><canvas width="80" height="50"
                                                            style="width: 80px; height: 50px;"></canvas></div>
                                                    <div class="text-white">Sales</div>
                                                </div>
                                                <!-- ./col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                            <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{ $vehicle_name }}</h3>
                            <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin.
                                Nesciunt tofu
                                stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                qui irure
                                terr.</p>
                            <br>
                            <div class="text-muted">
                                <p class="text-sm">Client Company
                                    <b class="d-block">Deveint Inc</b>
                                </p>
                                <p class="text-sm">Project Leader
                                    <b class="d-block">Tony Chicken</b>
                                </p>
                            </div>

                            <h5 class="mt-5 text-muted">Project files</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="" class="btn-link text-secondary"><i
                                            class="far fa-fw fa-file-word"></i>
                                        Functional-requirements.docx</a>
                                </li>
                                <li>
                                    <a href="" class="btn-link text-secondary"><i
                                            class="far fa-fw fa-file-pdf"></i>
                                        UAT.pdf</a>
                                </li>
                                <li>
                                    <a href="" class="btn-link text-secondary"><i
                                            class="far fa-fw fa-envelope"></i>
                                        Email-from-flatbal.mln</a>
                                </li>
                                <li>
                                    <a href="" class="btn-link text-secondary"><i
                                            class="far fa-fw fa-image "></i>
                                        Logo.png</a>
                                </li>
                                <li>
                                    <a href="" class="btn-link text-secondary"><i
                                            class="far fa-fw fa-file-word"></i>
                                        Contract-10_12_2014.docx</a>
                                </li>
                            </ul>
                            <div class="text-center mt-5 mb-3">
                                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

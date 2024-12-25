<!-- app-Header -->
<!-- Body: Header -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="{{ asset('/') }}admin/assets/images/logo.svg" alt="" width="100" height="100"> Ebazar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto my-auto mb-2 mb-lg-0 gap-3">
                            <li class="nav-item my-auto">
                                <a class="nav-link active" aria-current="page" href="{{route('dashboard.index')}}">Home</a>
                            </li>
                            <li class="nav-item  my-auto">
                                <a class="nav-link d-block menu-toggle" href="#">Menu</a>
                            </li>
                            <li class="nav-item my-auto dropdown">
                                <div
                                    class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                    <div class="u-info me-2">
                                        <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">John
                                                Quinn</span></p>
                                        <small>Admin Profile</small>
                                    </div>
                                    <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button"
                                        data-bs-toggle="dropdown" data-bs-display="static">
                                        <img class="avatar lg rounded-circle img-thumbnail"
                                            src="{{ asset('/') }}admin/assets/images/profile_av.svg" alt="profile">
                                    </a>
                                    <div
                                        class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                        <div class="card border-0 w280">
                                            <div class="card-body pb-0">
                                                <div class="d-flex py-1">
                                                    <img class="avatar rounded-circle"
                                                        src="{{ asset('/') }}admin/assets/images/profile_av.svg"
                                                        alt="profile">
                                                    <div class="flex-fill ms-3">
                                                        <p class="mb-0"><span class="font-weight-bold">John
                                                                Quinn</span></p>
                                                        <small class="">Johnquinn@gmail.com</small>
                                                    </div>
                                                </div>

                                                <div>
                                                    <hr class="dropdown-divider border-dark">
                                                </div>
                                            </div>
                                            <div class="list-group m-2 ">
                                                <a href="admin-profile.html"
                                                    class="list-group-item list-group-item-action border-0 "><i
                                                        class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>
                                                <a href="order-invoices.html"
                                                    class="list-group-item list-group-item-action border-0 "><i
                                                        class="icofont-file-text fs-5 me-3"></i>Order Invoices</a>
                                                <a href="ui-elements/auth-signin.html"
                                                    class="list-group-item list-group-item-action border-0 "><i
                                                        class="icofont-logout fs-5 me-3"></i>Signout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
{{-- <div class="header">
    <nav class="navbar py-4">
        <div class="container-xxl">

            <!-- header rightbar icon -->
            <div class="h-right d-flex align-items-center ">
                <div class="d-flex">
                    <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                        <i class="icofont-info-square fs-5"></i>
                    </a>
                </div>

                <div class="setting ms-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i
                            class="icofont-gear-alt fs-5"></i></a>
                </div>
            </div>

            <!-- menu toggler -->
            <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainHeader">
                <span class="fa fa-bars">jhfdjhfjhd</span>
            </button>

            <!-- main menu Search-->
            <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                <div class="input-group flex-nowrap input-group-lg">
                    <input type="search" class="form-control" placeholder="Search" aria-label="search"
                        aria-describedby="addon-wrapping">
                    <button type="button" class="input-group-text" id="addon-wrapping"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>

        </div>
    </nav>
</div> --}}

<!-- /app-Header -->

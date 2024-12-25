<!--APP-SIDEBAR-->

<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-4 me-0">
    <div class="d-flex flex-column h-100">
        <a href="index-2.html" class="mb-0 brand-icon">
            <span class="logo-icon">
                <i class="bi bi-bag-check-fill fs-4"></i>
            </span>
            <span class="logo-text"><img src="{{ asset('/') }}admin/assets/images/logo.svg" alt="" width="100" height="100">eBazar</span>
        </a>
        <!-- Menu: main ul -->
        <ul class="menu-list flex-grow-1 mt-3">
            <li><a class="m-link active" href="index-2.html"><i class="icofont-home fs-5"></i>
                    <span>Dashboard</span></a></li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                    <i class="icofont-truck-loaded fs-5"></i> <span>Products</span> <span
                        class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-product">
                    <li><a class="ms-link" href="{{ route('product.create') }}" class="slide-item">Add product</a></li>
                    <li><a class="ms-link" href="{{ route('product.index') }}" class="slide-item">Manage product</a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                    <i class="icofont-chart-flow fs-5"></i> <span>Categories</span> <span
                        class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="categories">
                    <li><a class="ms-link" href="{{ route('category.create') }}" class="slide-item">Add Category</a>
                    </li>
                    <li><a class="ms-link" href="{{ route('category.index') }}" class="slide-item">Manage
                            Category</a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-sale" href="#">
                    <i class="icofont-sale-discount fs-5"></i> <span>Sub category</span> <span
                        class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-sale">

                    <li><a class="ms-link" href="{{ route('subcategory.create') }}" class="slide-item">Add Sub Category</a></li>
                    <li><a class="ms-link" href="{{ route('subcategory.index') }}" class="slide-item">Manage Sub Category</a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                    <i class="icofont-notepad fs-5"></i> <span>Orders</span> <span
                        class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-order">
                    <li><a class="ms-link" href="{{ route('admin.all-order') }}" class="slide-item">Manage Order</a></li>
                </ul>
            </li>
            {{-- <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#customers-info" href="#">
                    <i class="icofont-funky-man fs-5"></i> <span>Customers</span> <span
                        class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="customers-info">
                    <li><a class="ms-link" href="customers.html">Customers List</a></li>
                    <li><a class="ms-link" href="customer-detail.html">Customers Details</a></li>
                </ul>
            </li> --}}
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-inventory" href="#">
                    <i class="icofont-chart-histogram fs-5"></i> <span>Unit</span> <span
                        class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-inventory">
                    <li><a class="ms-link" href="{{ route('unit.create') }}" class="slide-item">Add Unit</a></li>
                    <li><a class="ms-link" href="{{ route('unit.index') }}" class="slide-item">Manage unit</a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                        class="icofont-ui-calculator"></i> <span>Brands</span> <span
                        class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-Componentsone">
                    <li><a class="ms-link" href="{{ route('brand.create') }}" class="slide-item">Add Brand</a></li>
                    <li><a class="ms-link" href="{{ route('brand.index') }}" class="slide-item">Manage Brand</a></li>
                </ul>
            </li>
            {{-- <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#app" href="#">
                    <i class="icofont-code-alt fs-5"></i> <span>App</span> <span
                        class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="app">
                    <li><a class="ms-link" href="calendar.html">Calandar</a></li>
                    <li><a class="ms-link" href="chat.html"> Chat App</a></li>
                </ul>
            </li>
            <li><a class="m-link" href="store-locator.html"><i class="icofont-focus fs-5"></i> <span>Store
                        Locator</span></a></li>
            <li><a class="m-link" href="ui-elements/ui-alerts.html"><i class="icofont-paint fs-5"></i> <span>UI
                        Components</span></a></li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#page" href="#">
                    <i class="icofont-page fs-5"></i> <span>Other Pages</span> <span
                        class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="page">
                    <li><a class="ms-link" href="admin-profile.html">Profile Page</a></li>
                    <li><a class="ms-link" href="purchase-plan.html">Price Plan Example</a></li>
                    <li><a class="ms-link" href="charts.html">Charts Example</a></li>
                    <li><a class="ms-link" href="table.html">Table Example</a></li>
                    <li><a class="ms-link" href="forms.html">Forms Example</a></li>
                    <li><a class="ms-link" href="icon.html">Icons</a></li>
                    <li><a class="ms-link" href="contact.html">Contact Us</a></li>
                    <li><a class="ms-link" href="todo-list.html">Todo List</a></li>
                </ul>
            </li> --}}
        </ul>
        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>

<!--/APP-SIDEBAR-->

<!doctype html>
<html lang="en" dir="ltr">
<!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>::eBazar:: Dashboard </title>
        <link rel="icon" href="{{ asset('/') }}admin/favicon.ico" type="image/x-icon"> <!-- Favicon-->
        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
            integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- plugin css file  -->
        <link rel="stylesheet" href="{{ asset('/') }}admin/assets/plugin/datatables/responsive.dataTables.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}admin/assets/plugin/datatables/dataTables.bootstrap5.min.css">

        <!-- project css file  -->
        <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/ebazar.style.min.css">
    </head>

<body >

    <div class="theme-blue">
        @include('admin.includes.sidebar')

        @include('admin.includes.header')

<br>
        <!-- main body area -->
        <div class="">
            <!-- Body: Body -->
            <div class="">
                <div class="container-xxl">
                    @yield('body')
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('/') }}admin/assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js -->
    <script src="{{ asset('/') }}admin/assets/bundles/apexcharts.bundle.js"></script>
    <script src="{{ asset('/') }}admin/assets/bundles/dataTables.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="{{ asset('/') }}admin/assets/js/template.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/page/index.js"></script>
    <script>
        $('#myDataTable')
            .addClass('nowrap')
            .dataTable({
                responsive: true,
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
    </script>
    {{-- custom ajax --}}
    <script>
        function getSubCategoryByCategory(categoryId) {
            $.ajax({
                method: "GET",
                url: "{{ route('get-sub-category-by-category') }}",
                data: {
                    id: categoryId
                },
                DataType: 'json',
                success: function(response) {
                    var option = '';
                    option += '<option>--Select Sub category--</option>';
                    $.each(response, function(key, value) {
                        option += '<option value="' + value.id + '">' + value.name + '</option>';
                    });
                    $('#subcategoryid').empty();
                    $('#subcategoryid').append(option);
                }
            });
        }
    </script>

</body>



</html>

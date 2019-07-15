
<!DOCTYPE html>
<html lang="en">

@include('templates.partials.head')
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
   @include('templates.partials.navbar')
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

       @include('templates.partials.sidebar')
        <!--  SIDEBAR - END -->
        <!-- START CONTENT -->
        <section id="main-content" class=" ">
             <div class="wrapper main-wrapper row" style="">
            @yield('content')
        </div>
        </section>
        <!-- END CONTENT -->
       
        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
    @include('templates.partials.script')
    <!-- END CORE TEMPLATE JS - END -->

</body>

</html>
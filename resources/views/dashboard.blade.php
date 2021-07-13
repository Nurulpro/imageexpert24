
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>imageexpert24.com</title>

  <!-- vendor css -->
  <link href="{{asset('public/backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link href="{{asset('public/backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

  <!-- toster css  -->

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <!-- Starlight CSS -->
  <link rel="stylesheet" href="{{asset('public/backend/css/starlight.css')}}">





</head>

<body>

 

  <!-- ########## START: LEFT PANEL ########## -->
  <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>imageexpert24</a></div>
  <div class="sl-sideleft">
    <div class="input-group input-group-search">
      <input type="search" name="search" class="form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn"><i class="fa fa-search"></i></button>
      </span><!-- input-group-btn -->
    </div><!-- input-group -->

    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
      <a href="{{url('dashboard')}}" class="sl-menu-link active">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->


      <a href="{{url('SubscriberList')}}" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
          <span class="menu-item-label">All Subscriber List</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->

      <a href="{{url('ContactForms')}}" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
          <span class="menu-item-label">All Contact Forms</span>

        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->


      <a href="" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">All Free Trials</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->




      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Tables</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="" class="nav-link">Basic Table</a></li>
        <li class="nav-item"><a href="" class="nav-link">Data Table</a></li>
      </ul>
      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
          <span class="menu-item-label">Maps</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="" class="nav-link">Google Maps</a></li>
       
      </ul>



      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="" class="nav-link">Blank Page</a></li>
       
      </ul>
    </div><!-- sl-sideleft-menu -->

    <br>
  </div><!-- sl-sideleft -->
  <!-- ########## END: LEFT PANEL ########## -->



  <!-- ########## START: HEAD PANEL ########## -->

  

 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome imageexpert24 Dashboard') }}
        </h2>

    </x-slot>
  @yield('admin_content')
</x-app-layout>
  <!-- ########## END: HEAD PANEL ########## -->




  <script src="{{asset('public/backend/lib/jquery/jquery.js')}}"></script>
  <script src="{{asset('public/backend/lib/popper.js/popper.js')}}"></script>
  <script src="{{asset('public/backend/lib/bootstrap/bootstrap.js')}}"></script>
  <script src="{{asset('public/backend/lib/jquery-ui/jquery-ui.js')}}"></script>
  <script src="{{asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
  <script src="{{asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('public/backend/lib/d3/d3.js')}}"></script>
  <script src="{{asset('public/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('public/backend/lib/chart.js/Chart.js')}}"></script>
  <script src="{{asset('public/backend/lib/Flot/jquery.flot.js')}}"></script>
  <script src="{{asset('public/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('public/backend/lib/Flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('public/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>

  <script src="{{asset('public/backend/js/starlight.js')}}"></script>
  <script src="{{asset('public/backend/js/ResizeSensor.js')}}"></script>
  <script src="{{asset('public/backend/js/dashboard.js')}}"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

  

  <script>
    @if(Session::has('messege'))
    var type = "{{Session::get('alert-type','info')}}"
    switch (type) {
      case 'info':
        toastr.info("{{ Session::get('messege') }}");
        break;
      case 'success':
        toastr.success("{{ Session::get('messege') }}");
        break;
      case 'warning':
        toastr.warning("{{ Session::get('messege') }}");
        break;
      case 'error':
        toastr.error("{{ Session::get('messege') }}");
        break;
    }
    @endif
  </script>

  <script>
    $(document).on("click", "#delete", function(e) {
      e.preventDefault();
      var link = $(this).attr("href");
      swal({
          title: "Are you Want to delete?",
          text: "Once Delete, This will be Permanently Delete!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = link;
          } else {
            swal("Safe Data!");
          }
        });
    });
  </script>

</body>

</html>





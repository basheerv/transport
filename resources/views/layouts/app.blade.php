
   @include('includes.head')

<body class="hold-transition sidebar-mini">
	 @if(Auth::check())
<div class="wrapper">
       @include('includes.header')
       
       @include('includes.sidebar')
    <div class="content-wrapper">
    	
    	@endif
    <div class="content-header">
      @include('messages')
          @yield('content')
    </div>
   </div>


   		@if(Auth::check())
       @include('includes.footer')
       @endif


</div>
</body>
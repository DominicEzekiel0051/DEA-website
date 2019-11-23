<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
@include('css') {{--Include css file --}}  
<title>@yield('title')</title>
</head>

<body>
<div class="main">
  @include('header')  {{-- Include header file --}} 
  <div class="main_content">
    @include('sidebar') {{-- Include sidebar file --}}  
    @yield("middle_content")
  </div>
  @include('footer') {{-- Include footer file --}}  
</div>
</body>
</html>
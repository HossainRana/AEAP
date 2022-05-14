<!--TOP NAVIGATION-->
<header id="header">
    <div class="topnav" id="myTopnav">
        <a href="#"><img class="logo" src="{{URL::to('/assets/images/logo.jpeg')}}" alt=""></a>
        <a id="active">WEBSITE.COM</a>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('home')}}">Who we are</a>
        <a href="{{route('home')}}">Brands</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
{{--        <a href="#about" style="float:right;padding: 24px 2px;"><i class="fas fa-search"></i></a>--}}
{{--        <a href="#about" style="float:right;padding: 24px 2px;"><i class="fa fa-user-circle-o"></i></a>--}}
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
    </div>
</header>


<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>Welcome to <em>U.C.R</em> University Course Recommendation System</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        U.C.R
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#coursecat">Courses</a></li>
                        @unless(Auth::check())
                        <li class="has-sub">
                            <a href="javascript:void(0)">User</a>
                            <ul class="sub-menu">
                                <li><a href="/login">Login</a></li>
                                <li><a href="/login">Register</a></li>
                            </ul>
                        </li>
                        @endunless
                        @if(Auth::check())
                        <li class="has-sub">
                            <a href="javascript:void(0)">User</a>
                            <ul class="sub-menu">
                                <li><a href="/login">Dashboard</a></li>
                                <li><a href="/register">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                        <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                   
                </nav>
            </div>
        </div>
    </div>
</header>
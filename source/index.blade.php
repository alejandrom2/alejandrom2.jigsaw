@extends('_layouts.master')

@section('body')
    <div class="wrapper">
        @include('_partials.header')
        <div class="main">
            <div class="header-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Hello! Welcome to my site!</h2>
                            <h4 class="description">I'm a Back-End Web Developer with three years of experience developing web applications seeking a Spring / Summer internship.</h4>
                            <div class="separator separator-primary"></div>
                            <a class="btn btn-round btn-lg green-gradient" href="resume/AlejandroMartinez_Resume.pdf" target="_blank">
                                <i class="now-ui-icons arrows-1_cloud-download-93"></i> Download My Resume
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#projects">
                            <div class="card card-raised" data-background-color="black">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="fa fa-terminal gradient-text"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">My Projects</h4>
                                        <p>See some of my projects that are live, in production, or in pending release.</p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="#work">
                            <div class="card card-raised " data-background-color="black">
                                <div class="info">
                                    <div class="icon icon-success ">
                                        <i class="now-ui-icons tech_laptop gradient-text"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Were I have worked</h4>
                                        <p>See my the companies I have previously worked at, and what I have done while there.</p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="#aboutme">
                            <div class="card card-raised" data-background-color="black">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="now-ui-icons clothes_tie-bow gradient-text"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">What makes me, me</h4>
                                        <p>Find out what makes drives me, and my passions outside code.</p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ml-auto mr-auto text-center" style="margin: 40px 0;">
                            <h5>Currently Studying Computer Science at</h5>
                            <img src="img/csunBlack.png" alt="California State University, Northridge" style="width: 50%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-line social-line-big-icons social-line-black">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <a href="mailto:hello@alejandrom.xyz" rel="tooltip" title="hello@alejandrom.xyz" data-placement="bottom" class="btn btn-simple btn-icon btn-footer">
                                Email <i class="fa fa-envelope"></i>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="https://www.linkedin.com/in/alejandromartinezaem/" target="_blank" class="btn btn-simple btn-icon btn-footer">
                                Linked<i class="fa fa-linkedin-square"></i>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="https://github.com/alejandrom2" target="_blank" class="btn btn-simple btn-icon btn-footer">
                                Github <i class="fa fa-github"></i>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="tel:3235293159" rel="tooltip" title="(323) 529 - 3159" data-placement="bottom" class="btn btn-simple btn-icon btn-footer">
                                Phone <i class="fa fa-mobile-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @include('_partials.projects')
            @include('_partials.work')
            @include('_partials.aboutme')
            <div class="section" style="background-image: url('img/beach.fade.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
                <div class="container text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 col-lg-8">
                            <h2 class="title">Well thats a wrap.</h2>
                            <h5 class="description">I hope all this helped you understand who I am, feel free to contact me for any questions or if you see a potential role for me at your company.</h5>
                            <a class="btn btn-primary btn-round btn-lg green-gradient" href="mailto:hello@alejandrom.xyz">
                                <i class="now-ui-icons ui-1_email-85"></i> Email Me
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-float text-white">
                <div class="container">
                    <nav>
                        <ul>
                            <li>
                                <a href="#top">
                                    Alejandro Martinez
                                </a>
                            </li>
                            <li>
                                <a href="#projects">
                                    My Projects
                                </a>
                            </li>
                            <li>
                                <a href="#work">
                                    Where I've Worked
                                </a>
                            </li>
                            <li>
                                <a href="#aboutme">
                                    About Me
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
@endsection
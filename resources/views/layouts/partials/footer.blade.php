<!-- footer area start -->
<footer>
    <div class="footer-area footer-demo-1 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-left-area">
                        <div class="footer-logo">
                            <img src="{{ asset('image/logo.png')}} " alt="">
                            <div class="footer-content">

                                <p>
                                   My Single Pay
                                </p>
                            </div>
                            <div class="agent-social-links">
                                <nav>
                                    <ul>
                                        <li class="pt-2"><a href="http://www.facebook.com"><i class="fa fa-facebook-square" style="font-size:32px"></i></a></li>
                                        <li><a href="http://www.instagram.com"><i class="fa fa-instagram " style="font-size:32px"></i></a></li>
                                        <li><a href="http://www.twitter.com"><i class="fa fa-twitter-square" style="font-size:32px"></i></a></li>
                                        <li><a href="http://www.linkedin.com"><i class="fa fa-linkedin" style="font-size:35px"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-menu">
                        <ul>
                            <li><a class="text-white text-decoration-underline" href="/">Accueil</a></li>
                            <li><a class="text-white text-decoration-underline" href="#service"></a></li>
                            <li><a class="text-white text-decoration-underline" href="{{ route('dashboard')}}">Tableau de Bord</a></li>
                            <li><a class="text-white text-decoration-underline"  href="#propos">A propos</a></li>
                            <li><a class="text-white text-decoration-underline" href="#">Contact</a></li>
                         </ul>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="footer-newsletter">

                        <div class="footer-content">
                            <p>20300 place de la gare casa voyageurs, Casablanca Maroc</p>
                        </div>
                        <div class="footer-newsletter-input">
                            <form action="#" id="newsletter" method="post">
                                @csrf
                                <input type="email" name="email" placeholder="Entrer votre adresse mail" id="subscribe_email">
                                <button type="submit" class="basicbtn">S'abonner</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area footer-demo-1">
        <div class="footer-bottom-content text-center">
            <span>Copyright © Website - {{ date('Y') }} Develop By <a href="{{ url('/') }}">Arfa Teams</a></span>
        </div>
    </div>
</footer>
<!-- footer area end -->


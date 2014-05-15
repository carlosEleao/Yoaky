@extends('layout')

@section('content')
    
        <!-- Header -->
            <header id="header" class="alt">
                <h1 id="logo"><a href="index.html">Yoaky <span>Changing the world with ideas</span></a></h1>
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="index.html">Home</a></li>
                        <li class="submenu">
                            <a href="">Problems</a>
                            <ul>
                                <li><a href="">Biggest problems</a></li>
                                <li><a href="">Local problems</a></li>
                                <li><a href="">Submit a problem</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="button special">Sign Up</a></li>
                    </ul>
                </nav>
            </header>

        <!-- Banner -->     
            <section id="banner">
                
                <!--
                    ".inner" is set up as an inline-block so it automatically expands
                    in both directions to fit whatever's inside it. This means it won't
                    automatically wrap lines, so be sure to use line breaks where
                    appropriate (<br />).
                -->
                <div class="inner">
                    
                    <header>
                        <h2>YOAKY</h2>
                    </header>
                    <p>Together we can solve the <strong>BIGGEST</strong></br>
                         problems of our times </p>
                    <footer>
                        <ul class="buttons vertical">
                            <li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
                        </ul>
                    </footer>
                
                </div>
                
            </section>
        
        <!-- Main -->
            <article id="main">

                <header class="special container">
                    <span class="icon fa-bar-chart-o"></span>
                    <h2>We believe that <strong>together</strong> we can find a solution for the biggest problems of our time</h2>
                    <p>The idea is to isolate the biggest problems of our time, and, create a clever way to discuss about it
                    each of us have a opinion now is time to put it together and find a real solution for those problems</p>
                </header>
                
                
                <!-- Two -->
                    <section class="wrapper style1 container special">
                        <div class="row">
                            <div class="4u">
                            
                                <section>
                                    <span class="icon feature fa-check"></span>
                                    <header>
                                        <h3>Isolate</h3>
                                    </header>
                                    <p>Isolate the problem, study about that</p>
                                </section>
                            
                            </div>
                            <div class="4u">
                            
                                <section>
                                    <span class="icon feature fa-check"></span>
                                    <header>
                                        <h3>Find the cause(s)</h3>
                                    </header>
                                    <p>Try to get the root couse of each problem</p>
                                </section>
                            
                            </div>
                            <div class="4u">
                            
                                <section>
                                    <span class="icon feature fa-check"></span>
                                    <header>
                                        <h3>Propose the solution</h3>
                                    </header>
                                    <p>Discuss with the community to propose a solution for the problem</p>
                                </section>
                            
                            </div>
                        </div>
                    </section>
                    
                <!-- Three -->
                    <section class="wrapper style3 container special">
                    
                        <header class="major">
                            <h2>Let's take a look on the problems that we are fixing right now. Don't forguet to let your opinion about this problems.</h2>
                        </header>
                        
                        <div class="row">
                            <div class="6u">
                            
                                <section>
                                    <a href="#" class="image feature"><img src="images/traffic_jams.jpg" alt="" /></a>
                                    <header>
                                        <h3>Traffic Jams</h3>
                                    </header>
                                    <p>Traffic congestion is a condition on road networks that occurs as use increases, and is characterized by slower speeds, longer trip times, and increased vehicular queueing. The most common example is the physical use of roads by vehicles.</p>
                                </section>

                            </div>
                            <div class="6u">
                            
                                <section>
                                    <a href="#" class="image feature"><img src="images/hunguer.jpg" alt="" /></a>
                                    <header>
                                        <h3>Hunger</h3>
                                    </header>
                                    <p>Hunger is the physical sensation of desiring food. When politicians, relief workers and social scientists talk about people suffering from hunger, they usually refer to those who, for sustained periods, are unable to eat sufficient food to meet basic nutritional needs.</p>
                                </section>

                            </div>
                        </div>
                        
                        <footer class="major">
                            <ul class="buttons">
                                <li><a href="#" class="button">See More</a></li>
                            </ul>
                        </footer>
                    
                    </section>
                    
            </article>

        <!-- CTA -->
            <section id="cta">
            
                <header>
                    <h2>Ready to share your <strong>ideas</strong>?</h2>
                    <p>You can sign up to Yoaky to share your ideas</p>
                </header>
                <footer>
                    <ul class="buttons">
                        <li><a href="#" class="button special">Sign-up</a></li>
                        <li><a href="#" class="button">Log-in</a></li>
                    </ul>
                </footer>
            
            </section>

        <!-- Footer -->
            <footer id="footer">
            
                <ul class="icons">
                    <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
                    <li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
                </ul>
                
                <span class="copyright">&copy; Yoaky. All rights reserved.</a>.</span>
            
            </footer>
@stop
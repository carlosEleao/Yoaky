@extends('layout')

@section('header')
            <header id="header" class="alt">
                <h1 id="logo"><a href="/">Yoaky <span>{{trans('messages.changing_the_world')}}</span></a></h1>
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="">{{trans('messages.home')}}</a></li>
                        <li class="submenu">
                            <a href="">{{trans('messages.problems')}}</a>
                            <ul>
                                <li>{{ HTML::link('/problem', trans('problems'))}}</li>
                                <!-- <li><a href="">Local problems</a></li> -->
                                <li>{{ HTML::link('/proposals', trans('messages.submit_problem'))}}</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="button special">{{trans('messages.sign_up')}}</a></li>
                    </ul>
                </nav>
            </header>
@stop

@section('content')
    
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
                    <p>{{ trans('messages.solve_biggest_problems')}} </p>
                    <footer>
                        <ul class="buttons vertical">
                            <li><a href="#main" class="button fit scrolly">{{trans('messages.tell_me_more')}}</a></li>
                        </ul>
                    </footer>
                
                </div>
                
            </section>
        
            <!-- Main -->
            <article id="main">

                <header class="special container">
                    <span class="icon fa-bar-chart-o"></span>
                    <h2>{{trans('messages.we_believe_that_together')}}</h2>

                    <p>{{trans('messages.the_idea_is')}}</p>
                </header>
                
                
                <!-- Two -->
                    <section class="wrapper style1 container special">
                        <div class="row">
                            <div class="4u">
                            
                                <section>
                                    <span class="icon feature fa-check"></span>
                                    <header>
                                        <h3>{{trans('messages.step1')}}</h3>
                                    </header>
                                    <p>{{trans('messages.step1_description')}}</p>
                                </section>
                            
                            </div>
                            <div class="4u">
                            
                                <section>
                                    <span class="icon feature fa-check"></span>
                                    <header>
                                        <h3>{{trans('messages.step2')}}</h3>
                                    </header>
                                    <p>{{trans('messages.step2_description')}}</p>
                                </section>
                            
                            </div>
                            <div class="4u">
                            
                                <section>
                                    <span class="icon feature fa-check"></span>
                                    <header>
                                        <h3>{{trans('messages.step3')}}</h3>
                                    </header>
                                    <p>{{trans('messages.step3_description')}}</p>
                                </section>
                            
                            </div>
                        </div>
                    </section>
                    
                <!-- Three -->
                    <section class="wrapper style3 container special">
                    
                        <header class="major">
                            <h2>{{trans('messages.look_current_problems')}}</h2>
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
                                <li><a href="#" class="button">{{trans('messages.see_more')}}</a></li>
                            </ul>
                        </footer>
                    
                    </section>
                    
            </article>

        <!-- CTA -->
            <section id="cta">
            
                <header>
                    <h2>{{trans('messages.ready_to_share')}}</h2>
                    <p>{{trans('messages.you_can_sign_up')}}</p>
                </header>
                <footer>
                    <ul class="buttons">
                        <li><a href="#" class="button special">{{trans('messages.sign_up')}}</a></li>
                        <li><a href="#" class="button">{{trans('messages.log_in')}}</a></li>
                    </ul>
                </footer>
            
            </section>
           
@stop
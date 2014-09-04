@extends('layout')
<!-- @extends('proposals/proposals') -->

@extends('header')

@section('content')
    <!-- Main -->
      <article id="main">

        <header class="special container">
          <span class="icon fa-envelope"></span>
          <h2>Submit a Problem</h2>
          <p>Use the form below to propose a problem to be addressed by Yoaky.</p>
        </header>
          
        <!-- One -->
          <section class="wrapper style4 special container small">
          
            <!-- Content -->
              <div class="content">
                <form>
                  <div class="row half no-collapse-1">
                    <div class="6u">
                      <input type="text" name="name" placeholder="Your Name" />
                    </div>
                    <div class="6u">
                      <input type="text" name="email" placeholder="Your Email" />
                    </div>
                  </div>
                  <div class="row half">
                    <div class="12u">
                      <input type="text" name="problemName" placeholder="Problem Name" />
                    </div>
                  </div>
                  <div class="row half no-collapse-1">
                    <div class="6u">
                      <input type="text" name="local" placeholder="Problem Location (Country/Region) REVISIT trocar por combo_box" />
                    </div>
                 <!--  </div>
                  <div class="row half"> -->
                    <div class="6u">
                      <input type="text" name="local" placeholder="Problem Location (City)"/>
                    </div>
                  </div>
                  <div class="row half">
                    <div class="12u">
                      <textarea name="description" placeholder="Problem Description" rows="7"></textarea>
                    </div>
                  </div>
                  <div class="row half">
                    <div class="12u">
                      <textarea name="motivation" placeholder="Motivation" rows="7"></textarea>
                    </div>
                  </div>
                                    <div class="row half">
                    <div class="12u">
                      <textarea name="impact" placeholder="Impact" rows="7"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="12u">
                      <ul class="buttons">
                        <li><input type="submit" class="special" value="Send Message" /></li>
                      </ul>
                    </div>
                  </div>
                </form>
              </div>
              
          </section>
        
      </article>

@stop
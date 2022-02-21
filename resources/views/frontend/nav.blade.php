
 
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                     
                      <a href="index.html">
                          {{-- <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" /> --}}
                          <a class="navbar-brand" href="#">
                            BookShop
                          </a>
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                  <div class="navbar-container container-fluid">
                     
                      <ul class="nav-right">
                         

                          @guest 
   
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('login')}} ">Sign in
                                <i class="fas fa-sign-in-alt"></i>
                              </a>
                            </li>
                            @endguest
                         

                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          @auth
                              
                          <div class="">
                              <div class="main-menu-header">
                                  <div class="user-details">
                                      <span id="more-details">{{  auth()-> user()->name}}<i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          
                                        <form action=" {{route('admin.logout')}} " method="post">
                                            @csrf
                                        
                                            <button type="submit" class="btn">Sign out
                                              <i class="fas fa-sign-out-alt"></i>
                                            </button>
                                          </form>                                      </li>
                                  </ul>
                              </div>
                          </div>

                          @endauth


                          <div class="p-15 p-b-0">
                              <form class="form-material">
                                  <div class="form-group form-primary">
                                      <input type="text" name="footer-email" class="form-control">
                                      <span class="form-bar"></span>
                                     
                                  </div>
                              </form>
                          </div>
                       
                         @include('admin.sidebar')
                             
                          
                          
                      </div>
                  </nav>
                  
                          </div>
                        

       

  <nav > 
    <!--social-links-and-phone-number----------------->
<div class="social-call">
 <!--social-links--->
 <div class="social">
     <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
     <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
     <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
     <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
 </div>
 <!--phone-number------>
 <div class="phone">
     <span>Call: +01840130546</span>
 </div>
</div>
<!--menu-bar----------------------------------------->


<div class="navigation">
 <!--logo------------>
 <a href="{{route('home')}}" class="logo"><i class="fas fa-book-open"></i> Bookshop</a>
 <!--menu-icon------------->
 <div class="toggle"></div>
 <!--menu----------------->
 <ul class="menu">
     <li><a href="{{route('home')}} ">Home</a></li>
     <li><a href="{{route('user.categories')}} ">Category</a>
      
    </li>
    
     
    






    <li>
        <div class="dropdown">
        <a href=" "  class="dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Years</a>
    
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

          


            <li><a class="dropdown-item" href=" {{route('user.year.book', '2011')}} ">2011</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2012')}}">2012</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2013')}}">2013</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2014')}}">2014</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2015')}}">2015</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2016')}}">2016</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2017')}}">2017</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2018')}}">2018</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2019')}}">2019</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2020')}}">2020</a></li>
            <li><a class="dropdown-item" href="{{route('user.year.book', '2021')}}">2021</a></li>
            

          </ul>
        </div>
    </li>

  





    <li  class="shop"><a href="{{route('user.book')}}" >Book</a></li>
    <li><a href="{{route('contact')}} ">Feedback</a></li>
 </ul>
 <!--right-menu----------->
 
 <div class="right-menu ">

  @auth
  <a href="{{route('myOrder')}}"> My Order
    {{-- <i class="fas fa-heart"> --}}
     
        
      @endauth
    
     <a href=" {{route('carts')}} "> 
        <i class="fas fa-shopping-cart">
            {{-- <span class="num-cart-product">0</span> --}}
            @auth
              
            <span> {{$cartCount}} </span>
            @endauth
        </i>
    </a> 
    @auth
    <a href="{{route('wishlist')}} "> 
      <i class="fas fa-heart">
       
          
        {{-- <span> {{$wishCount}} </span> --}}
        @endauth
      </i>
  </a>


     @guest
         
     <a href="{{route('user.login')}}" class="user">Sign in
      <i class="fas fa-sign-in-alt"></i>
    </a>
    @endguest
  
 
    
     @auth
         
     <a href="{{route('myOrder')}}" class="user"> {{  auth()-> user()->name}}
      <i class="far fa-user"></i>
  </a>

       <form action=" {{route('logout')}} " method="post">
         @csrf
     
         <button type="submit" class="btn "> Sign out
           <i class="fas fa-sign-out-alt"></i>
         </button>
       </form>
     
       

       @endauth
    </div>

 </div>

</nav>
  {{-- <!--search-bar----------------------------------->
  <div class="search-bar">
    
    <!--search-input------->
    <div class="search-input">
    <input type="text" placeholder="Search For Product" name="search" />
    <!--cancel-btn--->
    <a href="javascript:void(0);" class="search-cancel">
        <i class="fas fa-times"></i>
    </a> --}}

</div>
</div>






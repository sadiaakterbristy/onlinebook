



   @auth
 <ul class="pcoded-item pcoded-left-item">

    

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
              <i class="fas fa-home"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('orders')}}">
              <i class="far fa-file"></i>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.payment')}}">
              <i class="far fa-money-bill-alt"></i>
              Payments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('books')}}">
              <i class="fas fa-book"></i>
              Books
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.categories')}}">
              <i class="fab fa-buffer"></i>
                            Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('users')}}">
              <i class="fas fa-users"></i>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{route('reports')}} ">
              <i class="far fa-file-alt"></i>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{route('feedback')}} ">
              <i class="far fa-comment-dots"></i>
              Feedback
            </a>
          </li>
          

        </ul>
        @endauth


     
 

 



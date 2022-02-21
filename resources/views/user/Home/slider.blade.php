


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
<img src="{{asset('asset/17.jpg')}} " class="img" alt="" >
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>“And, when you want something, all the universe conspires in helping you to achieve it.”</h1>
            <p>― Paulo Coelho, The Alchemist</p>
            {{-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> --}}
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('asset/15.jpg')}} " class="img" alt="" >
        <div class="container">
          <div class="carousel-caption">
            <h1>“কেও কারও মত হতে পারে না। সবাই হয় তার নিজের মত। তুমি হাজার চেষ্টা করেও তোমার চাচার বা বাবার মত হতে পারবে না। সব মানুষই আলাদা।”</h1>
            <p>― Humayun Ahmed, অপেক্ষা</p>
            {{-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> --}}
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img   src="{{asset('asset/14.jpg')}} " class="img" alt="" >
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>“যারা মহৎপ্রাণ, তাঁদের যেকোন অবস্থাতেই, পরের বিপদে নিজের বিপদ মনে থাকে না।”</h1>
            <p>― Sarat Chandra Chattopadhyay, গৃহদাহ</p>
            {{-- <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> --}}
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

        <canvas class="my-4 w-100" id="myChart" width="900" height="40"></canvas>

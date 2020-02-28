@extends("layout" )
@section("header" )
  <!--first header -->
    <div class="jumbotron background" style="height: 500px; padding-top: 150px">
      <div class="container">
        <div class="row height align-items-center">
          <div class="col w-50">
            <h4 class="text-uppercase text-light py-3 font-weight-bold text-center ">My Health</h4>
            <p class="text-center w-15">Discover and choose the right event happening around you</p>
                       
              <form class="form-line" method="GET" action="/search">
                @csrf
                <div class="input-group">                  
                  <input type="search" class="form-control text-center w-50" placeholder="What are you looking for" name="search">
                  <div class="input-group-btn"><button class="btn btn-outline-light btn-dark" type="submit">
                    Search
                  </button></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End of header--> 
<!--Event Section-->
    <section class="">
      <div class="container">
         <div class="col-6 pl-1">
           <h1 class="text-center"></h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non labore, quo sequi molestias, quis aspernatur sint ut eius, libero provident praesentium consequuntur? Quae, ab tempora, rerum officia eaque sapiente doloribus eveniet vel accusantium distinctio a dolorum suscipit architecto voluptas. Totam beatae labore blanditiis soluta dolor dicta. A exercitationem dicta quos!</p>
         </div>
         
  </section>
  <section class="">
      <div class="container">
          <h5 class="text-uppercase ">Our Staff</h5>
          <div class="row">           
          <!--single column-->    
              <div class="col-sm-6 col-md-4 col-lg-4 m-0 ">
                 <span class="border border-primary">
                 <img src="img/header-bg.jpeg" alt="" class="image" > 
                  <a href="/admins"><p class="text-uppercase"><strong >Our Admins</strong></p></a>                  

                 </span>
              </div>
          <!--end single column-->
           <!--single column-->    
           <div class="col-sm-6 col-md-4 col-lg-4 m-0 ">
              <span class="border bord border-primary">
               <img src="img/header-bg.jpeg" alt="" class="image" >
               <a href="/nurses"><p class="text-uppercase"><strong >Our Nurses</strong></p></a>                 

              </span>
           </div>
          <!--end single column--> 
           <!--single column-->    
           <div class="col-sm-6 col-md-4 col-lg-4 m-0 ">
              <span class="border border-primary">
               <img src="img/header-bg.jpeg" alt="" class="image" >
               <a href="/doctors"><p class="text-uppercase"><strong >Our Doctors</strong></p></a>                  

              </span>
           </div>
          <!--end single column-->           
          </div>
      </div>
  </section>    
@endsection ("header")
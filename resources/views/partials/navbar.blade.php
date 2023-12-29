 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
     <a class="navbar-brand" href="#hero" data-scroll>
         <img style="margin-left: 4px"
             src="https://img.freepik.com/premium-vector/company-logo-business-logo-logo-brand_982550-3.jpg"
             width="50" height="50" alt="">
     </a>


     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
             <div class="dropdown">
                 <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     One-to-One
                 </button>
                 <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{{ route('welcome') }}">Create Users</a></li>
                     <li><a class="dropdown-item" href="{{ route('watch.posts') }}">Create Posts</a></li>
                 </ul>
             </div>


             <div style="margin-left: 5px" class="dropdown">
                 <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     One-to-Many
                 </button>
                 <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{{ route('Allimages') }}">Comment Images</a></li>
                     <li><a class="dropdown-item" href="{{ route('Allposts') }}">Comment Posts</a></li>
                 </ul>
             </div>

             <div style="margin-left: 5px" class="dropdown">
                 <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     Many-to-Many
                 </button>
                 <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{{ route('tagposts') }}">Blog Posts </a></li>
                     <li><a class="dropdown-item" href="{{ route('tagimages') }}">Blog Images</a></li>
                 </ul>
             </div>
         </ul>

         <form action="#" class="form-inline mx-auto">

             <input class="form-control" type="search" placeholder="Find Anything !" aria-label="Search"
                 style="width: 500px;">
         </form>
         {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}


     </div>
 </nav>

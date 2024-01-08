<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>FKKMS</title>
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />
<!-- Bootstrap Icon-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/technicalTeamMaster.css') }}">

<link rel="icon" type="image/x-icon" href="{{ asset('assets/fkkmsLogo.png') }}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>

  <div class="sidebar">
    <div class="logo-details mt-2">
      <a href="{{route('techcomplaintlist')}}"><img src="{{ url('assets/fkkmsLogo.png') }}" alt="Logo" style="width: 180px;" loading="lazy" id="imglogo"/></a>
      
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    
    <!-- Menu section -->
    <div class="menu-section">
      <h2 class="section-heading">Menu</h2>
      <ul class="nav-list">
       
       
        <li>
          <a href="{{route('techcomplaintlist')}}" class="active">
            <i class="bi bi-file-plus-fill"></i>
            <span class="links_name">Complaint List</span>
          </a>
          <span class="tooltip">Complaint List</span>
        </li>
        <li>
          
       
        
      </ul>
    </div>
    
    <!-- Profile section -->
    <div class="profile-section">
      <h2 class="section-heading">Profile</h2>
      <ul class="nav-list">
        <li>
          <a href="#">
            <i class="fa-solid fa-user"></i>
            <span class="links_name">View Profile</span>
          </a>
          <span class="tooltip">View Profile</span>
        </li>
        <li style="margin-top: 10px;">
          <a href="{{route('logout', ['userType' => 'pupukAdmin'])}}">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="links_name">Logout</span>
          </a>
          <span class="tooltip">Logout</span>
        </li>
        
      </ul>
    </div>
  </div>
  
  <section class="home-section">
  @yield('content')
  </section>
     <!-- Modal -->
     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">Are You Sure You Want to Delete This User?</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

             <div class="modal-footer d-flex justify-content-center">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                 <button type="button" class="btn btn-danger" id="confirmDelete">Yes</button>
             </div>
         </div>
     </div>
 </div>
  <footer class="text-center text-white fixed-bottom overflow-hidden" style="background-color: #A1BCF0; margin-top: 20px;">
        
      
    <!-- Copyright -->
    <div
      class="text-center text-white p-3"
      style="background-color: rgba(44, 88, 100, 1)"
    >
    © 2024 FKKMS
    </div>
    <!-- Copyright -->
  </footer>




 
   <!--Bootstrap 4 & 5 & jQuery Script-->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <!--iconify icons-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");
  let imagelogo = document.querySelector("#imglogo");
  imagelogo.style.display = "none";
  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
   
  });

 

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
     imagelogo.style.display = "block";
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
     imagelogo.style.display = "none";
   }
  }

  
  </script>

</body>
</html>
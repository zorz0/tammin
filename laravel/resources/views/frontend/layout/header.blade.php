
    <nav class="navbar navbar-expand-lg navbar-light bg-white  py-4 shadow">
        <div class="container-fluid ">
           
           <div class="row ">
        
           <div class="d-flex justify-content-start align-items-center">
            <i class="fa-solid fa-bars fs-3 ms-5 " id="sidebar-open"></i>
             <a class="navbar-brand" href="/">

            <img src="{{ asset('frontend') }}/assets/images/logo.png" alt="" srcset="" class="w-100 logo">
          </a></div>
           </div>
        
        </div>
    </nav>


{{-- sidebar --}}
      <div class="flex-shrink-0 sidebar shadow " >
        <div class="d-flex p-3 justify-content-between align-items-center py-3 px-2 bg-white m-0">
            <i class="fa-solid fa-close fs-3 me-1" id="sidebar-close"></i>
            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo" class="w-50 ms-5 logo">
        </div>
        
        <ul class="list-unstyled  w-100 ">
            <li class="p-3">
                <a href="/" class="d-flex align-items-center">
                    <img src="{{ asset('frontend/assets/images/sidebar/healthmenu-icon.svg') }}" alt="question" >
            <h4>التأمين الطبي للمنشأت</h4>
                </a>
              </li>
              <hr class="m-0">
          
          <li class="p-3">
            <a href="{{ route('question') }}" class="d-flex align-items-center">
                <img src="{{ asset('frontend/assets/images/sidebar/faq.svg') }}" alt="question" >
            
               <h4>الاسئله المتكرره</h4>
            </a>
          </li>
          <hr class="m-0">
          <li class="p-3">
            <a href="/" class="d-flex align-items-center">
                <img src="{{ asset('frontend/assets/images/sidebar/contactmenu-icon.svg') }}" alt="question" >
            <h4>تواصل معنا</h4>
            </a>
          </li>
          <hr class="m-0">
        </ul>
      </div>
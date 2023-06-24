<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading">OVERVIEW</li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('home') }}">
                <svg class="icon-category" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.24 2H5.34C3.15 2 2 3.15 2 5.33V7.23C2 9.41 3.15 10.56 5.33 10.56H7.23C9.41 10.56 10.56 9.41 10.56 7.23V5.33C10.57 3.15 9.42 2 7.24 2Z"
                        fill="#7D8DA7" />
                    <path opacity="0.5"
                        d="M18.6699 2H16.7699C14.5899 2 13.4399 3.15 13.4399 5.33V7.23C13.4399 9.41 14.5899 10.56 16.7699 10.56H18.6699C20.8499 10.56 21.9999 9.41 21.9999 7.23V5.33C21.9999 3.15 20.8499 2 18.6699 2Z"
                        fill="#7D8DA7" />
                    <path
                        d="M18.6699 13.4297H16.7699C14.5899 13.4297 13.4399 14.5797 13.4399 16.7597V18.6597C13.4399 20.8397 14.5899 21.9897 16.7699 21.9897H18.6699C20.8499 21.9897 21.9999 20.8397 21.9999 18.6597V16.7597C21.9999 14.5797 20.8499 13.4297 18.6699 13.4297Z"
                        fill="#7D8DA7" />
                    <path
                        d="M7.24 13.4297H5.34C3.15 13.4297 2 14.5797 2 16.7597V18.6597C2 20.8497 3.15 21.9997 5.33 21.9997H7.23C9.41 21.9997 10.56 20.8497 10.56 18.6697V16.7697C10.57 14.5797 9.42 13.4297 7.24 13.4297Z"
                        fill="#7D8DA7" />
                </svg>
                <span class="p-2">Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link active" href="{{ route('blog') }}">
                <svg class="icon-edit" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.48 3H7.52C4.07 3 2 5.06 2 8.52V16.47C2 19.94 4.07 22 7.52 22H15.47C18.93 22 20.99 19.94 20.99 16.48V8.52C21 5.06 18.93 3 15.48 3Z"
                        fill="#C6CCD8" />
                    <path
                        d="M21.02 2.98028C19.23 1.18028 17.48 1.14028 15.64 2.98028L14.51 4.10028C14.41 4.20028 14.38 4.34028 14.42 4.47028C15.12 6.92028 17.08 8.88028 19.53 9.58028C19.56 9.59028 19.61 9.59028 19.64 9.59028C19.74 9.59028 19.84 9.55028 19.91 9.48028L21.02 8.36028C21.93 7.45028 22.38 6.58028 22.38 5.69028C22.38 4.79028 21.93 3.90028 21.02 2.98028Z"
                        fill="#7D8DA7" />
                    <path
                        d="M17.86 10.4198C17.59 10.2898 17.33 10.1598 17.09 10.0098C16.89 9.88984 16.69 9.75984 16.5 9.61984C16.34 9.51984 16.16 9.36984 15.98 9.21984C15.96 9.20984 15.9 9.15984 15.82 9.07984C15.51 8.82984 15.18 8.48984 14.87 8.11984C14.85 8.09984 14.79 8.03984 14.74 7.94984C14.64 7.83984 14.49 7.64984 14.36 7.43984C14.25 7.29984 14.12 7.09984 14 6.88984C13.85 6.63984 13.72 6.38984 13.6 6.12984C13.47 5.84984 13.37 5.58984 13.28 5.33984L7.89998 10.7198C7.54998 11.0698 7.20998 11.7298 7.13998 12.2198L6.70998 15.1998C6.61998 15.8298 6.78998 16.4198 7.17998 16.8098C7.50998 17.1398 7.95998 17.3098 8.45998 17.3098C8.56998 17.3098 8.67998 17.2998 8.78998 17.2898L11.76 16.8698C12.25 16.7998 12.91 16.4698 13.26 16.1098L18.64 10.7298C18.39 10.6498 18.14 10.5398 17.86 10.4198Z"
                        fill="#7D8DA7" />
                </svg>
                <span class="p-2">Long-Content Creator</span>
            </a>
        </li><!-- End Long-Content Creator Nav -->


        {{-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}

    </ul>

</aside><!-- End Sidebar-->
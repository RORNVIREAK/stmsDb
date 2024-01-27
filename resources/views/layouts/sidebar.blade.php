<div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link @yield('dashboard')" href="#">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @yield('subject')" href="/subject">
          <span data-feather="book"></span>
          Subject
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link  @yield('student')"  href="/student">
          <span data-feather="user"></span>
          Student
        </a>
      </li>
    </ul>
  </div>
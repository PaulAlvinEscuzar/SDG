<div class="container-lg bg-secondary">
<nav class="navbar navbar-expand-md navbar-light ">
  <div class="container-lg">
    <a href="" class="navbar-brand">
      <span class="fw-bold text-light" style="font-family: 'Spline Sans Mono', monospace;
">The 17 Goals</span>
    </a>
    <!-- Toggle button for mobile-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
    data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded = "false"
    aria-label="Toggle Navigation">
    <span class="navbar-toggler-icon"></span>
   </button>

   <!--nav-bar links-->
    <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
      <ul class="navbar-nav">
        <li class="nav-link">
          <a href="" class="nav-link text-light">Home</a>
        </li>
        <li class="nav-link">
          <a href="" class="nav-link text-light">Contact Us</a>
        </li>
        <li class="nav-link">
          <a href="" class="nav-link text-light">About Us</a>
        </li>
        <li class="nav-link">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle bg-black" type="button" 
            id="dropdownMenuButton1" data-bs-toggle="dropdown" 
            aria-expanded="false">SDG Goals</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="<?= base_url("/sdg1") ?>">SDG 1</a></li>
              <li><a class="dropdown-item" href="#">SDG 2</a></li>
              <li><a class="dropdown-item" href="<?= base_url("/sdg3") ?>">SDG 3</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>



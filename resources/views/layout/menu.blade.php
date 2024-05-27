<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img id="app-logo" src="{{ asset('img/logo.webp') }}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-box-open"></i> Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/products"><i class="fa-solid fa-box-open"></i> Products List</a></li>
              <li><a class="dropdown-item" href="/products/create"><i class="fa-solid fa-plus"></i> New Product</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="/products/trash"><i class="fa-regular fa-trash-can"></i> Products Trash</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user-tie"></i> Customers
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/customers"><i class="fa-solid fa-user-tie"></i> Customers List</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-plus"></i> New Customer</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-cubes"></i> Categories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/categories"><i class="fa-solid fa-cubes"></i> Categories List</a></li>
              <li><a class="dropdown-item" href="/categories/create">New categore</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" action="/products/search" method="GET" role="search">
          <input class="form-control me-2" type="search" name="term" value="{{ request('term') ? request('term') : '' }}" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" style="margin-left: 350px">
        <li class="nav-item ">
          <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('/add_data')}}">Add Data</a>
        </li>
        <form class="form-inline my-2 my-lg-0" style="margin-left: 50px">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </ul>

      <form method="POST" action="{{ route('logout') }}" x-data >
        @csrf
        <button class="btn btn-danger">Log out</button>
    </form>
    </div>

</nav>

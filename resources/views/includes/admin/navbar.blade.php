<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand mr-auto mr-lg-0" href="/home">{{ config('app.name') }}</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">{{ config('module.name') }} <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="module-switch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Switch To:
            </a>
            <div class="dropdown-menu" aria-labelledby="module-switch">
                @foreach (['Media', 'WebPages', 'Themes'] as $mod)
                    <a class="dropdown-item" href="/admin/{{ strtolower($mod) }}">{{ $mod }}</a>
                @endforeach
              <div class="dropdown-divider"></div>
              @foreach (['Newsletter','Messages','Calendar', 'Shopper'] as $mod)
                <a class="dropdown-item" href="/admin/{{ strtolower($mod) }}">{{ $mod }}</a>
              @endforeach
              <div class="dropdown-divider"></div>
              @foreach (['Account','Security','Settings'] as $mod)
                <a class="dropdown-item" href="/admin/{{ strtolower($mod) }}">{{ $mod }}</a>
              @endforeach
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Search..." aria-label="" aria-describedby="basic-addon1">            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
            </div>
            </div>
        </form>
      </div>
    </nav>

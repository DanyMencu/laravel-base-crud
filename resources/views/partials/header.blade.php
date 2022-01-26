<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DC Comics Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active
                    @if (Request::route()->getName() === 'home') active @endif" 
                    aria-current="page" href="#">Home</a>
                    <a class="nav-link
                    @if (Request::route()->getName() === 'comics_list') active @endif
                    " href="#">Comics list</a>
                    <a class="nav-link
                    @if (Request::route()->getName() === 'new_comic') active @endif"
                     href="#">Add new comic</a>
                </div>
            </div>
        </div>
    </nav>
</header>
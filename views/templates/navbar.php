
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Test API</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (!\components\Session::authCheck()) {?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/signin">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/signup">Sign Up</a>
                </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/profile">Profile</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/signout">Sign Out</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
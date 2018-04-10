<? // Header including navigation bar ?>

<header class="fixed-top"> 
    <nav class="navbar navbar-toggleable-md canvas" role="navigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/index.php">
            <img src="/media/robot-72x72.png" id="logo" height="72" width="72" />
        </a>
        
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="/light.php">Light</a>
                    <ul class="dropdown-menu sub-menu">
                        <li class="nav-item"><a href="/index.php" class="nav-link">To See</a></li>
                        <li class="nav-item"><a href="/index.php" class="nav-link">Here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
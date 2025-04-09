<style>
    .custom-navbar {
        width: 100%;
        max-width: 500px;
        height: 65px;
        left: 50%;
        transform: translateX(-50%);
        border-radius:10px 10px 0 0;
    }
</style>
<nav class="navbar navbar-light bg-light fixed-bottom custom-navbar">
    <div class="container-fluid d-flex justify-content-around">
        <a href="javascript:history.back()" class="btn btn-light">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <p class="btn btn-light mb-0"><?= ucfirst($_GET['page']) ?></p>
        <button class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">☰</button>

    </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled">
            <li><a href="#" class="d-block p-2">Home</a></li>
            <li><a href="#" class="d-block p-2">About</a></li>
            <li><a href="#" class="d-block p-2">Courses</a></li>
            <li><a href="#" class="d-block p-2">Contact</a></li>
        </ul>
    </div>
</div>
    
    <!-- Load Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

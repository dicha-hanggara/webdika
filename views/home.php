<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .card {
        border-radius: 15px;
        overflow: hidden;
        position: relative;
    }
    .heart-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        background: white;
        padding: 10px;
        border-radius: 10px;
    }
    .btn-custom {
        background: white;
        color: black;
        border-radius: 50px;
        padding: 10px 20px;
        font-weight: bold;
        text-transform: uppercase;
        /* width: 250px; */
    }
    .btn-custom:hover {
        background: #f8f9fa;
    }
    .social-icons a {
        color: white;
        font-size: 24px;
        margin: 0 10px;
    }
</style>
<div class="container">
    <div class="row w-100">
        <div class="col-md-6 text-center">
            <div class="card">
                <div class="p-3 bg-dark text-white text-start"><i class="fa-solid fa-image pe-2"></i> dicha.png</div>
                <img src="https://cdn-front.freepik.com/images/ai/image-generator/gallery/resource-tti-15.webp" class="img-fluid" alt="Child Learning">
                <div class="heart-icon px-3" style="font-size:20px;"><i class="fa-solid fa-heart text-danger"></i></div>
            </div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <img class="mx-auto mt-3" style="width: 55px;" src="https://dicha.my.id/cdn/assets/images/core/dh_logo_darkbg.png">
            <h1 class="mb-4">Explore more</h1>
            <div class="row d-flex">
                <div class="col-md-6 col-sm-6 col-6 mb-3">
                    <a href="./index.php?page=about" class="btn btn-custom w-100">About Me</a>
                </div>
                <div class="col-md-6 col-sm-6 col-6 mb-3">
                    <button class="btn btn-custom w-100">Resume</button>
                </div>
                <div class="col-md-6 col-sm-6 col-6 mb-3">
                    <button class="btn btn-custom w-100">Portfolio</button>
                </div>
                <div class="col-md-6 col-sm-6 col-6 mb-3">
                    <button class="btn btn-custom w-100">Blog</button>
                </div>
                <div class="col-md-6 col-sm-6 col-6 mb-3">
                    <button class="btn btn-custom w-100">Contact</button>
                </div>
            </div>
            <div class="mt-4 social-icons">
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                <!-- <a href="#" class="text-decoration-none btn btn-outline-light rounded-5 "><i class="fa-solid fa-download"></i> Download</a> -->
            </div>
        </div>
    </div>
</div>
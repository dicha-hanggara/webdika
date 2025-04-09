<style>
    .custom-image{
        height:230px;
        display:flex;
        overflow:hidden !important;
        align-items:center;
    }
    .container {
        height: calc(100vh - 85px);
    }
</style>
<div class="col-12">
    <img class="mx-auto my-3" style="width: 55px;" src="https://dicha.my.id/cdn/assets/images/core/dh_logo_darkbg.png">
</div>
<div class="container mb-5">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="row">
                <div class="col-12 custom-image">
                    <img src="https://cdn-front.freepik.com/images/ai/image-generator/gallery/resource-tti-15.webp" style="padding-top:200px" class="img-fluid"alt="Leon France">
                </div>
            </div>
            <h2 class="h1 mt-3 mb-0">Dicha Dwi Hanggara</h2>
            <p class="mb-0"><small><span class="badge bg-light text-muted">(he/him)</span></small></p>
            <p class="text-light">Graphic Designer, UI/UX Enthusiast</p>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center bg-primary text-white p-4 rounded">
            <h3 class="fw-bold">About Me</h3>
            <p style="text-align:justify">As an experienced graphic designer with over 5 years of experience, I have a wide range of skills and knowledge in developing effective and creative branding strategies for various businesses. I am skilled in presenting new ideas and developing visually appealing concepts to meet client needs. I am highly proficient in using Corel Draw and Adobe Creative Suites.</p>
            <div class="text-center">
                <button class="btn btn-outline-light rounded-5" data-bs-toggle="modal" data-bs-target="#infoModal">More Info</button>
            </div>
        </div>
    </div>
</div>

<!-- Info Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position:absolute;right:20px"></button>
                <h5 class="h1 text-secondary" id="choosePageLabel">Select a Page</h5>
                <!--<p class="fs-5 text-secondary">Please select the page you want to access.</p>-->
                <div class="d-flex  justify-content-between gap-3">
                    <a href="./index.php?page=portfolio" class="btn btn-primary btn-lg p-4 d-flex flex-column align-items-center" style="width:calc(100%/2)">
                        <i class="fa-solid fa-briefcase fa-2x mb-3"></i>
                        <span  class="h5">Portfolio</span>
                    </a>
                    <a href="./index.php?page=resume" class="btn btn-secondary btn-lg p-4 d-flex flex-column align-items-center" style="width:calc(100%/2)">
                        <i class="fa-solid fa-user-tie fa-2x mb-3"></i>
                        <span class="h5">Resume</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
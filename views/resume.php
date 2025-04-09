<style>

    .timeline {
        position: relative;
        padding-left: 40px;
        /*margin-top: 20px;*/
        max-height:calc(80vh - 80px);
        overflow-y:auto;
    }
    .timeline-item::after {
        content: "";
        position: absolute;
        left: -32px;
        top: 0;
        bottom: 0;
        width: 4px;
        background: #007bff;
    }
    .fototimeline {
        max-height: 150px; /* Sesuaikan tinggi maksimal */
        overflow-y: auto;
        overflow-x: hidden; /* Hindari scroll horizontal */
        padding: 10px;
        /*background: #f8f9fa;*/
        border-radius: 5px;
        width: 100%; /* Pastikan lebar mengikuti parent */
    }
    .collapse{
        position:relative;
        overflow:hidden;
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 20px;
        padding: 10px 20px;
        background: rgba(0,0,0,0.3);
        border-radius: 5px;
        text-align:left;
    }
    .timeline-item::before {
        content: "";
        position: absolute;
        left: -40px;
        top: 0px;
        width: 20px;
        height: 20px;
        background: #007bff;
        border-radius: 50%;
    }
    .foto-item{
        overflow: hidden;
        width: 100px;
        height: auto;
        border-radius: 10px;
        display: flex;
        background: red;
        align-items: center;
        justify-content: center;
    }
    .container {
        height: calc(100vh - 85px);
    }
    .timeline-item > .viewDetail::after {
        content: "\f078";
        font-family: 'Font Awesome 6 Pro';
        font-weight: 900;
        margin-left: 8px;
        transition: transform 0.3s ease-in-out;
        position: absolute;
        right: 15px;
    }
    .timeline-item > .viewDetail[aria-expanded="true"]::after {
        transform: rotate(180deg);
        transition: transform 0.3s ease-in-out;
    }
</style>
<div class="col-12">
    <img class="mx-auto my-3" style="width: 55px;" src="https://dicha.my.id/cdn/assets/images/core/dh_logo_darkbg.png">
</div>
<div class="container">
    <h1 class="mb-3">Resume</h1>
    <!-- Timeline Section -->
    <div class="timeline"  id="timelineScrollbar">
        <?php for($x=0; $x<=10; $x++): ?>
        <div class="timeline-item"  data-bs-toggle="collapse" data-bs-target="#detail<?= $x ?>">
            <h5>Featured in Fashion Week Paris</h5>
            <p class="mb-0"><small><i>2017 - present</i></small></p>
            <button class="btn btn-link text-decoration-none text-light text-start w-100 p-0 viewDetail">View Details</button>
            <div id="detail<?= $x ?>" class="collapse">
                <ul>
                    <li>
                        <h1 class="h5">Lorem Ipsum Dolor Sit Amet</h1>
                        <div class="col-12">
                            <div class="d-flex gap-3 overflow-y-auto fototimeline">
                                <?php for($f=0; $f<4; $f++):?>
                                <div class="col-md-4 col-sm-6 col-6 foto-item" data-bs-toggle="modal" data-bs-target="#imageModal<?=$f?>">
                                    <img class="img-fluid" src="data:image/jpeg;base64,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">
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="imageModal<?=$f?>" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imageModalLabel">Preview Image</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img id="modalImage" class="img-fluid" src="" alt="Preview">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>
<!-- Tambahkan jQuery sebelum script lainnya -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    var timeline = document.getElementById("timelineScrollbar");
    document.querySelectorAll('.fototimeline').forEach(element => {
        new PerfectScrollbar(element);
    });
    if (timeline) {
        new PerfectScrollbar(timeline);
        new PerfectScrollbar(fototimeline);
        fotoTimeline.removeClass("ps");
    } else {
        console.error("Element #timelineScrollbar tidak ditemukan.");
    }
    const buttons = document.querySelectorAll(".viewDetail");

    buttons.forEach(button => {
        button.addEventListener("click", function() {
            setTimeout(() => {
                this.classList.toggle("collapsed", !this.classList.contains("collapsed"));
            }, 100);
        });
    });
});
</script>
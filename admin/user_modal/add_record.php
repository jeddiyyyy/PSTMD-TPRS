<!-- FRANCHISE SECTION /// FIRST STEP OF THE PROCESS -->
<!-- FRANCHISE SECTION /// FIRST STEP OF THE PROCESS -->
<!-- FRANCHISE SECTION /// FIRST STEP OF THE PROCESS -->
<!-- FRANCHISE SECTION /// FIRST STEP OF THE PROCESS -->
<!-- FRANCHISE SECTION /// FIRST STEP OF THE PROCESS -->
<!-- FRANCHISE SECTION /// FIRST STEP OF THE PROCESS -->


<div class="modal fade" id="addRecordModal" tabindex="-1" aria-labelledby="addRecordLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <!-- HEADER INFORMATION -->
    <div class="modal-header text-white">
        <h5 class="modal-title" id="addRecordLabel">
            <i class="bi bi-file-earmark-plus me-2"></i>ADD NEW RECORD</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>


        <!-- STEP PROGRESS -->
        <div class="step-progress-wrap">
            <div class="step-labels" id="stepLabels">
                <div class="step-item active" data-step="1">
                <div class="step-dot">1</div>
                <div class="step-name">REGISTRATION</div>
                </div>
                <div class="step-item" data-step="2">
                <div class="step-dot">2</div>
                <div class="step-name">OWNER</div>
                </div>
                <div class="step-item" data-step="3">
                <div class="step-dot">3</div>
                <div class="step-name">VEHICLE </div>
                </div>
                <div class="step-item" data-step="4">
                <div class="step-dot">4</div>
                <div class="step-name">PHOTO ID</div>
                </div>
        </div>


        <!-- PROGRESS BAR STYLE -->
        <div class="step-progress-bar-track">
            <div class="step-progress-bar-fill" id="stepProgressBar" style="width: 12.5%"></div>
            </div>
        </div>
        <!-- START OF FRANCHISE MODAL -->
        <form id="addRecordForm" novalidate>
            <div class="modal-body">
            <!-- STEP 1 INFORMATION -->
                <div class="step-panel active" id="step-1">
                <div class="section-card">
                    <div class="section-label"><i class="bi bi-card-checklist me-1"></i>Registration Information</div>
                    <!-- ROW SECTION 1 -->
                    <div class="row g-3">
                    <div class="col-md-5">
                        <label class="form-label">1. Case Number:<span class="required-star">*</span></label>
                        <input type="text" class="form-control" id="caseno" name="caseno" readonly required>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">2. Old Case No.<span class="required-star">*</label>
                        <input type="text" class="form-control" id="oldcaseno" name="oldcaseno" required>
                    </div>
                    <!-- ROW SECTION 2 -->
                    <div class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label">Class<span class="required-star">*</span></label>
                        <select class="form-select custom-select" id="class" name="class" required>
                        <option value="">-- Select Class --</option>
                        <option value="ForHire ">For Hire</option>
                        <option value="Private">Private</option>
                        <option value="Public">Public</option>
                        <option value="Supervision">For Supervision</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Vehicle Type <span class="required-star">*</span></label>
                        <select class="form-select custom-select" id="regtype" name="vehtype" required>
                        <option value="">-- Select Type --</option>
                        <option value="pedicab">Pedicab</option>
                        <option value="tricycle">Tricycle</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Toda <span class="required-star">*</span></label>
                        <select class="form-select custom-select" id="toda" name="toda" required>
                        <option value="">-- Select --</option>
                        <option value="toda1">Toda1</option>
                        <option value="toda2">Toda2</option>
                        <option value="toda3">Toda3</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Route</label>
                        <input type="text" class="form-control" id="route" name="route">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Remarks</label>
                        <input type="text" class="form-control" id="remarks" name="remarks">
                    </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- STEP 2 INFORMATION -->
            <div class="step-panel" id="step-2">
                <div class="section-card">
                    <div class="section-label"><i class="bi bi-person-fill me-1"></i>Owner Information</div>
                    <div class="row g-3">
                    <div class="col-8">
                        <label class="form-label">Toda Name <span class="required-star">*</span></label>
                        <input type="text" class="form-control" id="company" name="comname" placeholder="Company Name" required>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">First Name <span class="required-star">*</span></label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">M.I.</label>
                        <input type="text" class="form-control" id="middleinitial" name="middleinitial" placeholder="M.I." maxlength="3">
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">Last Name <span class="required-star">*</span></label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                    </div>
                    <div class="col-md-8">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="City / Municipality">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Barangay</label>
                        <input type="text" class="form-control" id="brgy" name="brgy" placeholder="Barangay">
                    </div>
                </div>
            </div>
        </div>
            <!-- STEP 3 INFORMATION -->
            <div class="step-panel" id="step-3">
                <div class="section-card">
                    <div class="section-label"><i class="bi bi-bicycle me-1"></i>Vehicle Information</div>
                    <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Type</label>
                        <select class="form-select" id="veh_type" name="veh_type">
                        <option value="">-- Select --</option>
                        <option value="tricycle">Tricycle</option>
                        <option value="pedicab">Pedicab</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Class</label>
                        <select class="form-select" id="veh_class" name="veh_class">
                        <option value="">-- Select --</option>
                        <option value="class_a">Class A</option>
                        <option value="class_b">Class B</option>
                        <option value="class_c">Class C</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Mode</label>
                        <select class="form-select" id="mode" name="mode">
                        <option value="">-- Select --</option>
                        <option value="regular">Regular</option>
                        <option value="special">Special</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Make</label>
                        <select class="form-select" id="make" name="make">
                        <option value="">-- Select --</option>
                        <option value="honda">Honda</option>
                        <option value="kawasaki">Kawasaki</option>
                        <option value="yamaha">Yamaha</option>
                        <option value="suzuki">Suzuki</option>
                        <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">District</label>
                        <input type="number" class="form-control" id="dist" name="dist" placeholder="District No." min="1">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Color Scheme</label>
                        <select class="form-select" id="color_scheme" name="color_scheme">
                        <option value="">-- Select --</option>
                        <option value="yellow">Yellow</option>
                        <option value="blue">Blue</option>
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="white">White</option>
                        <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Motor No.</label>
                        <input type="text" class="form-control" id="motor_no" name="motor_no" placeholder="Motor Number">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Plate No.</label>
                        <input type="text" class="form-control" id="plate_no" name="plate_no" placeholder="Plate Number">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Body No.</label>
                        <input type="text" class="form-control" id="body_no" name="body_no" placeholder="Body Number">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Chassis No.</label>
                        <input type="text" class="form-control" id="chassis_no" name="chassis_no" placeholder="Chassis Number">
                    </div>
                    </div>
                </div>
                </div>

<!-- STEP 4 INFORMATION -->
<div class="step-panel" id="step-4">
<div class="section-card">
<div class="section-label">
<i class="bi bi-camera-fill me-1"></i>ID Photo Capture
</div>
<div class="text-center">
<!-- Camera Preview -->
<video id="camera" autoplay playsinline class="camera-preview"></video>
<!-- Captured Image -->
<canvas id="photoCanvas" style="display:none;"></canvas>
<img id="photoPreview" class="photo-preview" style="display:none;"/>
<!-- Hidden input to send image -->
<input type="hidden" id="photoData" name="photoData">
<div class="mt-3">
<button type="button" class="btn btn-success btn-sm" id="startCamera">
<i class="bi bi-camera"></i> Start Camera
</button>
<button type="button" class="btn btn-primary btn-sm" id="capturePhoto">
<i class="bi bi-camera-fill"></i> Capture
</button>
<button type="button" class="btn btn-secondary btn-sm" id="retakePhoto">
<i class="bi bi-arrow-repeat"></i> Retake
</button>
</div>
</div>
</div>
</div>

</div>
<!-- /modal-body -->

            <!-- FOOTER -->
            <div class="modal-footer">
                <span class="step-counter-text" id="stepCounterText">Step 1 of 4</span>
                <div class="d-flex gap-2">
                <button type="button" class="btn btn-nav btn-prev" id="btnPrev" style="display:none!important;">
                    <i class="bi bi-arrow-left me-1"></i>Previous
                </button>
                <button type="button" class="btn btn-nav btn-next" id="btnNext">
                    Next <i class="bi bi-arrow-right ms-1"></i>
                </button>
                <button type="submit" class="btn btn-save" id="btnSave" style="display:none;">
                    <i class="bi bi-check-circle me-1"></i>Save Record
                </button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>



<style>
/* MODAL SIZE */
#addRecordModal .modal-dialog{
    max-width: 850px;
}

/* MODAL CARD */
#addRecordModal .modal-content{
    border: none;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

/* HEADER */
#addRecordModal .modal-header{
    background: linear-gradient(135deg,#1a6b3a,#28a745);
    border: none;
    padding: 16px 22px;
}

#addRecordModal .modal-title{
    font-size: .95rem;
    font-weight: 700;
    letter-spacing: .5px;
}

/* BODY */
#addRecordModal .modal-body{
    background:#f6f9f7;
    padding:22px;
    min-height:300px;
}

/* SECTION CARD */
.section-card{
    background:#fff;
    border-radius:10px;
    padding:18px 20px;
    box-shadow:0 2px 8px rgba(0,0,0,.06);
    animation:slideFade .25s ease;
}

@keyframes slideFade{
    from{opacity:0; transform:translateX(20px);}
    to{opacity:1; transform:translateX(0);}
}

/* SECTION LABEL */
.section-label{
    font-size:.72rem;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:1px;
    color:#28a745;
    margin-bottom:15px;
    border-bottom:2px solid #28a745;
    padding-bottom:5px;
}

/* FORM */
.form-label{
    font-size:.78rem;
    font-weight:600;
    color:#333;
    margin-bottom:4px;
}

.form-control,
.form-select{
    font-size:.85rem;
    border-radius:6px;
    border:1px solid #cfd6dc;
    padding:7px 10px;
    transition:.2s;
}

.form-control:focus,
.form-select:focus{
    border-color:#28a745;
    box-shadow:0 0 0 .15rem rgba(40,167,69,.15);
}

/* REQUIRED */
.required-star{
    color:#dc3545;
}

/* STEP PROGRESS AREA */
.step-progress-wrap{
    background:#fff;
    padding:16px 22px 8px;
    border-bottom:1px solid #e5e8eb;
}

.step-labels{
    display:flex;
    justify-content:space-between;
    margin-bottom:8px;
}

.step-item{
    flex:1;
    text-align:center;
    position:relative;
}

/* CONNECT LINE */
.step-item:not(:last-child)::after{
    content:'';
    position:absolute;
    top:13px;
    left:55%;
    right:-45%;
    height:2px;
    background:#dee2e6;
}

.step-item.completed:not(:last-child)::after{
    background:#28a745;
}

/* STEP DOT */
.step-dot{
    width:28px;
    height:28px;
    border-radius:50%;
    background:#dee2e6;
    color:#888;
    font-size:.75rem;
    font-weight:700;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:auto auto 4px;
    transition:.3s;
}

.step-item.active .step-dot{
    background:#28a745;
    color:#fff;
    box-shadow:0 0 0 4px rgba(40,167,69,.18);
}

.step-item.completed .step-dot{
    background:#28a745;
    color:#fff;
}

/* STEP NAME */
.step-name{
    font-size:.65rem;
    font-weight:600;
    color:#999;
    text-transform:uppercase;
}

.step-item.active .step-name,
.step-item.completed .step-name{
    color:#1a6b3a;
}

/* PROGRESS BAR */
.step-progress-bar-track{
    height:3px;
    background:#e9ecef;
}

.step-progress-bar-fill{
    height:100%;
    background:#28a745;
    transition:.3s;
}

/* FOOTER */
#addRecordModal .modal-footer{
    padding:14px 20px;
    border-top:1px solid #e9ecef;
    background:#fff;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.step-counter-text{
    font-size:.75rem;
    color:#888;
}

/* NAV BUTTONS */
.btn-nav{
    font-size:.82rem;
    font-weight:600;
    padding:7px 18px;
    border-radius:6px;
}

/* PREV */
.btn-prev{
    background:#fff;
    border:1px solid #ced4da;
}

.btn-prev:hover{
    background:#f1f3f5;
}

/* NEXT */
.btn-next{
    background:#28a745;
    color:#fff;
    border:none;
}

.btn-next:hover{
    background:#218838;
}

/* SAVE */
.btn-save{
    background:#28a745;
    color:#fff;
    font-weight:700;
    border:none;
    padding:8px 24px;
    border-radius:6px;
}

.btn-save:hover{
    background:#218838;
}

/* STEP ANIMATION */
.step-panel{
    display:none;
    opacity:0;
    transform:translateX(40px);
    transition:all .35s ease;
}

.step-panel.active{
    display:block;
    opacity:1;
    transform:translateX(0);
}

/* BACKWARD animation */
.step-panel.slide-back{
    transform:translateX(-40px);
}

/* CAMERA */
.camera-preview{
    width:100%;
    max-width:320px;
    height:240px;
    border-radius:10px;
    border:2px solid #28a745;
    object-fit:cover;
}

.photo-preview{
    width:100%;
    max-width:320px;
    border-radius:10px;
    border:2px solid #28a745;
}

/* =========================
   RESPONSIVE IMPROVEMENTS
========================= */

/* Tablets */
@media (max-width: 992px) {
    #addRecordModal .modal-dialog {
        max-width: 95%;
        margin: 10px auto;
    }

    #addRecordModal .modal-body {
        padding: 18px;
    }

    .section-card {
        padding: 16px;
    }

    .step-name {
        font-size: .6rem;
    }
}

/* Mobile (Phones) */
@media (max-width: 768px) {

    /* FULLSCREEN FEEL */
    #addRecordModal .modal-dialog {
        max-width: 100%;
        margin: 0;
        height: 100vh;
    }

    #addRecordModal .modal-content {
        height: 100vh;
        border-radius: 0;
    }

    #addRecordModal .modal-body {
        padding: 15px;
        overflow-y: auto;
    }

    /* STACK ALL FIELDS */
    .row.g-3 > [class*="col-"] {
        flex: 0 0 100%;
        max-width: 100%;
    }

    /* HEADER */
    #addRecordModal .modal-header {
        padding: 12px 16px;
    }

    .modal-title {
        font-size: .85rem;
    }

    /* STEP LABELS → SCROLLABLE */
    .step-labels {
        overflow-x: auto;
        gap: 10px;
        padding-bottom: 5px;
    }

    .step-item {
        min-width: 70px;
    }

    .step-name {
        font-size: .55rem;
    }

    .step-dot {
        width: 24px;
        height: 24px;
        font-size: .65rem;
    }

    /* FOOTER STACK */
    #addRecordModal .modal-footer {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }

    .step-counter-text {
        text-align: center;
    }

    .modal-footer .d-flex {
        width: 100%;
        justify-content: space-between;
    }

    .btn-nav,
    .btn-save {
        flex: 1;
        width: 100%;
        font-size: .8rem;
    }

    /* CAMERA */
    .camera-preview,
    .photo-preview {
        max-width: 100%;
        height: auto;
    }
}

/* Extra small phones */
@media (max-width: 480px) {

    .form-label {
        font-size: .7rem;
    }

    .form-control,
    .form-select {
        font-size: .8rem;
        padding: 6px 8px;
    }

    .section-label {
        font-size: .65rem;
    }

    .btn-nav,
    .btn-save {
        font-size: .75rem;
        padding: 6px 10px;
    }
}


</style>


<script>
const modalElement = document.getElementById('addRecordModal');
modalElement.addEventListener('show.bs.modal', function () {
    generateCaseNo();
});
let caseCounter = 1;
function generateCaseNo() {
    const year = new Date().getFullYear();
    const number = String(caseCounter).padStart(4, '0');

    const caseNo = `${year}-${number}`;

    document.getElementById("caseno").value = caseNo;

    caseCounter++;
}


        (() => {
        const TOTAL_STEPS = 4;
        let currentStep = 1;
        let direction = 'forward';

        const btnPrev     = document.getElementById('btnPrev');
        const btnNext     = document.getElementById('btnNext');
        const btnSave     = document.getElementById('btnSave');
        const counterText = document.getElementById('stepCounterText');
        const progressBar = document.getElementById('stepProgressBar');
        const stepItems   = document.querySelectorAll('#stepLabels .step-item');
        const modal       = document.getElementById('addRecordModal');

        // ── Required fields per step ──
        const stepRequired = {
            1: ['regtype', 'caseno', 'oldcaseno', 'class','toda'],
            2: ['company', 'firstname', 'lastname'],
            3: [],
            4: []
        };

        function validateStep(step) {
            const fields = stepRequired[step] || [];
            let valid = true;
            fields.forEach(id => {
            const el = document.getElementById(id);
            if (!el) return;
            if (!el.value.trim()) {
                el.classList.add('is-invalid');
                valid = false;
            } else {
                el.classList.remove('is-invalid');
            }
            });
            return valid;
        }

        function renderStep(newStep, dir) {
            // Hide current panel
            const oldPanel = document.getElementById(`step-${currentStep}`);
            oldPanel.classList.remove('active');

            // Update step indicators
            stepItems.forEach((item, idx) => {
            const n = idx + 1;
            item.classList.remove('active', 'completed');
            if (n < newStep)  item.classList.add('completed');
            if (n === newStep) item.classList.add('active');
            // Tick icon for completed
            const dot = item.querySelector('.step-dot');
            dot.innerHTML = n < newStep ? '<i class="bi bi-check"></i>' : n;
            });

            // Progress bar: spread across steps (0% at start of step 1, 100% at end of step 4)
            const pct = ((newStep - 1) / (TOTAL_STEPS - 1)) * 100;
            progressBar.style.width = pct + '%';

            // Show new panel with direction animation
            const newPanel = document.getElementById(`step-${newStep}`);
            const card = newPanel.querySelector('.section-card');
            card.classList.remove('slide-back');
            if (dir === 'back') card.classList.add('slide-back');
            newPanel.classList.add('active');

            // Counter text
            counterText.textContent = `Step ${newStep} of ${TOTAL_STEPS}`;

            // Button visibility
            btnPrev.style.setProperty('display', newStep > 1 ? 'inline-flex' : 'none', 'important');
            if (newStep === TOTAL_STEPS) {
            btnNext.style.display = 'none';
            btnSave.style.display = 'inline-block';
            } else {
            btnNext.style.display = 'inline-flex';
            btnSave.style.display = 'none';
            }

            currentStep = newStep;
        }

        btnNext.addEventListener('click', () => {
            if (!validateStep(currentStep)) return;
            if (currentStep < TOTAL_STEPS) renderStep(currentStep + 1, 'forward');
        });

        btnPrev.addEventListener('click', () => {
            if (currentStep > 1) renderStep(currentStep - 1, 'back');
        });

        // Clear validation on input
        document.querySelectorAll('.form-control, .form-select').forEach(el => {
            el.addEventListener('input', () => el.classList.remove('is-invalid'));
            el.addEventListener('change', () => el.classList.remove('is-invalid'));
        });

        // Reset modal on close
        modal.addEventListener('hidden.bs.modal', () => {
            document.getElementById('addRecordForm').reset();
            document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            renderStep(1, 'forward');
        });

        // Handle form submit
        document.getElementById('addRecordForm').addEventListener('submit', e => {
            e.preventDefault();
            alert('✅ Record saved successfully!');
            bootstrap.Modal.getInstance(modal).hide();
            });
        })();

        let stream;

const video = document.getElementById("camera");
const canvas = document.getElementById("photoCanvas");
const preview = document.getElementById("photoPreview");
const photoInput = document.getElementById("photoData");

document.getElementById("startCamera").onclick = async function(){

    stream = await navigator.mediaDevices.getUserMedia({ video:true });

    video.srcObject = stream;
};

document.getElementById("capturePhoto").onclick = function(){

    const ctx = canvas.getContext("2d");

    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    ctx.drawImage(video,0,0);

    const imageData = canvas.toDataURL("image/png");
    preview.src = imageData;
    preview.style.display = "block";
    video.style.display = "none";
    photoInput.value = imageData;

};

document.getElementById("retakePhoto").onclick = function(){
    preview.style.display = "none";
    video.style.display = "block";

};

</script>

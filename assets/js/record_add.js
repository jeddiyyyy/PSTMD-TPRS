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


let video = document.getElementById('video');
let canvas = document.getElementById('canvas');
let preview = document.getElementById('preview');
let capturedInput = document.getElementById('captured_image');

// OPEN CAMERA
function startCamera() {
    video.style.display = "block";

    navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
        video.srcObject = stream;
    })
    .catch(err => {
        alert("Camera not accessible");
        console.error(err);
    });
}

// CAPTURE PHOTO
function capturePhoto() {
    if (!video.srcObject) {
        alert("Please open camera first!");
        return;
    }

    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    let ctx = canvas.getContext('2d');
    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

    let dataURL = canvas.toDataURL('image/png');

    preview.src = dataURL;
    capturedInput.value = dataURL;

    // STOP CAMERA AFTER CAPTURE (important)
    video.srcObject.getTracks().forEach(track => track.stop());
    video.style.display = "none";
}

// FILE UPLOAD PREVIEW
document.getElementById('photoUpload').addEventListener('change', function(e) {
    let file = e.target.files[0];

    if (!file) return;

    let reader = new FileReader();
    reader.onload = function(event) {
        preview.src = event.target.result;
        capturedInput.value = event.target.result;
    };

    reader.readAsDataURL(file);
});



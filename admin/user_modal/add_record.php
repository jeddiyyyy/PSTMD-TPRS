<div class="modal fade" id="addRecordModal" tabindex="-1" aria-labelledby="addRecordLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
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
            <?php include 'process/step1.php'; ?>
            <?php include 'process/step2.php'; ?>
            <?php include 'process/step3.php'; ?>
            <?php include 'process/step4.php'; ?>
        </div>


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


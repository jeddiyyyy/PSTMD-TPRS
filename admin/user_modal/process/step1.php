<?php
// STEP 1: Registration Information
?>
<div class="step-panel active" id="step-1">
    <div class="section-card">
        <div class="section-label"><i class="bi bi-card-checklist me-1"></i> Registration Information</div>
        <div class="row g-3">
            <div class="col-md-5">
                <label class="form-label">1. Case Number:<span class="required-star">*</span></label>
                <input type="text" class="form-control" id="caseno" name="caseno" readonly required>
            </div>
            <div class="col-md-5">
                <label class="form-label">2. Old Case Number:<span class="required-star">*</span></label>
                <input type="test" class="form-control" id="oldcaseno"  name="oldcaseno" required>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-3">
                <label class="form-label">Class<span class="required-star">*</span></label>
                <select class="form-select custom select" id="class" name="class" required>
                    <option value="">--Class--</option>
                    <option value="ForHire">For Hire</option>
                    <option value="ForSupervision">For Supervision</option>
                    <option value="Private">Private</option>
                    <option value="Public">Public</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Vehicle Type <span class="required-star">*</span></label>
                <select class="form-select custom-select" id="vehtype" name="vehtype" required>
                    <option value="">--Vehicle Type--</option>
                    <option value="Pedicab">Pedicab</option>
                    <option value="Tricycle">Tricycle</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Toda <span class="required-star">*</span></label>
                <select class="form-select custom-select" id="toda" name="toda" required>
                    <option value="">--Toda--</option>
                    <option value="STW">STW</option>
                    <option value="FTW">FTW</option>
                    <option value="Toda1">Toda1</option>
                    <option value="Toda2">Toda2</option>
                    <option value="Toda3">Toda3</option>
                    <option value="Toda4">Toda4</option>
                    <option value="Toda5">Toda5</option>
                </select>
            </div>
            <div class="col-md-7">
                <label class="form-label">Route</label>
                <input type="text" class="form-control" id="route" name="route" readonly required>
            </div>
            <div class="col-md-12">
                <label class="form-label">Remarks</label>
                <input type="text" class="form-control" id="remarks" name="remarks">
            </div>
        </div>
    </div>
</div>


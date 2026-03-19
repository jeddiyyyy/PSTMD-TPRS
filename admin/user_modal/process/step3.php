<?php
// STEP 3: Vehicle Registration
?>

<div class="step-panel" id="step-3">
    <div class="section-card">
        <div class="section-label"><i class="bi bi-bicycle me-1"></i>Vehicle Information</div>
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Mode <span class="required-star">*</span></label>
                <select class="form-select" id="mode" name="mode">
                    <option value="">--Mode--</option>
                    <option value="regular">Regular</option>
                    <option value="special">Special</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Make<span class="required-star">*</span></label>
                <select class="form-select" id="make" name="make">
                    <option value="">--Vehicle Make==</option>
                    <option value="honda">Honda</option>
                    <option value="kawasaki">Kawasaki</option>
                    <option value="yamaha">Yamaha</option>
                    <option value="suzuki">Suzuki</option>
                    <option value="bajaj">Bajaj</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">District<span class="required-star">*</span></label>
                <input type="number" class="form-control" id="district" name="district" readonly required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Color Scheme<span class="required-star">*</span></label>
                <select class="form-select" id="color" name="color">
                    <option value="">--Vehicle Color==</option>
                    <option value="red">Red</option>
                    <option value="orange">Orange</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="violet">Violet</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Motor No.<span class="required-star">*</span></label>
                <input type="text" class="form-control" id="motornum" name="motornum" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Plate No.<span class="required-star">*</span></label>
                <input type="text" class="form-control" id="platenum" name="platenum" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Body No.<span class="required-star">*</span></label>
                <input type="text" class="form-control" id="bodynum" name="bodynum" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Chassis No.<span class="required-star">*</span></label>
                <input type="text" class="form-control" id="chassisnum" name="chassisnum" required>
            </div>
        </div>
    </div>
</div>


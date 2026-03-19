<?php
// Step 2: Owner Information
?>
<div class="step-panel" id="step-2">
    <div class="section-card">
        <div class="section-label"><i class="bi bi-person-fill me-1"></i>Owner Information</div>
        <div class="row g-3">
            <div class="col-md-8">
                <label class="form-label">Toda Name <span class="required-star">*</span></label>
                <input type="text" class="form-control" id="company" name="comname" placeholder="Company Name" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">First Name <span class="required-star">*</span></label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="col-md-2">
                <label class="form-label">Middle Initial <span class="required-star">*</span></label>
                <input type="text" class="form-control" id="middlename" name="middlename" required>
            </div>
            <div class="col-md-8">
                <label class="form-label">Address <span class="required-star">*</span></label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="col-md-4">
    <label class="form-label">Barangay</label>
    <select class="form-control select2" id="barangay" name="barangay" required>
        <option value="">--Barangay--</option>
        <?php
            for ($i = 1; $i <= 188; $i++) {
                if ($i === 176) {
                    foreach (['A', 'B', 'C', 'D', 'E', 'F'] as $letter) {
                        echo "<option value='Barangay 176{$letter}'>Barangay 176{$letter}</option>";
                    }
                } else {
                    echo "<option value='Barangay {$i}'>Barangay {$i}</option>";
                }
            }
        ?>
    </select>
</div>
        </div>
    </div>
</div>





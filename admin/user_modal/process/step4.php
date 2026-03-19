<?php
// Step 4: ID Picture Registration
?>
<div class="step-panel" id="step-4">
    <div class="section-card">
        <div class="section-label">
            <i class="bi bi-camera me-1"></i>ID Registration
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="photoUpload" name="photoUpload" accept="image/*">
            </div>
            <div class="col-md-6">
                <label class="form-label">Use Camera</label><br>
                <button type="button" class="btn btn-primary" onclick="startCamera()"> <i class="bi bi-camera"></i> Open Camera
                </button>
                <button type="button" class="btn btn-success" onclick="capturePhoto()">Capture</button>
            </div>
            <div class="col-md-6">
                <video id="video" width="100%" autoplay class="border rounded" style="display:none;"></video>
            </div>
            <div class="col-md-6 text-center">
                <canvas id="canvas" style="display:none;"></canvas>
                <img id="preview" class="img-fluid border rounded" alt="Preview" style="max-height:200px;">
            </div>
        </div>
        <input type="hidden" name="captured_image" id="captured_image">
    </div>
</div>



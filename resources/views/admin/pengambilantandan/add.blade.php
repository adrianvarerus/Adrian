<div class="modal fade" id="dataEntryModal" tabindex="-1" aria-labelledby="dataEntryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dataEntryModalLabel">Data Entry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for Data Entry -->
                <form>
                    <div class="mb-3">
                        <label for="pencobaan" class="form-label">No Pencobaan</label>
                        <select class="form-select" id="nomorPercobaan" size="5">
                            <option value="AP22S">AP22S</option>
                            <option value="AP23S">AP23S</option>
                            <option value="AP24S">AP24S</option>
                            <option value="AP25S">AP25S</option>
                            <option value="AP26S">AP26S</option>
                            <option value="AP27S">AP27S</option>
                            <option value="AP28S">AP28S</option>
                            <option value="KL05S">KL05S</option>
                            <option value="AP29S">AP29S</option>
                            <option value="AD20S">AD20S</option>
                            <option value="AD21S">AD21S</option>
                            <option value="AD22S">AD22S</option>
                            <option value="AP30S">AP30S</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="noPersil" class="form-label">No Persilangan</label>
                        <select class="form-select" id="noPersilangan" size="5">
                                <option>MK724</option>
                                <option>MK725</option>
                                <option>MK727</option>
                                <option>MK734</option>
                                <option>MK715</option>
                                <option>MK717</option>
                                <option>MK736</option>
                                <option>MK737</option>
                                <option>MK718</option>
                                <option>MK700</option>
                                <option>MK723</option>
                                <option>MK728</option>
                                <option>MK730</option>
                                <option>MK732</option>
                            </select>
                    </div>
                    <!-- Add more fields as needed -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap CSS and JS (if not included in your project) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pengambilan Tandan</h1>
            </div>
        </div>
    </div>
</section>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="noRegPohon" class="form-label form-label-lg">No Registrasi Pohon :</label>
                <input type="text" id="noRegPohon" class="form-control form-control-lg" value="-" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <label for="noSampel" class="form-label form-label-lg">No Sampel :</label>
                <input type="text" id="noSampel" class="form-control form-control-lg" value="-" readonly>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="tanggalPanen" class="form-label form-label-lg">Tanggal Panen :</label>
                <input type="date" id="tanggalPanen" class="form-control form-control-lg">
            </div>
        </div>
    </div>

    <div class="row align-items-center mb-4">
        <label for="tipeBuah" class="form-label form-label-lg">Tipe Buah :</label>
        <div class="col-md-3 d-flex">
            <input type="text" id="tipeBuah" class="form-control form-control-lg text-center" value="-" readonly>
            <button class="btn btn-secondary btn-custom ml-2">Ubah Tipe</button>
        </div>
        <div class="col-md-9 d-flex flex-column align-items-end">
            <button class="btn btn-primary btn-save mb-2">Panen Baru</button>
            <button class="btn btn-success btn-save">Simpan</button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="noRegSampelTandan" class="form-label form-label-lg">No Registrasi Sampel Tandan :</label>
                <input type="text" id="noRegSampelTandan" class="form-control form-control-lg" value="-"
                    readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="noRegKartu" class="form-label form-label-lg">No Registrasi Kartu :</label>
                <input type="text" id="noRegKartu" class="form-control form-control-lg" value="-" readonly>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#dataEntryModal">Review</a>
                <table class="table">
                    <tr>
                        <td>No Kartu</td>
                        <td>Pencobaan</td>
                        <td>No</td>
                        <td>No Persil</td>
                        <td>Reg Pohon</td>
                        <td>Sampel</td>
                        <td>Reg sampel</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@include('admin.pengambilantandan.add')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
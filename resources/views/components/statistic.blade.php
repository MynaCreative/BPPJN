<div class="row align-items-stretch mb-6">
    <div class="col-lg-3 col-md-6 dark text-center col-padding" style="background-color: #bb3834;">
        <i class="i-plain i-xlarge mx-auto bi-people"></i>
        <div class="counter counter-lined"><span data-from="0" data-to="{{ $collections['data']['jumlahUser'] ?? 0 }}" data-refresh-interval="50" data-speed="2000"></span></div>
        <h5>Jumlah User</h5>
    </div>
    <div class="col-lg-3 col-md-6 dark text-center col-padding" style="background-color: #c34e4a;">
        <i class="i-plain i-xlarge mx-auto bi-file-arrow-down"></i>
        <div class="counter counter-lined"><span data-from="0" data-to="{{ $collections['data']['permohonanBaru'] ?? 0 }}" data-refresh-interval="100" data-speed="2500"></span></div>
        <h5>Permohonan Baru</h5>
    </div>
    <div class="col-lg-3 col-md-6 dark text-center col-padding" style="background-color: #bb3834;">
        <i class="i-plain i-xlarge mx-auto bi-file-check"></i>
        <div class="counter counter-lined"><span data-from="0" data-to="{{ $collections['data']['permohonanSelesai'] ?? 0 }}" data-refresh-interval="25" data-speed="3500"></span></div>
        <h5>Permohonan Selesai</h5>
    </div>
    <div class="col-lg-3 col-md-6 dark text-center col-padding" style="background-color: #c34e4a;">
        <i class="i-plain i-xlarge mx-auto bi-building"></i>
        <div class="counter counter-lined"><span data-from="0" data-to="{{ $collections['data']['jumlahInstansi'] ?? 0 }}" data-refresh-interval="30" data-speed="2700"></span></div>
        <h5>Jumlah Instansi</h5>
    </div>
</div>
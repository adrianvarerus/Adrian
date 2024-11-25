<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
</section>
<div class="dashboard-content">
  <!-- Statistik Utama -->
  <section class="stats">
    <div class="stat-card">
      <h3>Jumlah Pengguna</h3>
      <p>1,200</p>
    </div>
    <div class="stat-card">
      <h3>Transaksi Hari Ini</h3>
      <p>300</p>
    </div>
    <div class="stat-card">
      <h3>Total Pendapatan</h3>
      <p>Rp 50,000,000</p>
    </div>
    <div class="stat-card">
      <h3>Produk Terlaris</h3>
      <p>Produk A</p>
    </div>
  </section>

  <!-- Grafik Data -->
  <section class="charts">
    <div class="chart-container">
      <h3>Grafik Penjualan Harian</h3>
      <canvas id="salesChart"></canvas>
    </div>
    <div class="chart-container">
      <h3>Grafik Pengguna Aktif</h3>
      <canvas id="userChart"></canvas>
    </div>
  </section>

  <!-- Aktivitas Terbaru -->
  <section class="recent-activity">
    <h3>Aktivitas Terbaru</h3>
    <ul>
      <li>Transaksi #12345 oleh pengguna A</li>
      <li>Pengguna baru B bergabung</li>
      <li>Produk C terjual sebanyak 10 unit</li>
    </ul>
  </section>
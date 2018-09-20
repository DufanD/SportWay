<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
        google.load("visualization", "1", {
            packages: ["corechart"]
        });
        google.setOnLoadCallback(drawChart1);

        function drawChart1() {
            var data = google.visualization.arrayToDataTable([
                ['Produk', 'Terjual', 'Stock_allitem'],
                ['Basket', 300, 400],
                ['Badminton', 150, 600],
                ['Futsal', 350, 500],
                ['Renang', 250, 500]
            ]);

            var options = {
                title: 'Sportway_diagram',
                hAxis: {
                    title: 'Produk Brand',
                    titleTextStyle: {
                        color: 'red'
                    }
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
            chart.draw(data, options);
        }

        google.load("visualization", "1", {
            packages: ["corechart"]
        });
        google.setOnLoadCallback(drawChart2);

        function drawChart2() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'keuntungan', 'rugi'],
                ['2013', 1000000, 40000],
                ['2014', 1170000, 46000],
                ['2015', 6600000, 112000],
                ['2016', 6030000, 540000],
                ['2017', 90300000, 540000],
                ['2018', 10030000, 540000]
            ]);

            var options = {
                title: 'Company Economy',
                hAxis: {
                    title: 'Year',
                    titleTextStyle: {
                        color: '#333'
                    }
                },
                vAxis: {
                    minValue: 0
                }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
            chart.draw(data, options);
        }

        $(window).resize(function() {
            drawChart1();
            drawChart2();
        });

    </script>
      <div class="">

          <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <div class="count"><?= $user; ?></div>
                <h3>Jumlah User</h3>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-cubes"></i>
                </div>
                <div class="count"><?= $item; ?></div>
                <h3>Jumlah Produk</h3>
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-exchange"></i>
                </div>
                <div class="count"><?= $trans; ?></div>
                <h3>Transaksi Berhasil</h3>
              </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <h3>Transaksi Terakhir</h3>
                <hr>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Id Pembelian</th>
                      <th>Nama Pemesan</th>
                      <th>Kota Tujuan</th>
                      <th>Tanggal Pesan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $i=1;
                    foreach ($last->result() as $key) { ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $key->id_pembelian; ?></td>
                        <td><?= $key->nama_pelanggan; ?></td>
                        <td><?= $key->kota; ?></td>
                        <td><?= date('d M Y', strtotime($key->tanggal_pembelian)); ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><center>Grafik Data Penjualan</center></h1>
                        <p><center>Sportway (Produk Setiap Bulan) </center></p>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <hr />
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div id="chart_div1" class="chart"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="chart_div2" class="chart"></div>
                    </div>
                </div>
              </div>
            </div>
          </div>

      </div>
    <style>
        .chart {
            width: 100%;
            min-height: 200px;
        }

    </style>
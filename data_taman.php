<?php include "header.php"; ?>
<!-- start banner Area -->
<section class="about-banner relative" style="background: url(img/pink.jpg); background-size: cover;">
  <div class="overlay overlay-bg" style="margin-bottom:340px"></div>
  <div class="container">
	<a href="index.php" class="primary-btn text-uppercase"  style="font-family:poppins;background-color:palevioletred">Lihat Detail</a>
				<a href="data_taman.php" class="primary-btn text-uppercase" style="font-family:poppins;background-color:palevioletred">Data Taman</a>
				<a href="tentangme.php" class="primary-btn text-uppercase" style="font-family:poppins;background-color:palevioletred">Info</a>

    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-black">
          Data Wisata
        </h1>
        <p class="text-black link-nav" style="font-size: 19px; ">Halaman ini memuat informasi Tempat Taman Rekreasi di Kota Bandar Lampung</p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap" style="background: url(img/pink.jpg); background-size: cover;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 info-left">
        <img class="img-fluid" src="img/about/info-img.jpg" alt="">
      </div>

      <div class="col-lg-30 into-right" data-aos="fade-up" data-aos-delay="100">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">

            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
                <thead>
                  <tr>
                    <th width="5%">No.</th>
                    <th width="30%">Nama Wisata</th>
                    <th width="30%">Alamat</th>
                    <th width="20%">Harga Tiket</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $data = file_get_contents('http://localhost/helena2/ambildata.php');
                  $no = 1;
                  if (json_decode($data, true)) {
                    $obj = json_decode($data);
                    foreach ($obj->results as $item) {
                  ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $item->nama_taman; ?></td>
                        <td><?php echo $item->alamat; ?></td>
                        <td>Rp. <?php echo $item->harga_tiket; ?></td>
                        <td  >
                          <div >
                            <a href="detail.php?id_taman=<?php echo $item->id_taman; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary" style="background-color:palevioletred">
                              <i class="fa fa-map-marker" style="background-color:palevioletred"> </i> Detail dan Lokasi</a>&nbsp;
                          </div>
                        </td>
                      </tr>
                  <?php $no++;
                    }
                  } else {
                    echo "data tidak ada.";
                  } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- End about-info Area -->
<?php include "footer.php"; ?>

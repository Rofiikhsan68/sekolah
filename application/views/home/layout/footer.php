<div class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-5">

        <span>Copyright &copy;
          <?= date('Y') ?> All rights reserved | SMP 148 Jakarta
        </span>

        <div class="space-30 hidden visible-xs"></div>
      </div>
      <div class="col-xs-12 col-md-7">
        <div class="footer-menu">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Pendaftaran</a></li>
            <li><a href="#">Tentang Sekolah </a></li>
            <li><a href="#">Visi/Misi</a></li>
            <li><a href="#">Kuota Mutasi</a></li> 
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

</footer>

<script src="<?= base_url() ?>assets/home/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?= base_url() ?>assets/home/js/vendor/jquery-ui.js"></script>
<script src="<?= base_url() ?>assets/home/js/vendor/bootstrap.min.js"></script>

<script src="<?= base_url() ?>assets/home/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/home/js/contact-form.js"></script>
<script src="<?= base_url() ?>assets/home/js/ajaxchimp.js"></script>
<script src="<?= base_url() ?>assets/home/js/scrollUp.min.js"></script>
<script src="<?= base_url() ?>assets/home/js/magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets/home/js/wow.min.js"></script>
<script src="<?= base_url() ?>assets/alert.js"></script>

<script>
   pesan = document.getElementById('pesan');
   if (pesan != null) {
     swal({
       title: document.getElementById('title').innerHTML,
       text: pesan.innerHTML,
       icon: document.getElementById('type').innerHTML,
     });
   }
 </script>

<script src="<?= base_url() ?>assets/home/js/main.js"></script>

<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->
<!-- <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> -->
</body>

<!-- Mirrored from preview.colorlib.com/theme/appy/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 13:11:36 GMT -->

</html>
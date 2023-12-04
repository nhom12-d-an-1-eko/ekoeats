<footer>
  <div class="footer-copyright-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-copy-right">
            <p>EKO EATS - NHÓM 12.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</footer>
<!-- jquery
    ============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="js/metisMenu/metisMenu.min.js"></script>
<script src="js/metisMenu/metisMenu-active.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
    ============================================ -->
<script src="js/calendar/moment.min.js"></script>
<script src="js/calendar/fullcalendar.min.js"></script>
<script src="js/calendar/fullcalendar-active.js"></script>
<!-- float JS
    ============================================ -->
<script src="js/flot/jquery.flot.js"></script>
<script src="js/flot/jquery.flot.resize.js"></script>
<script src="js/flot/curvedLines.js"></script>
<script src="js/flot/flot-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="js/main.js"></script>

<!-- ============== -->
<script>
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    // Set Data
    const data = google.visualization.arrayToDataTable([
      ['DANH MUC', 'SỐ LƯỢNG SẢN PHẨM'],
      <?php
      $tongdm = count($thongkedm);
      $i = 1;
      foreach ($thongkedm as $dm) {
        extract($dm);
        if ($i == $tongdm) {
          $dauphay = "";
        } else {
          $dauphay = ",";
        }
        echo "['" . $dm['tendm'] . "'," . $dm['demsp'] . "]" . $dauphay;
        $i += 1;
      }
      ?>
    ]);

    // Set Options
    const options = {
      title: 'THỐNG KÊ SẢN PHẨM THEO DANH MỤC',
      is3D: true
    };

    // Draw
    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);

  }
</script>
<!-- ================= -->
<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    // Set Data
    const data = google.visualization.arrayToDataTable([
       ['Price', 'Tong','giá cao nhất','giá thấp nhất','Số lượng đơn hàng'],
      <?php
      $tongdh = count($thongkedh);
      $i = 1;
      foreach ($thongkedh as $dh) {
        extract($dh);
        if ($i == $tongdh) {
          $dauphay = "";
        } else {
          $dauphay = ",";
        }
        echo "['" . $dh['ngay'] . "'," . $dh['tongtien'] . "," . $dh['maxtong'] . "," . $dh['mintong']."," . $dh['countbill'] . "]". $dauphay;
        $i += 1;
      }
      ?>
    ]);
    // Set Options
    const options = {
      title: 'Thống kê đơn hàng theo ngày',
      hAxis: { title: 'ngày đặt hàng' },
      vAxis: { title: 'giá tính nghìn đồng' },
      legend: 'true'
    };
    // Draw Chart
    const chart = new google.visualization.LineChart(document.getElementById('Chart'));
    chart.draw(data, options);
  }
</script>
</body>

</html>
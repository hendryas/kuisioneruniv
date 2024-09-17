<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <style>
    .container {
      width: 100%;
      /* padding-right:60px; */
      /* padding-left:60px; */
      margin-right: auto;
      margin-left: auto
    }

    table {
      font-size: 17px;
      font-family: "Arial";
    }

    table td {
      font-size: 17px;
      /*font-family:"Times New Roman";*/
    }

    td.border_bottom {
      border-bottom: 1pt solid black;
      border-left: 1pt solid black;
      border-top: 1pt solid black;
      border-right: 1pt solid black;
    }

    th.border_bottom {
      border-bottom: 1pt solid black;
      border-left: 1pt solid black;
      border-top: 1pt solid black;
      border-right: 1pt solid black;
    }

    td.border_samping {
      border-right: 1pt solid black;
    }

    table.border_gede {
      border-bottom: 1pt solid black;
      border-left: 1pt solid black;
      border-top: 1pt solid black;
      border-right: 1pt solid black;
    }

    .lebar-border {
      border: 1pt solid black;
      padding: 10px;
    }

    .text-center-tbl {
      text-align: center;
    }

    .text-right-tbl {
      text-align: right;
    }

    .text-center {
      text-align: center;
      border: 1pt solid black;
    }

    .line {
      margin: 1px 0;
      height: 1px;
      background: repeating-linear-gradient(to right,
          transparent,
          transparent 10px,
          black 10px,
          black 20px);
      /*10px transparent then 10px black -> repeat this!*/
    }

    .wrap {
      border-top: 1px dotted #000;
      position: relative;
      margin: 50px auto;
      width: 500px;
    }

    .text {
      background-color: #ffffff;
      top: -10px;
      position: absolute;
      left: 200px;
    }

    /* DoT Line With Scissors */
    #scissors {
      height: 5px;
      /* image height */
      width: 100%;
      margin: auto auto;
      background-image: url('http://i.stack.imgur.com/cXciH.png');

      background-repeat: no-repeat;
      background-position: right;
      /* position: relative; */
      overflow: hidden;
      /* padding-bottom: 50px; */
      padding-bottom: 10px;
    }

    /* Watermark */
    .watermark {
      position: relative;
      z-index: 0;
      background: white;
      display: block;
      min-height: 40%;
      min-width: 100%;
      color: yellow;
      border: 2px solid black;
      height: 200px;
    }

    .watermark:after {
      color: steelblue;
      font-size: 120px;
      /* text-align: center; */
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0.1
    }

    /* body {
            background: #fff repeat url("http://i.stack.imgur.com/cXciH.png");
            background-size: 100%;
            opacity: 0.2;
        } */

    .wtrmark {
      background-repeat: no-repeat;
      position: relative;
      bottom: 500px;
      left: 200px;
      z-index: 10000;
      font-size: 100px;
      color: red;
      transform: rotate(-30deg);
      opacity: 0.6;
      content: 'test';
    }

    #image {
      /* the image you want to 'watermark' */
      height: 200px;
      /* or whatever, equal to the image you want 'watermarked' */
      width: 200px;
      /* as above */
      background-image: url(path/to/image/to/be/watermarked.png);
      background-position: 0 0;
      background-repeat: no-repeat;
      position: fixed;
    }

    #image img {
      /* the actual 'watermark' */
      position: absolute;
      top: 0;
      /* or whatever */
      left: 0;
      /* or whatever, position according to taste */
      opacity: 0.5;
      /* Firefox, Chrome, Safari, Opera, IE >= 9 (preview) */
      filter: alpha(opacity=150);
      /* for <= IE 8 */
    }

    .content-container {
      position: relative;
      /* background-color: red; */
    }

    .content-container:before {
      position: absolute;
      top: 0;
      left: 0;
      background-image: url('../../module/booking/kop_k3.jpg');
      background-size: 500px;
      background-position: center;
      background-repeat: no-repeat;
      width: 100%;
      height: 100%;
      opacity: .3;
      z-index: 2;
    }

    .content-container .contents {
      position: relative;
      z-index: 5;
    }

    /* Word Spacing */
    #word-space {
      line-height: 1.8;
    }
  </style>
</head>

<body>

  <div class="container">

    <div style="margin-top:10px;text-align:center;">
      <b>TRACER STUDY KHUSUS ALUMNI</b>
    </div>

    <?php
    $totalPenguasaan = (int)$data_alumni['totalpenguasaan'];

    // $total1 =  $totalAspek + $totalKepuasan;
    $total1 = ($totalPenguasaan / 44) * 100;
    ?>

    <hr>

    <div>
      <table>
        <thead>
          <tr>
            <td>
              <p>Nama</p>
            </td>
            <td>
              <p>:</p>
            </td>
            <td>
              <p><?php echo $data_alumni['name'] ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p>Tempat</p>
            </td>
            <td>
              <p>:</p>
            </td>
            <td>
              <p><?php echo $data_alumni['tempat'] ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p>Alamat</p>
            </td>
            <td>
              <p>:</p>
            </td>
            <td>
              <p><?php echo $data_alumni['alamat'] ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p>Phone</p>
            </td>
            <td>
              <p>:</p>
            </td>
            <td>
              <p><?php echo $data_alumni['phone'] ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p>Email</p>
            </td>
            <td>
              <p>:</p>
            </td>
            <td>
              <p><?php echo $data_alumni['email'] ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p>Total Penguasaan</p>
            </td>
            <td>
              <p>:</p>
            </td>
            <td>
              <b><?php echo $data_alumni['totalpenguasaan'] ?></b>
            </td>
          </tr>
          <tr>
            <td>
              <p>Rata - Rata</p>
            </td>
            <td>
              <p>:</p>
            </td>
            <td>
              <?php if ($total1 <= 64) : ?>
                <b> <?php echo round($total1) ?> (Sangat Buruk)</b>
              <?php elseif ($total1 <= 76) : ?>
                <b><?php echo round($total1) ?> (Kurang Baik)</b>
              <?php elseif ($total1 <= 88) : ?>
                <b><?php echo round($total1) ?> (Baik)</b>
              <?php elseif ($total1 <= 100) : ?>
                <b><?php echo round($total1) ?> (Sangat Baik)</b>
              <?php endif; ?>
            </td>
          </tr>
        </thead>
      </table>
    </div>

    <div style="margin-top:200px;margin-left:500px;">
      <!-- <p>Pimpinan</p> -->
    </div>
    <div style="margin-top:60px;margin-left:505px;">
    </div>

  </div>


</body>

</html>
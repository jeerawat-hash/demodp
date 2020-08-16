<?php 

    

        $home = array("", array("","","","","","","","","","") );
        $story = array("", array("","","","","","","","","","") );
        $org = array("", array("","","","","","","","","","") );
        $notice = array("", array("","","","","","","","","","") );
        $services = array("", array("","","","","","","","","","") );
        $laws = array("", array("","","","","","","","","","") );
        $product = array("", array("","","","","","","","","","") );
        $contact = array("", array("","","","","","","","","","") );
     


        switch ($page_focus) {
            case 'home':
                
                $home[0] = "active";
 
                break;
            case 'story':
                
                $story[0] = "active";
                $story[1][$page_menu] = "active";
 
                break;

            case 'org':
                
                $org[0] = "active";
                $org[1][$page_menu] = "active";
 
                break;

            case 'notice':
                
                $notice[0] = "active";
                $notice[1][$page_menu] = "active";
 
                break;

            case 'services':
                
                $services[0] = "active"; 
                $services[1][$page_menu] = "active";
 
                break;

            case 'laws':
                
                $laws[0] = "active"; 
                $laws[1][$page_menu] = "active";
 
                break;

            case 'product':
                
                $product[0] = "active"; 
 
                break;
            case 'contact':
                
                $contact[0] = "active"; 
 
                break;
             

        }


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ศูนย์พัฒนาศักยภาพและอาชีพคนพิการพระประแดง</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://demo.jantra.co/AssetsHome/img/favicon.ico" rel="icon">
  <link href="https://demo.jantra.co/AssetsHome/img/favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://demo.jantra.co/AssetsHome/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://demo.jantra.co/AssetsHome/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="https://demo.jantra.co/AssetsHome/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://demo.jantra.co/AssetsHome/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="https://demo.jantra.co/AssetsHome/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="https://demo.jantra.co/AssetsHome/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://demo.jantra.co/AssetsHome/vendor/aos/aos.css" rel="stylesheet">

 <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
 <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">

  <!-- Template Main CSS File -->
  <link href="https://demo.jantra.co/AssetsHome/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v2.1.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light">  <a href="https://demo.jantra.co/index.php/Home/"><img src="https://demo.jantra.co/AssetsHome/img/logo103.png"  alt=""   ></a>    </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="https://demo.jantra.co/AssetsHome/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

 

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          <!--
          <li class="<?php echo $home[0]; ?>"><a href="https://demo.jantra.co/index.php/Home/">หน้าหลัก</a></li>
          -->
          <!--
          <li class="<?php echo $story[0]; ?>"><a href="https://demo.jantra.co/index.php/Home/story">ประวัติความเป็นมา</a>
          </li>
          -->


          <li class="drop-down <?php echo $story[0]; ?>" >

              <a href="javascript:void(0);">ประวัติความเป็นมา</a>

            <ul>
              <li class="<?php echo $story[1][0]; ?>" ><a href="https://demo.jantra.co/index.php/Home/story">ประวัติ</a></li>
              <li class="<?php echo $story[1][1]; ?>" ><a href="https://demo.jantra.co/index.php/Home/org">ทำเนียบผู้บริหาร</a></li>
            </ul>

          </li>
 
          <!--
          <li class="<?php echo $org[0]; ?>"><a href="https://demo.jantra.co/index.php/Home/org">โครงสร้างการบริหาร</a></li> -->

          <li class="drop-down <?php echo $org[0]; ?>" >

              <a href="javascript:void(0);">โครงสร้างการบริหาร</a>

            <ul>
              <li class="<?php echo $org[1][0]; ?>" ><a href="https://demo.jantra.co/index.php/Home/orga">วิสัยทัศน์/ภารกิจ/หน้าที่รับผิดชอบ</a></li>
              <li class="<?php echo $org[1][1]; ?>" ><a href="https://demo.jantra.co/index.php/Home/orgb">โครงสร้างหน่วยงาน</a></li>
            </ul>

          </li>

 

          <li class="drop-down <?php echo $services[0]; ?>" >

              <a href="javascript:void(0);">การให้บริการ</a>

            <ul>
              <li class="<?php echo $services[1][0]; ?>" ><a href="https://demo.jantra.co/index.php/Home/servicesa">บริการฝึกอาชีพ</a></li>
              <li class="<?php echo $services[1][1]; ?>" ><a href="https://demo.jantra.co/index.php/Home/servicesb">ศูนย์บริการคนพิการสาขา</a></li>
              <li class="<?php echo $services[1][2]; ?>" ><a href="https://demo.jantra.co/index.php/Home/servicesc">กายบำบัด</a></li>
            </ul>

          </li>



          

 
<!--
          <li class="<?php echo $services[0]; ?>"><a href="https://demo.jantra.co/index.php/Home/services">บริการฝึกอาชีพ/สวัสดิการ/สิทธิ</a></li>
  -->




          <li class="drop-down <?php echo $laws[0]; ?>" >

              <a href="javascript:void(0);">กฏหมาย/ระเบียบ/เอกสารวิชาการ</a>

            <ul>
              <li class="<?php echo $laws[1][0]; ?>" ><a href="https://demo.jantra.co/index.php/Home/lawsa">กฏหมาย/พ.ร.บ.</a></li>
              <li class="<?php echo $laws[1][1]; ?>" ><a href="https://demo.jantra.co/index.php/Home/lawsb">ระเบียบ/ข้อบังคับ</a></li>
              <li class="<?php echo $laws[1][2]; ?>" ><a href="https://demo.jantra.co/index.php/Home/lawsc">เอกสารวิชาการ</a></li>
            </ul>

          </li>





          <!--
          <li class="<?php echo $laws[0]; ?>" ><a href="https://demo.jantra.co/index.php/Home/laws">ระเบียบกฏหมายวิชาการ</a></li>
          -->





          <li class="drop-down <?php echo $notice[0]; ?>" >

              <a href="javascript:void(0);">ประชาสัมพันธ์</a>

            <ul>
              <li class="<?php echo $notice[1][0]; ?>" ><a href="https://demo.jantra.co/index.php/Home/noticenewsa">ข่าวสารทั่วไป</a></li>
              <li class="<?php echo $notice[1][1]; ?>" ><a href="https://demo.jantra.co/index.php/Home/noticenewsb">ปฏิทินกิจกรรม</a></li>
              <li class="<?php echo $notice[1][2]; ?>" ><a href="https://demo.jantra.co/index.php/Home/noticenewsc">จัดซื้อจัดจ้าง/ประกาศราคา</a></li>
              <li class="<?php echo $notice[1][3]; ?>" ><a href="https://demo.jantra.co/index.php/Home/noticenewsd">สมัครงาน</a></li>
            </ul>

          </li>




          <li class="<?php echo $product[0]; ?>" ><a href="https://demo.jantra.co/index.php/Home/product">ผลิตภัณฑ์ฝีมือคนพิการ</a></li>
















         <!-- <li class="drop-down"><a href="">ติดต่อ</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li class="<?php echo $contact[0]; ?>" ><a href="https://demo.jantra.co/index.php/Home/contact">ติดต่อ</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<script src="https://demo.jantra.co/AssetsHome/org/src/orgchart.js"></script>
<link rel="stylesheet" href="https://demo.jantra.co/AssetsHome/org/src/orgchart.css" type="text/css" />

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>โครงสร้างหน่วยงาน</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

 



    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        
        <div class="row">

          <div class="col-lg-12 col-md-6 align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">

                <a href="https://demo.jantra.co/AssetsHome/img/orgb1.png" data-gall="portfolioGallery" class="venobox preview-link" title="ภาพทำเนียบ">
                <img src="https://demo.jantra.co/AssetsHome/img/orgb1.png"  class="img-fluid" alt="">

                </a>
               
              </div>
              <div class="member-info">
                <h4>ทำเนียบเจ้าหน้าที่</h4>
                <!--<span>CTO</span> -->
              </div>
            </div>




            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">

                <a href="https://demo.jantra.co/AssetsHome/img/orgb2.png" data-gall="portfolioGallery" class="venobox preview-link" title="ภาพแผนภูมิ">
                <img src="https://demo.jantra.co/AssetsHome/img/orgb2.png"  class="img-fluid" alt="">

                </a>
               
              </div>
              <div class="member-info">
                <h4>แผนภูมิ</h4>
                <!--<span>CTO</span> -->
              </div>
            </div>






          </div>
 

        </div>
 


      </div>
    </section><!-- End Our Team Section -->
 




 
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>หน่วยงานที่เกี่ยวข้อง</h2>
         <!-- <p>เนื้อหา.....</p> -->
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://demo.jantra.co/AssetsHome/img/clients/ban1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://demo.jantra.co/AssetsHome/img/clients/ban2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://demo.jantra.co/AssetsHome/img/clients/ban3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://demo.jantra.co/AssetsHome/img/clients/ban4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://demo.jantra.co/AssetsHome/img/clients/ban5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://demo.jantra.co/AssetsHome/img/clients/ban6.png" class="img-fluid" alt="">
            </div>
          </div>

<!--
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://demo.jantra.co/AssetsHome/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://demo.jantra.co/AssetsHome/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>
      -->

        </div>

      </div>
    </section><!-- End Our Clients Section -->

  </main><!-- End #main -->





  <script type="text/javascript">
      
      $(function(){

       $.ajax({
              dataType: "json",
              url: "https://demo.jantra.co/AssetsHome/org/sample.json"}).done( function( data ) {
                OrgTree.makeOrgTree($('#tree'), data);
              });

      });   

       

 

  </script>
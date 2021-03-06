 
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>ประชาสัมพันธ์โครงการ</h2> 
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">


            
           <div id="NewsContent"></div>


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">ค้นหา</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->
    
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->



  <script type="text/javascript">
    
    $(function(){
      var htmlall = "";
      var html = '<article class="entry" data-aos="fade-up">'+
              '<div class="entry-img">'+
                '<img src="https://demo.jantra.co/AssetsHome/img/blog-4.jpg" alt="" class="img-fluid">'+
              '</div>'+
              '<h2 class="entry-title">'+
              '<a href="blog-single.html">หัวข้อโครงการ.</a>'+
              '</h2>'+
              '<div class="entry-meta">'+
                '<ul>'+
                  '<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">ระบบ</a></li>'+
                  '<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>'+
                  '<li class="d-flex align-items-center">'+
                '</ul>'+
              '</div>'+
              '<div class="entry-content">'+
               ' <p>เนื่อหาโครงการ'+
                '</p>'+
                '<div class="read-more">'+
                  '<a href="https://demo.jantra.co/index.php/Home/newsdetail">รายละเอียด</a>'+
                '</div>'+
              '</div>'+
            '</article>';

      for (var i = 0; i < 1; i++) {
          htmlall += html;
      }


      $("#NewsContent").html(htmlall);



      var timer;

      $(window).scroll(function() {
        if(timer) {
          window.clearTimeout(timer);
        }

        timer = window.setTimeout(function() {
          // actual callback
          //console.log( "Firing!" );
          $("#NewsContent").append(html);


        }, 1000);
      });



  

    });

  </script>


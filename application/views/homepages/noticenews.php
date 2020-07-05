 
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>ประชาสัมพันธ์ข่าวสาร</h2> 
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
              '<a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem. Veniam eius velit ab ipsa quidem rem.</a>'+
              '</h2>'+
              '<div class="entry-meta">'+
                '<ul>'+
                  '<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>'+
                  '<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>'+
                  '<li class="d-flex align-items-center">'+
                '</ul>'+
              '</div>'+
              '<div class="entry-content">'+
               ' <p>'+
               '  Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.'+
                '  Quia sed sunt. Ea asperiores expedita et et delectus voluptates rerum. Id saepe ut itaque quod qui voluptas nobis porro rerum. Quam quia nesciunt qui aut est non omnis. Inventore occaecati et quaerat magni itaque nam voluptas. Voluptatem ducimus sint id earum ut nesciunt sed corrupti nemo.'+
                '</p>'+
                '<div class="read-more">'+
                  '<a href="blog-single.html">Read More</a>'+
                '</div>'+
              '</div>'+
            '</article>';

      for (var i = 0; i < 3; i++) {
          htmlall += html;
      }


      $("#NewsContent").html(htmlall);

      $(window).on("scroll",function(){

        //alert("scroll");
        var htmlplus = "";
        for (var i = 0; i < 1; i++) {
          htmlplus += html;
        }

        $("#NewsContent").append(htmlplus);


      })


    });

  </script>


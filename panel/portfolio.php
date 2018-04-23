<?php
   //Header
   $header = 'navbar.php';
   if(file_exists($header)){require $header;}
   else{die('Nie udało się pobrać pliku nagłówka');}
   $one->add_gallery_item($db);
   $one->remove_portfolio_el($db);
   ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/isotope.js"></script>
<div class="content-wrapper">
   <div class="container-fluid" id="contents">
      <ol class="breadcrumb">
         <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
            <a href="portfolio.php" >Edycja sekcji "Portfolio"</a>
         </li>
      </ol>
      <a href="categories.php"><button type="button" class="btn btn-outline-danger btn-lg btn-block">Edytuj heading sekcji oraz kategorie</button></a>
      <br>
      <form method="POST">
         <div class="form-group">
            <label for="sizes">Size <code>width2,height2</code> </label>
            <input type="text" name ="sizes" class="form-control" id="sizes" value="">
         </div>
         <div class="form-group">
            <label for="img_src">Image source <code>URL</code> </label>
            <input type="text" name ="img_src" class="form-control" id="img_src" value="">
         </div>
         <div class="form-group  form-inline">
            <div class="form-group">
               <label for="category">Category&nbsp; </label>
               <input type="text" name ="category" class="form-control" id="category" value="">
            </div>
            <div class="form-group">
               <label for="img_alt">&nbsp;Image alt&nbsp;</label>
               <input type="text" name ="img_alt" class="form-control" id="img_alt" value="">
            </div>
            <div class="form-group">
               <label for="img_button">&nbsp;&nbsp;&nbsp;Image button text&nbsp;</label>
               <input type="text" name ="img_button" class="form-control" id="img_button" value="">
            </div>
         </div>
         <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter">
         Podgląd kategorii
         </button>
         <!-- Modal -->
         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">Kategorie</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <?php $one->tooltip_category($db);?>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Zamknij</button>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="form-group">
            <label for="modal_src">Modal name</label>
            <input type="text" name ="modal_src" class="form-control" id="modal_src" value="">
         </div>
         <div class="form-group">
            <label for="modal_header">Modal header</label>
            <input type="text" name ="modal_header" class="form-control" id="modal_header" value="">
         </div>
         <div class="form-group">
            <label for="modal_img">Modal image </label>
            <input type="text" name ="modal_img" class="form-control" id="modal_img" value="">
         </div>
         <div class="form-group">
            <label for="modal_p">Paragraph<code>&ltp&gt</code> </label>
            <textarea name="modal_p" class="form-control" id="modal_p" rows="3"></textarea>
         </div>
         <div class="form-group">
            <label for="modal_href">Modal button link</label>
            <input type="text" name ="modal_href" class="form-control" id="modal_href" value="">
         </div>
         <hr>
         <button type="submit" class="btn btn-primary">Dodaj</button>
      </form>
      <br><br><br>
      <div class="row">
         <?php $one->create_frontend_categories($db); ?>
      </div>
      <?php $one->back_portfolio_table($db); ?>
   </div>
</div>
<script>
   var $grid = $('.grid').isotope({
     itemSelector: '.grid-item',
     percentPosition: true,
     masonry: {
       columnWidth: '.grid-sizer'
     }
   });
   $('.filter button').on("click", function () {
           var value = $(this).attr('data-name');
             $grid.isotope({
               filter: value
             });
           $('.filter button').removeClass('active');
           $(this).addClass('active');
         })
</script>
<?php
   $footer = 'footer.php';
   if(file_exists($footer)){require $footer;}
   else{die('Nie udało się pobrać pliku stopki');}
   ?>
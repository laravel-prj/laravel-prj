<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>
   .autocomplete-group { padding: 2px 5px; }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partial.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-content">
   <div class="top-page">
      <!-- this is content -->
      <section id="sec1">
         <p style="font-size: 5cm;">&#8903;</p>
         <p>Design your own style...</p>
      </section>
      <section id="sec2">
         <div class="container" >
            <h1  style="font-size: 45px;color: rgba(87, 216, 141, 0.795) ;text-indent: 30px;  background-image: url(Image/product/bgLV.jpg);border-radius:10px;box-shadow: 2px 2px 3px rgba(0,0,200,0.4);" id="LV">  Louis Vuitton </p></h1>
            <div class="row" style="height: 320px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="jeanLV.html"> Jeans</a></div>
                  <div class="panel-body"> <a href="jeanLV.html"> <img src="Image/product/jean1.jpg" alt="jeanLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="hoodieLV.html"> Hoodies</a></div>
                  <div class="panel-body"><a href="hoodieLV.html"><img src="Image/product/hoodie.jpg" alt="hoodieLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$250.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="jacketLV.html"> Jacket</a></div>
                  <div class="panel-body"><a href="jacketLV.html"><img src="Image/product/khoac.png" alt="jacketLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="bagsLV.html"> Bags</a></div>
                  <div class="panel-body"><a href="bagsLV.html"><img src="Image/product/bags1.png" alt="bagsLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="shoesLV.html"> Sneaker</a></div>
                  <div class="panel-body"><a href="shoesLV.html"><img src="Image/product/shoes1.png" alt="shoesLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$650.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sunglassesLV.html"> Sunglasses</a></div>
                  <div class="panel-body"><a href="sunglassesLV.html"><img src="Image/product/kinh.png" alt="sunglassesLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
            </div>
         </div>

         <hr style="border:groove">
         <br>
         <div class="container" >
            <h1  style="font-size: 45px;color: rgba(233, 114, 35, 0.74); text-indent: 30px; background-image: url(Image/product/bgBB.jpg);border-radius:10px;box-shadow: 2px 2px 3px rgba(2, 2, 36, 0.4);" id="BR">  Burberry</p></h1>
            <div class="row" style="height: 320px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="bagsBR.html"> Bags</a></div>
                  <div class="panel-body"><a href="bagsBR.html"><img src="Image/product/bags2.png" alt="bagsBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="shoesBR.html"> Shoes</a></div>
                  <div class="panel-body"><a href="shoesBR.html"><img src="Image/product/shoes2.png" alt="shoesBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$500.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sunglassesBR.html"> Sunglasses</a></div>
                  <div class="panel-body"><a href="sunglassesBR.html"><img src="Image/product/kinh2.png" alt="kinhBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$200.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="cap.html">Cap</a></div>
                  <div class="panel-body"><a href="cap.html"><img src="Image/product/cap.png" alt="CapBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$200.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="scarfBR.html"> Cashmere Scarf</a></div>
                  <div class="panel-body"><a href="scarfBR.html"><img src="Image/product/scarf.webp" alt="scarfBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="hooded.html">Hooded Cape</a></div>
                  <div class="panel-body"><a href="hooded.html"><img src="Image/product/hooded.png" alt="hooded" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$900.00</div>
               </div>
            </div>
         </div>

         <hr style="border:groove">
         <br>
         <div class="container" >
            <img src="Image/product/pt2k.png" alt="">
            <div class="row" style="height: 320px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="jeanPT.html"> Jeans</a></div>
                  <div class="panel-body"> <a href="jeanPT.html"> <img src="Image/product/jeanPT.jpg" alt="jeanpt" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$250.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="capPT.html"> Cap</a></div>
                  <div class="panel-body"><a href="capPT.html"><img src="Image/product/capPT.jpg" alt="capPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$100.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sneakerPT.html"> Shoes</a></div>
                  <div class="panel-body"><a href="sneakerPT.html"><img src="Image/product/sneakerPT.jpg" alt="sneakerPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$500.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="ringPT.html"> Rings</a></div>
                  <div class="panel-body"><a href="ringPT.html"><img src="Image/product/nhanPT.jpg" alt="ringPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="necklacesPT.html"> Necklaces</a></div>
                  <div class="panel-body"><a href="necklacesPT.html"><img src="Image/product/daychuyenPT.jpg" alt="necklacesPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$300.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="braceletsPT.jpg"> Bracelets</a></div>
                  <div class="panel-body"><a href="braceletsPT.html"><img src="Image/product/vongPT.jpg" alt="vongPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
            </div>
         </div>

         <hr style="border:groove">
         <br>
         <div class="container" >
            <img src="Image/product/logoYame.png" alt="" style="border-radius:10px;box-shadow: 2px 2px 5px rgba(42, 42, 230, 0.4);">
            <br>
            <br>
            <div class="row" style="height: 320px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="trousersYAME.html">Trousers</a></div>
                  <div class="panel-body"><a href="trousersYAME.html"><img src="Image/product/quanYAME.jpg" alt="quanYAME" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$200.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="coatYAME.html"> Coat</a></div>
                  <div class="panel-body"><a href="coatYAME.html"><img src="Image/product/khoacYAME.jpg" alt="khoacYAME" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$250.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="jeanYAME.html">Jeans </a></div>
                  <div class="panel-body"><a href="jeanYAME.html"><img src="Image/product/jeanYame.jpg" alt=jeanYame" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="t-shirtYAME.html">T-Shirt</a></div>
                  <div class="panel-body"><a href="t-shirtYAME.html"><img src="Image/product/aothunYAME.jpg" alt="TshirtYAME" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$100.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sneakerYAME.html">Sneaker</a></div>
                  <div class="panel-body"><a href="sneakerYAME.html"><img src="Image/product/sneakerYAME.jpg" alt="capYAME" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="capYAME.html">Cap</a></div>
                  <div class="panel-body"><a href="capYAME.html"><img src="Image/product/capYAME.jpg" alt="capYAME" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
            </div>
         </div>

         <hr style="border:groove">
         <br>
         <div class="container" >
            <img src="Image/product/logoRoutine.png" alt="">
            <div class="row" style="height: 320px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="pantRoutine.html"> Kaki Pant</a></div>
                  <div class="panel-body"><a href="pantRoutine.html"><img src="Image/product/quanRoutine.jpg" alt="quanRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$250.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sweaterRoutine.html">Sweater</a></div>
                  <div class="panel-body"><a href="sweaterRoutine.html"><img src="Image/product/sweaterRoutine.jpg" alt="sweaterRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$200.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="bowRoutine.html"> Bow</a></div>
                  <div class="panel-body"> <a href="bowRoutine.html"> <img src="Image/product/bowRoutine.jpg" alt="bowRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$50.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="sneakerRoutine.html">Sneaker</a></div>
                  <div class="panel-body"><a href="sneakerRoutine.html"><img src="Image/product/sneakerRoutine.jpg" alt="sneakerRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$500.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="socksRoutine.html"> Socks</a></div>
                  <div class="panel-body"><a href="socksRoutine.html"><img src="Image/product/socks.jpg" alt="socks" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$15.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="superRoutine.html"> Superman Cape</a></div>
                  <div class="panel-body"><a href="superRoutine.html"><img src="Image/product/superRoutine.jpg" alt="superRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$500.00</div>
               </div>
            </div>
         </div>

      </section>
      <section id="sec3">
         <br><br><br>
         <button>SHOP ALL COLLECTIONS</button>
      </section>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script>

<script>
   $(function () {
       // your custom javascript
   });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Downloads\example-app\resources\views/pages/top-page/index.blade.php ENDPATH**/ ?>
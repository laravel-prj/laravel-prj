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
<?php $__env->startSection('content'); ?>
<div class="main-content">
   <div class="top-page">
      <!-- this is content -->
      <section id="sec1">
         <br>
         <p style="font-size: 5cm;">&#8903;</p>
         <p>Design your own style...</p>
      </section>
      <section id="sec2">
         <div class="container" >
            <h1  style="font-size: 45px;color:aqua ;text-indent: 30px;  background-image: url(Image/Product/bgLV.jpg);border-radius:10px;box-shadow: 2px 2px 3px rgba(0,0,200,0.4);" id="LV">  Louis Vuitton </p></h1>
            <div class="row" style="height: 315px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="jeanLV.html" style="color:dodgerblue"> Jeans</a></div>
                  <div class="panel-body"> <a href="jeanLV.html"> <img src="Image/Product/jean1.jpg" alt="jean1" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="hoodieLV.html" style="color:dodgerblue"> Hoodies</a></div>
                  <div class="panel-body"><a href="hoodieLV.html"><img src="Image/Product/hoodie.jpg" alt="hoodieLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$250.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="jacketLV.html" style="color:dodgerblue"> Jacket</a></div>
                  <div class="panel-body"><a href="jacketLV.html"><img src="Image/Product/khoac.png" alt="jacketLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="bagsLV.html" style="color:dodgerblue"> Bags</a></div>
                  <div class="panel-body"><a href="bagsLV.html"><img src="Image/Product/bags1.png" alt="bagsLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="shoesLV.html"  style="color:dodgerblue"> Sneaker</a></div>
                  <div class="panel-body"><a href="shoesLV.html"><img src="Image/Product/shoes1.png" alt="shoesLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$650.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sunglassesLV.html" style="color:dodgerblue"> Sunglasses</a></div>
                  <div class="panel-body"><a href="sunglassesLV.html"><img src="Image/Product/kinh.png" alt="sunglassesLV" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
            </div>
         </div>
         <hr style="border:groove">
         <br>
         <div class="container" >
            <h1  style="font-size: 45px;color: rgba(233, 114, 35, 0.74); text-indent: 30px; background-image: url(Image/Product/bgBB.jpg);border-radius:10px;box-shadow: 2px 2px 3px rgba(2, 2, 36, 0.4);" id="BR">  Burberry</p></h1>
            <div class="row" style="height: 315px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="bagsBR.html" style="color:dodgerblue"> Bags</a></div>
                  <div class="panel-body"><a href="bagsBR.html"><img src="Image/Product/bags2.png" alt="bagsBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="shoesBR.html" style="color:dodgerblue"> Shoes</a></div>
                  <div class="panel-body"><a href="shoesBR.html"><img src="Image/Product/shoes2.png" alt="shoesBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$500.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sunglassesBR.html" style="color:dodgerblue"> Sunglasses</a></div>
                  <div class="panel-body"><a href="sunglassesBR.html"><img src="Image/Product/kinh2.png" alt="kinhBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$200.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="cap.html" style="color:dodgerblue">Cap</a></div>
                  <div class="panel-body"><a href="cap.html"><img src="Image/Product/cap.png" alt="CapBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"> </a></div>
                  <div class="panel-footer">$200.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="scarfBR.html" style="color:dodgerblue"> Cashmere Scarf</a></div>
                  <div class="panel-body"><a href="scarfBR.html"><img src="Image/Product/scarf.webp" alt="scarfBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="hooded.html" style="color:dodgerblue">Hooded Cape</a></div>
                  <div class="panel-body"><a href="hooded.html"><img src="Image/Product/hooded.png" alt=hooded"" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$900.00</div>
               </div>
            </div>
         </div>
         <hr style="border:groove">
         <br>
         <div class="container" >
            <img src="Image/Product/pt2k.png" alt="">
            <div class="row" style="height: 315px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="jeanPT.html" style="color:dodgerblue"> Jeans</a></div>
                  <div class="panel-body"> <a href="jeanPT.html"> <img src="Image/Product/jeanPT.jpg" alt="jeanpt" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$250.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="capPT.html" style="color:dodgerblue"> Cap</a></div>
                  <div class="panel-body"><a href="capPT.html"><img src="Image/Product/capPT.jpg" alt="capPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$100.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sneakerPT.html" style="color:dodgerblue"> Shoes</a></div>
                  <div class="panel-body"><a href="sneakerPT.html"><img src="Image/Product/sneakerPT.jpg" alt="sneakerPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$500.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="ringPT.html" style="color:dodgerblue"> Rings</a></div>
                  <div class="panel-body"><a href="ringPT.html"><img src="Image/Product/nhanPT.jpg" alt="ringPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="necklacesPT.html" style="color:dodgerblue"> Necklaces</a></div>
                  <div class="panel-body"><a href="necklacesPT.html"><img src="Image/Product/daychuyenPT.jpg" alt="necklacesPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$300.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="braceletsPT.jpg" style="color:dodgerblue"> Bracelets</a></div>
                  <div class="panel-body"><a href="braceletsPT.html"><img src="Image/Product/vongPT.jpg" alt="vongPT" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
            </div>
         </div>
         <hr style="border:groove">
         <br>
         <div class="container" >
            <img src="Image/Product/logoYame.png" alt="" style="border-radius:10px; box-shadow: 2px 2px 5px rgba(42, 42, 230, 0.4);">
            <br>
            <br>
            <div class="row" style="height: 315px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="trousersYAME.html" style="color:dodgerblue">Trousers</a></div>
                  <div class="panel-body"><a href="trousersYAME.html"><img src="Image/Product/quanYAME.jpg" alt="quanYAME" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$200.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="coatYAME.html" style="color:dodgerblue"> Coat</a></div>
                  <div class="panel-body"><a href="coatYAME.html"><img src="Image/Product/khoacYAME.jpg" alt="khoacYAME" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$250.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="jeanYAME.html" style="color:dodgerblue">Jeans </a></div>
                  <div class="panel-body"><a href="jeanYAME.html"><img src="Image/Product/jeanYame.jpg" alt=jeanYame " onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="t-shirtYAME.html" style="color:dodgerblue">T-Shirt</a></div>
                  <div class="panel-body"><a href="t-shirtYAME.html"><img src="Image/Product/aothunYAME.jpg" alt="kinhBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$100.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sneakerYAME.html" style="color:dodgerblue">Sneaker</a></div>
                  <div class="panel-body"><a href="sneakerYAME.html"><img src="Image/Product/sneakerYAME.jpg" alt="CapBR" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$400.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="capYAME.html" style="color:dodgerblue">Cap</a></div>
                  <div class="panel-body"><a href="capYAME.html"><img src="Image/Product/capYAME.jpg" alt="capYAME" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$150.00</div>
               </div>
            </div>
         </div>
         <hr style="border:groove">
         <br>
         <div class="container" >
            <img src="Image/Product/logoRoutine.png" alt="">
            <div class="row" style="height: 315px; ">
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="pantRoutine.html" style="color:dodgerblue"> Kaki Pant</a></div>
                  <div class="panel-body"><a href="pantRoutine.html"><img src="Image/Product/quanRoutine.jpg" alt="quanRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$250.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="sweaterRoutine.html" style="color:dodgerblue">Sweater</a></div>
                  <div class="panel-body"><a href="sweaterRoutine.html"><img src="Image/Product/sweaterRoutine.jpg" alt="sweaterRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$200.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="bowRoutine.html" style="color:dodgerblue"> Bow</a></div>
                  <div class="panel-body"> <a href="bowRoutine.html"> <img src="Image/Product/bowRoutine.jpg" alt="bowRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$50.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading ">  <a href="sneakerRoutine.html" style="color:dodgerblue">Sneaker</a></div>
                  <div class="panel-body"><a href="sneakerRoutine.html"><img src="Image/Product/sneakerRoutine.jpg" alt="sneakerRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$500.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="socksRoutine.html" style="color:dodgerblue"> Socks</a></div>
                  <div class="panel-body"><a href="socksRoutine.html"><img src="Image/Product/socks.jpg" alt="socks" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$15.00</div>
               </div>
               <div class="col-sm-4 panel panel-success" style="height: 100%; text-align: center;">
                  <div class="panel-heading "> <a href="superRoutine.html" style="color:dodgerblue"> Superman Cape</a></div>
                  <div class="panel-body"><a href="superRoutine.html"><img src="Image/Product/superRoutine.jpg" alt="superRoutine" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a></div>
                  <div class="panel-footer">$500.00</div>
               </div>
            </div>
         </div>
      </section>
      <section id="sec3">
         <br><br><br>
         <button onclick="window.location.href='/Project/1shops.html'">SHOP ALL COLLECTIONS</button>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\laravel prj\resources\views/pages/shop/index.blade.php ENDPATH**/ ?>
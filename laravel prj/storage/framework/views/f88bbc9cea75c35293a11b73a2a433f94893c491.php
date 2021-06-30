
<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>
    .t-alert{
        position: absolute;
        top: 118px;
        left: 0;
        right: 0;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- Cart view section -->
 <section id="checkout">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="checkout-area">
           <form method="POST" action="/post_register"  style="margin-left: 300px">
             <div class="row">
               <div class="col-md-8">
                 <div class="checkout-left">
                   <div class="panel-group" id="accordion">
                     <!-- Register -->
                     <div class="panel panel-default aa-checkout-billaddress">
                       <div class="panel-heading">
                         <h4 class="panel-title">
                           <a data-toggle="collapse" href="#collapseThree" >
                             Register
                           </a>
                         </h4>
                       </div>
                       <div id="collapseThree" class="panel-collapse collapse.show">
                         <div class="panel-body">
                           <div class="row">
                             <div class="col-md-6">
                               <div class="aa-checkout-single-bill">
                                 <input type="text" placeholder="First Name*" name="first_name">
                               </div>                             
                             </div>
                             <div class="col-md-6">
                               <div class="aa-checkout-single-bill">
                                 <input type="text" placeholder="Last Name*" name="last_name">
                               </div>
                             </div>
                           </div> 
                           
                           <div class="row">
                             <div class="col-md-6">
                               <div class="aa-checkout-single-bill">
                                 <input type="email" placeholder="Email*" name="email">
                               </div>                             
                             </div>
                             <div class="col-md-6">
                               <div class="aa-checkout-single-bill">
                                 <input type="password" placeholder="Password*" name="password">
                               </div>
                             </div>
                           </div> 
                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="Address" name="address">
                              </div>                             
                            </div>                            
                          </div>  
                           <div class="row">
                             <div class="col-md-12">
                               <div class="aa-checkout-single-bill">
                                 <input type="date" placeholder="Birthday" name="birthday">
                               </div>                             
                             </div>                            
                           </div>   
                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select>
                                  <option value=""  >Gender</option>
                                  <option value="Male" name="gender">Male</option>
                                  <option value="Female" name="gender">Female</option>
                                </select>
                              </div>                             
                            </div>                            
                          </div>
                          <div class="row">
                             <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="City" name="city">
                                </div>                             
                              </div>                      
                             <div class="col-md-6">
                               <div class="aa-checkout-single-bill">
                                 <input type="tel" placeholder="Phone*" name="tel">
                               </div>                             
                             </div>
                           </div>
                                <input type="button" value="register" style="margin-left:200px; width:100px">                          
                            </div>
                          </div>                                      
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <?php echo csrf_field(); ?>
           </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



<script>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\linh\OneDrive\Máy tính\laravel prj\resources\views/customer/pages/register.blade.php ENDPATH**/ ?>
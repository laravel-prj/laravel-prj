<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>PRODUCTS</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">shop</label>
  <div class="col-md-4">
    <select id="product_categorie" name="shop" class="form-control">
        <?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($shop->id); ?>" selected><?php echo e($shop->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">item name</label>
  <div class="col-md-4">
  <input id="product_name_fr" name="item_name" class="form-control input-md" type="text">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label">producer</label>
  <div class="col-md-4">
    <select id="product_categorie" name="type" class="form-control">
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value=""><?php echo e(strtoupper($type->producer->name)); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label">type</label>
  <div class="col-md-4">
    <select id="product_categorie" name="type" class="form-control">
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value=""><?php echo e($type->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">quantity</label>
  <div class="col-md-4">
  <input id="available_quantity" name="quantity" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">price</label>
  <div class="col-md-4">
  <input id="product_weight" name="price" class="form-control input-md" type="text">

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label">feature</label>
  <div class="col-md-4">
    <select id="product_categorie" name="feature" class="form-control">
        <option value="0" selected>binh thuong</option>
        <option value="1">pho bien</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name_fr">discount</label>
  <div class="col-md-4">
    <select id="product_categorie" name="discount" class="form-control">
        <option value="10" selected>10%</option>
        <option value="20">20%</option>
        <option value="30">30%</option>
        <option value="40">40%</option>
    </select>
  </div>
</div>


 <!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">image</label>
  <div class="col-md-4">
    <input id="filebutton" name="img" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
  </div>

</fieldset>
<?php echo e(csrf_field()); ?>

</form>
<?php /**PATH C:\Users\user\Desktop\laravel prj\resources\views/admin/pages/addproduct.blade.php ENDPATH**/ ?>
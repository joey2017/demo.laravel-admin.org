<form action="<?php echo $action; ?>" pjax-container style="display: inline-block;">
    <div class="input-group input-group-sm" style="display: inline-block;">
        <input type="text" name="<?php echo e($key); ?>" class="form-control grid-quick-search" style="width: 200px;" value="<?php echo e($value); ?>" placeholder="<?php echo e($placeholder); ?>">

        <div class="input-group-btn" style="display: inline-block;">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
 
 <?php $__env->startSection('content'); ?>
 <?php echo $__env->make('admin/modal/add', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <div class="container">
               <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Visa Cart</h4>
                                      <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <?php echo $__env->make('admin/notification/errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('admin/notification/success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Danh Sách</b></h4>
                                        <button class="btn btn-primary" id="myBtn" style="margin:10px"><i class="fa fa-plus"></i>&nbsp;ADD</button>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th >STT</th>
                                            <th >NAME</th>
                                            <th>ID CARD</th>
                                            <th style="width: 30px" >VALID DATE</th>
                                            <th >CODE</th>
                                            <th style="width: 60px">ACTION</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php $stt=1; ?>
                                        <?php $__currentLoopData = $visacards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($stt++); ?></td>
                                            <td><?php echo e($item->name); ?></td>
                                            <td><?php echo e($item->id_card); ?></td>
                                            <td><?php echo e($item->valid_date); ?></td>
                                            <td><?php echo e($item->code); ?></td>
                                            <td>
                                            <a href="<?php echo e(route('edit',$item->id)); ?>" class="btn btn-primary"  style="margin:5px"><i class="fa fa-pencil"> </i>&nbsp;EDIT</a>
                                             <a href="<?php echo e(route('delete',$item->id)); ?>" class="btn btn-danger confirm" ><i class="fa fa-trash"></i>&nbsp;DELETE</a>
                                             </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- end row -->

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
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
                                    <h4 class="m-t-0 header-title"><b>Service</b></h4>
                                      
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th >STT</th>
                                            <th>NAME</th>
                                            <th>ID CARD</th>
                                            <th>SERVICE</th>
                                            <th>STATUS</th>
                                            <th style="width: 60px">ACTION</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php $stt=1; ?>
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($stt++); ?></td>
                                            <td><?php echo e($item->card['name']); ?></td>
                                            <td><?php echo e($item->card['id_card']); ?></td>
                                            <td><input type="checkbox" <?php if( $item['name_service'] =='facebook'): ?> checked <?php endif; ?> ><span style="padding:4px">facebook</span>
                                            <input type="checkbox"<?php if($item['name_service'] == 'google'): ?> checked <?php endif; ?>   ><span style="padding:4px">google</span>
                                            <input type="checkbox" <?php if($item['name_service'] == 'amazon'): ?> checked <?php endif; ?> ><span style="padding:4px">amazon</span>
                                            <input type="checkbox" <?php if($item['name_service'] == 'microsoft'  ): ?> checked <?php endif; ?> ><span style="padding:4px">microsoft</span></td>
                                            <td><a href="" class="<?php if($item['status'] == 'Active'): ?> btn btn-info <?php else: ?> 
                                            btn btn-danger <?php endif; ?>"><?php echo e($item['status']); ?></a>
                                            </td>
                                            <td><?php if($item['status'] == 'Die'): ?>
                                            <a href="<?php echo e(route('delete-service',$item['id'])); ?>" class="btn btn-danger confirm" ><i class="fa fa-trash"></i>&nbsp;DELETE</a>
                                            <?php else: ?>
                                            <a href="<?php echo e(route('service-edit',$item['id'])); ?>" class="btn btn-primary"  style="margin:5px"><i class="fa fa-pencil"> </i>&nbsp;EDIT</a>
                                             <a href="<?php echo e(route('delete-service',$item['id'])); ?>" class="btn btn-danger confirm" ><i class="fa fa-trash"></i>&nbsp;DELETE</a>
                                             <?php endif; ?></td>
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
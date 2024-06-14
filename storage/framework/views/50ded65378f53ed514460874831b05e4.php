<?php $__env->startSection('content'); ?>
    
    <section id="foto" style="margin-top: 100px" data-aos="zoom-in-up">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="d-flex align-items-center">
                        <div class="stripe-putih me-2 mt-5"></div>
                        <h5 class="fw-bold text-white mt-5">Foto Kegiatan</h5>
                    </div>
                    
                </div>

                <!-- Carausel Section -->
                <div class="continer justify-content-center align-items-center vh-100 ">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image5.jpg')); ?>">
                                            <img src="<?php echo e(asset('image/image5.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image6.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image6.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image7.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image7.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image8.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image8.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image9.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image9.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image10.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image10.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image11.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image11.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image12.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image12.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image1.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image1.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image2.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image2.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image3.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image3.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <a class="image-link" href="<?php echo e(asset('image/image4.jpg')); ?>">
                                        <img src="<?php echo e(asset('image/image4.jpg')); ?>" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester_4\Laravel\UKMIMAM\resources\views/home/fotos/foto.blade.php ENDPATH**/ ?>
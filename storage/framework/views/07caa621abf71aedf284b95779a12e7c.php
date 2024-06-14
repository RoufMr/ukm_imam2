<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UKM IMAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
        rel="stylesheet" />
    <link rel="icon" href="<?php echo e(asset('image/logo_imam-removebg-preview.png')); ?>" class="spinner-border">
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('image/logo_imam-removebg-preview.png')); ?>" class="spinner-border" style="width: 80px; height: 50px;">

    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific.css')); ?>">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

</head>

<body>

    
    <?php echo $__env->make('home.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <section id="footer">
        <?php echo $__env->make('home.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });

    const navbar = document.querySelector(".fixed-top");
    window.onscroll = () => {
        if(window.scrollY > 50) {
            navbar.classList.add("scroll-nav-active");
            navbar.classList.add("text-nav-active");
            // navbar.classList.remove("navbar-dark");
        } else {
            navbar.classList.remove("scroll-nav-active");
            // navbar.classList.add("navbar-dark");
        }
    };

// animasi aos
    AOS.init();

    // magnific
    $(document).ready(function() {
        $('.image-link').magnificPopup({
            type: 'image',
            retina: {
                ratio: 1,
                replaceSrc: function(item, ratio) {
                    return item.src.replace(/\.\w+$/, function(m) {
                        return '@2x' + m;
                    })
                }
            }
        })
    })
</script>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="<?php echo e(asset('js/dashboard/dashboard.js')); ?>"></script>
<script src="<?php echo e(asset('js/dashboard/navbar.js')); ?>"></script>
<script src="<?php echo e(asset('js/dashboard/scroll.js')); ?>"></script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo e(asset('js/magnific.js')); ?>"></script>






</body>

</html>
<?php /**PATH D:\Semester_4\Laravel\UKMIMAM\resources\views/home/layouts/layout.blade.php ENDPATH**/ ?>
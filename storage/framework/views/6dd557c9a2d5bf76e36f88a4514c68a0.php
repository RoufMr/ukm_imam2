<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
        rel="stylesheet" />
    <link rel="icon" href="<?php echo e(asset('image/logo_imam-removebg-preview.png')); ?>" class="spinner-border">

    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>" />
</head>

<body>
    <section class="container-fluid">
        <div class="form-box">
            <div class="form-box1">
                <div class="login"><?php echo e(__('Login')); ?></div>
                <form class="form1"method="POST" action="<?php echo e(route('postlogin')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <p>
                            Do you already have an account?
                            <a href="#" >Create your account</a>
                        </p>
                    </div>

                    
                    <div class="inputbox">
                        <input id="email" type="email" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                            required autocomplete="email" autofocus>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <label for=""><?php echo e(__('Email')); ?>

                            <span class="small text-danger">*</span>
                        </label>
                    </div>

                    
                    <div class="inputbox">
                        <input id="password" type="password" class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="password" required autocomplete="current-password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <label for="password"><?php echo e(__('Password')); ?>

                            <span class="small text-danger">*</span>
                        </label>
                        
                    </div>

                    
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                    </div>
                    <button type="submit">
                        <?php echo e(__('Login')); ?>

                    </button>

                    <div class="text-center mt-4 font-weight-bold">
                        Sosial Media
                    </div>
                </form>


                <div class="social-container mt-3">
                    <div class="social-media">

                        <a href="https://www.instagram.com/imam_poliwangi/?utm_source=ig_web_button_share_sheet">
                            <svg class="instagram" width="43"
                                height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 21.5C0 33.3741 9.62588 43 21.5 43C33.3741 43 43 33.3741 43 21.5C43 9.62588 33.3741 0 21.5 0C9.62588 0 0 9.62588 0 21.5Z"
                                    fill="#F00073" />
                                <path
                                    d="M21.5 12.3625C24.4562 12.3625 24.8594 12.3625 26.0687 12.3625C27.1437 12.3625 27.6812 12.6313 28.0844 12.7656C28.6219 13.0344 29.025 13.1688 29.4281 13.5719C29.8312 13.975 30.1 14.3781 30.2344 14.9156C30.3687 15.3188 30.5031 15.8563 30.6375 16.9313C30.6375 18.1406 30.6375 18.4094 30.6375 21.5C30.6375 24.5906 30.6375 24.8594 30.6375 26.0688C30.6375 27.1438 30.3687 27.6813 30.2344 28.0844C29.9656 28.6219 29.8312 29.025 29.4281 29.4281C29.025 29.8313 28.6219 30.1 28.0844 30.2344C27.6812 30.3688 27.1437 30.5031 26.0687 30.6375C24.8594 30.6375 24.5906 30.6375 21.5 30.6375C18.4094 30.6375 18.1406 30.6375 16.9312 30.6375C15.8562 30.6375 15.3187 30.3688 14.9156 30.2344C14.3781 29.9656 13.975 29.8313 13.5719 29.4281C13.1687 29.025 12.9 28.6219 12.7656 28.0844C12.6312 27.6813 12.4969 27.1438 12.3625 26.0688C12.3625 24.8594 12.3625 24.5906 12.3625 21.5C12.3625 18.4094 12.3625 18.1406 12.3625 16.9313C12.3625 15.8563 12.6312 15.3188 12.7656 14.9156C13.0344 14.3781 13.1687 13.975 13.5719 13.5719C13.975 13.1688 14.3781 12.9 14.9156 12.7656C15.3187 12.6313 15.8562 12.4969 16.9312 12.3625C18.1406 12.3625 18.5437 12.3625 21.5 12.3625ZM21.5 10.3469C18.4094 10.3469 18.1406 10.3469 16.9312 10.3469C15.7219 10.3469 14.9156 10.6156 14.2437 10.8844C13.5719 11.1531 12.9 11.5563 12.2281 12.2281C11.5562 12.9 11.2875 13.4375 10.8844 14.2438C10.6156 14.9156 10.4812 15.7219 10.3469 16.9313C10.3469 18.1406 10.3469 18.5438 10.3469 21.5C10.3469 24.5906 10.3469 24.8594 10.3469 26.0688C10.3469 27.2781 10.6156 28.0844 10.8844 28.7563C11.1531 29.4281 11.5562 30.1 12.2281 30.7719C12.9 31.4438 13.4375 31.7125 14.2437 32.1156C14.9156 32.3844 15.7219 32.5188 16.9312 32.6531C18.1406 32.6531 18.5437 32.6531 21.5 32.6531C24.4562 32.6531 24.8594 32.6531 26.0687 32.6531C27.2781 32.6531 28.0844 32.3844 28.7562 32.1156C29.4281 31.8469 30.1 31.4438 30.7719 30.7719C31.4437 30.1 31.7125 29.5625 32.1156 28.7563C32.3844 28.0844 32.5187 27.2781 32.6531 26.0688C32.6531 24.8594 32.6531 24.4563 32.6531 21.5C32.6531 18.5438 32.6531 18.1406 32.6531 16.9313C32.6531 15.7219 32.3844 14.9156 32.1156 14.2438C31.8469 13.5719 31.4437 12.9 30.7719 12.2281C30.1 11.5563 29.5625 11.2875 28.7562 10.8844C28.0844 10.6156 27.2781 10.4813 26.0687 10.3469C24.8594 10.3469 24.5906 10.3469 21.5 10.3469Z"
                                    fill="white" />
                                <path
                                    d="M21.5 15.7219C18.275 15.7219 15.7219 18.275 15.7219 21.5C15.7219 24.725 18.275 27.2781 21.5 27.2781C24.725 27.2781 27.2781 24.725 27.2781 21.5C27.2781 18.275 24.725 15.7219 21.5 15.7219ZM21.5 25.2625C19.4844 25.2625 17.7375 23.65 17.7375 21.5C17.7375 19.4844 19.35 17.7375 21.5 17.7375C23.5156 17.7375 25.2625 19.35 25.2625 21.5C25.2625 23.5156 23.5156 25.2625 21.5 25.2625Z"
                                    fill="white" />
                                <path
                                    d="M27.4125 16.9313C28.1546 16.9313 28.7562 16.3296 28.7562 15.5875C28.7562 14.8454 28.1546 14.2438 27.4125 14.2438C26.6704 14.2438 26.0687 14.8454 26.0687 15.5875C26.0687 16.3296 26.6704 16.9313 27.4125 16.9313Z"
                                    fill="white" />
                            </svg></a>
                    </div>


                    <div class="social-media ">

                        <a href="https://youtube.com/@imampoliwangi586?si=0xpUliF7WJh0mLOB"><svg class="youtube"
                                width="43" height="43" viewBox="0 0 43 43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 21.5C0 33.3741 9.62588 43 21.5 43C33.3741 43 43 33.3741 43 21.5C43 9.62588 33.3741 0 21.5 0C9.62588 0 0 9.62588 0 21.5Z"
                                    fill="#FF0000" />
                                <path
                                    d="M31.7125 16.2594C31.4438 15.3187 30.7719 14.6469 29.8313 14.3781C28.2188 13.975 21.3656 13.975 21.3656 13.975C21.3656 13.975 14.6469 13.975 12.9 14.3781C11.9594 14.6469 11.2875 15.3187 11.0187 16.2594C10.75 18.0062 10.75 21.5 10.75 21.5C10.75 21.5 10.75 24.9937 11.1531 26.7406C11.4219 27.6812 12.0937 28.3531 13.0344 28.6219C14.6469 29.025 21.5 29.025 21.5 29.025C21.5 29.025 28.2187 29.025 29.9656 28.6219C30.9062 28.3531 31.5781 27.6812 31.8469 26.7406C32.25 24.9937 32.25 21.5 32.25 21.5C32.25 21.5 32.25 18.0062 31.7125 16.2594ZM19.35 24.725V18.275L24.9938 21.5L19.35 24.725Z"
                                    fill="white" />
                            </svg></a>
                    </div>
                </div>

            </div>

            <div class="form-box2">
                <img class="image2" src="<?php echo e(asset('image/logo_imam-removebg-preview.png')); ?>" />
            </div>
        </div>
    </section>

    <?php echo $__env->make('partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($message = Session::get('failed')): ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Email atau Password Salah!",
            });
        </script>
    <?php endif; ?>
</body>

</html>
<?php /**PATH D:\Semester_4\Laravel\UKMIMAM\resources\views/auth/login.blade.php ENDPATH**/ ?>
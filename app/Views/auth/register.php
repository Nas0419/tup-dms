<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="container flex mx-auto justify-end">
        <?php include_once(dirname(__FILE__) . '/../common/header.php'); ?>
        <div class="w-4/5">
            <div class="container mx-auto">
                <div class="flex justify-center mt-2">
                    <div class="bg-green-500 px-6 py-4 rounded-lg">
                        <h2 class="text-2xl font-bold text-white">Register</h2>
                    </div>
                </div>
                <!-- <div class="flex justify-center mt-12 space-x-4">
                    <a href="<?= site_url('compose'); ?>" class="text-blue-500 hover:underline">Compose</a>
                    <a href="<?= site_url('admin'); ?>" class="text-blue-500 hover:underline">Dashboard</a>
                    <a href="<?= site_url('logout'); ?>" class="text-blue-500 hover:underline">Logout</a>
                </div> -->
                <div class="flex justify-center mt-8">
                    <div class="w-3/4 bg-white rounded-lg shadow-lg p-6 border-2 border-slate-400">
                        <h4 class="text-2xl font-bold mb-6">Sign Up</h4>
                        <?= csrf_field(); ?>
                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                            <div class="bg-red-200 text-red-800 px-4 py-2 rounded mb-4">
                                <?= session()->getFlashdata('fail') ?>
                            </div>
                        <?php endif ?>
                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                            <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif ?>
                        <form action="<?= base_url('save') ?>" method="post">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-bold">Name</label>
                                <input type="text" class="form-input w-full border border-gray-300 rounded px-4 py-2" name="name" placeholder="Enter your name" value="<?= set_value('name'); ?>" />
                                <span class="text-red-500">
                                    <?= isset($validation) ? display_error($validation, 'name') : '' ?>
                                </span>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-bold">Email</label>
                                <input type="text" class="form-input w-full border border-gray-300 rounded px-4 py-2" name="email" placeholder="Enter your email" value="<?= set_value('email'); ?>" />
                                <span class="text-red-500">
                                    <?= isset($validation) ? display_error($validation, 'email') : '' ?>
                                </span>
                            </div>
                            <div class="mb-4">
                                <label for="role" class="block text-gray-700 font-bold">Role</label>
                                <input type="text" class="form-input w-full border border-gray-300 rounded px-4 py-2" name="role" placeholder="Enter user role" value="<?= set_value('role'); ?>" />
                                <span class="text-red-500">
                                    <?= isset($validation) ? display_error($validation, 'role') : '' ?>
                                </span>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700 font-bold">Password</label>
                                <input type="password" class="form-input w-full border border-gray-300 rounded px-4 py-2" name="password" placeholder="Enter your password" />
                                <span class="text-red-500">
                                    <?= isset($validation) ? display_error($validation, 'password') : '' ?>
                                </span>
                            </div>
                            <div class="mb-4">
                                <label for="cpassword" class="block text-gray-700 font-bold">Confirm Password</label>
                                <input type="password" class="form-input w-full border border-gray-300 rounded px-4 py-2" name="cpassword" placeholder="Enter your password again" />
                                <span class="text-red-500">
                                    <?= isset($validation) ? display_error($validation, 'cpassword') : '' ?>
                                </span>
                            </div>
                            <div class="mb-4">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-full" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
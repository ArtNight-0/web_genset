<div x-data="{ sidebarOpen: false }" class="relative">
    <!-- Sidebar -->
    <aside x-cloak :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar" id="drawer-navigation">
        <!-- Tambahkan card untuk judul atau gambar -->
        <div class="p-4 bg-gray-100 dark:bg-transparent">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">WEBGENS</h2>
            <!-- Atau gunakan gambar:
            <img src="/path/to/image.jpg" alt="Logo" class="w-full h-auto">
            -->
        </div>
        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <?php echo $__env->make('layouts.partials.sidebar-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.partials.sidebar-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php echo $__env->make('layouts.partials.sidebar-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </aside>

    <!-- Tombol burger untuk membuka sidebar -->
    <button @click="sidebarOpen = !sidebarOpen"
        class="fixed top-4 left-4 z-50 bg-gray-800 text-white p-2 rounded-md shadow-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 transition-all duration-300 ease-in-out md:hidden"
        :class="{ 'left-68': sidebarOpen }">
        <svg x-show="!sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg x-show="sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>
<?php /**PATH C:\laragon\www\webgenset\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
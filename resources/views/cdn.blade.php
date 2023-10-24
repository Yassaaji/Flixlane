<!-- Tautan CDN toastr.js -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/dist/css/toastr.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/dist/toastr.min.js"></script>

<script>
    // Fungsi untuk menampilkan notifikasi sukses
    function showSuccessNotification(message) {
        toastr.success(message, 'Sukses', { progressBar: true });
    }

    // Fungsi untuk menampilkan notifikasi error
    function showErrorNotification(message) {
        toastr.error(message, 'Error', { progressBar: true });
    }
</script>

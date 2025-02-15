<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
<script>
    // Handle Edit Modal
    var editReviewModal = document.getElementById('editReviewModal');
    editReviewModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var name = button.getAttribute('data-name');
        var email = button.getAttribute('data-email');
        var rating = button.getAttribute('data-rating');
        var content = button.getAttribute('data-content');
        var photo = button.getAttribute('data-photo');

        var form = editReviewModal.querySelector('#editReviewForm');
        form.action = `/reviews/${id}`;

        editReviewModal.querySelector('#editReviewId').value = id;
        editReviewModal.querySelector('#editReviewName').value = name;
        editReviewModal.querySelector('#editReviewEmail').value = email;
        editReviewModal.querySelector('#editReviewRating').value = rating;
        editReviewModal.querySelector('#editReviewContent').value = content;
        editReviewModal.querySelector('#currentPhoto').src = photo ? `/storage/${photo}` : '';

        // Show or hide current photo
        if (photo) {
            editReviewModal.querySelector('#currentPhoto').style.display = 'block';
        } else {
            editReviewModal.querySelector('#currentPhoto').style.display = 'none';
        }
    });
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>

<!-- Handle Edit Modal -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle edit modal data population
    var editReviewModal = document.getElementById('editReviewModal');
    editReviewModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var name = button.getAttribute('data-name');
        var email = button.getAttribute('data-email');
        var rating = button.getAttribute('data-rating');
        var content = button.getAttribute('data-content');
        var photo = button.getAttribute('data-photo');

        var form = editReviewModal.querySelector('#editReviewForm');
        form.action = `/reviews/${id}`;

        editReviewModal.querySelector('#editReviewId').value = id;
        editReviewModal.querySelector('#editReviewName').value = name;
        editReviewModal.querySelector('#editReviewEmail').value = email;
        editReviewModal.querySelector('#editReviewRating').value = rating;
        editReviewModal.querySelector('#editReviewContent').value = content;
        editReviewModal.querySelector('#currentPhoto').src = photo ? `/storage/${photo}` : '';

        // Show or hide current photo
        if (photo) {
            editReviewModal.querySelector('#currentPhoto').style.display = 'block';
        } else {
            editReviewModal.querySelector('#currentPhoto').style.display = 'none';
        }
    });

    // Display success message if available
    @if (session('success'))
        Swal.fire({
            title: 'Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'Ok'
        });
    @endif
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah form dikirim langsung

            const form = this.closest('form'); // Menemukan form terkait
            const reviewId = form.querySelector('input[name="_token"]').value; // Mendapatkan token CSRF

            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Mengirim form jika dikonfirmasi
                }
            });
        });
    });
});
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

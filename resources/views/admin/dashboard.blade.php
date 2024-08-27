<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            transition: all 0.3s;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #495057;
            border-radius: 0.25rem;
        }

        .sidebar .nav-link {
            padding: 1rem;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
            border-radius: 0.25rem;
        }

        .main-content {
            margin-left: 250px;
            padding: 1rem;
        }

        .sidebar-toggle {
            position: absolute;
            top: 1rem;
            left: 250px;
            z-index: 1000;
        }

        @media (max-width: 992px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar-toggle {
                left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="d-flex justify-content-between align-items-center p-3">
            <h4>Admin Dashboard</h4>
            <button class="btn btn-light d-md-none sidebar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle sidebar">
                <i class="bi bi-list"></i>
            </button>
        </div>
        <div class="collapse d-md-block" id="sidebarCollapse">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#dashboard">
                        <i class="bi bi-house-door"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">
                        <i class="bi bi-star"></i>
                        Reviews
                    </a>
                </li>
                <!-- Other menu items -->
                <li class="nav-item mt-auto">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="container">
            <h1>Dashboard</h1>
            <!-- Dashboard Content -->

            <!-- Reviews Section -->
            <div id="reviews" class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Manage Reviews</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReviewModal">Add Review</button>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Rating</th>
                                        <th>Content</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reviews as $review)
                                        @if($review->status)
                                            <tr>
                                                <td>{{ $review->id }}</td>
                                                <td>{{ $review->name }}</td>
                                                <td>{{ $review->email }}</td>
                                                <td>{{ $review->rating }}</td>
                                                <td>{{ Str::limit($review->isi_testimoni, 50) }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editReviewModal"
                                                            data-id="{{ $review->id }}"
                                                            data-name="{{ $review->name }}"
                                                            data-email="{{ $review->email }}"
                                                            data-rating="{{ $review->rating }}"
                                                            data-content="{{ $review->isi_testimoni }}"
                                                            data-photo="{{ $review->photo }}">
                                                        Edit
                                                    </button>
                                                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Sections -->
        </div>
    </div>

    <!-- Add Review Modal -->
    <div class="modal fade" id="addReviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addReviewModalLabel">Add Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="reviewName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="reviewName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="reviewEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="reviewEmail" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="reviewRating" class="form-label">Rating</label>
                            <input type="number" class="form-control" id="reviewRating" name="rating" min="1" max="5" required>
                        </div>
                        <div class="mb-3">
                            <label for="reviewContent" class="form-label">Content</label>
                            <textarea class="form-control" id="reviewContent" name="isi_testimoni" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="reviewPhoto" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="reviewPhoto" name="photo">
                        </div>
                        <div class="mb-3">
                            <label for="reviewStatus" class="form-label">Status</label>
                            <select class="form-select" id="reviewStatus" name="status" required>
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Review Modal -->
    <div class="modal fade" id="editReviewModal" tabindex="-1" aria-labelledby="editReviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editReviewModalLabel">Edit Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editReviewForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="editReviewId" name="id">
                        <div class="mb-3">
                            <label for="editReviewName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editReviewName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="editReviewEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editReviewEmail" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="editReviewRating" class="form-label">Rating</label>
                            <input type="number" class="form-control" id="editReviewRating" name="rating" min="1" max="5" required>
                        </div>
                        <div class="mb-3">
                            <label for="editReviewContent" class="form-label">Content</label>
                            <textarea class="form-control" id="editReviewContent" name="isi_testimoni" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editReviewPhoto" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="editReviewPhoto" name="photo">
                            <img id="currentPhoto" src="" alt="Current Photo" class="img-fluid mt-2">
                        </div>
                        <div class="mb-3">
                            <label for="editReviewStatus" class="form-label">Status</label>
                            <select class="form-select" id="editReviewStatus" name="status" required>
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


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

</html>

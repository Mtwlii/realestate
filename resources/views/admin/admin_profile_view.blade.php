@extends('admin.admin_dashboard')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div>
                                <img class="wd-100 rounded-circle"
                                    src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                    alt="profile">
                                <span class="h4 ms-3">{{ $profileData->name }}</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Username:</label>
                            <p class="text-muted">{{ $profileData->username }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                            <p class="text-muted">{{ $profileData->created_at }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">address:</label>
                            <p class="text-muted">{{ $profileData->address }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ $profileData->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            <p class="text-muted">{{ $profileData->phone }}</p>
                        </div>
                        <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title text-center">Update Admin Profile</h6>

                        <form class="forms-sample" action="{{ route('admin.profile.store', $profileData->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputUsername1"
                                    autocomplete="off" value="{{ $profileData->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputUsername1"
                                    autocomplete="off" value="{{ $profileData->username }}"">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    value="{{ $profileData->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputPassword1"
                                    autocomplete="off" value="{{ $profileData->phone }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="exampleInputPassword1"
                                    autocomplete="off" value="{{ $profileData->address }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Photo</label>
                                <input type="file" name="photo" class="form-control" id="image"
                                    autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Photo</label>
                                <img id="showImage" class="wd-80 rounded-circle"
                                    src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                    alt="profile">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary me-2 ">Save Changes</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <!-- right wrapper end -->
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
@endsection

@extends('admin.admin_dashboard')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title text-center">Edit Amenities Type</h6>
                        <form class="forms-sample" action="{{ route('update.amenitie') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $amenities->id }}">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Enter Your Property Type</label>
                                <input type="text" value="{{ $amenities->amenities_name }}" name="amenities_name" class="form-control"
                                    @error('amenities_name') is-invalid @enderror placeholder="Property Type">
                                @error('amenities_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary me-2 ">Edit</button>
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
@endsection

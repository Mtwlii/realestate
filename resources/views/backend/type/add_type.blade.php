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

                        <h6 class="card-title text-center">Add Proparty Type</h6>

                        <form class="forms-sample" action="{{ route('store.type') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Enter Your Property Type</label>
                                <input type="text" name="type_name" class="form-control"
                                    @error('type_name') is-invalid @enderror placeholder="Property Type">
                                @error('type_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Enter Your Property Icon</label>
                                <input type="text" name="type_icon" class="form-control"
                                    @error('type_icon') is-invalid @enderror placeholder="Property icon">
                                @error('type_icon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary me-2 ">ADD</button>
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

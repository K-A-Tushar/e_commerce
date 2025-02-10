<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        {{-- toast --}}
        <div aria-live="polite" aria-atomic="true" class="position-sticky mt-3">
            <div class="toast-container top-0 end-0 p-3">
                @include('toast')
            </div>
        </div>
        {{-- end toast --}}
        <div class="row">
            <div class="col-4">
                <h1>Test blade file</h1>
                <form action="{{ route('vendorStore') }}" method="post" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="shop_email" class="form-label">Shop Email</label>
                        <input type="email" class="form-control" id="shop_email" name="shop_email"
                            placeholder="Shop Email" required>
                    </div>
                    {{-- add phone_number --}}
                    <div class="col-md-6">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                            placeholder="Phone Number" required>
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password" required>
                    </div>
                    <div class="col-md-6">
                        <label for="shop_name" class="form-label">Shop Name</label>
                        <input type="text" class="form-control" id="shop_name" name="shop_name"
                            placeholder="Shop Name" required>
                    </div>
                    <div class="col-12">
                        <label for="shop_address" class="form-label">Shop Address</label>
                        <input type="text" class="form-control" id="shop_address" name="shop_address"
                            placeholder="Shop Address" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Create Vendor</button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Shop Name</th>
                            <th scope="col">Shop Address</th>
                            <th scope="col">Shop Email</th>
                            <th scope="col">Vendor Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($vendors)
                            @foreach ($vendors as $vendor)
                                <tr>
                                    <td>{{ $vendor->user->name }}</td>
                                    <td>{{ $vendor->user->phone }}</td>
                                    <td>{{ $vendor->shop_name }}</td>
                                    <td>{{ $vendor->shop_address }}</td>
                                    <td>{{ $vendor->shop_email }}</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <strong>{{ $vendor->vendor_code }}</strong>
                                            <div>
                                                <form action="{{ route('updateVendorCode', ['vendor' => encrypt($vendor->id)]) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn p-0 m-0" title="Update Vendor Code">
                                                        <i class="bi bi-arrow-clockwise"></i>
                                                    </button>
                                                </form>
                                                {{-- <form action="{{ route('deleteVendor', ['vendor' => encrypt($vendor->id)]) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn p-0 m-0" title="Delete Vendor">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>                                                 --}}
                                                {{-- update link --}}
                                            </div>
                                            <div>
                                                <a href="{{ route('editVendor', ['vendor' => encrypt($vendor->id)]) }}" class="btn p-0 m-0" title="Update Vendor">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

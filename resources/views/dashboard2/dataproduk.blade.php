@extends('dashboard.index')
@section('rightbar')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Data Product</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Data Product
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price (RP) </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Produk as $item)
                                <tr>
                                    <td>
                                        <img src="{{asset('image_product/'.$item->image)}}" alt="" style="
                                        width: 60px;
                                        border-radius: 5px;
                                        padding-top: 5%;">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->desc }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td style="
                                    display: flex;
                                    justify-content: space-evenly;
                                    padding-top: 49px;
                                    padding-bottom: 48px;
                                    margin-top: 0px;
                                    /* text-align: center; */
                                    /* justify-items: center; */
                                ">
                                        <a href="/admin/{{ $item->id }}/editproduk"><button type="button" class="btn btn-outline-warning"> Edit </button></a>

                                        <form action="/admin/hapusproduk/{{$item->id}}" method="POST"
                                            onsubmit="return confirm('yakin hapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"> Delete </button>
                                        </form>
                                        <a class="" href="/admin/{{$item->id}}/editproduk"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price (RP) </th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        <a href="/admin/tambahproduk"><button type="button" class="btn btn-outline-info" style="">ADD Product Data +</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('../assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ asset('../assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('../dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('../dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('../dist/js/custom.min.js')}}"></script>
<!-- this page js -->
<script src="{{ asset('../assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{ asset('../assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{ asset('../assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $("#zero_config").DataTable();
</script>
@endsection
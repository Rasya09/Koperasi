@extends('dashboard.index')
@section('rightbar')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">ADD Product</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Library
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<br>
@endsection

@section('content')
<div class="row ms-5">
    <div class="col-md-11">
        <div class="card">
            <form class="form-horizontal" method="POST" action="/admin/tambahproduk" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h4 class="card-title">Form Add Product</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="fname" placeholder="" name="image" value="{{ $Produk->image }}"/>
                            <div>
                                @if ($Produk)
                                <img src="{{asset('/image_product/'.$Produk->image)}}" alt="" style="
                                width: 100px;
                                border-radius: 5px;
                                margin-bottom: 5px;
                                margin-top: 10px;
                            ">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" placeholder="Name" name="name" value="{{ $Produk->name }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" placeholder="Description" name="desc" value="{{ $Produk->desc }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-end control-label col-form-label">Price</label>
                        <div class="col-md-1">
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp " disabled />
                        </div>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="email1" placeholder="Price" name="price" value="{{ $Produk->price }}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="email1" class="col-sm-3 text-end control-label col-form-label">Stock</label>
                      <div class="col-sm-9">
                          <input type="number" class="form-control" id="email1" placeholder="Stock" name="stock" value="{{ $Produk->stock }}"/>
                      </div>
                  </div>
                    
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Category</label>
                        <div class="col-sm-9">
                            <select id="kategori_id" class="form-select" name="kategori_id" value="{{ $Produk->kategori->name }}">
                                <option value=" {{ $Produk->kategori->id }} "> {{$Produk->kategori->name}} </option>
                            </select>
                          {{-- <select class="select2 form-select shadow-none" style="width: 100%; height: 36px" name="kategori_id">
                            @foreach ($Kategori as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select> --}}
                            {{-- <input type="text" class="form-control" id="cono1" placeholder="Category" name="kategori_id" /> --}}
                        </div>
                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
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
<!-- This Page JS -->
<script src="{{ asset('../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{ asset('../dist/js/pages/mask/mask.init.js')}}"></script>
<script src="{{ asset('../assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{ asset('../assets/libs/select2/dist/js/select2.min.js')}}"></script>
<script src="{{ asset('../assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
<script src="{{ asset('../assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
<script src="{{ asset('../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
<script src="{{ asset('../assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
<script src="{{ asset('../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('../assets/libs/quill/dist/quill.min.js')}}"></script>
<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr("data-control") || "hue",
            position: $(this).attr("data-position") || "bottom left",

            change: function (value, opacity) {
                if (!value) return;
                if (opacity) value += ", " + opacity;
                if (typeof console === "object") {
                    console.log(value);
                }
            },
            theme: "bootstrap",
        });
    });
    /*datwpicker*/
    jQuery(".mydatepicker").datepicker();
    jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
    });
    var quill = new Quill("#editor", {
        theme: "snow",
    });
</script>
@endsection
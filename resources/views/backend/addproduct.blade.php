@extends('layouts.backendLayout')

@section('content')

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Add Products</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Page
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

<section>


<div class="container">

            <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-8">
                <div class="card-style mb-30">
         <h6 class="mb-25">Add Products</h6>
                <!--input starts-->
            <div class="input-style-1">
                <input value="" name='title' type="text" placeholder="Product Title">
                @error('title')
                        <div class="text-danger">{{$message}}</div>
                 @enderror
            </div>


            <div class="row">
                <div class="input-style-1 col-lg-6">
                    <input value="" name='price' type="text" placeholder="Price">
                    @error('price')
                            <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="input-style-1 col-lg-6">
                    <input value="" name='sell_price' type="text" placeholder="Selling price">
                    @error('sell_price')
                            <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
            </div>



            <div class="row">
                <div class="input-style-1 col-lg-4">
                    <input value="" name='sku' type="text" placeholder="sku">
                    @error('sku')
                            <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="input-style-1 col-lg-4">
                    <div class="select-style-1">
                        
                        <div class="select-position">
                          <select name="stock" id="stock">
                            <option selected value="{{true}}">In Stock</option>
                            <option value="{{false}}">Out Of Stock</option>
                          </select>
                          @error('stock')
                          <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                      </div>
                </div>
                <div class="input-style-1 col-lg-4">
                    <input value="" name='brand' type="text" placeholder="Brand">
                    @error('brand')
                            <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
            </div>

            <div class="d-lg-flex">
 
                <div class="form-check form-switch toggle-switch mb-30 me-5"  style="width: fit-content">
                    <input class="form-check-input" type="checkbox" name="status" id="status" checked="">
                    <label class="form-check-label" for="status">Status</label>
            
                </div>
                <div class="form-check form-switch toggle-switch mb-30 me-5" style="width: fit-content">
                  <input class="form-check-input" type="checkbox" name="featured"  id="featured">
                  <label class="form-check-label" for="featured">Featured</label>
                </div>
                
            
            </div>
            

            <!--submit button-->
            <div class="mx-auto" style="width:fit-content">
                <button type="submit"class="main-btn primary-btn rounded-full btn-hover">Add</button>
            </div>
        
       
            
        </div>
    </div>

    <div class="col-lg-4">
        <h1>hello</h1>
    </div>
  </form>
</div>


@endsection
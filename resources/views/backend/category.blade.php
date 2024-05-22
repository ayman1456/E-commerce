
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
                  <h2>Category</h2>
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
        <div class="row">
            <div class="col-lg-4">
                <div class="card-style mb-30">
                    <form method="POST" action="{{route('category.add',$foundcategory->id??"")}}" enctype="multipart/form-data">
                        @csrf
                    <h6 class="mb-25">{{Request::routeIs('category.show')? 'Add Category':'Edit Category'}}</h6>
                    <div class="input-style-1">
                      <input value="{{$foundcategory->title ?? ''}}" name='title' type="text" placeholder="Category Title">
                    </div>
                    <!--select section-->
                 
               
                      <div class="select-style-1">
                        <label>Sub-Category</label>
                        <div class="select-position">
                          <select name="parent_id" id="parent_id">
                            <option disabled selected>Select Sub-Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                            
                            
                          </select>
                        </div>
                      </div>
                
                    <!--select ends-->

                      <input type="file" class="form-control mb-3" name="cat_icon"></input>
                      @error('cat_icon')
                        <div class="text-danger">{{$message}}</div>
                      @enderror

                    <div class="mx-auto" style="width:fit-content">
                      <button type="submit"class="main-btn primary-btn rounded-full btn-hover">
                        {{Request::routeIs('category.show')? 'Add Category':'Save Changes'}}
                      </button>
                    </div>
                    
                   
                </form>
                  </div>
            </div>

            <!--table-->
            <div class="col-lg-8">
                <div class="card-style mb-30">
                    <h6 class="mb-10">All categories</h6>
                    <div class="table-wrapper table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <h6>#</h6>
                            </th>
                            <th>
                              <h6>Name</h6>
                            </th>
                            <th>
                              <h6>Slug</h6>
                            </th>
                            <th>
                              <h6>Action</h6>
                            </th>
                          </tr>
                          <!-- end table row-->
                        </thead>

                        <tbody>
                          @foreach ($parentcategories as $key => $category )
                              <tr>
                                <td>{{$categories->firstitem()+$key}}</td>
                                <td>{{$category->title}}</td>
                                <td>{{$category->title_slug}}</td>
                                <td>
                                <a class="" href="{{route('category.edit',$category->id)}}"> <i class="lni lni-pencil"></i></a>
                                <a class="" href="{{route('category.delete',$category->id)}}"> <i class="lni lni-trash-can"></i></a>
                                </td>
                              </tr>
                              <!--sub-category-->

                              @if ($category->subcategories)

                              @foreach ($category->subcategories as $subcategory)
                                
                              
                              <tr>
                                <td>--</td>
                                <td>{{$subcategory->title}}</td>
                                <td>{{$subcategory->title_slug}}</td>
                                <td>
                                  <a class="" href="{{route('category.edit',$subcategory->id)}}"> <i class="lni lni-pencil"></i></a>
                                  <a class="" href="{{route('category.delete',$subcategory->id)}}"> <i class="lni lni-trash-can"></i></a>
                                  </td>
                                
                              </tr>

                              @include('layouts.components.CategoryComponent')

                              @endforeach
                              @endif
                              

                          
                          
                          @endforeach
                          <!-- end table row -->
                          
                        </tbody>
                      </table>
                      <!-- end table -->
                      <div class=" mx-auto mt-5" style="width:fit-content">{{$categories->links()}}</div>
                      
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

@endsection
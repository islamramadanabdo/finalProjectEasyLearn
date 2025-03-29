@extends('backend.layout.main')

@section('content')

          <!-- Main Content -->
          <div class="main-content">
            <section class="section">
              <div class="section-header">
                <h1>Categories Section</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                  <div class="breadcrumb-item"><a href="{{route('categories.index')}}">Categories</a></div>
                  <div class="breadcrumb-item">Create</div>
                </div>
              </div>

              <div class="section-body">
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Add New Category</h4>
                      </div>
                      <div class="card-body">
                        <form action="{{route('categories.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Categroy Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
                              </div>

                              <div class="form-group">
                                  <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </section>
          </div>

@endsection

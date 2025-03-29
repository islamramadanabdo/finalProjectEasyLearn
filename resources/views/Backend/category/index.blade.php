@extends('backend.layout.main')


@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>All Categories</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Categories</a></div>
              <div class="breadcrumb-item">All Categories</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header"  style="justify-content: center;">
                    <h4 class="">All Categories</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Created At</th>
                          <th>Action</th>
                        </tr>

                        @foreach ($categroies as $category  )
                            <tr>
                                <td> {{ $category->id }} </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <form  class="d-inline-block" action="{{  route('categories.destroy' , $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-s">Delete</button>
                                    </form>

                                    <a href="{{ route('categories.edit' , $category->id ) }}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </section>
      </div>
@endsection

  @extends('dashboard.layout.main')

  @section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Report</h1>
  </div>
          <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Description</th>
                <th scope="col">Location</th>
                <th scope="col">Published</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                  @foreach ($advisories as $advisory)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $advisory->id }}</td>
                <td>{{ $advisory->description }}</td>
                <td>{{ $advisory->location }}</td>
                <td>{{ $advisory->published_at}}</td>
                <td>
                  <form action="/dashboard/post/{{ $advisory->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><span data-feather="trash-2"></span></button>
                  </form>                 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
  </div>
  @endsection

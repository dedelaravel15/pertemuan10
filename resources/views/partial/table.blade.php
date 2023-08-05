<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-0 text-center">Data Admin</h5>
            <form action="/create" method="get">
                <button type="submit" class="btn btn-success">Tambah Data</button>
            </form>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama lengkap</th>
                <th scope="col">Jenis kelamin</th>
                <th scope="col">Tempat lahir</th>
                <th scope="col">Tanggal lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
              <tr>
                <th scope="col">{{$loop->iteration}}</th>
                <td>{{$student->nama}}</td>
                <td>{{$student->jenkel}}</td>
                <td>{{$student->tempat_lahir}}</td>
                <td>{{$student->tanggal_lahir}}</td>
                <td>{{$student->alamat}}</td>
                <td class="d-flex m-2"> 
                    <form action="edit/{{$student->id}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-info me-2">Edit</button>
                    </form>
                    <form action="/delete/{{$student->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@extends('admin.layouts.app')

@section('css')
    <link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
            <h1 class="h4">Pengguna</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a class="button mx-2 px-4 py-2"><i class="fa-solid fa-plus"></i> Penyewa</a>
              <a class="button mx-2 px-4 py-2"><i class="fa-solid fa-plus"></i> Pemilik mobil</a>
              <a class="button mx-2 px-4 py-2"><i class="fa-solid fa-plus"></i> Sopir</a>
              <a class="button mx-2 px-4 py-2"><i class="fa-solid fa-plus"></i> Admin</a>
              <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle button-trans" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin Rentalku
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                </div>
                </div>
            </div>
          </div>

          <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
          <div class="table-responsive">
            <table class="table table-sm" id="table-pengguna">
              <thead>
                <tr>
                  <th>Email</th>
                  <th>Nama pengguna</th>
                  <th>Sebagai</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>aris@gmail.com</td>
                  <td>Aris</td>
                  <td>Penyewa</td>
                  <td>
                    <button type="button" class="delete-button px-3 py-1"><i class="fa-solid fa-trash"></i></button>
                    <button type="button" class="edit-button px-3 py-1"><i class="fa-solid fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>aris@gmail.com</td>
                  <td>Aris</td>
                  <td>Penyewa</td>
                  <td>
                    <button type="button" class="delete-button px-3 py-1"><i class="fa-solid fa-trash"></i></button>
                    <button type="button" class="edit-button px-3 py-1"><i class="fa-solid fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>aris@gmail.com</td>
                  <td>Aris</td>
                  <td>Penyewa</td>
                  <td>
                    <button type="button" class="delete-button px-3 py-1"><i class="fa-solid fa-trash"></i></button>
                    <button type="button" class="edit-button px-3 py-1"><i class="fa-solid fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>aris@gmail.com</td>
                  <td>Aris</td>
                  <td>Penyewa</td>
                  <td>
                    <button type="button" class="delete-button px-3 py-1"><i class="fa-solid fa-trash"></i></button>
                    <button type="button" class="edit-button px-3 py-1"><i class="fa-solid fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>aris@gmail.com</td>
                  <td>Aris</td>
                  <td>Penyewa</td>
                  <td>
                    <button type="button" class="delete-button px-3 py-1"  onclick="modal_delete(2)"><i class="fa-solid fa-trash"></i></button>
                    <button type="button" class="edit-button px-3 py-1"><i class="fa-solid fa-edit"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                  <div class="row">
                  <div class="col-12">
                    <img src="{{ asset('image/delete-alert.png') }}" class="mx-auto d-block" alt="">
                  </div>
                  </div>
                  <div class="col-12 text-center">
                  <h2>Perhatian</h2>
                  <p>Apakah Anda yakin akan menghapus pengguna tersebut dari basis data aplikasi RentalKu?</p>
                  </div>
                  <form action='{{ route("admin.user.delete", "0" ) }}' id="formdelete" method="get">
                  <div class="row px-5">
                    <div class="col-6">
                    <button type="button" class="btn btn-secondary btn-block btn-cancel" data-dismiss="modal">Tidak</button>
                    </div>
                    <div class="col-6">
                    <button type="submit" class="btn btn-primary btn-block btn-oke">Iya</button>
                    </div>
                  </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
        

@endsection

@section('js')
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.min.js') }}"></script>
  <script>
    function modal_delete(id){
      $('#deleteModal').modal("show"); 
      user_id = id;
      var url = '{{ route("admin.user.delete", ":id") }}';
      url = url.replace(':id', user_id);
      $("#formdelete").attr('action',url);
    }
    $(document).ready(function() {
        $('#table-pengguna').DataTable({
          "language" : {
            "decimal":        "",
            "emptyTable":     "No data available in table",
            "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ baris",
            "infoEmpty":      "Menampilkan 0 to 0 of 0 entries",
            "infoFiltered":   "(filtered from _MAX_ total entries)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Tampilkan _MENU_ baris",
            "loadingRecords": "Loading...",
            "processing":     "Processing...",
            "search":         "Cari:",
            "zeroRecords":    "No matching records found",
            "paginate": {
                "first":      "First",
                "last":       "Last",
                "next":       "Next",
                "previous":   "Previous"
            },
            "aria": {
                "sortAscending":  ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        }
        });
    } );
  </script>
  
@endsection
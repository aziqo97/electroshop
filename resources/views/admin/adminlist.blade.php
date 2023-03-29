<x-adminhead>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
              <span style="font-size: 30px;">Adminlar ro'yxati</span><a href="/admin/adminlist" type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Admin qo'shish</a>

      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Ismi va Familyasi</th>
                    <th>Email</th>
                    <th>Lavozimi</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($admins as $admins)
                  <tr>
                    <td>{{ $admins->name }}</td>
                    <td>{{ $admins->email }}</td>
                    <td>{{$admins->role_id}}</td>
                    <td><a href="/admin/adminlist/destroy/{{ $admins->id }}"> O'chirish</a></td>
                  </tr>
                  @endforeach

                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</x-adminhead>

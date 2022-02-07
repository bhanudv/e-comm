@extends('layouts.adminlte')

@section('content')
<div class="content-wrapper">
  
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="font-weight-bold">Category</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <div class="row">
                    <div class="form-group col-6">
                      <label class="small">Name</label>
                      <textarea type="text" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="form-group col-6">
                      <label class="small">Description</label>
                      <textarea type="text" class="form-control form-control-sm"></textarea>
                    </div>
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="update" type="button" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-default">
              <div class="card-header">
                  <h3 class="card-title">Add Category</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-6">
                      <label class="small">Name</label>
                      <textarea type="text" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="form-group col-6">
                      <label class="small">Description</label>
                      <textarea type="text" class="form-control form-control-sm"></textarea>
                    </div>
                  </div>
              </div>
              <div class="card-footer">
                <button id="save" class="btn btn-primary">Save</button>
              </div>
      </div>
      
          <div class="card card-default">
              <div class="card-header">
                  <h3 class="card-title">Category List</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="form-group col-12">
                          <div id="category-wrapper">
                              <table id="category" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Description</th>
                                  <th>Control</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>data</td>
                                <td>data</td>
                                <td>
                                  <button class="btn btn-warning font-weight-bold" data-toggle="modal" data-target="#modal-lg">Update</button>
                                  <button id="delete" class="btn btn-danger font-weight-bold">Delete</button>
                                </td>
                              </tr>
                              </tbody>
                              <tfoot>
                              <tr>
                                  <th>Name</th>
                                  <th>Description</th>
                                  <th>Control</th>
                              </tr>
                              </tfoot>
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

@section('script')
  <script>
    
    $('#modal-lg').on('hidden.bs.modal', function () {
     
    });

    function validate(ar) {
      var hasEmpty = false;
      ar.forEach((val) => {
        if(val == "") {
          hasEmpty = true;
        }
      });
      return hasEmpty;
    }

    $('#save').on('click', () => {
      
      if(!validate(["", ""])) {
        Swal.fire({
          icon: 'success',
          title: 'Done!',
          text: 'Data successfully saved.'
        })
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Failed!',
          text: 'Please fill all fields.'
        })
      } 
      
    });

    $('#update').on('click', () => {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $('#modal-lg').modal('toggle');
          Swal.fire(
            'Deleted!',
            'Your Data has been deleted.',
            'success'
          )
        }
      })
    });

    $('#delete').on('click', () => {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
    });

    $(function () {
        $("#category").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#category-wrapper .col-md-6:eq(0)');
    });
  </script>
  @endsection

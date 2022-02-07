@extends('layouts.adminlte')

@section('content')
<div class="content-wrapper">
  
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="font-weight-bold">Customer</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Customer</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      
          <div class="card card-default">
              <div class="card-header">
                  <h3 class="card-title">Customer List</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="form-group col-12">
                          <div id="sub-category-wrapper">
                              <table id="sub-category" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Contact</th>
                                  <th>Control</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($customers as $customer)
                              <tr onclick="table({{ $customer['id'] }})">
                                <td>{{ $customer['first_name'] }}</td>
                                <td>{{ $customer['last_name'] }}</td>
                                <td>{{ $customer['contact_1'] }}</td>
                                <td>
                                  <button class="btn btn-info font-weight-bold">Email</button>
                                  <button id="delete" class="btn btn-danger font-weight-bold">Delete</button>
                                </td>
                              </tr>
                              @endforeach
                              </tbody>
                              <tfoot>
                              <tr>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Contact</th>
                                  <th>Control</th>
                              </tr>
                              </tfoot>
                              </table>
                          </div>
                      </div>

                      <div class="form-group col-6">
                        <label class="small">Contact #2</label>
                        <input disabled id="contact-2" type="text" class="form-control form-control-border border-width-2 form-control-sm">
                      </div>

                      <div class="form-group col-6">
                        <label class="small">Address</label>
                        <input disabled id="address" type="text" class="form-control form-control-border border-width-2 form-control-sm">
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

    function table(id) {
      
      $.ajax({
        url: '{{ URL::route('customer.show') }}',
        method: 'GET',
        data: {id: id},
        success: (res) => {
          $('#contact-2').val(res.contact_2);
          $('#address').val(res.address);
        }
      });
    }

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
        $("#sub-category").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#sub-category-wrapper .col-md-6:eq(0)');
    });
  </script>
  @endsection

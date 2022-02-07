@extends('layouts.adminlte')

@section('content')
<div class="content-wrapper">
  
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="font-weight-bold">Update Item</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Item</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Basic Info</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="form-group col-2">
              <label class="small">Item No</label>
              <input class="form-control form-control-sm" type="text" placeholder="I0001">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-6">
              <label class="small">Name</label>
              <textarea class="form-control form-control-sm" type="text" placeholder="Enter Name"></textarea>
            </div>

            <div class="form-group col-6">
              <label class="small">Description</label>
              <textarea class="form-control form-control-sm" type="text" placeholder="Enter Description"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-6">
              <label class="small">Select Category</label>
              <select class="form-control form-control-sm select2" name="category" id="category">
                <option value="">1</option>
              </select> 
            </div>

            <div class="form-group col-6">
              <label class="small">Select Sub Category</label>
              <select class="form-control form-control-sm select2" name="sub-category" id="sub-category">
              <option value="">1</option>
              </select>
            </div>

            <div class="form-group col-6">
              <label class="small">Brand</label>
              <select class="form-control form-control-sm select2" name="brand" id="brand">
              <option value="">1</option>
              </select>
            </div>

            <div class="form-group col-6">
              <label class="small">Warranty</label>
              <div class="input-group">
                <input type="text" class="form-control form-control-sm">
                <div class="input-group-append">
                  <select class="form-control select2 form-control-sm" name="warranty-type" id="warranty-type">
                    <option value="">Year</option>
                    <option value="">Week</option>
                    <option value="">Month</option>
                    <option value="">Day</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-4">
              <label class="small">SIH</label>
              <input type="text" class="form-control form-control-sm">
            </div>

            <div class="form-group col-4">
                <label class="small">Primary Color</label>

                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control form-control-sm">

                  <div class="input-group-append">
                    <span class="input-group-text form-control form-control-sm"><i class="fas fa-square"></i></span>
                  </div>
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group col-4">
                <label class="small">Secondary Color (optional)</label>

                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control form-control-sm">

                  <div class="input-group-append">
                    <span class="input-group-text form-control form-control-sm"><i class="fas fa-square"></i></span>
                  </div>
                </div>
                <!-- /.input group -->
              </div>

            <div class="form-group col-4">
              <label class="small">Base Price</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text form-control form-control-sm">$</span>
                </div>
                <input type="text" class="form-control form-control-sm">
              </div>
            </div>

            <div class="form-group col-4">
              <label class="small">Discount</label>
              <div class="input-group">
                <input type="text" class="form-control form-control-sm">
                <div class="input-group-append">
                  <span class="input-group-text form-control form-control-sm">%</span>
                </div>
              </div>
            </div>

            <div class="form-group col-4">
              <label class="small">Final Price</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text form-control form-control-sm">$</span>
                </div>
                <input type="text" class="form-control form-control-sm">
              </div>
            </div>

          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary font-weight-bold">Save Progress</button>
        </div>
      </div>
      
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Features</h3>
        </div>
        <div class="card-body">
          <div class="row">
          <div class="form-group col-6">
              <label class="small">Title</label>
                <textarea type="text" class="form-control form-control-sm"></textarea>
            </div>

            <div class="form-group col-6">
              <label class="small">Description</label>
                <textarea type="text" class="form-control form-control-sm"></textarea>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary font-weight-bold">Save Progress</button>
        </div>
      </div> 
      
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Specs</h3>
        </div>
        <div class="card-body">
          <div class="row">
          <div class="form-group col-6">
              <label class="small">Question</label>
                <textarea type="text" class="form-control form-control-sm"></textarea>
            </div>

            <div class="form-group col-6">
              <label class="small">Answer</label>
                <textarea type="text" class="form-control form-control-sm"></textarea>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary font-weight-bold">Save Progress</button>
        </div>
      </div>  

    </div>
  </section>
</div>
@endsection

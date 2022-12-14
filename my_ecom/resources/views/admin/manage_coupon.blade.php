@extends('admin.layout')
@section('page_title','Manage Coupon')
@section('coupon_select','active')

@section('container')


<h1 class="mb10">Manage  Coupon</h1>

<a href="{{url('admin/coupon')}}">
<button type="button" class="btn btn-success">
Back
</button>
</a>
<div class="row m-t-30">
	<div class="col-md-12">

	 
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            	
                                <div class="card">
                                    
                                    <div class="card-body">
                                        
                                        <form action="{{route('coupon.manage_coupon_process')}}" method="post">
                                        	@csrf
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Title</label>
                                                <input id="title" name="title" type="text" class="form-control"  value="" required>
                                                @error('title')
                                                  <div class="alert alert-danger">
                                                  {{$message}}
                                                    </div>
                                                
                                                @enderror
                                            </div>
                                               <div class="form-group">
                                                <label for="code" class="control-label mb-1">Code</label>
                                                <input id="code" name="code" type="text" class="form-control" aria-required="true" aria-invalid="false" value="
                                                   " required>
                                                 @error('code')
                                                  <div class="alert alert-danger">
                                                  {{$message}}
                                                    </div>
                                                
                                                @enderror
                                            </div>              

                                            <div class="form-group">
                                                <label for="value" class="control-label mb-1">Value</label>
                                                <input id="value" name="value" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required>
                                                 @error('value')
                                                  <div class="alert alert-danger">
                                                  {{$message}}
                                                    </div>
                                                
                                                @enderror
                                            </div>                             
                                           
                                               
                                            <div>
                                                <button  type="submit" class="btn btn-lg btn-info btn-block">
                                                   submit
                                                </button>
                                            </div>
                                           
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>





@endsection
 
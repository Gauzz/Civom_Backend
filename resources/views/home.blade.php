
@extends('layouts.app')

@section('content')

<div class="container">
   <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"></div>-->


                <div class="col-md-14">
                <button type="button" class="fas fa-plus" data-toggle="modal" data-target="#myModal" style="font-size:40px"></button>
                <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
     
              
            
              
    
        <div class="modal-body">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
           <!-- <div class="card">-->
               <!-- <div class="card-header"></div>-->

                <div class="row justify-content-center">
                <div class="col-md-14">
                
                
                <form action="upload" id="upload" method='post' enctype="multipart/form-data">
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                

                    <label class="label-input100" for="first-name">Name of product</label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="first-name" class="input100" type="text" name="pname" placeholder="name of product">
					<span class="focus-input100"></span>
				</div>
                
                <label class="label-input100" for="description">Description*</label>
				<div class="wrap-input100 validate-input">
					<textarea id="description" class="input100" name="description" placeholder="Description"></textarea>
					<span class="focus-input100"></span>
				</div>

                <label class="label-input100" for=".dae file">upload .dae file</label>
				<div class="">
                <input class="" type="file" name="dae" id="dae_upload" style="margin-bottom:40px">
                <span class="focus-input100"></span>
                <div class="">
                </div>
              


                <label class="label-input100" for=".fbx file">upload .fbx file</label>
				<div class="">
                <input class="" type="file" name="fbx" id="fbx_upload" style="margin-bottom:40px">
				<span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="texture folder">Texture folder</label>
				<div class="">
                <input class="" type="file" name="texture[]" webkitdirectory multiple  id="texture_upload" style="margin-bottom:40px" multiple>
				<span class="focus-input100"></span>
                </div>
                
                
                <label class="label-input100" for="thumbnail">Thumbnail print</label>
				<div class="">
                <input class="" type="file" name="thumbnail" id="thumbnail_upload" style="margin-bottom:40px">
				<span class="focus-input100"></span>
                </div>
                 </form>
        </div>
        <div class="modal-footer">
        <div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick='postAsset(this)' id="submit_button">
						<span>
							Submit
							<i class=""  value="upload"></i>
						</span>
					</button>
                </div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
          
@endsection

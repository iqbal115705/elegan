@extends('layouts.template')
@section('content')
   <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/cropper/cropper.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/forms/image-cropping.css">
  <div class="page-header">
  <h1 class="page-title font_lato">Masks </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">Masks</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <!-- Panel Full Demo -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Full Demo</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="cropper text-center" id="exampleFullCropper">
                <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="...">
              </div>
              <div class="cropper-toolbar text-center">
                <div class="btn-group margin-bottom-20">
                  <button type="button" class="btn btn-primary" data-cropper-method="zoom" data-option="0.1"
                  data-toggle="tooltip" data-container="body" title="Zoom In">
                    <span class="cropper-tooltip" title="zoom in">
                      <i class="wb-zoom-in"></i>
                    </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-cropper-method="zoom" data-option="-0.1"
                  data-toggle="tooltip" data-container="body" title="Zoom Out">
                    <span class="cropper-tooltip" title="zoom out">
                      <i class="wb-zoom-out"></i>
                    </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="-90"
                  data-toggle="tooltip" data-container="body" title="Turn Left">
                    <span class="cropper-tooltip" title="rotate left 90�">
                      <i class="wb-arrow-left cropper-flip-horizontal"></i>
                    </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="90"
                  data-toggle="tooltip" data-container="body" title="Turn Right">
                    <span class="cropper-tooltip" title="rotate right 90�">
                      <i class="wb-arrow-right"></i>
                    </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="-5"
                  data-toggle="tooltip" data-container="body" title="Rotate Left">
                    <span class="cropper-tooltip" title="rotate left 90�">
                      <i class="wb-refresh cropper-flip-horizontal"></i>
                    </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="5"
                  data-toggle="tooltip" data-container="body" title="Rotate Right">
                    <span class="cropper-tooltip" title="rotate right 90�">
                      <i class="icon wb-reload" aria-hidden="true"></i>
                    </span>
                  </button>
                </div>
                <div class="btn-group margin-bottom-20">
                  <button type="button" class="btn btn-primary" data-cropper-method="setDragMode"
                  data-option="move" data-toggle="tooltip" data-container="body"
                  title="Move">
                    <span class="cropper-tooltip" title="move">
                      <i class="icon wb-move" aria-hidden="true"></i>
                    </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-cropper-method="setDragMode"
                  data-option="crop" data-toggle="tooltip" data-container="body"
                  title="Crop">
                    <span class="cropper-tooltip" title="Crop">
                      <i class="icon wb-crop" aria-hidden="true"></i>
                    </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-cropper-method="getCroppedCanvas"
                  data-option='{ "width": 320, "height": 180 }' data-toggle="tooltip"
                  data-container="body" title="Get Image">
                    <span class="cropper-tooltip" title="Get Image">
                      <i class="icon wb-image" aria-hidden="true"></i>
                    </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-cropper-method="clear" data-toggle="tooltip"
                  data-container="body" title="Clear">
                    <span class="cropper-tooltip" title="clear">
                      <i class="icon wb-close" aria-hidden="true"></i>
                    </span>
                  </button>
                  <label class="btn btn-primary" data-toggle="tooltip" for="inputImage" data-container="body"
                  title="Upload File">
                    <input type="file" class="hide" id="inputImage" name="file" accept="image/*">
                    <span class="cropper-tooltip" title="Import image with FileReader">
                      <i class="icon wb-upload" aria-hidden="true"></i>
                    </span>
                  </label>
                </div>
                <!-- Modal -->
                <div class="modal fade docs-cropped" id="getDataURLModal" aria-hidden="true" aria-labelledby="getDataURLTitle"
                role="dialog" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="getDataURLTitle">Cropped</h4>
                      </div>
                      <div class="modal-body"></div>
                    </div>
                  </div>
                </div>
                <!-- End Modal -->
              </div>
            </div>
            <div class="col-md-4">
              <div class="cropper-preview clearfix" id="exampleFullCropperPreview">
                <div class="img-preview preview-lg"></div>
                <div class="img-preview preview-md"></div>
                <div class="img-preview preview-sm"></div>
                <div class="img-preview preview-xs"></div>
              </div>
              <h4>Data:</h4>
              <div class="cropper-data">
                <div class="input-group margin-bottom-15">
                  <label class="input-group-addon" for="inputDataX">X</label>
                  <input type="number" class="form-control" id="inputDataX" name="inputNumbers" placeholder="x">
                  <span class="input-group-addon">px</span>
                </div>
                <div class="input-group margin-bottom-15">
                  <label class="input-group-addon" for="inputDataY">Y</label>
                  <input type="number" class="form-control" id="inputDataY" name="inputNumbers" placeholder="y">
                  <span class="input-group-addon">px</span>
                </div>
                <div class="input-group margin-bottom-15">
                  <label class="input-group-addon" for="inputDataWidth">Width</label>
                  <input type="number" class="form-control" id="inputDataWidth" name="inputNumbers"
                  placeholder="width">
                  <span class="input-group-addon">px</span>
                </div>
                <div class="input-group margin-bottom-15">
                  <label class="input-group-addon" for="inputDataHeight">Height</label>
                  <input type="number" class="form-control" id="inputDataHeight" name="inputNumbers"
                  placeholder="height">
                  <span class="input-group-addon">px</span>
                </div>
                <button class="btn btn-primary btn-block" id="setCropperData" type="button">Set Data</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Full Demo -->
      <!-- Panel Simple Demo -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Simple Demo</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-md-9">
              <div class="cropper" id="simpleCropper">
                <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="...">
              </div>
            </div>
            <div class="col-md-3">
              <div class="cropper-preview clearfix" id="simpleCropperPreview">
                <div class="img-preview preview-lg"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Simple Demo -->
    </div>
<br/>
@stop

 

@extends('layouts.template')
@section('content')
  <div class="page-header">
  <h1 class="page-title font_lato">General </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">General</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Form Elements</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6 col-md-4">
              <!-- Example Rounded Input -->
              <div class="example-wrap">
                <h4 class="example-title">Rounded Input</h4>
                <input type="text" class="form-control round" id="inputRounded">
              </div>
              <!-- End Example Rounded Input -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Disable -->
              <div class="example-wrap">
                <h4 class="example-title">Disable</h4>
                <input type="text" class="form-control" id="inputDisabled" placeholder="Disabled input here..."
                disabled>
              </div>
              <!-- End Example Disable -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Input Focus -->
              <div class="example-wrap">
                <h4 class="example-title">Input Focus</h4>
                <input type="text" class="form-control focus" id="inputFocus" value="This is focused...">
              </div>
              <!-- End Example Input Focus -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Placeholder -->
              <div class="example-wrap">
                <h4 class="example-title">Placeholder</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="placeholder">
              </div>
              <!-- End Example Placeholder -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Static Control -->
              <div class="example-wrap">
                <h4 class="example-title">Static Control</h4>
                <p class="form-control-static">email@example.com</p>
              </div>
              <!-- End Example Static Control -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Example File Upload -->
              <div class="example-wrap">
                <h4 class="example-title">File Upload</h4>
                <div class="form-group">
                  <div class="input-group input-group-file">
                    <input type="text" class="form-control" readonly="">
                    <span class="input-group-btn">
                      <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                        <input type="file" name="" multiple="">
                      </span>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-file">
                    <input type="text" class="form-control" readonly="">
                    <span class="input-group-btn">
                      <span class="btn btn-outline btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                        <input type="file" name="" multiple="">
                      </span>
                    </span>
                  </div>
                </div>
              </div>
              <!-- End Example File Upload -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Example With Help -->
              <div class="example-wrap">
                <h4 class="example-title">With Help</h4>
                <input type="text" class="form-control" id="inputHelpText">
                <span class="help-block">A block of help text that breaks onto a new line and may extend
                  beyond one line.</span>
              </div>
              <!-- End Example With Help -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Search -->
              <div class="example-wrap">
                <h4 class="example-title">Search</h4>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" name="" placeholder="Search...">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary"><i class="icon wb-search" aria-hidden="true"></i></button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-search">
                    <button type="submit" class="input-search-btn"><i class="icon wb-search" aria-hidden="true"></i></button>
                    <input type="text" class="form-control" name="" placeholder="Search...">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-search input-search-dark">
                    <i class="input-search-icon wb-search" aria-hidden="true"></i>
                    <input type="text" class="form-control" name="" placeholder="Search...">
                    <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-search">
                    <i class="input-search-icon wb-search" aria-hidden="true"></i>
                    <input type="text" class="form-control" name="" placeholder="Search...">
                    <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
                  </div>
                </div>
              </div>
              <!-- End Example Search -->
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Size -->
              <div class="example-wrap">
                <h4 class="example-title">Size</h4>
                <div class="form-group">
                  <input type="text" class="form-control input-sm" placeholder="Small">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Normal">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Big">
                </div>
              </div>
              <!-- End Example Size -->
            </div>
            <div class="col-sm-6">
              <!-- Example Select -->
              <div class="example-wrap margin-sm-0">
                <h4 class="example-title">Select</h4>
                <div class="form-group">
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" multiple="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <!-- End Example Select -->
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-sm-6">
              <!-- Example Textarea -->
              <div class="example-wrap">
                <h4 class="example-title">Textarea</h4>
                <textarea class="form-control" id="textareaDefault" rows="3"></textarea>
              </div>
              <!-- End Example Textarea -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Form Elements -->
      <!-- Panel Input Groups -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Input Groups</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6 col-md-4">
              <!-- Example Checkbox And Radio -->
              <div class="example-wrap">
                <h4 class="example-title">Checkbox And Radio</h4>
                <p>Place any checkbox or radio option within an input group's addon
                  instead of text. </p>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputCheckbox" name="inputCheckbox" checked>
                        <label for="inputCheckbox"></label>
                      </span>
                    </span>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="radio-custom radio-default">
                        <input type="radio" id="inputRadio" name="inputRadio" checked>
                        <label for="inputRadio"></label>
                      </span>
                    </span>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <!-- End Example Checkbox And Radio -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Text Addon -->
              <div class="example-wrap">
                <h4 class="example-title">Text Addon</h4>
                <p>Place one add-on or button on either side of an input. You may
                  also place one on both sides of an input.</p>
                <div class="form-group">
                  <div class="input-group">
                    <input type="email" class="form-control" placeholder="email">
                    <span class="input-group-addon">@example.com</span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" placeholder="">
                    <span class="input-group-addon">.00</span>
                  </div>
                </div>
              </div>
              <!-- End Example Text Addon -->
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Icon Addon -->
              <div class="example-wrap">
                <h4 class="example-title">Icon Addon</h4>
                <p>Place icon instead of text in add-on on either side of an input.
                  You may also place one on both sides of an input. </p>
                <div class="form-group">
                  <div class="input-group input-group-icon">
                    <span class="input-group-addon">
                      <span class="icon wb-user" aria-hidden="true"></span>
                    </span>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-icon">
                    <span class="input-group-addon">
                      <span class="icon wb-envelope" aria-hidden="true"></span>
                    </span>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-icon">
                    <input type="email" class="form-control" placeholder="Email">
                    <span class="input-group-addon">
                      <span class="icon wb-envelope" aria-hidden="true"></span>
                    </span>
                  </div>
                </div>
              </div>
              <!-- End Example Icon Addon -->
            </div>
            <div class="clearfix visible-md-block"></div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Button Addon -->
              <div class="example-wrap margin-md-0">
                <h4 class="example-title">Button Addon</h4>
                <p>Buttons in input groups are a bit different and require one extra
                  level of nesting. Instead of <code>.input-group-addon</code>,
                  you'll need to use <code>.input-group-btn</code> to wrap the
                  buttons. This is required due to default browser styles that
                  cannot be overridden.</p>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-outline">Go!</button>
                    </span>
                    <input type="text" class="form-control" placeholder="Search for...">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-outline">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
              <!-- End Example Button Addon -->
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Buttons With Dropdowns -->
              <div class="example-wrap margin-sm-0">
                <h4 class="example-title">Buttons With Dropdowns</h4>
                <p>Place any button or drodowns within an input group's addon instead
                  of text. </p>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown"
                      aria-expanded="false">Action
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a href="javascript:void(0)" role="menuitem">Action</a></li>
                        <li role="presentation"><a href="javascript:void(0)" role="menuitem">Another action</a></li>
                        <li role="presentation"><a href="javascript:void(0)" role="menuitem">Something else here</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="javascript:void(0)" role="menuitem">Separated link</a></li>
                      </ul>
                    </div>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-outline" tabindex="-1">Action</button>
                      <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown"
                      aria-expanded="false" tabindex="-1">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li role="presentation"><a href="javascript:void(0)" role="menuitem">Action</a></li>
                        <li role="presentation"><a href="javascript:void(0)" role="menuitem">Another action</a></li>
                        <li role="presentation"><a href="javascript:void(0)" role="menuitem">Something else here</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="javascript:void(0)" role="menuitem">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Buttons With Dropdowns -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Example Size -->
              <div class="example-wrap">
                <h4 class="example-title">Size</h4>
                <p>Add the relative form sizing classes to the <code>.input-group</code>                  itself and contents within will automatically resizeóno need
                  for repeating the form control size classes on each element.</p>
                <div class="form-group">
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control input-lg" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
              </div>
              <!-- End Example Size -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Input Groups -->
      <!-- Panel Checkbox & Radio -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Checkbox & Radio
            <small><a class="example-plugin-link" href="http://flatlogic.github.io/awesome-bootstrap-checkbox/demo/"
              target="_blank">official website</a></small>
          </h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6 col-lg-4">
              <!-- Example Checkboxes -->
              <div class="example-wrap">
                <h4 class="example-title">Checkboxes</h4>
                <p>Add class <code>.checkbox-custom</code>to make it.</p>
                <div class="checkbox-custom checkbox-primary">
                  <input type="checkbox" id="inputUnchecked" />
                  <label for="inputUnchecked">Unchecked</label>
                </div>
                <div class="checkbox-custom checkbox-primary">
                  <input type="checkbox" id="inputChecked" checked />
                  <label for="inputChecked">Checked</label>
                </div>
                <div class="checkbox-custom">
                  <input type="checkbox" disabled />
                  <label>Disabled Unchecked</label>
                </div>
                <div class="checkbox-custom">
                  <input type="checkbox" disabled checked />
                  <label>Checked Disabled</label>
                </div>
              </div>
              <!-- End Example Checkboxes -->
            </div>
            <div class="col-sm-6 col-lg-4">
              <!-- Example Radios -->
              <div class="example-wrap">
                <h4 class="example-title">Radios</h4>
                <p>Add class <code>.radio-custom</code>to make it.</p>
                <div class="radio-custom radio-primary">
                  <input type="radio" id="inputRadiosUnchecked" name="inputRadios" />
                  <label for="inputRadiosUnchecked">Unchecked</label>
                </div>
                <div class="radio-custom radio-primary">
                  <input type="radio" id="inputRadiosChecked" name="inputRadios" checked />
                  <label for="inputRadiosChecked">Checked</label>
                </div>
                <div class="radio-custom radio-primary">
                  <input type="radio" id="inputRadiosDisabled" name="inputRadiosDisabled" disabled
                  />
                  <label for="inputRadiosDisabled">Disabled Unchecked</label>
                </div>
                <div class="radio-custom radio-primary">
                  <input type="radio" id="inputRadiosDisabledChecked" name="inputRadiosDisabledChecked"
                  disabled checked />
                  <label for="inputRadiosDisabledChecked">Checked Disabled</label>
                </div>
              </div>
              <!-- End Example Radios -->
            </div>
            <div class="col-sm-6 col-lg-4">
              <!-- Example Color Options -->
              <div class="example-wrap">
                <h4 class="example-title">Color Options</h4>
                <p>Add class <code>.checkbox-default</code>, <code>.checkbox-primary</code>,
                  <code>.checkbox-success</code>, <code>.checkbox-info</code>,
                  <code>.checkbox-warning</code>, <code>.checkbox-danger</code>,
                  to change styles.</p>
                <ul class="list-unstyled list-inline">
                  <li>
                    <div class="checkbox-custom">
                      <input type="checkbox" name="inputCheckboxes" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox-custom checkbox-default">
                      <input type="checkbox" name="inputCheckboxes" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox-custom checkbox-primary">
                      <input type="checkbox" name="inputCheckboxes" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox-custom checkbox-success">
                      <input type="checkbox" name="inputCheckboxes" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox-custom checkbox-info">
                      <input type="checkbox" name="inputCheckboxes" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox-custom checkbox-warning">
                      <input type="checkbox" name="inputCheckboxes" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox-custom checkbox-danger">
                      <input type="checkbox" name="inputCheckboxes" checked />
                      <label></label>
                    </div>
                  </li>
                </ul>
                <ul class="list-unstyled list-inline">
                  <li>
                    <div class="radio-custom">
                      <input type="radio" id="inputRadioNormal" name="inputRadiosNormal" checked />
                      <label for="inputRadioNormal"></label>
                    </div>
                  </li>
                  <li>
                    <div class="radio-custom radio-default">
                      <input type="radio" name="inputRadioDefault" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="radio-custom radio-primary">
                      <input type="radio" name="inputRadioPrimary" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="radio-custom radio-success">
                      <input type="radio" name="inputRadioSuccess" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="radio-custom radio-info">
                      <input type="radio" name="inputRadioInfo" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="radio-custom radio-warning">
                      <input type="radio" name="inputRadioWarning" checked />
                      <label></label>
                    </div>
                  </li>
                  <li>
                    <div class="radio-custom radio-danger">
                      <input type="radio" name="inputRadioDanger" checked />
                      <label></label>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- End Example Color Options -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Checkbox & Radio -->
    </div>
<br/>

@stop

@extends('layouts.template')
@section('content')
<link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/plyr/plyr.css">
   
<div class="page-header">
  <h1 class="page-title font_lato">Step </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">Step</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- Example Default -->
              <div class="example-wrap">
                <h4 class="example-title">Default</h4>
                <p>A set of step.</p>
                <div class="example">
                  <div class="steps row">
                    <div class="step col-md-4">
                      <span class="step-number">1</span>
                      <div class="step-desc">
                        <span class="step-title">Shopping</span>
                        <p>Choose what you want</p>
                      </div>
                    </div>
                    <div class="step col-md-4 current">
                      <span class="step-number">2</span>
                      <div class="step-desc">
                        <span class="step-title">Billing</span>
                        <p>Pay for the bill</p>
                      </div>
                    </div>
                    <div class="step col-md-4">
                      <span class="step-number">3</span>
                      <div class="step-desc">
                        <span class="step-title">Getting</span>
                        <p>Waiting for the goods</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Default -->
            </div>
            <div class="col-md-12">
              <!-- Example Icon -->
              <div class="example-wrap">
                <h4 class="example-title">STEPS WITH ICONS</h4>
                <p>A set of steps with a available icon.</p>
                <div class="example">
                  <div class="steps row">
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-shopping-cart" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Shopping</span>
                      </div>
                    </div>
                    <div class="step col-sm-4 current">
                      <span class="step-icon icon wb-pluse" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Billing</span>
                      </div>
                    </div>
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-time" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Getting</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Icon -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-3 col-md-6">
              <!-- Example State Done -->
              <div class="example-wrap">
                <h4 class="example-title">States Done</h4>
                <p>A step with classname <code>.done</code></p>
                <div class="example">
                  <div class="step done">
                    <span class="step-number">1</span>
                    <div class="step-desc">
                      <span class="step-title">Getting</span>
                      <p>Waiting for the goods</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example State Done -->
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Example State Error -->
              <div class="example-wrap">
                <h4 class="example-title">States Error</h4>
                <p>A step with classname <code>.error</code></p>
                <div class="example">
                  <div class="step error">
                    <span class="step-number">2</span>
                    <div class="step-desc">
                      <span class="step-title">Getting</span>
                      <p>Waiting for the goods</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example State Error -->
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Example State Current -->
              <div class="example-wrap">
                <h4 class="example-title">States Current</h4>
                <p>A step with classname <code>.current</code></p>
                <div class="example">
                  <div class="step current">
                    <span class="step-number">3</span>
                    <div class="step-desc">
                      <span class="step-title">Getting</span>
                      <p>Waiting for the goods</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example State Current -->
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Example State Disabled -->
              <div class="example-wrap">
                <h4 class="example-title">States Disabled</h4>
                <p>A step with classname <code>.disabled</code></p>
                <div class="example">
                  <div class="step disabled">
                    <span class="step-number">4</span>
                    <div class="step-desc">
                      <span class="step-title">Getting</span>
                      <p>Waiting for the goods</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example State Disabled -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-md-8">
              <!-- Example Sizing -->
              <div class="example-wrap margin-md-0">
                <h4 class="example-title">Sizing</h4>
                <p>Steps can have different sizes.</p>
                <!-- XS Size -->
                <div class="example">
                  <div class="steps row steps-xs">
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-shopping-cart" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Shopping</span>
                      </div>
                    </div>
                    <div class="step col-sm-4 current">
                      <span class="step-icon icon wb-pluse" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Billing</span>
                      </div>
                    </div>
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-time" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Getting</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End XS Size -->
                <!-- SM Size -->
                <div class="example">
                  <div class="steps row steps-sm">
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-shopping-cart" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Shopping</span>
                      </div>
                    </div>
                    <div class="step col-sm-4 current">
                      <span class="step-icon icon wb-pluse" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Billing</span>
                      </div>
                    </div>
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-time" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Getting</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End SM Size -->
                <!-- Normal Size -->
                <div class="example">
                  <div class="steps row">
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-shopping-cart" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Shopping</span>
                      </div>
                    </div>
                    <div class="step col-sm-4 current">
                      <span class="step-icon icon wb-pluse" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Billing</span>
                      </div>
                    </div>
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-time" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Getting</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Normal Size -->
                <!-- LG Size -->
                <div class="example">
                  <div class="steps row steps-lg">
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-shopping-cart" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Shopping</span>
                      </div>
                    </div>
                    <div class="step col-sm-4 current">
                      <span class="step-icon icon wb-pluse" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Billing</span>
                      </div>
                    </div>
                    <div class="step col-sm-4">
                      <span class="step-icon icon wb-time" aria-hidden="true"></span>
                      <div class="step-desc">
                        <span class="step-title">Getting</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End LG Size -->
              </div>
              <!-- End Example Sizing -->
            </div>
            <div class="col-md-4">
              <!-- Example Vertical -->
              <div class="example-wrap">
                <h4 class="example-title">VERTICAL</h4>
                <p>A step can be displayed stacked vertically.</p>
                <div class="example">
                  <div class="steps steps-vertical">
                    <div class="step">
                      <span class="step-number">1</span>
                      <div class="step-desc">
                        <span class="step-title">Shopping</span>
                        <p>Choose what you want</p>
                      </div>
                    </div>
                    <div class="step current">
                      <span class="step-number">2</span>
                      <div class="step-desc">
                        <span class="step-title">Billing</span>
                        <p>Pay for the bill</p>
                      </div>
                    </div>
                    <div class="step">
                      <span class="step-number">3</span>
                      <div class="step-desc">
                        <span class="step-title">Getting</span>
                        <p>Waiting for the goods</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Vertical -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
      <!-- Panel Pearls -->
      <div class="panel">
        <div class="panel-heading">
          <div class="panel-title">
            Pearls Steps
          </div>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-6">
              <!-- Example Default -->
              <div class="example-wrap">
                <h4 class="example-title">Default</h4>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl done col-xs-4">
                      <span class="pearl-number">1</span>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl current col-xs-4">
                      <span class="pearl-number">2</span>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl col-xs-4">
                      <span class="pearl-number">3</span>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Default -->
            </div>
            <div class="col-md-6">
              <!-- Example Default -->
              <div class="example-wrap">
                <h4 class="example-title">Icon</h4>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl done col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl current col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Default -->
            </div>
            <div class="col-md-6">
              <!-- Example Default -->
              <div class="example-wrap margin-md-0">
                <h4 class="example-title">Sizing</h4>
                <!-- Pearls Xs -->
                <div class="example">
                  <div class="pearls pearls-xs row">
                    <div class="pearl done col-xs-4">
                      <span class="pearl-number">1</span>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl current col-xs-4">
                      <span class="pearl-number">2</span>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl col-xs-4">
                      <span class="pearl-number">3</span>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
                <!-- End Pearls Xs -->
                <!-- Pearls Sm -->
                <div class="example">
                  <div class="pearls pearls-sm row">
                    <div class="pearl done col-xs-4">
                      <span class="pearl-number">1</span>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl current col-xs-4">
                      <span class="pearl-number">2</span>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl col-xs-4">
                      <span class="pearl-number">3</span>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
                <!-- End Pearls Sm -->
                <!-- Pearls Normal -->
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl done col-xs-4">
                      <span class="pearl-number">1</span>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl current col-xs-4">
                      <span class="pearl-number">2</span>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl col-xs-4">
                      <span class="pearl-number">3</span>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
                <!-- End Pearls Normal -->
                <!-- Pearls Lg -->
                <div class="example">
                  <div class="pearls pearls-lg row">
                    <div class="pearl done col-xs-4">
                      <span class="pearl-number">1</span>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl current col-xs-4">
                      <span class="pearl-number">2</span>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl col-xs-4">
                      <span class="pearl-number">3</span>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
                <!-- End Pearls Lg -->
              </div>
              <!-- End Example Default -->
            </div>
            <div class="col-md-6">
              <!-- Example Default -->
              <div class="example-wrap">
                <h4 class="example-title">States</h4>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl current col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl disabled col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl disabled col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl done col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl current col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl disabled col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl done col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl current error col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl disabled col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl done col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                      <span class="pearl-title">Account Info</span>
                    </div>
                    <div class="pearl done col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                      <span class="pearl-title">Billing Info</span>
                    </div>
                    <div class="pearl current col-xs-4">
                      <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                      <span class="pearl-title">Confirmation</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Default -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Pearls -->
    </div>
<br/>

@stop

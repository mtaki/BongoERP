
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Components</h1>
          <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">FORMS</a></li>
            <li class="active">Components</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        
      
      <div class="row">
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a>
		<a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Default Form Elements</h3>
            </div>
            <div class="porlets-content">
              <form action="" class="form-horizontal row-border">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Simplest Input</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
                  </div>
                </div><!--/form-group--> 

                <div class="form-group">
                  <label class="col-sm-3 control-label">Password Field</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Input with Placeholder</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Placeholder">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Disabled Input</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Disabled Input" disabled="">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Read only field</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" readonly="" value="Read only text goes here">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">With pre-defined value</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="http://">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">With max length</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" maxlength="20" placeholder="max 20 characters here">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Popover Input</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control popovers" placeholder="Popover Input" data-trigger="hover" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">
                  </div>
                </div><!--/form-group--> 
               
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Disabled Dropdown</label>
                  <div class="col-sm-9">
                    <select class="form-control" disabled="" placeholder="Disabled Dropdown">
                      <option> Lorem </option>
                      <option> Lorem ipsum dolor. </option>
                      <option> Amet, impedit aperiam? </option>
                      <option> Nemo, alias, quasi? </option>
                      <option> impedit, expedita. </option>
                    </select>
                  </div><!--/col-sm-9--> 
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Textarea</label>
                  <div class="col-sm-9">
                    <textarea class="form-control"></textarea>
                  </div>
                </div>
                <div class="bottom">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </div><!--/form-group-->
              </form>
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
        
       
        
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a>
		<a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Form Wizard</h3>
            </div>
            <div class="porlets-content">
              <div class="basic-wizard" id="progressWizard">
                <ul class="nav nav-pills nav-justified">
                  <li class="active"><a data-toggle="tab" href="#ptab1"><span>Step 1:</span> Basic Info</a></li>
                  <li><a data-toggle="tab" href="#ptab2"><span>Step 2:</span> Product Info</a></li>
                  <li><a data-toggle="tab" href="#ptab3"><span>Step 3:</span> Payment</a></li>
                </ul>
                <div class="tab-content">
                  <div class="progress progress-striped">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar" style="width: 33.3333%;"></div>
                  </div>
                  <div id="ptab1" class="tab-pane active">
                    <form class="form">
                      <div class="form-group">
                        <label class="col-sm-4">Firstname</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="firstname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Lastname</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Gender</label>
                        <div class="col-sm-8">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" value="m" id="male2" checked="checked">
                            <label for="male2">Male</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" id="female2" value="f">
                            <label for="female2">Female</label>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div id="ptab2" class="tab-pane">
                    <form class="form">
                      <div class="form-group">
                        <label class="col-sm-4">Product ID</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" name="product_id">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Product Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="product_name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Category</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option value="">Choose One</option>
                            <option value="">3D Animation</option>
                            <option value="">Web Design</option>
                            <option value="">Software Engineering</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div id="ptab3" class="tab-pane">
                    <form class="form">
                      <div class="form-group">
                        <label class="col-sm-4">Card No</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="cardno">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">Expiration</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option value="">Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">...</option>
                          </select>
                        </div>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option value="">Year</option>
                            <option value="">2013</option>
                            <option value="">2014</option>
                            <option value="">2015</option>
                            <option value="">...</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4">CSV</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="csv">
                        </div>
                      </div>
                    </form>
                  </div>
                </div><!-- /tab-content -->
                
                <ul class="pager wizard">
                  <li class="previous disabled"><a href="javascript:void(0)">Previous</a></li>
                  <li class="next"><a href="javascript:void(0)">Next</a></li>
                </ul>
              </div><!--/progressWizard-->
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div><!--/col-md-6--> 
      </div>
      
  
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->

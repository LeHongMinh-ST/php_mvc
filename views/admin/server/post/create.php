

            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Forms</a>
                        </li>
                    </ol>
                    </nav>
                    <h1 class="page-title">Thêm mới bài viết</h1>
                </header><!-- /.page-title-bar -->
                <!-- .page-section -->
                <div class="page-section">
                    <div class="d-xl-none">
                    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                    </div><!-- .card -->
                    <div id="base-style" class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                        <!-- .form -->
                        <form>
                        <!-- .fieldset -->
                        <fieldset>
                            <legend>Base style</legend> <!-- .form-group -->
                            <div class="form-group">
                            <label for="tf1">Email address</label> <input type="email" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="e.g. johndoe@looper.com"> <small id="tf1Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label for="tf2">Number input</label>
                            <div class="custom-number">
                                <input type="number" class="form-control" id="tf2" min="0" max="10" step="1" value="0" placeholder="Amount (to the nearest dollar)">
                            <div class="custom-number-controls"><div class="custom-number-btn custom-number-up">+</div><div class="custom-number-btn custom-number-down">-</div></div></div>
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label for="tf3">File input</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="tf3" multiple=""> <label class="custom-file-label" for="tf3">Choose file</label>
                            </div>
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label for="tf4">Clearable</label>
                            <div class="has-clearable">
                                <button type="button" class="close show" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <input type="text" class="form-control" id="tf4" placeholder="Type something..." value="Moonlight">
                            </div>
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label for="tf5">Spinner</label>
                            <div class="has-spinner">
                                <div class="spinner-border spinner-border-sm text-muted show" role="status">
                                <span class="sr-only">Loading...</span>
                                </div><input type="text" class="form-control" id="tf5" placeholder="Type something..." value="Moon">
                            </div>
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label for="tf6">Textarea</label>
                            <textarea class="form-control" id="tf6" rows="3"></textarea>
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label for="tf5">Switch</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1"> <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                            </div>
                            </div><!-- /.form-group -->
                        </fieldset><!-- /.fieldset -->
                        </form><!-- /.form -->
                    </div><!-- /.card-body -->
                    <!-- .card-body -->
                    <div class="card-body border-top">
                        <!-- .form -->
                        <form>
                        <!-- .fieldset -->
                        <fieldset>
                            <legend>States</legend> <!-- .form-group -->
                            <div class="form-group">
                            <label class="control-label" for="tfDisabled">Disabled input</label> <input class="form-control" id="tfDisabled" type="email" placeholder="e.g. johndoe@looper.com" disabled="">
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label class="control-label" for="tfReadonly">Readonly input</label> <input class="form-control" id="tfReadonly" type="text" value="Stilearning" readonly="">
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label class="form-control-label" for="tfValid">Valid input</label> <input type="text" class="form-control is-valid" id="tfValid">
                            <div class="valid-feedback"> Success! You've done it. </div>
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label class="form-control-label" for="tfInvalid">Invalid input</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input is-invalid" id="tfInvalid"> <label class="custom-file-label" for="tfInvalid">Choose file</label>
                                <div class="invalid-feedback">
                                <i class="fa fa-exclamation-circle fa-fw"></i> Sorry, the image must be at least 300×300. </div>
                            </div>
                            </div><!-- /.form-group -->
                        </fieldset><!-- /.fieldset -->
                        </form><!-- /.form -->
                    </div><!-- /.card-body -->
                    <!-- .card-body -->
                    <div class="card-body border-top">
                        <!-- .form -->
                        <form>
                        <!-- .fieldset -->
                        <fieldset>
                            <legend>Sizes</legend> <!-- .form-group -->
                            <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="tfSmall">Small input</label> <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="tfSmall">
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label class="col-form-label" for="tfDefault">Default input</label> <input type="text" class="form-control" placeholder="Default input" id="tfDefault">
                            </div><!-- /.form-group -->
                            <!-- .form-group -->
                            <div class="form-group">
                            <label class="col-form-label col-form-label-lg" for="tfLarge">Large input</label> <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="tfLarge">
                            </div><!-- /.form-group -->
                        </fieldset><!-- /.fieldset -->
                        </form><!-- /.form -->
                    </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div>
            </div>
                
              
                
              
               
                
            
        
@extends('dashboard.layout.master')

@section('content')

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> Blank Page Layout
    <small>blank page layout</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Advance Validation</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('settings.update',$setting->id) }}" method="post" id="form_sample_3" class="form-horizontal"
                    novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check
                            below.
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful!
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1">اسم الموقع
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="website_name" data-required="1" class="form-control"
                                    value="{{ old('website_name')? old('website_name'):$setting->website_name }}">
                            </div>
                            @error('website_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
            
                        <div class="form-group">
                            <label class="control-label col-md-1">لوجو الموقع
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="file" name="logo" data-required="1" class="form-control">
                                <img src="{{ asset('storage/'.$setting::PATH.$setting->logo) }}" alt="logo" style="width: 10rem;height:10rem;">
                            </div>
                            @error('logo')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-1">وصف الموقع</label>
                            <div class="col-md-10">
                                <div class="md-editor" id="1701895502739">
                                    <div class="md-header btn-toolbar">
                                        <div class="btn-group"><button class="btn-default btn-sm btn" type="button"
                                                title="Bold" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B"><span
                                                    class="glyphicon glyphicon-bold"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Italic"
                                                tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span
                                                    class="glyphicon glyphicon-italic"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Heading"
                                                tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span
                                                    class="glyphicon glyphicon-header"></span> </button></div>
                                        <div class="btn-group"><button class="btn-default btn-sm btn" type="button"
                                                title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span
                                                    class="glyphicon glyphicon-link"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Image" tabindex="-1"
                                                data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span
                                                    class="glyphicon glyphicon-picture"></span> </button></div>
                                        <div class="btn-group"><button class="btn-default btn-sm btn" type="button"
                                                title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span
                                                    class="glyphicon glyphicon-list"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Ordered List"
                                                tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span
                                                    class="glyphicon glyphicon-th-list"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1"
                                                data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span
                                                    class="glyphicon glyphicon-asterisk"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1"
                                                data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span
                                                    class="glyphicon glyphicon-comment"></span> </button></div>
                                        <div class="btn-group"><button class="btn-sm btn btn-primary" type="button"
                                                title="Preview" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P"
                                                data-toggle="button"><span class="glyphicon glyphicon-search"></span>
                                                Preview</button></div>
                                        <div class="md-controls"><a class="md-control md-control-fullscreen"
                                                href="#"><span class="glyphicon glyphicon-fullscreen"></span></a></div>
                                    </div><textarea name="description" data-provide="markdown" rows="10"
                                        data-error-container="#editor_error" class="md-input"
                                        style="resize:none;">{{old('description')?old('description'):$setting->description }}</textarea>
                                    <div class="md-fullscreen-controls"><a href="#" class="exit-fullscreen"
                                            title="Exit fullscreen"><span
                                                class="glyphicon glyphicon-fullscreen"></span></a></div>
                                </div>
                                <div id="editor_error"> </div>
                            </div>
                            @error('description')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-1">وصف الفوتر</label>
                            <div class="col-md-10">
                                <div class="md-editor" id="1701895502739">
                                    <div class="md-header btn-toolbar">
                                        <div class="btn-group"><button class="btn-default btn-sm btn" type="button"
                                                title="Bold" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B"><span
                                                    class="glyphicon glyphicon-bold"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Italic"
                                                tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span
                                                    class="glyphicon glyphicon-italic"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Heading"
                                                tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span
                                                    class="glyphicon glyphicon-header"></span> </button></div>
                                        <div class="btn-group"><button class="btn-default btn-sm btn" type="button"
                                                title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span
                                                    class="glyphicon glyphicon-link"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Image" tabindex="-1"
                                                data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span
                                                    class="glyphicon glyphicon-picture"></span> </button></div>
                                        <div class="btn-group"><button class="btn-default btn-sm btn" type="button"
                                                title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span
                                                    class="glyphicon glyphicon-list"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Ordered List"
                                                tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span
                                                    class="glyphicon glyphicon-th-list"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1"
                                                data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span
                                                    class="glyphicon glyphicon-asterisk"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1"
                                                data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span
                                                    class="glyphicon glyphicon-comment"></span> </button></div>
                                        <div class="btn-group"><button class="btn-sm btn btn-primary" type="button"
                                                title="Preview" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P"
                                                data-toggle="button"><span class="glyphicon glyphicon-search"></span>
                                                Preview</button></div>
                                        <div class="md-controls"><a class="md-control md-control-fullscreen"
                                                href="#"><span class="glyphicon glyphicon-fullscreen"></span></a></div>
                                    </div><textarea name="footer_desc" data-provide="markdown" rows="10"
                                        data-error-container="#editor_error" class="md-input"
                                        style="resize:none;">{{old('footer_desc')?old('footer_desc'):$setting->footer_desc }}</textarea>
                                    <div class="md-fullscreen-controls"><a href="#" class="exit-fullscreen"
                                            title="Exit fullscreen"><span
                                                class="glyphicon glyphicon-fullscreen"></span></a></div>
                                </div>
                                <div id="editor_error"> </div>
                            </div>
                            @error('footer_desc')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label">سيو تيتل
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                               
                                    <input type="text" name="seo_title" class="form-control" placeholder="ادخل سعر الخدمه"
                                        value="{{ old('seo_title')? old('seo_title'):$setting->seo_title }}">
                               
                                @error('seo_title')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                       
            
                        <div class="form-group">
                            <label class="control-label col-md-1">وصف السيوع</label>

                            <div class="col-md-10">
                                <div class="md-editor" id="1701895502739">
                                    <div class="md-header btn-toolbar">
                                        <div class="btn-group"><button class="btn-default btn-sm btn" type="button"
                                                title="Bold" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B"><span
                                                    class="glyphicon glyphicon-bold"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Italic"
                                                tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span
                                                    class="glyphicon glyphicon-italic"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Heading"
                                                tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span
                                                    class="glyphicon glyphicon-header"></span> </button></div>
                                        <div class="btn-group"><button class="btn-default btn-sm btn" type="button"
                                                title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span
                                                    class="glyphicon glyphicon-link"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Image" tabindex="-1"
                                                data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span
                                                    class="glyphicon glyphicon-picture"></span> </button></div>
                                        <div class="btn-group"><button class="btn-default btn-sm btn" type="button"
                                                title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span
                                                    class="glyphicon glyphicon-list"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Ordered List"
                                                tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span
                                                    class="glyphicon glyphicon-th-list"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1"
                                                data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span
                                                    class="glyphicon glyphicon-asterisk"></span> </button><button
                                                class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1"
                                                data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span
                                                    class="glyphicon glyphicon-comment"></span> </button></div>
                                        <div class="btn-group"><button class="btn-sm btn btn-primary" type="button"
                                                title="Preview" tabindex="-1" data-provider="bootstrap-markdown"
                                                data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P"
                                                data-toggle="button"><span class="glyphicon glyphicon-search"></span>
                                                Preview</button></div>
                                        <div class="md-controls"><a class="md-control md-control-fullscreen"
                                                href="#"><span class="glyphicon glyphicon-fullscreen"></span></a></div>
                                    </div><textarea name="seo_desc" data-provide="markdown" rows="10"
                                        data-error-container="#editor_error" class="md-input"
                                        style="resize: none;">{{old('seo_desc')?old('seo_desc'):$setting->seo_desc }}</textarea>
                                    <div class="md-fullscreen-controls"><a href="#" class="exit-fullscreen"
                                            title="Exit fullscreen"><span
                                                class="glyphicon glyphicon-fullscreen"></span></a></div>
                                </div>
                                <div id="editor_error"> </div>
                            </div>
                            @error('seo_desc')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                       
                    </div>



                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-10">
                                <button type="submit" class="btn green">تعديل الخدمه</button>

                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>

@endsection
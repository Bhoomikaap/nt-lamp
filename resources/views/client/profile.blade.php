@extends('templates.client.master')


@section('content')
<div class="container pad-t85 mar-t20">
    <div class="row mar-b20">
        <div class="col-sm-3">
            <ul class="lhs-nav nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#edit-basic-information" id="edit-basic-information-button" aria-controls="edit-basic-information" role="tab" data-toggle="tab" class="profile-sum-icon">Edit My Profile</a></li>
                <li role="presentation"><a href="#edit-profile-summary" id="edit-profile-summary-button" aria-controls="edit-profile-summary" role="tab" data-toggle="tab" class="profile-sum-icon">Preview Profile</a></li>
                <li role="presentation"><a href="#edit-education-details" id="edit-education-details-button" aria-controls="edit-education-details" role="tab" data-toggle="tab" class="education-icon">Educational Information</a></li>
                <li role="presentation"><a href="#edit-employment-details" id="edit-employment-details-button" aria-controls="edit-employment-details" role="tab" data-toggle="tab" class="profile-sum-icon">Employment Details</a></li>
                <li role="presentation"><a href="#edit-change-password" id="edit-change-password-button" class="key-skills-icon" aria-controls="edit-change-password" role="tab" data-toggle="tab" class="profile-sum-icon">Change Password</a></li>
                <!-- <li><a href="#" class="lang-icon">Languages</a></li>
                <li><a href="#" class="other-dt-icon">Other Details </a></li> -->
            </ul>
            <div class="clearfix pad-t20">
            @if(isset(Auth::user()->userdetail->resume_media_id) && Auth::user()->userdetail->resume_media_id != 0)
                <div class="green-box clearfix"><span class="upload-icon"></span> <span href="#" class="pad-b5 pull-left sm-title">{{Auth::user()->userdetail->media->content}}</span>
                    <p class="mar-b0"><a href="#" class="white-title mar-r20">Edit</a><a href="{{URL::route('DeleteResume',[Auth::user()->userdetail->resume_media_id])}}" class="white-title profile-delete-alert">Delete</a></p>
                </div>
            @else
                <div class="green-box clearfix"><span class="upload-icon"></span> <span href="#" class="pad-b5 pull-left sm-title">No Resume Uploaded</span>
                    {!!Form::open(array('route'=>'UploadResume','files'=>'true'))!!}
                    <div class="form-group text-center">
                        <input type="file" class="form-control" name="profile_resume">
                        <br>
                        <button type="submit" class="btn btn-sm btn-success">Upload Resume</button>
                    </div>
                    {!!Form::token()!!}
                    {!!Form::close()!!}
                </div>
            @endif
            </div>
        </div>
        <div class="col-sm-6">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="edit-basic-information">
                    <div class="clearfix">
                        <div class="clearfix pad-t40pr pad-l50pr">
                            <i class="fa fa-circle-o-notch fa-spin green"></i>
                            <i class="fa fa-circle-o-notch fa-spin red"></i>
                            <i class="fa fa-circle-o-notch fa-spin blue"></i>
                            <p><b>Loading...</b></p>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="edit-profile-summary">
                    <div class="clearfix">
                        <div class="clearfix pad-t40pr pad-l50pr">
                            <i class="fa fa-circle-o-notch fa-spin green"></i>
                            <i class="fa fa-circle-o-notch fa-spin red"></i>
                            <i class="fa fa-circle-o-notch fa-spin blue"></i>
                            <p><b>Loading...</b></p>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="edit-employment-details">
                    <div class="clearfix">
                        <div class="clearfix pad-t40pr pad-l50pr">
                            <i class="fa fa-circle-o-notch fa-spin green"></i>
                            <i class="fa fa-circle-o-notch fa-spin red"></i>
                            <i class="fa fa-circle-o-notch fa-spin blue"></i>
                            <p><b>Loading...</b></p>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="edit-education-details">
                    <div class="clearfix">
                        <div class="clearfix pad-t40pr pad-l50pr">
                            <i class="fa fa-circle-o-notch fa-spin green"></i>
                            <i class="fa fa-circle-o-notch fa-spin red"></i>
                            <i class="fa fa-circle-o-notch fa-spin blue"></i>
                            <p><b>Loading...</b></p>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="edit-change-password">
                    <div class="clearfix">
                        <div class="clearfix pad-t40pr pad-l50pr">
                            <i class="fa fa-circle-o-notch fa-spin green"></i>
                            <i class="fa fa-circle-o-notch fa-spin red"></i>
                            <i class="fa fa-circle-o-notch fa-spin blue"></i>
                            <p><b>Loading...</b></p>
                        </div>
                    </div>
                </div>

                <!-- <div role="tabpanel" class="tab-pane" id="messages">...</div>
                <div role="tabpanel" class="tab-pane" id="settings">...</div> -->
            </div>


        </div>


        @include('client.partials.latestjobsinner') 
    </div>
</div>

<!-- Experience Popup -->
<div class="modal fade" id="my-popup" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Employment Details</h4>
      </div>
      <div class="modal-body" id="myModalBody">
            {!!Form::open(["route"=>"AddExperience",'id'=>'add-experience-form'])!!}

            <div class="form-group">
            <label for="">Employer <span class="error-text">*</span></label>
            {!!Form::select('company',$selectcompanies,null,['placeholder'=>'Select employer','class'=>'form-control','id'=>'register_company','required'])!!}
            </div>

            <div class="form-group">
            <label for="">Start Date <span class="error-text">*</span></label>
            {!!Form::date('experience_start_date',null,['class'=>'form-control fresher','placeholder'=>'Start Date','id'=>'experience_start_date','required'])!!}
            </div>

            <div class="form-group">
            <label for="">End Date <span class="error-text">*</span></label>
            {!!Form::date('experience_end_date',null,['class'=>'form-control fresher','placeholder'=>'End Date','id'=>'experience_end_date','required'])!!}
            </div>
            <div class="form-group">    
                <label for="">Description </label>
                <textarea class="form-control fresher" id="employement_description" name="employement_description" placeholder="Provide a description of your employment" rows="2"></textarea>
            </div>

             <div class="row hmar5">
                <div class="form-group col-sm-5 hpad5">  
                   <div class="input-group">
                    {!!Form::select('annual_lakh',$annual_lakh_options,null,['placeholder'=>'Lakh(s)','class'=>'form-control fresher'])!!}
                    <div class="input-group-addon c-add-on">Lakhs</div></div>
                </div>

                <div class="form-group col-sm-5 hpad5">  
                    <div class="input-group">
                    {!!Form::select('annual_thousand',$annual_thousand_options,null,['placeholder'=>'Thousand(s)','class'=>'form-control fresher'])!!}
                    <div class="input-group-addon c-add-on">Thousands</div></div>
                </div>
            </div>

             <div class="clearfix">
                <label class="radio-inline">
                    <input type="radio" name="currency" id="inlineRadio1" value="AED" class="fresher"> UAE Currency
                </label>
                <label class="radio-inline">
                    <input type="radio" name="currency" id="inlineRadio2" value="USD" class="fresher"> US Currency
                </label>
                <label class="radio-inline">
                    <input type="radio" name="currency" id="inlineRadio3" value="RUP" class="fresher"> Indian Currency
                </label>
            </div>
            <br>
            <div class="clearfix">
                <div class="form-group">
                    <label for="">Industry </label>
                    {!!Form::select('industry',$selectindustry,null,['placeholder'=>'Select related industry','class'=>'form-control fresher','id'=>'industry'])!!}
                </div>

                <div class="form-group">
                    <label for="">Functional Area </label>
                    {!!Form::select('functional_area',$selectfunctionalarea,null,['placeholder'=>'Select functional area','class'=>'form-control fresher','id'=>'functional_area'])!!}
                </div>

                <div class="form-group">
                    <label for="">Role</label>
                    {!!Form::text('role',null,['placeholder'=>'Specify role','class'=>'form-control fresher','id'=>'role'])!!}
                </div>
                <div class="col-xs-12 text-center">
                    <button type="submit" class="btn btn-lg btn-success">Save Experience</button>
                </div>
            </div>
            
            {!!Form::close()!!}


      </div>
      </div>
    </div>
  </div>

<!-- Company Popup -->
<div class="modal fade" id="new-company-popup" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enter employment details</h4>
      </div>
      <!--OPEN FORM HERE-->
      <div class="modal-body">
        {!!Form::open(array('route'=>'RegisterCompany','id'=>'new_company_form','class'=>'row pad-t10 pad-b10'))!!}
        <div class="col-sm-6 hidden-xs">
            
            <div class="form-group">
              <label for="name">Employer <span class="error-text">*</span></label>                            
              {!!Form::text('name',null,['placeholder'=>'Specify Employer','class'=>'form-control','id'=>'register_company_name','required'])!!}
            </div>
            <div class="form-group">
              <label for="description">Description</label>                            
              <textarea name="description" rows="2" class="form-control" placeholder="A short description"></textarea>
            </div>
            <div class="form-group">
              <label for="city">City of operations</label>                            
              {!!Form::text('city',null,['placeholder'=>'City','class'=>'form-control','id'=>'register_city'])!!}
            </div>
            <div class="form-group"> 
              <label for="country">Select country of operations <span class="error-text">*</span></label>                           
              {!!Form::select('country',$countries,null,['placeholder'=>'Select country','class'=>'form-control','id'=>'register_country','required'])!!}
            </div>
            <div class="form-group">
              <label for="state">Select region of opertaions <span class="error-text">*</span></label>           
              {!!Form::select('state',[],null,['placeholder'=>'Select state','class'=>'form-control','id'=>'register_state','required'])!!}
            </div>
        </div>
         <div class="col-sm-6">
          <div class="form-group">
            <label for="contactNo">Contant number</label>                            
            {!!Form::number('contactNo',null,['placeholder'=>'Country code - Contact number','class'=>'form-control','id'=>'register_contactNo'])!!}
          </div>
          <div class="form-group">
            <label for="website">Employer Website</label>                            
            {!!Form::text('website',null,['placeholder'=>'Employee website','class'=>'form-control','id'=>'register_country'])!!}
          </div>   
          <div class="form-group">                              
            <!-- COMPANY ADDRESS -->
            <label for="address">Employer Address</label>
            <textarea name="address" class="form-control" rows="3" placeholder="Address"></textarea>
          </div>
          <div class="clearfix text-center">
              <!-- SUBMIT BUTTON -->
              <button type="submit" class="btn btn-lg btn-success">Add Your Company</button>
          </div>                    
         </div>
         {!!Form::token()!!}                                      
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>



@stop

@section('js')
    @parent
    {!! Html::script('assets/js/jquery.validate.min.js') !!}
    <script type="text/javascript">
     //GLOBAL REQUIREMENTS
        animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        pageloading = '<div class="clearfix"><div class="clearfix pad-t40pr pad-l50pr"><i class="fa fa-circle-o-notch fa-spin green"></i><i class="fa fa-circle-o-notch fa-spin red"></i><i class="fa fa-circle-o-notch fa-spin blue"></i></div></div>';
        reloadbutton = '<div class="clearfix"><div class="clearfix pad-t40pr pad-l50pr"><button class="btn btn-lg btn-danger" onclick="window.location=window.location;">Reload Page</button></div></div>';

        function ajaxerror (){
            new PNotify({
                title: 'Error',
                text: 'We were unable to retrieve data from our servers. Refresh the page to try again.',
                type : 'error',
            });
        }

        function ajaxerrorclicktoclose (){
            var notice = new PNotify({
                title: 'Error',
                text: 'We were unable to retrieve data from our servers. Click here to try again.',
                type : 'error',
                buttons: {
                    closer: false,
                    sticker: false
                }
            });

            notice.get().click(function() {
                notice.remove();
                window.location = window.location;
            });
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile_image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    $(document).ready(function (){
        if(window.location.hash != ''){
            if(window.location.hash === '#page=profileform'){
                $('#edit-basic-information-button').trigger('click');
            }

            if(window.location.hash === '#page=profilesummary'){
                $('#edit-profile-summary-button').trigger('click');
            }


            if(window.location.hash ==='#page=employmentdetails'){
                $('#edit-employment-details-button').trigger('click');
            }


            if(window.location.hash ==='#page=educationdetails'){
                $('#edit-education-details-button').trigger('click');
            }


            if(window.location.hash ==='#page=changepassword'){
                $('#edit-change-password-button').trigger('click');
            }
        }
        token = $('meta[name="csrf-token"]').attr('content'); 

        $.validator.addMethod('filesize', function(value, element, param) {
            // param = size (en bytes) 
            // element = element to validate (<input>)
            // value = value of the element (file name)
            return this.optional(element) || (element.files[0].size <= param) 
        });

        $.validator.addMethod("specialChars", function( value, element ) {
            //REGEX for atleast one upper case, one lower case, one number and atleast one special character
            var regex = new RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$");
            return this.optional(element) || (regex.test(value));
        }, "Password must contain at least one upper case, at least one lower case, and at least one special character");

        //INITIAL PAGE LOAD
        $.post('profile/async/loadresumeeditor',{_token:token},function (data){
            if(data === -1){
                ajaxerrorclicktoclose();
                $('#edit-basic-information').html(reloadbutton);
            }else{
                var animationName = 'animated fadeInDown';
                $('#edit-basic-information').addClass(animationName).html(data).one(animationend,function() {
                  $(this).removeClass(animationName);
                });

                $('#profile_form').validate({
                    rules: {
                       
                       contact_no: {
                        required:true,
                        number:true,
                        minlength:8,
                        maxlength:10,
                       },

                       load_image_field:{
                        filesize : 1048576,
                        extension: "jpg|jpeg|png|gif"
                       }

                    },
                    messages:{
                        email:{
                            required:"<span class='glyphicon glyphicon-exclamation-sign' ></span>",
                            email:"- must be valid"
                        },
                        first_name: { 
                            required:"<span class='glyphicon glyphicon-exclamation-sign' ></span>"
                        },
                        last_name: { 
                            required:"<span class='glyphicon glyphicon-exclamation-sign' ></span>"
                        },
                       
                        contact_no:{
                            required:"<span class='glyphicon glyphicon-exclamation-sign' ></span>",
                            number:"<span class='glyphicon glyphicon-exclamation-sign' ></span> Number required",
                            minlength:"Min Eight(8) numbers required",
                            maxlength:"Max Ten(10) numbers allowed"
                        },
                        city:{
                            required:"<span class='glyphicon glyphicon-exclamation-sign' ></span>"
                        },
                    },
                    onkeyup: function(element) {$(element).valid()},
                    errorPlacement: function(label, element) {
                        label.css('color','red');
                        label.insertBefore(element);
                    },
                });

                $('#load_image').click(function (event){
                    $('#load_image_field').trigger('click');
                });

                $('#load_image_field').change(function (event){
                    readURL(this);
                });
            }
        }).fail(function (){
            ajaxerrorclicktoclose();
            $('#edit-basic-information').html(reloadbutton);
        });

        $('#add-experience-form').validate({
              onkeyup: function(element) {$(element).valid()},
              errorPlacement: function(label, element) {
                  label.css('color','red');
                  label.insertBefore(element);
              },
        });

        $('#new_company_form').validate({
          messages:{
              name:{
                  required:"<span class='glyphicon glyphicon-exclamation-sign' ></span>",
              },
              country: { 
                  required:"<span class='glyphicon glyphicon-exclamation-sign' ></span>"
              },
              state: { 
                  required:"<span class='glyphicon glyphicon-exclamation-sign' ></span>"
              },
              company: { 
                  required:"<span class='glyphicon glyphicon-exclamation-sign' ></span>"
              }
          },
          onkeyup: function(element) {$(element).valid()},
          errorPlacement: function(label, element) {
              label.css('color','red');
              label.insertBefore(element);
          },
      });


        //ENd on ready
    });

    $('.profile-delete-alert').click(function(event){
        if(!confirm('This will delete your resume. Are you sure ?')){
            event.preventDefault();
        }
    });

    $("#register_company").on('click change',function (e){
          if(e.target.value == 0){
              $('.fresher').prop("disabled", true);
          }

          if(e.target.value === 'ot'){
              $('.fresher').prop("disabled", true);
              e.target.value = '';
              $('#new-company-popup').modal('show');
          }

          if(e.target.value != 0  && e.target.value != 'ot'){
             $('.fresher').prop("disabled", false);
          }
      });

    $('#add-experience-form').submit(function (e){
        var isValid = $(this).valid();
        if(isValid){
            e.preventDefault();
            $.post($(this).attr('action'),$(this).serialize(),function (data){
                console.log(data);
                if(data === "-2"){
                    new PNotify({
                        title: 'Error',
                        text: 'Error submitting form',
                        type : 'error',
                    });
                    $(':input','#add-experience-form')
                      .not(':button, :submit, :reset, :hidden')
                      .val('')
                      .removeAttr('checked')
                      .removeAttr('selected');
                    $('#my-popup').modal('hide');
                }else if(data === "-3"){
                    new PNotify({
                        title: 'Error',
                        text: 'Experience has been added for the same time period already.',
                        type : 'error',
                    });
                    $(':input','#add-experience-form')
                      .not(':button, :submit, :reset, :hidden')
                      .val('')
                      .removeAttr('checked')
                      .removeAttr('selected');
                }else{
                    $(':input','#add-experience-form')
                      .not(':button, :submit, :reset, :hidden')
                      .val('')
                      .removeAttr('checked')
                      .removeAttr('selected');
                    $('#my-popup').modal('hide');
                    $('#edit-employment-details-button').trigger('click'); 
                }
            }).fail(function (){
               ajaxerror();
                $(':input','#add-experience-form')
                  .not(':button, :submit, :reset, :hidden')
                  .val('')
                  .removeAttr('checked')
                  .removeAttr('selected');
                $('#my-popup').modal('hide');
            });       
         }
    });

    $('#new_company_form').submit(function (e){
        var isValid = $(this).valid();
        if(isValid){
            e.preventDefault();
            $.post($(this).attr('action'),$(this).serialize(),function (data){
                if(data === "-1"){
                    ajaxerror();
                    $(':input','#new_company_form')
                      .not(':button, :submit, :reset, :hidden')
                      .val('')
                      .removeAttr('checked')
                      .removeAttr('selected');

                    $('.fresher').prop("disabled", false);
                    $('#new-company-popup').modal('hide');
                }else{

                    $.post('register/async/loadcompanylist/'+data,{_token:token},function (data2){
                        $('#register_company').html(data2);

                        $(':input','#new_company_form')
                          .not(':button, :submit, :reset, :hidden')
                          .val('')
                          .removeAttr('checked')
                          .removeAttr('selected');

                        $('.fresher').prop("disabled", false);
                        $('#new-company-popup').modal('hide');
                    }).fail(function (){
                       ajaxerrorclicktoclose();
                    });
                }
            }).fail(function (){
               ajaxerror();
               $(':input','#new_company_form')
                  .not(':button, :submit, :reset, :hidden')
                  .val('')
                  .removeAttr('checked')
                  .removeAttr('selected');

                $('.fresher').prop("disabled", false);
                $('#new-company-popup').modal('hide');
            });       
         }
    });

    $('#register_country').on('click change',function(event){
          if($(this).val() === ''){
            $('#register_state').html('<option value="" selected>Select state</option>');
          }else{
            $.post('register/async/loadstatelist/'+$(this).val(),{_token:token},function (data){
              $('#register_state').html(data);
            }).fail(function (){
              var notice = new PNotify({
                    title: 'Error',
                    text: 'We were unable to retrieve data from our servers. Click here to try again.',
                    type : 'error',
                    buttons: {
                        closer: false,
                        sticker: false,
                    }
                });

                notice.get().click(function() {
                    notice.remove();
                    window.location = window.location;
                });
            });
          }
        });
    //CLICK Basic Information
    $('#edit-basic-information-button').click(function (e){
        var animationName = 'animated fadeInDown';
        var redrawdata = $('#edit-basic-information').html();
        window.location.hash = "page=profileform";

        $('#edit-basic-information').html(pageloading);
        $('#edit-basic-information').addClass(animationName).html(redrawdata).one(animationend,function() {
          $(this).removeClass(animationName);
        });
    });

    $('#profile_form').validate({
        onkeyup: function(element) {$(element).valid()},
        errorPlacement: function(label, element) {
            label.css('color','red');
            label.appendTo('#'+element.attr('id')+'error');
        },
    });

    //SAVE Basic Information
    $('#profile_form').submit(function (e){
        e.preventDefault();
    });

    //CLICK Profile Summary
    $('#edit-profile-summary-button').click(function (e){
        window.location.hash = "page=profilesummary";
        $.post('profile/async/loadprofilesummary',{_token:token},function (data){
            if(data === -1){
                ajaxerrorclicktoclose();
            }else{
                var animationName = 'animated fadeInDown';
                $('#edit-profile-summary').addClass(animationName).html(data).one(animationend,function() {
                  $(this).removeClass(animationName);
                });    
            }
            
        }).fail(function (){
           ajaxerrorclicktoclose();
        });
    });

    //CLICK Employment Details
    $('#edit-employment-details-button').click(function (e){
        window.location.hash = "page=employmentdetails";
        $.post('profile/async/loademploymentdetails',{_token:token},function (data){
            if(data === -1){
                ajaxerrorclicktoclose();
            }else{
                var animationName = 'animated fadeInUp';
                $('#edit-employment-details').addClass(animationName).html(data).one(animationend,function() {
                  $(this).removeClass(animationName);
                });
            }
            
        }).fail(function (){
            ajaxerrorclicktoclose();
        });
    });

    //CLICK Employment Details
    $('#edit-education-details-button').click(function (e){
        window.location.hash = "page=educationdetails";
        $.post('profile/async/loadeducationdetails',{_token:token},function (data){
            if(data === -1){
                ajaxerrorclicktoclose();
            }else{
                var animationName = 'animated fadeInUp';
                $('#edit-education-details').addClass(animationName).html(data).one(animationend,function() {
                  $(this).removeClass(animationName);
                });
            }
            
        }).fail(function (){
            ajaxerrorclicktoclose();
        });
    });

    //CLICK Change Password
    $('#edit-change-password-button').click(function (e){
        window.location.hash = "page=changepassword";
        $.post('profile/async/loadchangepassword',{_token:token},function (data){
            if(data === -1){
                ajaxerrorclicktoclose();
            }else{
                var animationName = 'animated fadeInUp';
                $('#edit-change-password').addClass(animationName).html(data).one(animationend,function() {
                  $(this).removeClass(animationName);
                });

                $('#change_password_form').validate({
                    rules: {
                       old_password: { 
                        required: true,
                        minlength: 8,
                        maxlength: 12,
                        specialChars : true
                       } , 

                       new_password: { 
                        required: true,
                        minlength: 8,
                        maxlength: 12,
                        specialChars : true
                       } , 

                       new_password_confirmation: { 
                        equalTo: "#new_password",
                        required: true,
                        minlength: 8,
                        maxlength: 12,
                       },

                    },
                    messages:{
                        old_password:{
                            required:"&nbsp;<span class='glyphicon glyphicon-exclamation-sign' ></span>",
                            minlength:"Min Eight(8) characters",
                            maxlength:"Max Twelve(12) characters"
                        },
                        new_password: { 
                            required:"&nbsp;<span class='glyphicon glyphicon-exclamation-sign' ></span>",
                            minlength:"Min Eight(8) characters",
                            maxlength:"Max Twelve(12) characters"
                        },
                        new_password_confirmation: { 
                            equalTo:"- must be same as <b>New Password</b>",
                            required:"&nbsp;<span class='glyphicon glyphicon-exclamation-sign'></span>",
                            minlength:"Min Eight(8) characters",
                            maxlength:"Max Twelve(12) characters"
                        },
                    },
                    onkeyup: function(element) {$(element).valid()},
                    errorPlacement: function(label, element) {
                        label.css('color','red');
                        label.insertBefore(element);
                    },
                });
            }
            
        }).fail(function (){
            ajaxerrorclicktoclose();
        });
    });


    </script>
@stop

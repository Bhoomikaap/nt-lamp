{!! Form::open( ["class"=>"row pad-t10 pad-b10", "id"=> "education_form", "route"=>"SaveEducationDetails"]) !!}
<div>

    <div class="col-sm-6">

        <h4 class="blue-title b-title pad-b10">Education Details</h4>
        <div class="form-group">
            <label for="">Basic/graduation<span class="error-text">*</span></label>
            <select class='form-control' name="graduation" id="graduation">

                <option value="0" selected>Select</option>
                <option value="1">Not Pursuing Graduation</option>
                <option value="2">B.A</option>
                <option value="3">B.Arch</option>
                <option value="4">B.Des.</option>
                <option value="5">B.El.Ed</option>
                <option value="5">B.P.Ed</option>
                <option value="7">B.U.M.S</option>
                <option value="8">BAMS</option>
                <option value="9">BCA</option>
                <option value="10">B.B.A/ B.M.S</option>
                <option value="11">B.Com</option>
                <option value="12">B.Ed</option>
                <option value="13">BDS</option>
                <option value="14">BFA</option>
                <option value="15">BHM</option>
                <option value="16">B.Pharma</option>
                <option value="17">B.Sc</option>
                <option value="18" >B.Tech/B.E.</option>
                <option value="19">BHMS</option>
                <option value="20">LLB</option>
                <option value="21">MBBS</option>
                <option value="22">Diploma</option>
                <option value="23">BVSC</option>
                <option value="9999">Other</option>
            </select>
        </div>
            <div class="form-group">
                <label for="name">Specialization <span class="error-text">*</span></label>
                {!!Form::text('name',null,['placeholder'=>'Specify Employer','class'=>'form-control','id'=>'register_company_name','required'])!!}
            </div>

            <div class="form-group">
                <label for="name">University/Institute <span class="error-text">*</span></label>
                {!!Form::text('name',null,['placeholder'=>'Specify Employer','class'=>'form-control','id'=>'register_company_name','required'])!!}
            </div>

            <div class="form-group">
                <label for="name">Year<span class="error-text">*</span></label>
                {!!  Form::selectRange('number', 2021,1940, 66, ['class' => 'form-control', 'placeholder'=>'year']) !!}
            </div>

        </div>

    <div class="col-sm-12">
        <hr class="c-hr">
    </div>

    <div class="col-sm-6">


        <div class="form-group">
            <label for="">Post Graduation<span class="error-text">*</span></label>
            <select class='form-control' name="graduation" id="graduation">

                <option value="0" selected>Select</option>
                <option value="1">Not Pursuing Graduation</option>
                <option value="2">B.A</option>
                <option value="3">B.Arch</option>
                <option value="4">B.Des.</option>
                <option value="5">B.El.Ed</option>
                <option value="5">B.P.Ed</option>
                <option value="7">B.U.M.S</option>
                <option value="8">BAMS</option>
                <option value="9">BCA</option>
                <option value="10">B.B.A/ B.M.S</option>
                <option value="11">B.Com</option>
                <option value="12">B.Ed</option>
                <option value="13">BDS</option>
                <option value="14">BFA</option>
                <option value="15">BHM</option>
                <option value="16">B.Pharma</option>
                <option value="17">B.Sc</option>
                <option value="18" >B.Tech/B.E.</option>
                <option value="19">BHMS</option>
                <option value="20">LLB</option>
                <option value="21">MBBS</option>
                <option value="22">Diploma</option>
                <option value="23">BVSC</option>
                <option value="9999">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Specialization <span class="error-text">*</span></label>
            {!!Form::text('name',null,['placeholder'=>'Specify Employer','class'=>'form-control','id'=>'register_company_name','required'])!!}
        </div>

        <div class="form-group">
            <label for="name">University/Institute <span class="error-text">*</span></label>
            {!!Form::text('name',null,['placeholder'=>'Specify Employer','class'=>'form-control','id'=>'register_company_name','required'])!!}
        </div>

        <div class="form-group">
            <label for="name">Year<span class="error-text">*</span></label>
            {!!  Form::selectRange('number', 2021,1940, 66, ['class' => 'form-control', 'placeholder'=>'year']) !!}
        </div>

    </div>
    <div class="col-sm-12">
        <hr class="c-hr">
    </div>



    <div class="col-sm-6">

            <div class="form-group">
                <label for="name">Certification Name </label>
                {!!Form::text('name',null,['placeholder'=>'Specify Employer','class'=>'form-control','id'=>'register_company_name','required'])!!}
            </div>

            <div class="form-group">
                <label for="name">Certifiaction Body</label>
                {!!Form::text('name',null,['placeholder'=>'Specify Employer','class'=>'form-control','id'=>'register_company_name','required'])!!}
            </div>

            <div class="form-group">
                <label for="name">Year</label>
                {!!  Form::selectRange('number', 2021,1940, 66, ['class' => 'form-control', 'placeholder'=>'year']) !!}
            </div>

    </div>

</div>

<div class="col-xs-12 text-center pad-t40">
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Save Education Details">
    </div>
</div>

{!! Form::token() !!}
{!! Form::close() !!}
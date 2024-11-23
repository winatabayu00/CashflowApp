<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input class="form-control date-flatpickr" name="date" placeholder="Pick a date" id="kt_datepicker_1" value="{{ old('date', now()->toDateString()) }}"/>
        @error('date')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Account</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row fv-plugins-icon-container">
        <select class="form-select" data-control="select2" name="account_id" data-placeholder="Select an option">
            <option></option>
            @foreach($accounts->data as $account)
                <option value="{{ $account['id'] }}" @selected(old('account_id') == $account['id'])>{{ $account['name'] }}</option>
            @endforeach
        </select>
        @error('account_id')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Category</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row fv-plugins-icon-container">
        <select class="form-select" data-control="select2" name="category_id" data-placeholder="Select an option">
            <option></option>
            @foreach($categories->data as $category)
                <option value="{{ $category['id'] }}" @selected(old('category_id') == $category['id'])>{{ $category['name'] }}</option>
            @endforeach
        </select>
        @error('category_id')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Type</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row fv-plugins-icon-container">
        <select class="form-select" data-control="select2" name="type" data-placeholder="Select an option">
            <option></option>
            @foreach($transactionTypes->data as $type)
                <option value="{{ $type['id'] }}" @selected(old('type') == $type['id'])>{{ $type['name'] }}</option>
            @endforeach
        </select>
        @error('type')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Amount</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input type="number" name="amount" class="form-control form-control-lg" min="0" placeholder="Amount" value="{{old('amount', 0)}}">
        @error('amount')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    </div>
    <!--end::Col-->

<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Description</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <textarea name="description" data-kt-autosize="true" class="form-control">{{old('description')}}</textarea>
        @error('description')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->


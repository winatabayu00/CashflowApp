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
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Schedule Repeat</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row fv-plugins-icon-container">
        <select class="form-select" data-control="select2" name="schedule_type" data-placeholder="Select an option">
            <option></option>
            @foreach($scheduleTypes->data as $scheduleType)
                <option value="{{ $scheduleType['id'] }}" @selected(old('schedule_type') == $scheduleType['id']) @disabled($scheduleType['id'] != \App\Enums\ScheduleTransaction\ScheduleType::DAILY->value)>{{ $scheduleType['name'] }}</option>
            @endforeach
        </select>
        @error('schedule_type')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Transaction Type</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row fv-plugins-icon-container">
        <select class="form-select" data-control="select2" name="transaction_type" data-placeholder="Select an option">
            <option></option>
            @foreach($transactionTypes->data as $type)
                <option value="{{ $type['id'] }}" @selected(old('transaction_type') == $type['id'])>{{ $type['name'] }}</option>
            @endforeach
        </select>
        @error('transaction_type')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Transaction Amount</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input type="number" name="transaction_amount" class="form-control form-control-lg" min="0" placeholder="Transaction Amount" value="{{old('transaction_amount', 0)}}">
        @error('transaction_amount')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    </div>
    <!--end::Col-->

<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Transaction Description</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <textarea name="transaction_description" data-kt-autosize="true" class="form-control">{{old('transaction_description')}}</textarea>
        @error('transaction_description')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Action</label>
    <!--end::Label-->

    <div class="col-lg-8 fv-row fv-plugins-icon-container">
        <select class="form-select" data-control="select2" name="action" data-placeholder="Select an option">
            <option></option>
            @foreach($scheduleActions->data as $action)
                <option value="{{ $action['id'] }}" @selected(old('action') == $action['id'])>{{ $action['name'] }}</option>
            @endforeach
        </select>
        @error('action')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->


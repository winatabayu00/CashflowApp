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


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row fv-plugins-icon-container">
        <select class="form-select" data-control="select2" name="status" data-placeholder="Select an option">
            <option></option>
            @foreach($budgetStatus->data as $status)
                <option value="{{ $status['id'] }}" @selected(old('status') == $status['id'])>{{ $status['name'] }}</option>
            @endforeach
        </select>
        @error('status')
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
        @enderror

    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->


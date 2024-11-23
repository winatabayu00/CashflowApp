<div class="fv-row mb-8">
    <!--begin::Email-->
    <label class="required" for="date_from">Date From</label>
    <input class="form-control date-flatpickr" name="date_from" placeholder="Pick date rage"
           value="{{request()->input('date_from', now()->startOfMonth()->toDateString())}}" id="date_from"/>

    @error('date_from')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="fv-row mb-8">
    <!--begin::Email-->
    <label class="required" for="date_to">Date To</label>
    <input class="form-control date-flatpickr" name="date_to" placeholder="Pick date rage"
           value="{{request()->input('date_to', now()->toDateString())}}" id="date_to"/>

    @error('date_to')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

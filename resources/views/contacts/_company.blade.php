<select class="form-select">
    <option value="" selected>All Companies</option>
    @foreach($companies as $key => $company)
        <option value={{$key}}>{{ $company->name }}</option>
    @endforeach
</select>
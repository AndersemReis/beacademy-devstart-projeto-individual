@csrf 


<div class="form-group row">
    <label for="name" class="col-form-label col-sm-2 required">Nome*</label>
    <div class="col-sm-10">
        <input value="{{ old('name', @$empresa->name) }}" type="text" name="name" required='required' maxlength="255" class="form-control @error('name') is-invalid @enderror">
        @error('name') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="enterprise" class="col-form-label col-sm-2 required">Razao Social</label>
    <div class="col-sm-10">
        <input value="{{ old('enterprise', @$empresa->enterprise) }}"type="text" name="enterprise" id="enterprise" maxlength="255" class="form-control @error('enterprise') is-invalid @enderror">
        @error('enterprise') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="document" class="col-form-label col-sm-2 required">Documento*</label>
    <div class="col-sm-10">
        <input value="{{ old('document', @$empresa->document) }}" type="text" name="document" id="document" required="required" maxlength="18" class="cpf_cnpj form-control @error('document') is-invalid @enderror">
        @error('document') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="ie_rg" class="col-form-label col-sm-2">IE/RG</label>
    <div class="col-sm-10">
        <input value="{{ old('ie_rg', @$empresa->ie_rg) }}" type="text" name="ie_rg" id="ie_rg" maxlength="12" class="ie_rg form-control @error('ie_rg') is-invalid @enderror">
        @error('ie_rg') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="contact_name" class="col-form-label col-sm-2 required">Nome Contato*</label>
    <div class="col-sm-10">
        <input value="{{ old('contact_name', @$empresa->contact_name) }}" type="text" name="contact_name" id="contact_name" required="required" maxlength="255" class="form-control @error('contact_name') is-invalid @enderror">
        @error('contact_name') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="cel_phone" class="col-form-label col-sm-2 required">Celular*</label>
    <div class="col-sm-10">
        <input value="{{ old('cel_phone', @$empresa->cel_phone) }}" type="text" name="cel_phone" id="cel_phone" required="required" maxlength="11" class="cel_phone form-control @error('cel_phone') is-invalid @enderror">
        @error('cel_fone') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-form-label col-sm-2 required">Email*</label>
    <div class="col-sm-10">
        <input value="{{ old('email', @$empresa->email) }}" type="email" name="email" id="email" required="required" axlength="100" class="form-control @error('email') is-invalid @enderror">
        @error('email') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="phone" class="col-form-label col-sm-2">Telefone</label>
    <div class="col-sm-10">
        <input value="{{ old('phone', @$empresa->phone) }}"  type="text" name="phone" id="phone" maxlength="11" class="phone form-control @error('phone') is-invalid @enderror">
        @error('phone') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="cep" class="col-form-label col-sm-2 required">CEP*</label>
    <div class="col-sm-10">
        <input value="{{ old('cep', @$empresa->cep) }}" type="text" name="cep" id="cep" required="required" maxlength="9" class="cep form-control @error('cep') is-invalid @enderror">
        @error('cep') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="address" class="col-form-label col-sm-2 required">Logradouro*</label>
    <div class="col-sm-10">
        <input value="{{ old('address', @$empresa->address) }}" type="text" name="address" id="address" required="required" maxlength="150" class="form-control @error('address') is-invalid @enderror">
        @error('address') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="quarter" class="col-form-label col-sm-2 required">Bairro*</label>
    <div class="col-sm-10">
        <input value="{{ old('quarter', @$empresa->quarter) }}" type="text" name="quarter" id="quarter" required="required" maxlength="50" class="form-control @error('quarter') is-invalid @enderror">
        @error('quarter') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="city" class="col-form-label col-sm-2 required">Cidade*</label>
    <div class="col-sm-10">
        <input value="{{ old('city', @$empresa->city) }}" type="text" name="city" id="city" required="required" maxlength="100" class="form-control @error('city') is-invalid @enderror">
        @error('city') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="state" class="col-form-label col-sm-2">Estado*</label>
    <div class="col-sm-10">
        <select name="state" required="" class="form-control @error('state') is-invalid @enderror">
            <option value="">Selecione</option>
            @foreach(estados() as $sigla => $nome)
                <option{{ @$empresa->state == $sigla ? 'selected' : '' }} value="{{ $sigla }}">{{ $nome }}</option>
            @endforeach
        </select>
        @error('state') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="observation" class="col-form-label col-sm-2">Observaçao</label>
    <div class="col-sm-10">
        <input value="{{ old('observation', @$empresa->observation) }}" type="text" name="observation" id="observation" maxlength="500" class="form-control @error('observation') is-invalid @enderror">
        @error('observation') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
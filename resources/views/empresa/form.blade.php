@csrf 

<input type="hidden" name="type" value="{{ $type }}">

<div class="form-group row">
    <label for="name" class="col-form-label col-sm-2 required">Nome*</label>
    <div class="col-sm-10">
        <input type="text" name="name" required='required' maxlength="255" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="enterprise" class="col-form-label col-sm-2 required">Razao Social</label>
    <div class="col-sm-10">
        <input type="text" name="enterprise" id="enterprise" maxlength="255" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="document" class="col-form-label col-sm-2 required">Documento*</label>
    <div class="col-sm-10">
        <input type="text" name="document" id="document" required="required" maxlength="18" class="cpf form-control">
    </div>
</div>
<div class="form-group row">
    <label for="ie-rg" class="col-form-label col-sm-2">IE/RG</label>
    <div class="col-sm-10">
        <input type="text" name="ie-rg" id="ie-rg" maxlength="12" class="ie-rg form-control">
    </div>
</div>
<div class="form-group row">
    <label for="contact-name" class="col-form-label col-sm-2 required">Nome Contato*</label>
    <div class="col-sm-10">
        <input type="text" name="contact-name" id="contact-name" required="required" maxlength="255" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="cel-phone" class="col-form-label col-sm-2 required">Celular*</label>
    <div class="col-sm-10">
        <input type="text" name="cel-phone" id="cel-phone" required="required" maxlength="11" class="phone form-control">
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-form-label col-sm-2 required">Email*</label>
    <div class="col-sm-10">
        <input type="email" name="email" id="email" required="required" axlength="100" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="phone" class="col-form-label col-sm-2">Telefone</label>
    <div class="col-sm-10">
        <input type="text" name="phone" id="phone" maxlength="11" class="phone form-control">
    </div>
</div>
<div class="form-group row">
    <label for="cep" class="col-form-label col-sm-2 required">CEP*</label>
    <div class="col-sm-10">
        <input type="text" name="cep" id="cep" required="required" maxlength="9" class="cep form-control">
    </div>
</div>
<div class="form-group row">
    <label for="address" class="col-form-label col-sm-2 required">Logradouro*</label>
    <div class="col-sm-10">
        <input type="text" name="address" id="address" required="required" maxlength="150" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="quarter" class="col-form-label col-sm-2 required">Bairro*</label>
    <div class="col-sm-10">
        <input type="text" name="quarter" id="quarter" required="required" maxlength="50" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="city" class="col-form-label col-sm-2 required">Cidade*</label>
    <div class="col-sm-10">
        <input type="text" name="city" id="city" required="required" maxlength="100" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="state" class="col-form-label col-sm-2 required">Estado*</label>
    <div class="col-sm-10">
        <input type="text" name="state" id="state" required="required" maxlength="2" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="observation" class="col-form-label col-sm-2">Observaçao</label>
    <div class="col-sm-10">
        <input type="text" name="observation" id="observation" maxlength="500" class="form-control">
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
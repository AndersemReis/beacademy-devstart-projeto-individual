<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ isset($produto->nome) ? $produto->nome : ''}}" required>
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descrição') ? 'has-error' : ''}}">
    <label for="descrição" class="control-label">{{ 'Descrição' }}</label>
    <textarea class="form-control" rows="5" name="descrição" type="textarea" id="descrição" >{{ isset($produto->descrição) ? $produto->descrição : ''}}</textarea>
    {!! $errors->first('descrição', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Adicionar' }}">
</div>

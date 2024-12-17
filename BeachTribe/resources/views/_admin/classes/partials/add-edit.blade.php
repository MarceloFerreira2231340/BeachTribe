<div class="form-group">
    <label for="inputTitle">Título:</label>
    <input type="text" class="form-control" name="title" id="inputTitle"
        value="{{ old('title', $class_->title ?? '') }}" />
</div>

<div class="form-group">
    <label for="inputType">Tipo:</label>
    <select name="type" id="inputType" class="form-control">
        <option value="A" {{ old('type', $class_->type ?? '') == 'A' ? 'selected' : '' }}>Avançado</option>
        <option value="M" {{ old('type', $class_->type ?? '') == 'M' ? 'selected' : '' }}>Médio</option>
        <option value="B" {{ old('type', $class_->type ?? '') == 'B' ? 'selected' : '' }}>Básico</option>
    </select>
</div>

<div class="form-group">
    <label for="inputState">Estado:</label>
    <select name="state" id="inputState" class="form-control">
        <option value="A" {{ old('state', $class_->state ?? '') == 'A' ? 'selected' : '' }}>Ativo</option>
        <option value="H" {{ old('state', $class_->state ?? '') == 'H' ? 'selected' : '' }}>Oculto</option>
    </select>
</div>

<div class="form-group">
    <label for="inputLocation">Localização:</label>
    <input type="text" class="form-control" name="location" id="inputLocation"
        value="{{ old('location', $class_->location ?? '') }}" />
</div>

<div class="form-group">
    <label for="inputDate">Data:</label>
    <input type="date" class="form-control" name="date" id="inputDate"
        value="{{ old('date', $class_->date ?? '') }}" />
</div>

<div class="form-group">
    <label for="inputBgTime">Hora de Início:</label>
    <input type="time" class="form-control" name="bgtime" id="inputBgTime"
        value="{{ old('bgtime', $class_->bgtime ?? '') }}" />
</div>

<div class="form-group">
    <label for="inputEndTime">Hora de Fim:</label>
    <input type="time" class="form-control" name="endtime" id="inputEndTime"
        value="{{ old('endtime', $class_->endtime ?? '') }}" />
</div>

<div class="form-group">
    <label for="inputPrice">Preço (€):</label>
    <input type="number" step="0.01" class="form-control" name="price" id="inputPrice"
        value="{{ old('price', $class_->price ?? '') }}" />
</div>

<div class="form-group">
    <label for="inputDuration">Duração (em horas):</label>
    <input type="number" class="form-control" name="duration" id="inputDuration"
        value="{{ old('duration', $class_->duration ?? '') }}" />
</div>

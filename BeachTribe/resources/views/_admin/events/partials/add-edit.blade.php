<div class="form-group">
    <label for="inputType">Categoria:</label>
    <select name="type" id="inputType" class="form-control">
        <option value="Festivais" {{ old('type', $events->type) == 'Festivais' ? 'selected' : '' }}>Festival</option>
        <option value="Formações" {{ old('type', $events->type) == 'Formações' ? 'selected' : '' }}>Formação</option>
    </select>
</div>

<div class="form-group">
    <label for="inputTitle">Titulo:</label>
    <input type="text" class="form-control" name="title" id="inputTitle"
        value="{{ old('title', $events->title) }}" />
</div>

<div class="form-group">
    <label for="inputDescription">Descrição:</label>
    <input type="text" class="form-control" name="description" id="inputDescription"
        value="{{ old('description', $events->description) }}" />
</div>

<div class="form-group">
    <label for="inputImage">Imagem:</label><br>
    <input type="file" name="image" id="inputImage" />
</div>

<div class="form-group">
    <label for="inputLocal">Local:</label>
    <input type="text" class="form-control" name="local" id="inputLocal"
        value="{{ old('local', $events->local) }}" />
</div>

<div class="form-group">
    <label for="inputState">Estado:</label>
    <select name="state" id="inputState" class="form-control">
        <option value="Ativado" {{ old('state', $events->state) == 'Ativado' ? 'selected' : '' }}>Ativado</option>
        <option value="Desativado" {{ old('state', $events->state) == 'Desativado' ? 'selected' : '' }}>Desativado</option>
    </select>
</div>

{{-- <div class="form-group">
    <label for="inputDate">Data do Evento:</label>
    <input type="datetime-local" class="form-control" name="date" id="inputDate"
        value="{{ old('date', $events->date) }}" />
</div> --}}

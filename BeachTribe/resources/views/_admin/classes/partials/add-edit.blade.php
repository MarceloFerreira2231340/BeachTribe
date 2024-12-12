<div class="form-group">
    <label for="inputTitle">Title:</label>
    <input type="text" class="form-control" name="title" id="inputTitle"
        value="{{ old('title', $class_->title) }}" />
</div>

<div class="form-group">
    <label for="inputType">Tipo:</label>
    <select name="type" id="inputType" class="form-control">
        <option value="A" {{ old('type', $class_->type) == 'A' ? 'selected' : '' }}>Advanced</option>
        <option value="M" {{ old('type', $class_->type) == 'M' ? 'selected' : '' }}>Medium</option>
        <option value="B" {{ old('type', $class_->type) == 'B' ? 'selected' : '' }}>Begginer</option>
    </select>
</div>

<div class="form-group">
    <label for="inputLocation">Localização:</label>
    <input type="text" class="form-control" name="location" id="inputLocation"
        value="{{ old('location', $class_->location) }}" />
</div>

<!--
<div class="form-group">
    <label for="inputDate">Data:</label>
    <input type="datetime_local" class="form-control" name="date" id="inputDate"
        value="{{ old('date', $class_->date) }}" />
</div>
-->

<div class="form-group">
    <label for="inputDuration">Duração:</label>
    <input type="num" class="form-control" name="duration" id="inputDuration"
        value="{{ old('duration', $class_->duration) }}" />
</div>

<div class="form-group">
    <label for="inputState">Estado:</label>
    <select name="state" id="inputState" class="form-control">
        <option value="A" {{ old('state', $class_->state) == 'A' ? 'selected' : '' }}>Active</option>
        <option value="H" {{ old('state', $class_->state) == 'H' ? 'selected' : '' }}>Hidden</option>
    </select>
</div>
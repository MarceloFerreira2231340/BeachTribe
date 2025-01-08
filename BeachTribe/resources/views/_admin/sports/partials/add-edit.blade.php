<div class="form-group">
    <label for="inputTitle">Nome da modalidade</label>
    <input type="text" class="form-control" name="title" id="inputTitle"
        value="{{ old('title', $sport->title) }}" />
</div>

<div class="form-group">
    <label for="inputDescription">Descrição:</label>
    <input type="text" class="form-control" name="description" id="inputDescription"
        value="{{ old('description', $sport->description) }}" />
</div>

<div class="form-group">
    <label for="inputImage">Imagem:</label><br>
    <input type="file" name="image" id="inputImage" />
</div>

<div class="form-group">
    <label for="inputDifficulty">Dificuldade</label>
    <select name="difficulty" id="inputDifficulty" class="form-control">
        <option value="Easy" {{ old('difficulty', $sport->difficulty) == 'Easy' ? 'selected' : '' }}>Fácil</option>
        <option value="Medium" {{ old('difficulty', $sport->difficulty) == 'Medium' ? 'selected' : '' }}>Médio</option>
        <option value="Hard" {{ old('difficulty', $sport->difficulty) == 'Hard' ? 'selected' : '' }}>Difícil</option>
    </select>
</div>

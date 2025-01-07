<div class="form-group">
    <label for="inputName">Nome:</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{ old('name', $product->name) }}" />
</div>

<div class="form-group">
    <label for="inputImage">Imagem:</label><br>
    <input type="file" name="image" id="inputImage" />
</div>

<div class="form-group">
    <label for="inputLink">Link:</label>
    <input type="text" class="form-control" name="link" id="inputLink" value="{{ old('link', $product->link) }}" />
</div>
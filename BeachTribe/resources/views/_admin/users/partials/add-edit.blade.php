<div class="form-group">
    <label for="inputFullname">Nome:</label>
    <input type="text" class="form-control" name="name" id="inputFullname"
        value="{{ old('name', $user->name) }}" />
</div>

<div class="form-group">
    <label for="inputEmail">E-mail:</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{ old('email', $user->email) }}" />
</div>

<div class="form-group">
    <label for="inputPhone">Telemóvel:</label>
    <input type="num" class="form-control" name="phone" id="inputPhone"
        value="{{ old('phone', $user->phone) }}" />
</div>

<div class="form-group">
    <label for="inputTipo">Previlégios:</label>
    <select name="tipo" id="inputTipo" class="form-control">
        <option value="A" {{ old('tipo', $user->tipo) == 'A' ? 'selected' : '' }}>Administrador</option>
        <option value="C" {{ old('tipo', $user->tipo) == 'C' ? 'selected' : '' }}>Cliente</option>
    </select>
</div>

<!--
<div class="form-group">
    <label for="inputDataNasc">Data de Nascimento</label>
    <input type="datetime_local" class="form-control" name="dataNasc" id="inputDataNasc"
        value="{{ old('data_nasc', $user->data_nasc) }}" />
</div>
-->

<div class="form-group">
    <label for="inputAddress">Endereço:</label>
    <input type="text" class="form-control" name="address" id="inputAddress"
        value="{{ old('address', $user->address) }}" />
</div>

<div class="form-group">
    <label for="inputPassword">Password:</label>
    <input type="password" class="form-control" name="password" id="inputPassword"
        value="" />
</div>

<div class="form-group">
    <label for="inputPasswordConfirmation">Confirmação da Password:</label>
    <input type="password" class="form-control" name="password_confirmation" id="inputPasswordConfirmation"
        value="" />
</div>
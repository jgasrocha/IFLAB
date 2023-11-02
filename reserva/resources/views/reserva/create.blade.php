<form method="post" action="{{ route('reservas.store') }}">
    @csrf
    <div class="form-group">
        <label for="laboratorio_id">Laboratórios:</label>
        <select name="laboratorio_id" id="laboratorio_id" class="form-control">
            @foreach ($laboratorios as $laboratorio)
                <option value="{{ $laboratorio->id }}" {{ $laboratorio->id == $laboratorio_id ? 'selected' : '' }}>
                    {{ $laboratorio->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="date" name="date" id="date">
    </div>
    <button type="submit" class="btn btn-outline-success">Criar Reserva</button>
</form>

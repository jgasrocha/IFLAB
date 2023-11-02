<form action="{{ route('laboratorios.store') }}" method="post">
    @csrf
Nome: <br><input type="text" name="name" id="name">
<button type="submit" class="btn btn-outline-success">Criar Lab</button>
</form>
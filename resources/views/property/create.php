<h1>Formulário de Cadastro :: Imóveis</h1>

<form action="<?= url('moveis/store'); ?>" method="post">
    <label for="title">Título do imóvel</label>
    <input type="text" name="title" id="title">

    <br />

    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>

    <br />

    <label for="rental_price">Valor de locação</label>
    <input type="text" name="rental_price" id="rental_price">

    <br />

    <label for="sale_price">Valor de Compra</label>
    <input type="text" name="sale_price" id="sale_price">

    <br />

    <button type="submit">Cadastrar Imóvel</button>
</form>

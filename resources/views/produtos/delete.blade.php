<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver novo produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

    <section class="section">
        <div class="container">
            <h1 class="title">
                Excluir um produto
            </h1>
            <p class="subtitle">
                Tem certeza que deseja excluir esse produto?
            </p>
            <form action="{{ route('excluir_produto', ['id' => $produto->id])}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                
                <div class="field">
                    <div class="control">
                        <input class="input is-large" value="{{ $produto->nome }}" name="nome" disabled>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-large" value="{{ $produto->custo }}" name="custo" disabled>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-large" value="{{ $produto->preco }}" name="preco" disabled>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-large" value="{{ $produto->quantidade }}" name="quantidade" disabled>
                    </div>
                </div>

                <div class="field is-grouped is-grouped-centered">
                    <p class="control">
                        <button class="button is-primary">
                            Excluir
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
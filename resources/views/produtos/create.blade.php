<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar um novo produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

    <section class="section">
        <div class="container">
            <h1 class="title">
                Cadastrar um novo produto
            </h1>
            <p class="subtitle">
                Digite os dados do produto
            </p>
            <div class="flash-message">
              @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                      <p class="notification  is-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                  @endif
              @endforeach
          </div>
            <form action="{{ route('registrar_produto')}}" method="POST">
              @csrf
                <div class="field">
                    <label class="label is-large">Dados do produto</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-large" placeholder="nome" name="nome">
                    </div>
                </div>

                <div class="field">
                    <div class="control has-icons-left has-icons-right">
                        <input type="number" min="1" step="0.01"  class="input is-large" placeholder="custo" name="custo">
                    </div>
                </div>

                <div class="field">
                    <div class="control has-icons-left has-icons-right">
                        <input type="number" min="1" step="0.01"  class="input is-large" placeholder="preço" name="preco">
                    </div>
                </div>

                <div class="field">
                    <div class="control has-icons-left has-icons-right">
                        <input  type="number" min="1" max="5000" class="input is-large" placeholder="quantidade" name="quantidade">
                    </div>
                </div>

                <div class="field is-grouped is-grouped-centered">
                    <p class="control">
                        <button class="button is-primary">
                            Salvar
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
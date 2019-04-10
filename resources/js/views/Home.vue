<template>
    <div class="container">
        <div class="col-xs-1 text-center">
          <h3 class="h3 h3-lista">Bem-vindo ao Corpus de Aprendizes</h3>
        </div>

        <div class="row">
            <div class="col">
              <form method="POST" action="">
                <div class="form-group mt-2">
                  <label for="titulo">E-mail</label>
                  <input type="text" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                  <label for="titulo">Senha</label>
                  <input type="text" class="form-control" name="senha" id="senha" required>
                </div>
                <button type="submit" class="btn btn-success float-right">Entrar</button>
              </form>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

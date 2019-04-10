<template>
    <div class="container">
        <div class="col-xs-1 text-center">
          <h3 class="h3 h3-lista">Bem-vindo ao Corpus de Aprendizes</h3>
        </div>

        <div class="row">
            <div class="col">
                <form method="POST" action="/teste" @submit.prevent="onSubmit">
                    <div class="form-group mt-2">
                        <label for="titulo">E-mail</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="email@exemplo.com" autocomplete="username" v-model="form.email" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" autocomplete="current-password" v-model="form.senha" required>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Entrar</button>
                </form>
            </div>
        </div>

    </div>
</template>

<script>
    import Form from '../models/Form';

    export default {
        data() {
            return {
                form: new Form({
                    email: '',
                    senha: ''
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.post('/teste')
                    .then(response => alert('Wahoo!'))
                    .catch(error => {
                        console.error(error);
                    });
            }
        }
    }
</script>

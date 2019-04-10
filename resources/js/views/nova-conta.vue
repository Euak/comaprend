<template>
    <div class="container">
        <div class="col-xs-1 text-center">
          <h3 class="h3 h3-lista">Criar conta de usuário</h3>
        </div>

        <div class="row">
            <div class="col">
                <form method="POST" action="/teste" @submit.prevent="onSubmit">
                    <div class="form-group mt-2">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" v-model="form.nome" required>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" v-model="form.data_nascimento" required>
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" class="custom-select" v-model="form.sexo" required>
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" id="email" v-model="form.email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" v-model="form.senha" required>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Entrar</button>
                </form>
                <router-link to="/">
                    <a class="btn btn-success">Voltar para Home</a>
                </router-link>
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
                    nome: '',
                    data_nascimento: '',
                    sexo: '',
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

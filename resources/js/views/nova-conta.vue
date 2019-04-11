<template>
    <div class="container">
        <div class="col-xs-1 text-center">
          <h3 class="h3 h3-lista">Criar conta de usuário</h3>
        </div>

        <div class="row">
            <div class="col">
                <form method="POST" action="/teste" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
                    <div class="form-group mt-2">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" v-bind:class="{ 'is-invalid': form.errors.has('nome') }"
                            name="nome" id="nome" v-model="form.nome">
                        <div v-if="form.errors.has('nome')" v-text="form.errors.get('nome')" class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" v-bind:class="{ 'is-invalid': form.errors.has('data_nascimento') }"
                            name="data_nascimento" id="data_nascimento" v-model="form.data_nascimento" >
                        <div v-if="form.errors.has('nome')" v-text="form.errors.get('data_nascimento')" class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" class="custom-select" v-bind:class="{ 'is-invalid': form.errors.has('sexo') }"
                            v-model="form.sexo" >
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                            <option value="outro">Outro</option>
                        </select>
                        <div v-if="form.errors.has('sexo')" v-text="form.errors.get('sexo')" class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" v-bind:class="{ 'is-invalid': form.errors.has('email') }"
                            name="email" id="email" v-model="form.email" >
                        <div v-if="form.errors.has('email')" v-text="form.errors.get('email')" class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" v-bind:class="{ 'is-invalid': form.errors.has('senha') }"
                            name="senha" id="senha" v-model="form.senha" >
                        <div v-if="form.errors.has('senha')" v-text="form.errors.get('senha')" class="invalid-feedback"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success float-right">Criar</button>
                        </div>
                    </div>
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
                this.form.post('/register')
                    .then(response => alert('Wahoo!'));
            }
        }
    }
</script>

<form>
    <div class="flex flex-wrap">
        <div class="basis-full sm:basis-6/12 sm:pr-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="first_name">Nome</label>

                <input type="text" class="form-input" name="first_name" id="first_name" placeholder="Nome" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pl-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="last_name">Sobrenome</label>

                <input type="text" class="form-input" name="last_name" id="last_name" placeholder="Sobrenome" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pr-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="username">Usuário</label>

                <input type="text" class="form-input" name="username" id="username" placeholder="Usuário" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pl-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="gender">Gênero</label>

                <select class="form-input" name="gender" id="gender">
                    <option selected disabled>Gênero</option>
                    <option value="n">Não definir</option>
                    <option value="m">Masculino</option>
                    <option value="f">Feminino</option>
                </select>
            </div>
        </div>

        <div class="basis-full">
            <div class="form-group">
                <label class="form-input-label sr-only" for="email">E-mail</label>

                <input type="email" class="form-input" name="email" id="email" placeholder="E-mail" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pr-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="password">Senha</label>

                <input type="password" class="form-input" name="password" id="password" placeholder="Senha" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pl-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="password_confirmation">Confirmar senha</label>

                <input type="password" class="form-input" name="password_confirmation" id="password_confirmation"
                    placeholder="Confirmar senha" />
            </div>
        </div>
    </div>

    <x-front.button type="submit" text="Create account" variant="primary" full />
</form>

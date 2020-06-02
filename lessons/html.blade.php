@extends('layout')


<!-- Titulo da página na aba do navegador -->
@section('title')
HTML
@endsection
<!-- /Titulo da página na aba do navegador -->


<!-- Seção a ser utilzada com o blade -->
@section('cabecalho')
@endsection()
<!-- /Seção a ser utilzada com o blade -->


<!-- Conteúdo main da página -->
@section('conteudo')

<!-- Primeiro Formulário -->
<h2>FORMULÁRIO HTML</h2>
<form action="" method="post" class="html_form_01">

    <div name="first_block" class="first_block" id="first_block">
        <!-- Name -->
        <label for="input_name">Nome </label>
        <input type="text" name="name" id="input_name">
        </br>
        <!-- Complete name -->
        <label for="input_complete_name">N Completo</label>
        <input type="text" name="complete_name" id="input_complete_name">
        </br>
        <!-- CPF -->
        <label for="input_cpf">CPF </label>
        <input type="text" name="cpf" id="input_cpf" required>
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your response with anyone else.</small> -->
        </br>
        <!-- Email -->
        <label for="input_email">E-mail </label>
        <input type="email" name="email" id="input_email" required>
        </br>
        <!-- Web site -->
        <label for="input_site">Web site </label>
        <input type="url" name="site" id="input_site">
        </br>
        <!-- Endereço -->
        <label for="input_endereco">Endereço </label>
        <input type="text" name="endereco" id="input_endereco">
        </br>
    </div>

    <div name="secund_block" class="secund_block" id="secund_block">
        <!-- Bairro -->
        <label for="input_bairro">Bairro </label>
        <input type="text" name="bairro" id="input_bairro">

        <!-- Cidade -->
        <label for="input_cidade">Cidade </label>
        <input type="text" name="name" id="input_cidade">

        <!-- CEP -->
        <label for="input_cep">CEP</label>
        <input type="text" name="cep" id="input_cep">

        <!-- UF -->
        <label for="select_uf">UF</label>
        <select name="uf" id="select_uf">
            <option value="">Escolha</option>
            <!--Região Norte (07 estados)-->
            <optgroup label="Região Norte">
                <!-- Estados -->
                <option value="am">Amazonas</option>
                <option value="rr">Roraima</option>
                <option value="ap">Amapá</option>
                <option value="pa">Pará</option>
                <option value="to">Tocantis</option>
                <option value="ro">Rondônia</option>
                <option value="ac">Acre</option>
            </optgroup>
            <!--Região Nordeste (09 estados)-->
            <optgroup label="Região Nordeste">
                <!-- Estados -->
                <option value="ma">Maranhão</option>
                <option value="pi">Piauí</option>
                <option value="ce">Ceará</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="pe">Pernambuco</option>
                <option value="pb">Paraíba</option>
                <option value="se">Sergipe</option>
                <option value="al">Alagoas</option>
                <option value="ba">Bahia</option>
            </optgroup>
            <!--Região  Centro_Oeste (03 estados)-->
            <optgroup label="Região Centro_Oeste">
                <!-- Estados -->
                <option value="mt">Mato Grosso</option>
                <option value="ms">Mato Grosso do Sul</option>
                <option value="go">Goiás</option>
            </optgroup>
            <!--Região Sudeste (04 estados)-->
            <optgroup label="Região Sudeste">
                <!-- Estados -->
                <option value="sp">São Paulo</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="es">Espírito Santo</option>
                <option value="mg">Minas Gerais</option>
            </optgroup>
            <!--Região Sul (03 estados)-->
            <optgroup label="Região Sul">
                <!-- Estados -->
                <option value="pr">Paraná</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="sc">Santa Catarina</option>
            </optgroup>
        </select>
        </br>

        <!-- Telefone -->
        <label for="input_telefone">Telefone </label>
        <input type="text" name="telefone" id="input_telefone">

        <!-- Fax -->
        <label for="input_fax">Fax </label>
        <input type="text" name="fax" id="input_fax">

        <!-- Data de Nascimento -->
        <label for="input_data_nascimento">Data Nascimento</label>
        <input type="date" name="data_nascimento" id="input_data_nascimento">
        </br>

        <!-- Sexo -->
        </br></br></br></br>
        <label for="">Sexo </label>
        <input type="radio" name="sexo" id="f" value="f" style="margin: 6px 6px 0px 0px">
        <label for="f" style="margin: 6px 0px; width: 5%">F</label>
        <input type="radio" name="sexo" id="m" value="m" style="margin: 6px 6px 0px 0px">
        <label for="m" style="margin: 6px 0px; width: 5%">M</label>
        </br></br></br>

        <!-- Celular -->
        <label for="input_celular">Celular</label>
        <input type="text" name="celular" id="input_celular">

        <!-- Estado Civil -->
        <label for="select_estado_civil">Est.Civil</label>
        <select name="estado_civil" id="select_estado_civil">
            <option value="solteiro">Solteiro</option>
            <option value="casado">Casado</option>
            <option value="união estável">União Estável</option>
            <option value="dívorciado">Divorciado</option>
            <option value="viuvo">Viúvo</option>
        </select>
        <!-- Login -->
        <label for="input_login">Login</label>
        <input type="text" name="login" id="input_login">

        <!-- Password -->
        <label for="input_password">Password</label>
        <input type="password" name="input_password">

    </div>
    </br>

    <div name="third_block" class="third_block" id="third_block">
        <!-- Informações sobre assuntos -->
        </br></br></br></br></br></br>
        <label><strong>Deseja receber informações sobre os seguintes assuntos abaixo:</strong></label>
        </br>
        <input type="checkbox" id="tecnologia" value="tecnologia">
        <label for="tecnologia"> Tecnologia </label>
        <input type="checkbox" id="esportes" value="esportes">
        <label for="esportes"> Esportes</label>
        <input type="checkbox" id="automoveis" value="automoveis">
        <label for="automoveis"> Automóveis</label>
        <input type="checkbox" id="culinaria" value="culinaria">
        <label for="culinaria"> Culinária</label>
        <input type="checkbox" id="politica" value="politica">
        <label for="politica"> Política</label>
        <input type="checkbox" id="pocilial" value="pocilial">
        <label for="pocilial"> Pocilial</label>
        <input type="checkbox" id="vehicle1" value="Bike">
        <label for="vehicle1"> I have a bike</label>
        <input type="checkbox" id="tempo" value="tempo">
        <label for="tempo"> Tempo</label>
        <input type="checkbox" id="cultura" value="cultura">
        <label for="cultura"> Cultura</label>
        <input type="checkbox" id="economia" value="economia">
        <label for="economia"> Economia</label>
        <input type="checkbox" id="jogos" value="jogos">
        <label for="jogos"> Jogos</label>
        <input type="checkbox" id="educacao" value="educacao">
        <label for="educacao"> Educação</label>
        <input type="checkbox" id="viagem" value="viagem">
        <label for="viagem"> Viagem</label>
        <input type="checkbox" id="empregos" value="empregos">
        <label for="empregos"> Empregos</label>
        <input type="checkbox" id="moda_estilo" value="moda_estilo">
        <label for="moda_estilo"> Moda e Estilo</label>
        </br>
        <!-- Regras de cadastro -->
        <input type="checkbox" id="check_regra_user" name="regra_user" value="checked_user">
        <label for="check_regra_user"> Li as regras de cadastro e autorização a criação do usuário</label>
        </br>
        <!-- Botões -->
        <input type="reset" value="Limpar" class="btn btn_reset">
        <input type="submit" value="Enviar" class="btn btn_submit">
    </div>
</form>
<!-- /Primeiro Formulário -->

<!-- Segundo Formulário -->
<h2>FORMULÁRIO HTML 02</h2>
<form action="" method="post" class="html_form_02 border_form02">
    <!-- Dados Pessoais -->
    <fieldset class="d_in_grid">
        <legend>Dados pessoais</legend>
        <!--- O elemento fieldset com sua legenda, repete a pergunta a cada opção. -->
        <!-- Nome -->
        <label for="input_name_form_02">Nome:</label>
        <input type="text" name="input_name_form_02" id="input_name_form_02">

        <!-- Nome Completo -->
        <label for="input_sobrenome_form_02">Sobrenome:</label>
        <input type="text" name="input_sobrenome_form_02" id="input_sobrenome_form_02">
        </br>

        <!-- Nascimento -->
        <label for="input_nascimento_form_02">Nascimento:</label>
        <input type="date" name="input_nascimento_form_02" id="input_nascimento_form_02">
        </br>

        <!-- RG -->
        <label for="input_rg_form_02">RG:</label>
        <input type="text" name="input_rg_form_02" id="input_rg_form_02">
        </br>

        <!-- cpf -->
        <label for="input_cpf_form_02">CPF:</label>
        <input type="text" name="input_cpf_form_02" id="input_cpf_form_02">
        </br>
    </fieldset>

    <!-- Dados de Endereço -->
    <fieldset class="d_in_grid">
        <legend>Dados de Endereço</legend>
        <!-- Rua -->
        <label for="input_rua_form_02">Rua:</label>
        <input type="text" name="input_rua_form_02" id="input_rua_form_02">

        <!-- Bairro -->
        <label for="input_bairro_form_02">Bairro:</label>
        <input type="text" name="input_bairro_form_02" id="input_bairro_form_02">
        </br>

        <!-- UF -->
        <label for="select_uf_form_02">UF</label>
        <select name="uf" id="select_uf_form_02">
            <option value="">Escolha</option>
            <!--Região Norte (07 estados)-->
            <optgroup label="Região Norte">
                <!-- Estados -->
                <option value="am">Amazonas</option>
                <option value="rr">Roraima</option>
                <option value="ap">Amapá</option>
                <option value="pa">Pará</option>
                <option value="to">Tocantis</option>
                <option value="ro">Rondônia</option>
                <option value="ac">Acre</option>
            </optgroup>
            <!--Região Nordeste (09 estados)-->
            <optgroup label="Região Nordeste">
                <!-- Estados -->
                <option value="ma">Maranhão</option>
                <option value="pi">Piauí</option>
                <option value="ce">Ceará</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="pe">Pernambuco</option>
                <option value="pb">Paraíba</option>
                <option value="se">Sergipe</option>
                <option value="al">Alagoas</option>
                <option value="ba">Bahia</option>
            </optgroup>
            <!--Região  Centro_Oeste (03 estados)-->
            <optgroup label="Região Centro_Oeste">
                <!-- Estados -->
                <option value="mt">Mato Grosso</option>
                <option value="ms">Mato Grosso do Sul</option>
                <option value="go">Goiás</option>
            </optgroup>
            <!--Região Sudeste (04 estados)-->
            <optgroup label="Região Sudeste">
                <!-- Estados -->
                <option value="sp">São Paulo</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="es">Espírito Santo</option>
                <option value="mg">Minas Gerais</option>
            </optgroup>
            <!--Região Sul (03 estados)-->
            <optgroup label="Região Sul">
                <!-- Estados -->
                <option value="pr">Paraná</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="sc">Santa Catarina</option>
            </optgroup>
        </select>
        </br>

        <!-- Cidade -->
        <label for="input_cidade_form_02">Cidade:</label>
        <input type="text" name="input_cidade_form_02" id="input_cidade_form_02">
        </br>
        <!-- cep -->
        <label for="input_cep_form_02">CEP:</label>
        <input type="text" name="input_cep_form_02" id="input_cep_form_02">
        </br>
    </fieldset>
    <!-- Dados de Login -->
    <fieldset class="d_in_grid">
        <legend>Dados de Login</legend>
        <!-- email -->
        <label for="input_email_form_02">E-mail:</label>
        <input type="email" name="input_email_form_02" id="input_email_form_02">
        </br>

        <!-- Imagem de perfil -->
        <label for="input_img_profile_form_02">Imagem de Perfil:</label>
        <input type="file" name="input_img_profile_form_02" id="input_img_profile_form_02">
        </br>
        <!-- Login User -->
        <label for="input_login_form_02">Login do usuário:</label>
        <input type="text" name="input_login_form_02" id="input_login_form_02">
        </br>

        <!-- Password -->
        <label for="input_password_form_02">Senha:</label>
        <input type="password" name="input_password_form_02" id="input_password_form_02">
        </br>

        <!-- Confirm Password -->
        <label for="input_confirm_password_form_02">Confirme a senha:</label>
        <input type="password" name="input_confirm_password_form_02" id="input_confirm_password_form_02">
        </br>
    </fieldset>

    <!-- Botões -->
    <div>
        <input type="reset" value="Limpar" class="btn btn_reset">
        <input type="submit" value="Enviar" class="btn btn_submit">
    </div>
</form>
<!-- /Segundo Formulário -->

<div>
    <h2>Form Bootstrap</h2>
    <form>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            First radio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Second radio
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                            Third disabled radio
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-2">Checkbox</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
</div>

@endsection
<!-- /Conteúdo main da página -->


<!-- Scripts JS para esse blade.php -->
@section('scripts')
<script>
    $(document).ready(function() {
        /*
        | CPF
        */
        $('#input_cpf').inputmask("999.999.999-99");
        $('#input_cpf_form_02').inputmask("999.999.999-99");
        /*
        | RG
        */
        $('#input_rg_form_02').inputmask("AA-99.999.999");
        /*
        | CEP
        */
        $('#input_cep_form_02').inputmask("99.999-999");
        $('#input_cep').inputmask("99.999-999");
        /*
        | Telefone
        */
        $('#input_telefone').inputmask("(99) 9999-9999");
        /*
        | Celular
        */
        $('#input_celular').inputmask("(99) 99999-9999");
    });
</script>
@endsection
<!-- /Scripts JS para esse blade.php -->
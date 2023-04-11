<!-- Formulário de cadastro Blacklist -->
<div class="form-row form-floating col-md-12 formulario-cadblack">
        @csrf
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-6">
            <label for="inputRazaosocial">RAZÃO SOCIAL*:</label><br>
            <input type="text" name="razaosocial" class="form-control" id="razaosocial" placeholder="Razão Social:">
        </div>
        <div class="form-group col-md-6">
            <label for="inputNomefantasia">NOME FANTASIA*:</label><br>
            <input type="text" name="nomefantasia" class="form-control" id="nomefantasia" placeholder="NOME FANTASIA:">
        </div>         
    </div>         
        <div class="form-group col-md-6">
            <label for="inputCpf">CNPJ *:</label><br>
            <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="CNPJ:">
        </div>
        <div class="form-group col-md-6">
            <label for="inputInscricao">IE *:</label><br>
            <input type="text" name="inestadual" class="form-control" id="inestadual" placeholder="Inscrição Estadual:">
        </div>
    </div>
    
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-6">
            <label for="inputEmail">EMAIL *:</label><br>
            <input type="text" name="email" class="form-control" id="email" placeholder="Email:">
        </div>
        <div class="form-group col-md-6">
            <label for="inputSite">SITE :</label><br>
            <input type="text" name="site" class="form-control" id="site" placeholder="Site:">
        </div>        
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-4">
            <label for="inputTipo">CNPJ/CPF *:</label><br>
            <input type="text" name="tipo" class="form-control" id="tipo" placeholder="Tipo:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputInestadual">IE:</label><br>
            <input type="text" name="inestadual" class="form-control" id="inestadual" placeholder="Inscrição Estadual:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputInmunicipal">INSCRIÇÃO MUNICIPAL:</label><br>
            <input type="text" name="inmunicipal" class="form-control" id="inmunicipal" placeholder="INSCRIÇÃO MUNICIPAL:">
        </div>
             
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-4">
            <label for="inputAtoanatel">ATO ANATEL:</label><br>
            <input type="text" name="atoanatel" class="form-control" id="atoanatel" placeholder="ATO ANATEL:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputFone">FONE *:</label><br>
            <input type="text" name="fone" class="form-control" id="fone" placeholder="Fone:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputContato">RESPONSÁVEL *:</label><br>
            <input type="text" name="contato" class="form-control" id="contato" placeholder="RESPONSÁVEL:">
        </div>
              
    </div>                    
    </div>
    <div class="form-row form-floating col-md-12 formulario-cadblack">
        <div class="form-floating col-auto">
            <button type="submit" class="btn btn-primary btn-enviar">ENVIAR</button>
        </div>       
    </div> 
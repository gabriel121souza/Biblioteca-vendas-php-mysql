<?php
include './configuracao.php';
include './conexao.php';
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PagSeguro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="css/personalizado.css" rel="stylesheet">
    </head>
    <body>
		<form method="POST" action="createPagamento.php">
        <div class="container">
            <div class="row">
                <h1 class="display-4">Finalizar a Compra</h1>
                <div class="col-md-4 order-md-2 mb-4">
                    Produtos
                </div>

                <div class="col-md-8 order-md-1">
                    <span class="endereco" data-endereco="<?php echo URL; ?>"></span>
                    <span id="msg"></span>
                    <form name="formPagamento" action="" id="formPagamento">
                        <span id="msg"></span>

                        <h4 class="mb-3">Dados do Comprador</h4>

                        <div class="mb-3">
                            <label>Nome</label>                            
                            <input type="text" name="nome" id="nome" placeholder="Nome completo" class="form-control" required>                        
                        </div>
						<div class="mb-3">
							<label>valor</label>
                            <input type="text" name="valor" id="valor" placeholder="Valor do produto" class="form-control" required>                        
                        </div>
						
						<div class="mb-3">
							<label>nome do livro</label>
                            <input type="text" name="livro" id="livro" placeholder="nome do livro" class="form-control" required>                        
                        </div>

                        <div class="mb-3">
                            <label>CPF</label>                            
                            <input type="text" name="cpf" id="cpf" placeholder="CPF sem traço" class="form-control" required>                       
                        </div>

                        <div class="mb-3">
                            <label>E-mail</label>  
                            <input type="email" name="email" id="email" placeholder="E-mail do comprador"  class="form-control" required>                                                
                        </div>

                        
                            <div class="col-md-9 mb-3">
                                <label>Telefone</label>
                                <input type="text" name="senderPhone" id="senderPhone" placeholder="Somente número" value="56273440" class="form-control" required>
                            </div>
                        

                        <h4 class="mb-3">Endereço de Entrega</h4>

                        <input type="hidden" name="endereco" id="endereco" value="true">

                        <div class="row">
                            <div class="col-md-9 mb-3">
                                <label>Logradouro</label>
                                <input type="text" name="longradouro" class="form-control" id="longradouro" placeholder="Av. Rua" value="Av. Brig. Faria Lima" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Número</label>
                                <input type="text" name="numero" class="form-control" id="numero" placeholder="Número" value="1384" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label>Bairro</label>
                                <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro"  required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label>Cidade</label>
                                <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade"  required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label>Estado</label>
                                <select name="estado" class="custom-select d-block w-100" id="estado" required>
                                    <option value="">Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP" selected>SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>CEP</label>
                            <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP sem traço" value="" required>
                        </div>

                        <!-- Moeda utilizada para pagamento -->
                        <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">
                        <!-- 1 - PAC / 2 - SEDEX / 3 - Sem frete -->
                        <input type="hidden" name="shippingType" value="3">
                        <!-- Valor do frete -->
                        <input type="hidden" name="shippingCost" value="0.00">

                        <h4 class="mb-3">Escolha forma de pagamento</h4>

                        
                        <div class="custom-control custom-radio">
                            <input type="radio" name="paymentMethod" class="custom-control-input" id="boleto" value="boleto" onclick="tipoPagamento('boleto')">
                            <label class="custom-control-label" for="boleto">Boleto</label>
                               
							
							
						</div>

                      
                        <input type="submit" name="btnComprar" id="btnComprar" value="Comprar">
						
						

                    </form>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

        <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
        <script src="js/personalizado.js"></script>
    </body>
</html>

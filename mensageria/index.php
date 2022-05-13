<?php 
header ('Content-type: text/html; charset=UTF-8');
$files = [
            "envio_oportunidades" =>                                "ENVIO DAS OPORTUNIDADES DE LICITAÇÃO",
            "envio_resultados_nao_vencidos" =>                      "ENVIO DE RESULTADOS - NÃO VENCIDOS",
            "envio_resultados_vencidos" =>                          "ENVIO DE RESULTADOS - VENCIDOS",
            "alerta_doc_prox_vencimento" =>                         "ALERTA DE DOCUMENTOS PRÓXIMO DO VENCIMENTO",
            "alerta_doc_pendencia_regularizacao" =>                 "ALERTA DE DOCUMENTAÇÃO COM PENDÊNCIA DE REGULARIZAÇÃO",
            "alerta_oportunidade_nao_respondida" =>                 "ALERTA DE OPORTUNIDADE AINDA NÃO RESPONDIDA",
            "cobranca_boleto_vencido" =>                            "COBRANÇA DE BOLETO VENCIDO",
            "duvidas_resolucoes_solicitacoes_pregao_andamento" =>   "DÚVIDAS, RESOLUÇÕES OU SOLICITAÇÕES  - PREGÃO EM ANDAMENTO",
            "envio_ata_contrato_empenho" =>                         "ENVIO DE ATA, CONTRATO, EMPENHO",
            "envio_comunicacao_orgao" =>                            "ENVIO DE COMUNICAÇÃO DO ÓRGÃO"
        ];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensageria MV licitações</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        body {padding:0; margin:0; width:100%; height:auto;background:radial-gradient(#06bdda, #0c82b5); font-family: "Segoe UI";}
        .list {margin:60 10%; padding:20px; color:#FFF;}
        .list li {list-style:none; padding-top:10px;}
        .list li a  {color:#FFF; transition:.5s; text-decoration:none;}
        .list li a:hover {text-decoration:underline; margin-left:10px;}
        .list li i  {font-size: 11px; padding-bottom:2px ;}
        .titulo {margin:0 auto; text-align:center; color:#FFF;}
    </style>
</head>

<body>

<section >
    <div class="titulo">
        <h1>Mensageria MV Licitações</h1>
    </div>
    <div class="list">
        <ul>
            <?php foreach ($files as $key => $value) : ?>

                <?= "<li><i class='fas fa-chevron-right'></i> <a target='_blank' href='{$key}.php'>{$value}</a></li>" ?>

            <?php endforeach; ?>
        </ul>
    </div>
</section>
    
</body>
</html>
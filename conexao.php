<?php

    $servidor   = "localhost";
    $bancodados = "melhoresfeiras";
    $datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";
    $usuario    = "root";
    $senha      = "";   
     
    try
    {
        $conexao = new PDO($datasource, $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       
    }
    catch (PDOException $erro)
    {
        header("location: erro.php?erro=Ocorreu o seguinte erro: ".$erro->getMessage());
    }
     

<?php
/**
 * Created by PhpStorm.
 * User: lucas genari
 * Date: 29/08/2018
 * Time: 11:58
 */
?>

<section class="herois">
    <div class="container">
        <div class="banner">
            <img src="assets/images/bannerherois.jpg" alt="" style="width: 100%;">
        </div>

        <div class="contato-titulo">
            <div class="row clearfix">
                <div class="col-md-6">
                    <h1>Heróis</h1>
                </div>
                <?php if($this->session->userdata("usuario_logado")) : ?>
                <div class="col-md-6">
                    <a href="herois/formulario"><button class="btn btn-danger" style="float: right">Cadastrar Novo
                            Herói</button></a>
                </div>
                <?php endif; ?>
            </div>
            <hr class="contato-hr">
            <p class="descricao-contato">Listagem completa de heróis disponíveis no jogo.</p>
        </div>

        <div class="heroi-page">
            <div class="row clearfix">

            </div>
        </div>
    </div>
</section>
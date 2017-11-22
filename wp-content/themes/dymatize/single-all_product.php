<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="head_Inside">
                    <div id="destacados">
                        <div class="uk-flex">
                            <div class="asombrsos">
                                <div class="uk-flex uk-flex-middle redBg">
                                    <div>
                                        <span>PRODUCTOS</span>
                                    </div>
                                </div>
                            </div>
                            <div class="productIndex">
                                <a href="" class="volver">VOLVER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </section>
        <div class="content">
            <div class="showProduct">
                <div class="uk-container uk-container-center uk-position-relative">
                    <div class="uk-grid">
                        <div class="uk-width-large-3-10 uk-width-medium-1-1">
                            <div class="uk-text-center uk-margin-bottom">
                                <?php
                                	if(has_post_thumbnail())
                                		the_post_thumbnail();
                                ?>
                            </div>
                        </div>
                        <div class="uk-width-large-7-10 uk-width-medium-1-1 detail-product">
                            <p class="name">
                                <?php the_title(); ?>
                                <span>CHOOSE SIZE</span>
                            </p>
                            <div class="social">
                                <div>
                                    <a href="" class="uk-button comprar">COMPRAR AQUÍ</a>
                                </div>
                                <a href="" class="uk-button etiqueta">Ver Etiqueta</a>
                                <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                <script>
                                    ! function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0],
                                            p = /^http:/.test(d.location) ? 'http' : 'https';
                                        if (!d.getElementById(id)) {
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = p + '://platform.twitter.com/widgets.js';
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }
                                    }(document, 'script', 'twitter-wjs');
                                </script>
                            </div>
                            <div class="listInfo">
                                <?php echo get_the_content(); ?>
                            </div>
                            <p class="porcion uk-text-uppercase"><span>porcentajes por porción</span>
                            </p>
                            <div class="uk-flex uk-flex-wrap component-product">
                                <div class="detail-component">
                                    <span>proteína</span>
                                    <span>25G</span>
                                </div>
                                <div class="detail-component">
                                    <span>bcaas</span>
                                    <span>5.5G</span>
                                </div>
                                <div class="detail-component">
                                    <span>LEUCINA</span>
                                    <span>2.7G</span>
                                </div>
                                <div class="detail-component">
                                    <span>AZÚCAR</span>
                                    <span>0G</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-container uk-container-center">
                <div class="detalles">
                    <div class="title-dt">
                        INDICADO PARA
                    </div>
                    <div class="content-dt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eleifend molestie orci. Aenean semper consequat dictum. Nullam rutrum diam lectus, sit amet convallis ipsum auctor eu. In vehicula finibus risus. In pulvinar, augue vel malesuada maximus, odio neque accumsan quam, vel sollicitudin enim tortor id nisl.
                    </div>
                    <div class="title-dt">
                        DOSIS RECOMENDADA
                    </div>
                    <div class="content-dt">
                        Consumir con agua 2 cápsulas, dos veces al día, de preferencia media hora antes de las comidas principales.
                    </div>
                    <div class="title-dt">
                        ALGUNAS DE SUS PROPIEDADES SON
                    </div>
                    <div class="content-dt">
                        <p>Thermo Fat Hardcore es un quemador de grasas de nivel superior. Contiene una mezcla de ingredientes extremadamente potentes y concentrados para acelerar el metabolismo promoviendo la utilización de nutrientes para la producción de energía, para reducir la absorción de las grasas y carbohidratos provenientes de la dieta, favorecer la eliminación de grasa almacenada y aumentar la energía para llevar tus entrenamientos a un máximo nivel. Además incluye ingredientes que actúan como potentes antioxidantes.</p>

                        <p>Su fórmula contiene chitosan, L-carnitina, taurina, cafeína, té verde, poroto blanco frambuesas, cacao, vainilla y capsainoides.</p>

                        <p class="last">Thermo Fat Hardcore es el producto que necesitas para utilizar de forma eficiente las grasas localizadas, evitar la formación de nuevos depósitos grasos y lograr el peso que siempre deseaste.</p>
                    </div>
                    <div class="title-dt">
                        PRECAUCIONES
                    </div>
                    <div class="content-dt">
                        No recomendable para menores de 15 años, en embarazo ni en lactancia.
                    </div>
                    <div class="title-dt">
                        PRESENTACIÓN
                    </div>
                    <div class=" content-dt">
                        120 Cápsulas de Gel.
                    </div>
                </div>
            </div>
        </div>

	<?php endwhile; endif; ?>

<?php echo do_shortcode('[contact-form-7 id="78" title="Form  lien he" html_class="uk-form uk-form-stacked"]'); ?>

<?php get_footer(); ?>
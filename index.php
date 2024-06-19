<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITZBEER</title>
    <link rel="stylesheet" href="styles.css">
    <script src="idade.js" defer></script>
</head>

<body>
    <div id="age-verification" class="modal">
        <div class="modal-content">
            <h2>Você é maior de 18 anos?</h2>
            <button id="yes-button">Sim</button>
            <button id="no-button">Não</button>
        </div>
    </div>

    <header>
        <div class="social">
            <a href="#"><img src="images/icon-facebook.png" alt="Facebook" class="social-img"></a>
            <a href="#"><img src="images/icon-instagram.png" alt="Instagram" class="social-img"></a>
            <a href="#"><img src="images/icon-youtube.png" alt="YouTube" class="social-img"></a>
            <a href="#"><img src="images/icon-whatsapp.png" alt="WhatsApp" class="social-img"></a>
        </div>
    </header>

    <div class="logo-container">
        <svg width="420" height="111" viewBox="0 0 420 111" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="100" height="100.321" transform="matrix(-1 0 0 1 100 0)" fill="url(#pattern0_5_3)"/>
            <path d="M105.25 87V34.5H119.04V87H105.25ZM128.468 48.15V34.43H169.838V48.15H155.908V87H142.118V48.15H128.468ZM221.983 34.5L199.653 73.21H219.953V87H175.783L198.113 48.36H177.113V34.5H221.983ZM242.84 75.66H252.08C254.6 75.66 256.63 73.63 256.63 71.11C256.63 68.59 254.46 66.56 252.08 66.56H242.84V75.66ZM242.84 55.01H249.49C252.01 55.01 254.04 52.98 254.04 50.46C254.04 47.94 252.01 45.91 249.49 45.91H242.84V55.01ZM254.95 87H229.05V34.5H252.22C260.62 34.5 267.76 41.71 267.76 50.11C267.76 53.68 266.43 56.97 264.4 59.56C267.97 62.43 270.35 66.84 270.35 71.6C270.35 79.93 263.28 87 254.95 87ZM278.611 87V34.5H311.231V45.91H292.401V54.45H309.061V66.07H292.401V75.73H311.231V87H278.611ZM321.131 87V34.5H353.751V45.91H334.921V54.45H351.581V66.07H334.921V75.73H353.751V87H321.131ZM409.99 87H394.1L385.98 73.07H377.44V87H363.65V34.5H385.77C396.41 34.5 405.09 43.18 405.09 53.82C405.09 59.42 402.64 64.46 398.86 67.96L409.99 87ZM377.44 46.12V61.17H385.98C390.18 61.17 393.54 57.88 393.54 53.68C393.54 49.48 390.18 46.12 385.98 46.12H377.44Z" fill="#FF9F22"/>
            <defs>
            <pattern id="pattern0_5_3" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_5_3" transform="matrix(0.00195938 0 0 0.00195312 -0.00160255 0)"/>
            </pattern>
            <image id="image0_5_3" width="512" height="512" xlink:href="data:image/png;base64,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"/>
            </defs>
            </svg>                
    </div>

    <main>
        <section>
            <nav>
                <ul class="menu">
                    <li><a href="#sobre">SOBRE <img src="images/seta-baixo.png" alt="" class="seta"></a>
                        <ul>
                            <li><a href="#empresa">A Empresa</a></li>
                            <li><a href="#historia">Nossa História</a></li>
                        </ul>
                    </li>
                    <li><a href="#">NOSSAS CERVEJAS <img src="images/seta-baixo.png" alt="" class="seta"></a>
                        <ul>
                            <li><a href="#">Cerveja de Trigo</a></li>
                            <li><a href="#">Lager</a></li>
                            <li><a href="#">Pilsen</a></li>
                            <li><a href="#">Puro Malte</a></li>
                        </ul>
                    </li>
                    <li><a href="#">CONTATO <img src="images/seta-baixo.png" alt="" class="seta"></a></li>
                </ul>
            </nav>
            <div class="cart">
                <img src="images/cesto.png" alt="cesto de compras" class="cesto">
                <a href="cadastro.php">COMPRAR</a>
            </div>
        </section>
    
        <section class="bebidas">
            <h2>NOSSAS BEBIDAS</h2>
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="beer-img">
                                <img src="images/cervejas/amstel.jpg" alt="">
                            </div>
                        </div>
                        <p class="description">Cerveja Amstel Lata 269 ml</p>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="beer-img">
                                <img src="images/cervejas/brahmaduplomalte.jpg" alt="">
                            </div>
                        </div>
                        <p class="description">Cerveja Brahma Duplo Malte Lata 269ml</p>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="beer-img">
                                <img src="images/cervejas/budweiser.jpg" alt="">
                            </div>
                        </div>
                        <p class="description">Cerveja Budweiser American Lager Lata 269ml</p>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="beer-img">
                                <img src="images/cervejas/corona-long.jpg" alt="">
                            </div>
                        </div>
                        <p class="description">Cerveja Corona Extra Pilsen Long Neck 330ml</p>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="beer-img">
                                <img src="images/cervejas/heineken-long.jpg" alt="">
                            </div>
                        </div>
                        <p class="description">Cerveja Heineken Long Neck 330ml</p>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="beer-img">
                                <img src="images/cervejas/imperio.jpg" alt="">
                            </div>
                        </div>
                        <p class="description">Cerveja Império Puro Malte Lata 269ml</p>
                    </div>
                    
                </div>
                <button class="carousel-control-prev" onclick="prevSlide()">&#10094;</button>
                <button class="carousel-control-next" onclick="nextSlide()">&#10095;</button>
            </div>
        </section>

        <section id="sobre" class="sobre">
            <h2>SOBRE A ITZBEER</h2>
            <h1>Um pouco sobre nós</h1>
            <div class="sobre-subsection">
                <h3 id="empresa">A Empresa</h3>
                <div class="sobre-empresa">
                    <img src="" alt="Sobre a Empresa">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra nisl a magna cursus, ut facilisis urna dictum. Nulla facilisi. Curabitur vehicula tincidunt libero, nec ullamcorper justo. Suspendisse potenti.</p>
                </div>
            </div>
            <div class="sobre-subsection">
                <h3 id="historia">Nossa História</h3>
                <div class="nossa-historia">
                    <img src="" alt="Nossa História"> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra nisl a magna cursus, ut facilisis urna dictum. Nulla facilisi. Curabitur vehicula tincidunt libero, nec ullamcorper justo. Suspendisse potenti. Fusce a turpis ac lorem vestibulum pretium. Donec sit amet convallis justo. Nulla malesuada ex in augue efficitur, ac pharetra urna tristique.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div>
            <svg width="305" height="53" viewBox="0 0 305 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.25 53V0.499996H14.04V53H0.25ZM23.4676 14.15V0.429997H64.8376V14.15H50.9076V53H37.1176V14.15H23.4676ZM116.983 0.499996L94.6532 39.21H114.953V53H70.7832L93.1132 14.36H72.1132V0.499996H116.983ZM137.84 41.66H147.08C149.6 41.66 151.63 39.63 151.63 37.11C151.63 34.59 149.46 32.56 147.08 32.56H137.84V41.66ZM137.84 21.01H144.49C147.01 21.01 149.04 18.98 149.04 16.46C149.04 13.94 147.01 11.91 144.49 11.91H137.84V21.01ZM149.95 53H124.05V0.499996H147.22C155.62 0.499996 162.76 7.71 162.76 16.11C162.76 19.68 161.43 22.97 159.4 25.56C162.97 28.43 165.35 32.84 165.35 37.6C165.35 45.93 158.28 53 149.95 53ZM173.611 53V0.499996H206.231V11.91H187.401V20.45H204.061V32.07H187.401V41.73H206.231V53H173.611ZM216.131 53V0.499996H248.751V11.91H229.921V20.45H246.581V32.07H229.921V41.73H248.751V53H216.131ZM304.99 53H289.1L280.98 39.07H272.44V53H258.65V0.499996H280.77C291.41 0.499996 300.09 9.18 300.09 19.82C300.09 25.42 297.64 30.46 293.86 33.96L304.99 53ZM272.44 12.12V27.17H280.98C285.18 27.17 288.54 23.88 288.54 19.68C288.54 15.48 285.18 12.12 280.98 12.12H272.44Z" fill="black"/>
                </svg>                
        </div>
        <p>&copy; 2024 ITZBEER S.A. Todos os direitos reservados.</p>
        <p>Beba com moderação. Não compartilhe este conteúdo com menores de idade.</p>
        <div class="footer-links">
            <a href="#">Política de Privacidade</a>
            <a href="#">Termos de Uso</a>
        </div>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>

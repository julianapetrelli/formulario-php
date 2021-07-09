<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com php</title>
    <link rel="stylesheet" href="./assets/css/tailwind.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body class="bg-green-50">

    <div class="min-h-screen flex items-center justify-center m-12">

        <div class="grid grid-cols-5 shadow-2xl">

            <div class="col-span-5 md:col-span-2 md:flex justify-items-center md:rounded-l-lg items-center lg:w-12/12 w-full h-full bg-green-500 bg-cover rounded-t-lg">
                    <img src="./assets/img/Programming.gif" alt="" class="p-4">
            </div>

            <div class="col-span-5 md:col-span-3 lg:block lg:w-12/12 w-full h-auto bg-gray-50 bg-cover rounded-r-lg p-14">

                <form action="recebe_formulario.php" method="post">

                    <div class="grid gap-y-3">

                        <label for="">
                            <p class="text-gray-600 font-semibold py-1">Nome:</p>
                            <input type="text" name="nome" id="nome" class="bg-gray-200 py-1 w-full rounded-lg border border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-400 pl-4" placeholder="Digite o seu nome..." />
                        </label>

                        <label for="">
                            <p class="text-gray-600 font-semibold py-1">E-mail:</p>
                            <input type="text" name="email" id="email" class="bg-gray-200 py-1 w-full rounded-lg border border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-400 pl-4" placeholder="Digite o seu e-mail..." />
                        </label>


                        <label for="">
                            <p class="text-gray-600 font-semibold py-1">Telefone:</p>
                            <input type="telefone" name="telefone" id="telefone" class="bg-gray-200 py-1 w-full rounded-lg border border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-400 pl-4" placeholder="Digite o seu telefone..." />
                        </label>


                        <label for="">
                            <p class="text-gray-600 font-semibold py-1">Celular:</p>
                            <input type="celular" name="celular" id="celular" class="bg-gray-200 py-1 w-full rounded-lg border border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-400 pl-4" placeholder="Digite o seu celular..." />
                        </label>
                    </div>


                    <div class="grid gap-y-4 mt-6">

                        <p class="text-gray-600 font-semibold py-1"> Qual sua área de atuação?</p>

                        <label>
                            <input type="checkbox" name="atuacao[]" value="front-end">
                            <span>Front-end</span>
                        </label>
                        <label>
                            <input type="checkbox" name="atuacao[]" value="back-end">
                            <span>Back-end</span>
                        </label>
                        <label>
                            <input type="checkbox" name="atuacao[]" value="fullstack">
                            <span>Full Stack</span>
                        </label>

                        <label for="">
                            <p class="text-gray-600 font-semibold py-1">Por onde nos conheceu?</p>
                            <select name="ondeConheceu" id="" class="bg-gray-200 py-2 px-3 w-full rounded-lg border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-300">
                                <option value="">Selecione</option>
                                <option value="google">Google</option>
                                <option value="amigos">Amigos</option>
                                <option value="tv">Tv</option>
                            </select>
                        </label>

                        <label for="" class="">
                            <p class="text-gray-600 font-semibold py-1">Conte um pouco mais sobre você:</p>
                            <textarea name="mensagem" id="" class="w-full border resize-y border rounded-lg bg-gray-200 font-light text-gray-700 pl-4 pt-2 border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"> </textarea>
                        </label>


                        <p class="text-gray-600 font-semibold py-1">Você gostaria de trabalhar:</p>
                        <label>
                            <input type="radio" name="option" value="presencialmente"> Presencialmente
                        </label>

                        <label>
                            <input type="radio" name="option" value="remoto"> Remoto
                        </label>

                        <label>
                            <input type="radio" name="option" value="sempreferencia"> Não tenho preferencia
                        </label>


                        <div class="grid justify-items-end">
                            <button type="submit" class="py-3 px-8 text-white font-bold bg-green-500 rounded-lg"> Me candidatar </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
</body>

</html>
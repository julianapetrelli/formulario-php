<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com php</title>
    <link rel="stylesheet" href="./assets/css/tailwind.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="bg-green-50">

    <div class="min-h-screen flex items-center justify-center m-12">

        <div class="grid grid-cols-5 shadow-2xl">

            <div class="col-span-5 md:col-span-2 lg:block lg:w-12/12 w-full  h-auto bg-green-500 hidden bg-cover rounded-l-lg">
                <img src="./assets/img/Programming.gif" alt="" class="mt-60">
            </div>

            <div class="col-span-5 md:col-span-3 lg:block lg:w-12/12 w-full h-auto bg-gray-50 hidden bg-cover rounded-r-lg p-14">

                <form action="recebe_formulario.php" method="post">

                    <div class="grid gap-y-3">

                        <label for="">
                            <ul for="">
                                <p class="text-gray-600 font-semibold py-1">Nome:</p>
                                <input type="text" name="nome" id="nome" class="bg-gray-200 py-1 w-full rounded-lg border border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-400 pl-4" placeholder="Digite o seu nome..." />
                            </ul>
                        </label>

                        <label for="">
                            <ul for="">
                                <p class="text-gray-600 font-semibold py-1">E-mail:</p>
                                <input type="text" name="email" id="nome" class="bg-gray-200 py-1 w-full rounded-lg border border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-400 pl-4" placeholder="Digite o seu e-mail..." />
                            </ul>
                        </label>


                        <label for="">
                            <ul for="">
                                <p class="text-gray-600 font-semibold py-1">Telefone:</p>
                                <input type="telefone" name="email" id="nome" class="bg-gray-200 py-1 w-full rounded-lg border border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-400 pl-4" placeholder="Digite o seu telefone..." />
                            </ul>
                        </label>


                        <label for="">
                            <ul for="">
                                <p class="text-gray-600 font-semibold py-1">Celular:</p>
                                <input type="celular" name="email" id="nome" class="bg-gray-200 py-1 w-full rounded-lg border border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-400 pl-4" placeholder="Digite o seu celular..." />
                            </ul>

                        </label>

                    </div>


                    <div class="grid gap-y-4 mt-6">

                        <label>
                            <p class="text-gray-600 font-semibold py-1"> Qual sua área de atuação?</p>
                            <ul>
                                <input type="checkbox" class="checked:bg-blue-600 checked:border-transparent">
                                <span>Front-end</span>
                            </ul>
                            <ul>
                                <input type="checkbox" class="checked:bg-blue-600 checked:border-transparent">
                                <span>Back-end</span>
                            </ul>
                            <ul>
                                <input type="checkbox" class="checked:bg-blue-600 checked:border-transparent">
                                <span>Full Stack</span>
                            </ul>
                        </label>


                        <label for="">
                            <p class="text-gray-600 font-semibold py-1">Por onde nos conheceu?</p>
                            <select name="onde_conheceu" id="" class="bg-gray-200 py-2 px-3 w-full rounded-lg border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent font-light text-gray-700 placeholder-gray-300">
                                <option value="">Selecione</option>
                                <option value="">Google</option>
                                <option value="">Amigos</option>
                                <option value="">Tv</option>
                            </select>
                        </label>

                        <label for="" class="">
                            <p class="text-gray-600 font-semibold py-1">Conte um pouco mais sobre você:</p>
                            <textarea name="mensagem" id="" class="w-full border resize-y border rounded-lg bg-gray-200 font-light text-gray-700 pl-4 pt-2 border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"> </textarea>
                        </label>




                        <label for="">
                            <p class="text-gray-600 font-semibold py-1">Você gostaria de trabalhar:</p>
                            <ul for="">
                                <input type="radio" name="option" id=""> Presencialmente
                            </ul>

                            <ul for="">
                                <input type="radio" name="option" id=""> Remoto
                            </ul>

                            <ul for="">
                                <input type="radio" name="option" id=""> Não tenho preferencia
                            </ul>
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
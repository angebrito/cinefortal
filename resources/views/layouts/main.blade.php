<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Cinefortal</title>

    <link rel="stylesheet" href={{asset("/css/app.css")}}>     

    <!--  Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="font-sans bg-danger">
    <span class="border border-secondary"></span>
            <div class="container mx-auto flex items-center justify-between px-4 py-6">
                <ul class="flex items-center">
                    <li>
                        <svg height="100 " width="300" font-size="25">
                            <text x="0" y="50" fill="white">Cinefortal</text>
                          </svg>   
                    </li>
                    <li>
                        <svg height="100" width="300">
                            <text x="0" y="50" fill="white">Lançamentos</text>
                          </svg>   
                    </li>
                    <li>
                        <svg height="100" width="300">
                            <text x="0" y="50" fill="white">Top 10</text>
                          </svg>   
                    </li>
                    
                </ul>
                <form class="form-inline my-2 my-lg-5 pl-8-lg">

                    <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search">
                
                </form>

    @yield('content')

    <!-- Bootrstrap -->
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $.ajax({
            url: "https://rickandmortyapi.com/api/character",
            data: "",
            method: "GET",
            success: (resposta) => { console.log(resposta) },
            error: (error) => { console.log("Erro: "+error) }
        })
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Cinefortal</title>    

    <!--  Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="font-sans bg-dark">
    <span class="border border-secondary"></span>
            <div class="container-fluid flex border-dark p-1 my-2">
                <div class="row">

                    <div class="col-md-6 text-white">
                        <H1>Cinefortal</H1>
                        
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            
                            <div class="col-md-2 ml-3">
                                 <button class="btn btn-warning">Lançamentos</button>
                            </div>
                            
                            <div class="col-md-1 ml-3">
                                <button class="btn btn-warning">Top 10</button>
                            </div>
                            
                            <div class="col-md-6 ml-3">
                                <div class="row">
                                    <div class="col-md-8 ml-3">
                                        <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search">
                                    </div>
                                    <div class="col-md-2 ml">
                                        <button type="submit" class="btn btn-sm btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                              </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

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
            url: "",
            data: "",
            method: "GET",
            success: (resposta) => { console.log(resposta) },
            error: (error) => { console.log("Erro: "+error) }
        })
    </script>
</body>
</html>
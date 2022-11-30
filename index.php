<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link al mio CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <main class="bg-dark d-flex">
        <div id="app" class="align-self-center bg-light container w-50 text-center">
            <h1>To do List</h1>
            <div class="list d-flex flex-column align-items-center">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" v-for="task in tasks">
                        {{task}}
                    </li>
                </ul>
                <form action="script.php" method="post">
                    <div class="form-group d-flex">
                        <label for="newTask"></label>
                        <input type="text" name="newTask" id="newTask" class="form-control" placeholder="Inserisci nuova task" aria-describedby="helpId">
                        <button type="submit">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </main>




    <!-- CDN AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js"></script>

    <!-- CDN VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Collego file JS -->
    <script src="./app.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
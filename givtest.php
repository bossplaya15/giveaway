<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        <title>Розыгрыш</title>body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            background-color: rgb(175, 246, 222);
        }

        form {
            transform: translateY(0px);
            filter: drop-shadow(1px 2px 4px hsl(0deg, 0%, 0%, 0.2));
        }

        form:focus-within {
            transform: translateY(-4px);
            filter: drop-shadow(2px 4px 16px hsl(0deg, 0%, 0%, 0.2));
        }
    </style>

</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Проверьте свою удачу</h1>

        <div class="col-md-5 mx-auto mt-4">
            <form onsubmit="sendForm(this); return false;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="bi bi-gift-fill"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="id" name="id" />
                </div>
                <input type="submit" class="form-control btn btn-success" value="Пуск">
            </form>
        </div>
    </div>
    <script>
        async function sendForm(form) {
            let response = await fetch("give_obr.php", {
                method: "POST",
                body: new FormData(form),
            });
            let result = await response.text();
            if (result == "ok") {
                alert("Поздравляем!");
            } else {
                alert("Удача сегодня не на Вашей стороне!");
            }
        }

        // function randomInteger(min, max) {

        //   let rand = min + Math.random() * (max + 1 - min);
        //   return Math.floor(rand);
        // }

        // console.log( randomInteger(1, 15) );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>
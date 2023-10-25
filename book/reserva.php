<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
<style>

    .principal{
        display: flex;
        flex-flow: column wrap;
        inset: 0;
        position: fixed;
        background-image: url("fundo1.png");
        justify-content: center;
        align-items: center;
        margin: 0px;
        padding: 0px;
    }
    .sec {
        background-color: #5F5F5FD0;
        padding: 10px;
        height: 600px;
        width: 500px;
        border-radius: 20px;
   
        width: 50%; 
        box-sizing: border-box; 
        display: flex;
        margin: 0px;
        padding: 0px;
     }

    .form{
        background-color: transparent;
        color: white;
        width: 50%;
        padding: 10px;
        margin: 0px;
        border-radius: 20px;
        
      
    }

    .titulo{
        position: relative;
        left: 150px;
        font-family: arial, monospace;
        font-size: 20px;
       
    }

    .sinopse{
        text-align: center;
        padding: 10px 20px;
        border: white 1px solid;
        border-radius: 10px;
        font-family: arial, monospace;
    
    }

    .autor{
        font-family: arial, monospace;
        border: white 1px solid;
        border-radius: 10px;
        width: 70px;
        text-align: center;
        padding: 10px 10px;
        position: relative;
        left: 80px;
    }

    .paginas{
        font-family: arial, monospace;
        border: white 1px solid;
        border-radius: 10px;
        width: 70px;
        text-align: center;
        padding: 10px 10px;
        position: relative;
        left: 190px;
        bottom: 55px;
    }

    .disponivel{
        font-family: arial, monospace;
        border: white 1px solid;
        border-radius: 10px;
        width: 90px;
        text-align: center;
        padding: 10px 10px;
        position: relative;
        left: 299px;
        bottom: 110px;
        margin-bottom: 20px;
    }

    .ler{
        font-family: arial, monospace;
        text-align: center;
        bottom: 100px;
        position: relative;
    }

    .imagem{
        background-color: transparent;
        color: white;
        width: 50%;
        margin: 0px;
        padding: 0px;
        border-radius: 20px;
    }

    .imagem img{
        border-radius: 20px;
    }


</style>
</head>

<body>
    <div class="principal ">
        <div class="sec">
            <div class="form">
                <h1 class="titulo">NOME DO LIVRO</h1>
                <p class="sinopse">A história deste livro gira em torno de um protagonista cativante que se vê envolvido em uma série de eventos emocionantes e desafiadores. Conforme ele enfrenta obstáculos e desafios, ele descobre segredos profundos sobre si mesmo e o mundo ao seu redor.</p>
                <p class="autor">AUTOR</p>
                <p class="paginas">220PG</p>
                <p class="disponivel">DISPONIVEL</p>

                <h1 class="ler">LER LIVRO</h1>

                <form action="/action_page.php">
<input type="text" id="fname" name="fname"><br><br>
<label for="lname">Last name:</label>
<input type="text" id="lname" name="lname"><br><br>
<input type="submit" value="Submit">
</form>
            </div> 
            <div class="imagem">
            <img src="abruxa.jpg" alt="Italian Trulli" height="600" width="480">
            </div>
        </div>
    </div>
</body>
</html>
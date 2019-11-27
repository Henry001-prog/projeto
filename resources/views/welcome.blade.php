<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <div class="t2">
        <div class="container" id="t3">
            <form class="form-group" method="post" action="{{route('clientes.save')}}">
                    {{ csrf_field() }}
                    </br><h2>Clientes</h2>
                    <input type="text" name="nome" class="form-control" id="n1" placeholder="Digite seu nome" required></br>
                    <input type="text" name="cpf" required="" placeholder="Digite o seu CPF" id="n2" class="form-control"><br>
                    <input type="text" name="endereco" required="" placeholder="Digite o seu endereço" id="n3" class="form-control"><br>
                    <input type="text" name="senha" required="" placeholder="Digite o seu telefone" id="n4" class="form-control"><br>
                    <button value="Acessar" id="color" class="btn4">Enviar</button>
            </form>
		</div>
	</div>


    <script>
        var div2 = window.document.getElementById('t3');
        div2.style.backgroundColor = 'LimeGreen';
        var div2 = window.document.getElementById('t3');
        div2.style.width = '450px';
        var div2 = window.document.getElementById('t3');
        div2.style.height = '320px';
        var div2 = window.document.getElementById('t3');
        div2.style.marginLeft = '420px';

        var h2e = window.document.querySelector('h2');
        h2e.style.marginLeft = '105px';


        var nomeElement = window.document.querySelector('body');
        nomeElement.style.background = 'LightSkyBlue';

        var form1 = window.document.querySelector('form');
        form1.style.marginLeft = '75px';
        var form1 = window.document.querySelector('form');
        form1.style.marginTop = '95px';

        var buttonf = window.document.querySelector('button');
        buttonf.style.marginLeft = '120px';
        buttonf.style.verticalAlign = '-40px';
        buttonf.style.padding = '10px';
        buttonf.style.backgroundColor = '#4682B4';

        var cam = window.document.getElementById('n1');
        var cam2 = window.document.getElementById('n2');
        var cam3 = window.document.getElementById('n3');
        var cam4 = window.document.getElementById('n4');

        cam.style.width = '300px';
        cam.style.height = '30px';
        cam2.style.width = '300px';
        cam2.style.height = '30px';
        cam3.style.width = '300px';
        cam3.style.height = '30px';
        cam4.style.width = '300px';
        cam4.style.height = '30px';

    </script>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corinthians </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <img src="6.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Corinthians
          </a>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Tópicos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="index.php?opcao=1">História</a>
                  <a class="dropdown-item" href="index.php?opcao=2">Cores e símbolos</a>
                  <a class="dropdown-item" href="index.php?opcao=3">Estrutura e patrimônios</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    
    <div class="row">
      <div class="col">
        &nbsp
      </div>
    </div>
    
  
    
    <?php if(isset($_GET['opcao'])){ ?>

        <?php if($_GET['opcao'] == 1){ ?>
                      <div class="row">
                  <div class="col">
                    <img class= "d-block w-100" src="8.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">

                    <br>

                    <h3>Fundação</h3>

                    <br>

                    <h5>Sport Club Corinthians Paulista é um clube poliesportivo brasileiro da cidade de São Paulo, capital do estado de São Paulo. Foi fundado como uma equipe de futebol no dia 1 de setembro de 
                      1910 por um grupo de operários do bairro Bom Retiro.</h5>    
                    
                    <br>

                    <p>Em 1 de setembro de 1910, um grupo de cinco operários (Joaquim Ambrósio, Antônio Pereira, Rafael Perrone, Anselmo Correa e Carlos Silva) do bairro paulistano Bom Retiro, sob a luz de um lampião, 
                        às oito e meia da noite, decidiram criar um novo time de futebol, além de mais oito pessoas que contribuíram com 20 mil réis e também foram considerados sócios-fundadores. A ideia surgiu 
                        depois de assistirem à atuação do Corinthian FC, equipe inglesa de futebol fundada em 1882, que excursionava pelo Brasil. Os ingleses eram chamados pela imprensa da época de "Corinthian's 
                        Team", mas o time brasileiro só seria batizado "Sport Club Corinthians Paulista" depois de muita discussão e algumas reuniões. O presidente escolhido por eles foi o alfaiate Miguel Battaglia, que
                        já no primeiro momento afirmou, "O Corinthians vai ser o time do povo e o povo é quem vai fazer o time". Da primeira arrecadação de recursos à compra da primeira bola de futebol do clube pouco 
                        tempo se passou, na verdade, apenas uma semana. Um terreno alugado na Rua José Paulino foi aplainado e virou campo, e foi lá que, já no dia 14 de setembro, o primeiro treino foi realizado diante 
                        de uma plateia entusiasmada que garantiu: "Este veio para ficar". De partida em partida o time foi se tornando famoso, mas era ainda um time de várzea.</p>
                  </div>

                  <div class="col">

                    <h3>História</h3>

                    <br>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Primeiros títulos (1913-1919)
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Em 1913, uma dissidência entre três clubes que disputavam o Campeonato Paulista abriu a oportunidade para que clubes de origem popular, conhecidos à época como "varzeanos", disputassem a competição organizada pela LPF, e o Corinthians ganhou o direito de disputar pela primeira vez essa competição após vencer uma seletiva contra o Minas Gerais, representante do bairro do Brás, e o FC São Paulo, do bairro do Bixiga.

                                A estreia corintiana no Campeonato Paulista foi contra o Germânia, no dia 20 de abril de 1913, em duelo que terminou com vitória adversária, pelo placar de 3–1. Nos quatro jogos seguintes, foram três derrotas (para Internacional, Americano e Santos) e um empate (Ypiranga). A primeira vitória ocorreu no dia 7 de setembro, um 2–0 contra o Germânia. Nas três partidas seguintes, mais três empates (com Internacional, Ypiranga e Americano). Ao final do Paulista de 1913, o Corinthians terminou na quarta colocação, com seis pontos ganhos (uma vitória, quatro empates e três derrotas, oito gols a favor e 16 contra).[25][nota 2] De positivo, o time revelaria dois futuros ídolos: Neco e Amílcar.
                                
                                A temporada seguinte seria marcante para a história corintiana. Com apenas quatro anos de existência, o time conquistou seu primeiro título, o Campeonato Paulista de 1914 (organizado pela LPF).[26] O Corinthians sagrou-se campeão de forma invicta, com 10 vitórias em 10 partidas, 37 gols marcados e 9 gols tomados.[carece de fontes][nota 3] Com 12 gols, Neco foi o artilheiro da competição.[27][28] A equipe que conquistou o primeiro título da história corintiana era formada por: Sebastião, Fúlvio, Casimiro II, Police, Bianco, César, Américo, Peres, Amílcar, Aparício, Neco, entre outros. Ainda naquele ano, o Corinthians realizou sua primeira partida contra uma equipe estrangeira, o Torino. Os italianos venceram por 3–0.[29]
                                
                                
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Duas décadas vitoriosas (1920-1940)
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Nas décadas de 1920 e 1930, o Corinthians firmou-se como uma das equipes mais importantes de São Paulo, rivalizando com o Clube Atlético Paulistano e a Societá Sportiva Palestra Itália (futuro SE Palmeiras). No período, o clube arrematou nove títulos paulistas (sendo três tricampeonatos, feito jamais alcançado por outro clube paulista). Além de Neco, que jogou no clube até 1930, Rato,[30] Del Debbio[31] Tuffy,[32] Grané,[33] Teleco,[34][35] Brandão,[36] e Servílio de Jesus[37] despontaram como grandes ídolos do clube no período.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tempos de jejum (1941-1950)

                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Em 1941, o Corinthians novamente conquistou o Campeonato Paulista. O título só não foi de maneira invicta por conta de uma derrota, na última rodada, contra o Palestra Itália. O time era ótimo, e a linha média — Jango, Brandão e Dino — impecável. A festa do título corintiano foi realizada no recém-inaugurado estádio do Pacaembu.

                                Contudo, nos nove anos seguintes, o Corinthians viveu um jejum de títulos paulistas. Sem conquistas estaduais, o clube do Parque São Jorge consolou-se em levar por quatro vezes a Taça São Paulo (em 1942, 1943, 1947 e 1948) - torneio que reunia os três primeiros colocados do ano anterior. Sem ter a disposição seu poderio técnico dos últimos cinco anos, o Corinthians foi vice-campeão paulista cinco vezes, sendo três delas seguidas, entre 1942 e 1950, numa época de ascensão do São Paulo, liderado pelo atacante Leônidas da Silva, como nova força no futebol paulista.
                                
                                Mesmo com a contratação de nomes de peso no futebol nacional, como a do zagueiro Domingos da Guia, aos 32 anos, em 1944, ou dos atacantes Milani e Hércules em anos seguintes, o Corinthians amargaria quase uma década sem conquistas importantes. A situação só começaria a mudar a partir de 1949, quando uma nova geração de pratas-da-casa foi conduzida pelo técnico Rato (o mesmo Rato campeão como jogador na década de 1920) ao time principal. Os frutos seriam colhidos na primeira metade da década seguinte.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Era de Ouro (1951-1960)
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                Após um período sem grandes êxitos futebolísticos, o clube renovou sua equipe para a década de 1950. Jovens formados nas "categorias de base" do Corinthians, como Luizinho,[38][39] Cabeção, Roberto Belangero e Idário,[40] juntaram-se a jogadores como Baltazar,[41][42] Carbone,[43] Cláudio[44][45] e Gilmar,[46][47] formando um dos melhores times da história corintiana e do Brasil.[48][49] Essa equipe foi campeã do Campeonato Paulista (1951 e 1952), do Torneio Rio-São Paulo (1950, 1952 e 1953) e da Pequena Taça do Mundo de 1953.

            Foi também com essa geração que o clube saiu do Brasil pela primeira vez em sua história, tendo vencido um amistoso no Uruguai contra um combinado local, por 4–1, em junho de 1951. No ano seguinte, o time excursionou pela primeira vez à Europa, com partidas amistosas na Turquia, Suécia, Dinamarca e Finlândia (o saldo foi de nove vitórias, um empate e uma derrota).[50] Em 1953, o time deixou a disputa do Campeonato Paulista daquele ano, preparando-se para o torneio do ano seguinte, que celebraria o "IV Centenário da Fundação" da cidade de São Paulo. Naquele ano, o clube disputou a Pequena Taça do Mundo, torneio que acabou por conquistar, sendo este o primeiro título internacional do clube.[51]

            Em 1954, o Campeonato Paulista daquela temporada despertou grande interesse em todos os clubes e torcedores, porque comemorava o "IV Centenário da Fundação" da cidade de São Paulo. Para a época, era considerado o título paulista mais importante da história.[48] Um empate contra o Palmeiras garantiu a conquista de um dos títulos mais importantes da história alvinegra, que coroou a geração vitoriosa dos anos cinquenta.[52] A década de 1950 ainda marcou internacionalmente o clube. Entre 1951 e 1959, o Corinthians disputou 64 partidas contra equipes estrangeiras, com 47 vitórias, dez empates e apenas sete derrotas. Ficou invicto por 32 jogos, de 1952 e 1954.[53]

            No final da década de 1950, assumiu a presidência do clube por voto direto dos associados Vicente Matheus, que comandou o Corinthians durante oito mandatos.[54]
                              </div>
                            </div>
                          </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Um incômodo jejum e a era Rivellino (1961-1975)
                          </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            No Campeonato Paulista de 1961, o time fez uma campanha tão pífia que foi apelidado por torcedores rivais de "Faz-Me-Rir".[55] O clube apostou na contratação de craques que chegavam ao Parque São Jorge como "salvadores da pátria", mas que acabaram não vingando no time (como Almir Pernambuquinho em 1960[56] e Mané Garrincha em 1966).[57] Mas aquela década também marcava o surgimento de Roberto Rivellino, "O Reizinho do Parque".[58][59] Embora tenha vencido apenas um grande título pelo Timão[60] (o Torneio Rio-São Paulo de 1966), é considerado o maior jogador da história corintiana.

                            Em 1966, na tentativa de acabar com o "jejum" de títulos no Campeonato Paulista, a diretoria corintiana contratou o zagueiro Ditão e o volante Nair, que vieram da Associação Portuguesa de Desportos, além do atacante Garrincha, que chegou ao Parque São Jorge com 32 anos de idade. Na época, a verba destinada ao departamento de futebol foi recorde e o jornal "A Gazeta Esportiva" passou a tratar o time como o "Timão do Corinthians", e assim nasceu o apelido que acompanha o clube até hoje.[57] Ainda no final da década, o Corinthians venceria o Santos, após quase 11 anos sem vitórias sobre a equipe de Pelé em edições do Campeonato Paulista.[61] Paulo Borges e Flavio fizeram os gols dessa vitória corintiana.[62]
                            
                            Em 1970, depois de uma conturbada negociação com a Portuguesa, o Corinthians contratou o lateral Zé Maria.[63][64] O jogador havia sido campeão mundial com o Seleção Brasileira de Futebol na Copa do Mundo de 1970, no México, na reserva de Carlos Alberto Torres. Para sair da fila, a diretoria corintiana trouxe nos anos seguintes nomes como Vaguinho (em 1971)[65] e Geraldão,[66] além de promover jogadores da base como Wladimir.[67][68] Além da interminável fila de grandes conquistas, o Corinthians também não conseguia chegar, com frequência, a finais de grandes torneios. Ficou de 1957 a 1974 sem decidir o Campeonato Paulista. Em 1974, havia grande esperança de se quebrar o jejum na final estadual contra o Palmeiras. Mas o rival acabou vencendo os corintianos, o que precipitou a saída de Rivellino para o Fluminense.[60]
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            A "Invasão corintiana" e o fim da angústia (1976-1980)
                          </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Corinthians e Rivellino acabariam encontrando-se na semifinal do Campeonato Brasileiro de 1976, contra o Fluminense, em 5 de dezembro, naquela que é uma das partidas mais marcantes da história corintiana. Dezenas de milhares de torcedores alvinegros viajaram para o Rio de Janeiro para assistir o duelo no Estádio do Maracanã, que acabou dividido entre os corintianos e fluminenses. Aquele momento acabou conhecido como "A invasão corintiana ao Maracanã".[69] A consagração daquele dia célebre para os corintianos veio como a vitória sobre o clube carioca nos pênaltis, após empate de 1–1 no tempo regulamentar. Na decisão do Brasileiro, o Internacional derrotou o Corinthians em Porto Alegre.

            No começo de 1977, o presidente corintiano Vicente Matheus trouxe Palhinha, do Cruzeiro, por uma quantia recorde para a época: 7 milhões de cruzeiros. O jogador tornaria-se um dos ídolos da "Fiel" naquele período.[70] Menos de um ano depois de "invadir" o Maracanã, o Corinthians viveria uma de suas noites mais inesquecíveis em 13 de outubro, com a conquista do Campeonato Paulista, que se tornou um dos títulos mais importantes da história corintiana, pois representava o fim de quase 23 anos sem ganhar competições oficiais. Na última das três partidas, contra a Associação Atlética Ponte Preta, o título veio com o gol de Basílio, no segundo tempo.[71][72]

            Para 1978, a diretoria do clube contratou Sócrates, que pertencia ao Botafogo de Ribeirão Preto e acabaria por ser considerado um dos maiores craques da história do alvinegro.[73][74] Outro que chegava naquele ano ao clube e seria ídolo no Timão era Biro-Biro.[75][76] Em 1979, o Corinthians voltaria a vencer o Campeonato Paulista contra a mesma Ponte Preta.[77]
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            A Era da Democracia Corintiana (1981-1984)
                          </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            No início de 1981, o presidente Vicente Matheus foi buscar pessoalmente na Arábia Saudita o meio-campo Zenon, que havia se destacado no Guarani Futebol Clube em temporadas anteriores e assumiria a camisa 10 do Corinthians, no lugar de Palhinha.[78] Mas após não conseguir um bom desempenho no Campeonato Paulista daquele ano (que era classificatório para o Campeonato Brasileiro do ano seguinte), o clube teve de jogar a Taça de Prata, espécie de "segunda divisão" do Campeonato Brasileiro, em 1982.[79]

            Os resultados ruins em campo levaram a mudanças na diretoria com a saída de Vicente Matheus, e os jogadores passaram a ter papel ativo nas decisões do clube. Tudo era resolvido pelo voto, das contratações ao local de concentração.[73] O período ficou marcado como a "Democracia corintiana".[80] As mudanças surtiram efeito. Em 1982, quando liderados pelos ídolos Sócrates, Wladimir, Casagrande,[81] Biro-Biro e Zenon, o clube conquistou o Campeonato Paulista em cima do São Paulo, que tentava o tricampeonato na competição.[26][73] No ano seguinte, o Corinthians repetiria a final contra o rival e uma vez mais conquistaria o torneio. Ainda naquele ano, o Corinthians havia aplicado a maior goleada da história do Campeonato Brasileiro, um acachapante 10–1 sobre o Tiradentes, do Piauí, com quatro gols de Sócrates.

            No ano seguinte, a equipe corintiana não conseguiu o seu quarto tricampeonato paulista, tendo perdido o título para o Santos. Já pelo Campeonato Brasileiro, o time do Parque São Jorge fez sua melhor campanha desde o vice-campeonato da edição de 1976 e chegou à semifinal. O plantel alvinegro foi eliminado pelo Fluminense, mas a campanha é também lembrada pela goleada por 4–1 sobre o Flamengo de Zico e companhia.
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Aposta na base e primeiro título brasileiro (1985-1992)
                          </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Em 1985, já sem Sócrates em seu plantel[82] e com o fim da Democracia Corintiana, a nova diretoria corintiana apostou na consolidação de uma grande equipe, com as contratações de De León, que deixou o Grêmio como o jogador mais caro do futebol brasileiro até então, Serginho Chulapa e Dunga, que se somavam a reforços do ano anterior, como Carlos, Édson e Juninho, contratados da Ponte Preta, e aos bem estabelecidos Wladimir, Biro-Biro, Zenon e Casagrande.[83] O grande time, porém, só ficou no "papel": no Campeonato Brasileiro, o Timão foi eliminado antes das semifinais, e no Campeonato Paulista, a equipe ficou apenas em quinto lugar.[83]

                            Nos anos seguintes, o clube renovou-se com um elenco de jogadores como o volante Wilson Mano,[84] e o zagueiro Marcelo,[85] além de apostar em jogadores formados nas categorias de base corintiana, como o goleiro Ronaldo,[86] o volante Márcio Bittencourt e o atacante Viola. Assim, o Corinthians voltaria à conquista do Campeonato Paulista.[87]
                            
                            Em 1990, o Corinthians conquistaria um dos títulos mais importantes de sua história. Com uma equipe dirigida pelo técnico Nelsinho e liderada em campo por Neto (que se consagraria como grande ídolo corintiano), o clube faturou seu primeiro Campeonato Brasileiro, vencendo na decisão o São Paulo.[88][89]
                            
                            Em janeiro de 1991, o Corinthians ganhou a Supercopa do Brasil, tendo enfrentado o Flamengo, vencedor da Copa do Brasil de 1990, ganhando por 1 a 0, gol de Neto. No final do mesmo ano, Vicente Matheus deixava a presidência corintiana. Sua esposa, Marlene Matheus, assumiu o clube e ficaria no cargo até 1993.
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Era Dualib, o período das parcerias (1993-2006)
                          </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Em 1993, em nova eleição, o presidente escolhido seria Alberto Dualib, e o clube conquistaria nos anos seguintes o Campeonato Paulista de 1995 e o seu primeiro título da Copa do Brasil, de forma invicta, cuja vaga conquistou após vencer a Copa Bandeirantes, no ano anterior.[90] O meia-atacante Marcelinho Carioca foi um dos grandes destaques dessas conquistas e despontaria a partir dali como grande ídolo do clube.

            A Era Dualib foi marcada por parcerias com grupos privados: Banco Excel (1997), Hicks, Muse, Tate & Furst Incorporated (de 1999 a 2001) e MSI (de 2005 a 2007), que levaram muitos recursos financeiros ao clube, conquistas e polêmicas.[91][92] Entre grandes nomes que defenderam o clube, destacam-se Gamarra, Rincón, Vampeta, Edílson, Ricardinho, Kléber e Dida no elenco entre 1998 e 2000 e Carlitos Tevez, Mascherano e Nilmar no time de 2005 e 2006, entre outros nomes.

            Já em relação a títulos, o clube conquistou mais três edições do Campeonato Brasileiro de Futebol (1998, 1999 e 2005), quatro do Campeonatos Paulistas (1997, 1999, 2001 e 2003), a Copa Bandeirantes (na sua única edição, em 1994), uma Copa do Brasil (em 2002), além do primeiro Campeonato Mundial de Clubes (em 2000), a maior conquista desse período. Primeiro torneio do gênero organizado pela FIFA, o Corinthians superou os rivais de chave Raja Casablanca, Real Madrid e Al Nassr, e venceu a final contra o Vasco da Gama, na disputa por penais, sagrando-se o primeiro campeão mundial pela FIFA.[93][94][95]
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            Fim das parcerias, o rebaixamento e a volta por cima (2007-2010)
                          </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Em 2007, a MSI deixou o clube, juntamente com seus principais jogadores: Tevez, Mascherano, Roger e Gustavo Nery. Pressionado, Alberto Dualib, que ocupava a presidência corintiana havia mais de uma década, também deixou o cargo.[96] Após eleição ainda naquele ano, Andrés Sanchez foi eleito o novo presidente.[nota 4] A saída do MSI criou-se um período de instabilidade, que culminou do clube para a Série B do Campeonato Brasileiro.[98][99]

                            Com investimentos em projetos de marketing, reformulação da equipe de futebol e comissão técnica (comandada por Mano Menezes),[100] o Corinthians deu a volta por cima com o vice-campeonato da Copa do Brasil[101][102] e o título da Série B, que garantiu a volta para a divisão principal do futebol do país.[103]
                            
                            No final daquele ano, a diretoria corintiana acertou a contratação de Ronaldo Fenômeno, que se tornou o principal atleta do elenco nas duas temporadas seguintes, marcado pelos títulos Paulista (invicto) e da Copa do Brasil de 2009, além do centenário do clube, em setembro de 2010, quando foi anunciada a construção de seu novo estádio, no bairro de Itaquera.
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEleven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            A conquista da América, o segundo Mundial e um novo estádio (2011-presente)
                          </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A temporada 2011 começou com uma eliminação precoce na Copa Libertadores da América, mas o clube se recuperou com um vice-campeonato no Campeonato Paulista e sua quinta conquista no Campeonato Brasileiro de 2011.[104]

            Com a manutenção do elenco base do título nacional, o Corinthians fez uma das mais importantes temporadas de sua história, ao se sagrar pela primeira vez campeão da Copa Libertadores - e de maneira invicta, vencendo o Boca Juniors na final[105][106] - e do Campeonato Mundial de Clubes da FIFA pela segunda vez, com uma vitória contra o campeão europeu Chelsea, com um gol de Paolo Guerrero.[107][108][109]

            Apesar da conquista do Campeonato Paulista[110] e da Recopa Sul-Americana (ao bater o São Paulo),[111][112] ganhando também o título honorífico da Tríplice Coroa Internacional de Futebol.[113] O alvinegro não foi bem nos principais torneios da temporada 2013, sendo eliminado nas oitavas-de-final da Libertadores,[114][115][116][nota 5][120][121][122][123] nas quartas de final da Copa do Brasil[124] e terminado apenas uma décima colocação no Campeonato Brasileiro. Ao final daquele ano, com a saída de Tite, Mano Menezes foi contratado como novo treinador e com a missão de reformular o elenco corintiano consagrado de 2012.[125]

            O grande acontecimento do ano de 2014 foi a inauguração do novo estádio de futebol alvinegro, construído no bairro de Itaquera,[126] com uma partida entre Corinthians e Figueirense pelo Campeonato Brasileiro.[127] Logo depois, o estádio foi entregue a FIFA, onde foi palco da abertura da Copa do Mundo daquele ano e outros cinco duelos.[128] O time encerrou a temporada sem títulos, tendo sido eliminado ainda na primeira fase do Paulista,[129] nas quartas-de-final da Copa do Brasil[130] e terminado em quarto lugar no Brasileiro.

            Para a temporada de 2015, o técnico Tite retorna ao clube pela terceira vez.[131] Inicia a preparação para a temporada disputando a primeira edição do torneio amistoso internacional Florida Cup, nos Estados Unidos. Destaque para a vitória por 2 a 1 sobre o clube alemão Bayer Leverkusen. No Campeonato Paulista foi eliminado nas semifinais,[132] pela Copa Libertadores[133] e Copa do Brasil[134] ficou nas oitavas-de-finais. Já no Campeonato Brasileiro, sagrou-se campeão pela sexta vez.[135]

            No ano de 2016 o alvinegro iniciou a preparação da temporada disputado a segunda edição da Florida Cup, destaque para a vitória de 3 a 2 sobre a equipe ucraniana Shakhtar Donetsk. Com o desmanche do elenco campeão brasileiro do ano anterior[136] e a saída do técnico Tite[137] para a Seleção Brasileira, foi eliminado nas semifinais do Campeonato Paulista,[138] eliminado nas oitavas-de-finais da Copa Libertadores[139] e nas quartas-de-finais da Copa do Brasil.[140] No Campeonato Brasileiro ficou na sétima posição, cuja classificação assegurou vaga na Copa Sul-Americana do ano seguinte após dez anos de ausência na competição.[141]

            O ano de 2017 iniciou com um vice-campeonato no torneio amistoso internacional da Florida Cup.[142] Ainda no primeiro semestre ficou na quarta fase da Copa do Brasil,[143] além da 28° conquista do Campeonato Paulista. No segundo semestre ficou nas oitavas-de-finais na Copa Sul-Americana[144] e encerrando o ano com a sétima conquista do Campeonato Brasileiro.[145]

            O ano de 2018 teve um feito histórico, com a 29° conquista do Campeonato Paulista, sobre o arquirrival Palmeiras, ainda mais na arena deles, depois de perder o primeiro na Neo Química Arena, o Coringão conseguiu reverter o placar por 1 a 0 e vencer a decisão nos pênaltis.[146] Já o ano de 2019, reservou outra marca histórica, a 30° conquista do Campeonato Paulista, sobre o São Paulo, jogando em casa, depois de muito tempo o Corinthians conquistava novamente um tricampeoanto estadual.[147]
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    &nbsp
                  </div>
                </div>

        <?php }if($_GET['opcao'] == 2){ ?>
                      <div class="row">
                  <div class="col">
                    <img class= "d-block w-100" src="9.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">

                    <br>

                    <h3>Sport Clube Corinthians Paulista</h3>

                    <br>

                    <h5>Sport Club Corinthians Paulista é um clube poliesportivo brasileiro da cidade de São Paulo, capital do estado de São Paulo. Foi fundado como uma equipe de futebol no dia 1 de setembro de 
                      1910 por um grupo de operários do bairro Bom Retiro.</h5>    
                    
                    <br>

                    <p>As tradicionais cores do Corinthians – o preto e o branco – só foram adotadas como oficiais algum tempo depois de sua fundação. Quando criado, o time utilizava camisas creme com faixas pretas nos punhos e nas golas. Após sucessivas lavagens, a cor creme foi desbotando e, como a diretoria da época não possuía dinheiro para a aquisição de outro uniforme, decidiu adotar o branco como nova cor oficial, junto com os calções pretos.

                        Em 1949, a equipe utilizou a cor grená em um jogo em homenagem ao time do Torino (ITA). Os jogadores do clube italiano morreram num desastre aéreo em 04 de maio do mesmo ano.
                        
                        A partir de 2008, o Timão passou a lançar, anualmente, seu terceiro uniforme. Com base na valorização da identidade da Fiel, o clube anunciou a camisa de cor roxa, justificada pela expressão "corinthiano roxo". Em 2009, a camisa 3 apresentava listras verticais roxas e pretas alternadas. Já para a temporada de 2010, a alusão ao santo guerreiro São Jorge foi simbolizada por uma cruz roxa no peito. O escudo do Corinthians também sofreu alteração, ganhando um tom dourado.
                        
                        Como parte das comemorações pelo ano do centenário, o Timão atuou em alguns jogos de 2010 com o bege do primeiro uniforme. Novamente nas listras, o bege, o branco e o primeiro escudo de 1913 – o CP – deram um ar retrô ao bonito manto. Já no ano seguinte, dois elementos históricos corinthianos tiveram destaque: o desenho de São Jorge e a cor grená do Torino (ITA), em lembrança ao manto usado em 1949. Em concurso promovido pelo site britânico Subside Sports, a camisa foi eleita a mais bonita do mundo do ano de 2011.
                        
                        Nem sempre o Timão teve cores tão extravagantes ou diferentes em seus uniformes, mas a tradição da terceira camisa, como muitos pensam, não é recente. O primeiro registro remete a 1950, a uma camisa branca com dois vês em preto no peito. Após um hiato de 45 anos, o Timão do inesquecível ano de 1995 teve duas terceiras camisas. Desenhadas pelo famoso estilista francês Ted Lapidus, as duas não apresentavam grande inovação no quesito cor. Nas cores preta e branca, foram utilizadas nos jogos internacionais do Timão em 1996. Pouco mais recente, no ano de 2006, a terceira camisa preta com listras douradas marcou a Libertadores. Mesmo sem o título, o uniforme rendeu elogios da Fiel e até hoje é bem lembrado.
                        
                        Em agosto de 2012, o Corinthians foi a campo contra o Fluminense com a sua nova camisa. Cinza e com o desenho do estado de São Paulo, o atual terceiro manto chamou a atenção dos torcedores para um fato. Apesar de diferente, o tom se aproxima da cor prata, que surgiu em três oportunidades no clube: 1999, numa camisa preta e prateada, a tonalidade aparecia pela primeira vez; 2002, dessa vez inteiramente prateada; e em 2004, quando novamente dividiu o espaço com o preto.
                        
                        No ano de 2013, o Timão escolheu o azul como a cor de seu terceiro uniforme em alusão à partida na qual o clube representou a Seleção Brasileira, em um amistoso contra o Arsenal, em Londres, no dia 16 de novembro de 1965.</p>
                  </div>

                  <div class="col">

                    <h3>Cores e Símbolos</h3>

                    <br>

                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Escudo
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Ao contrário da camisa, o escudo do Corinthians passou por várias alterações ao longo dos anos. Enquanto o time disputava apenas amistosos e torneios de futebol de várzea, a camisa não tinha distintivo. O primeiro foi criado às pressas para o jogo contra o Minas Gerais, válido pela eliminatória para a Liga Paulista de Foot-Ball de 1913, e levava apenas as letras "C" e "P" (de Corinthians e Paulista) enlaçadas.[154] Esse escudo seria usado até o ano seguinte, quando Hermógenes Barbuy, litógrafo e irmão do jogador Amílcar, criou o primeiro escudo oficial, elaborando uma moldura para as letras e acrescentando o "S" (de Sport), que estreou no amistoso contra o Torino (Itália), em São Paulo.[155]
                            Pouco tempo depois a moldura fica maior, e a partir de 1919 o distintivo começa a ganhar o formato atual, com a bandeira do Estado de São Paulo ao centro. Em 1937, o presidente Getúlio Vargas baixou o Estado Novo e fez uma cerimônia pública com a queima das bandeiras de todos os Estados da federação, pois queria um governo forte e centralizado. A bandeira paulista só sobreviveu dentro do escudo do Corinthians. Após a queda do regime, o uso de símbolos regionais foi liberado.[154] Em 1939, o escudo ganhou uma boia rodeando o círculo, além de um par de remos e a âncora, em alusão ao sucesso do clube nos esportes náuticos. O desenho foi criado pelo pintor modernista Francisco Rebolo, que foi jogador do segundo quadro do Corinthians na década de 1920. Depois disso, o símbolo corintiano passou por pequenas alterações ao longo do tempo, como na bandeira e na moldura.[154]

            Pensando na modernização do distintivo, em 1980, o artista Orfeu Maia criou uma nova versão de nosso brasão que perdura até os dias atuais, substituindo a boia por uma corda e criando um designer gráfico fantástico.[156]

            Em 1990, foi adicionada a primeira estrela em referência ao primeiro título brasileiro. O mesmo foi feito com as conquistas de 1998, 1999 e 2005, além de uma estrela maior com contorno prateado posta acima das demais, em homenagem à conquista do Mundial da FIFA de 2000. Em 2011 a diretoria do Corinthians resolveu deixar de lado todas as estrelas do distintivo do clube, relevando a importância do seu próprio símbolo.[157] Abaixo, a evolução dos escudos, desde a fundação até os dias atuais: 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            O mosqueteiro e São Jorge
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            O Corinthians adotou o "mosqueteiro" como seu mascote. Há duas versões sobre a origem do mascote corintiano.[154][158] A primeira seria por conta do clube ter pleiteado uma vaga na Liga Paulista de Futebol em 1913, da qual apenas participavam Americano, Germânia e Internacional (como os personagens Athos, Porthos e Aramis, do romance "Os Três Mosqueteiros", escrito pelo francês Alexandre Dumas, em 1844).[154] Como havia outros pretendentes à vaga, o Corinthians teve de disputar uma seletiva contra o Minas Gerais (do Brás) e o FC São Paulo (do Bixiga), outros dois grandes da várzea paulistana. Após ter vencido as duas equipes, o Corinthians garantiu o direito de disputar a Divisão Especial da Liga, ganhando da imprensa o apelido de D'Artagnan, o quarto mosqueteiro.[154][158]

                            Uma segunda versão para a utilização do "mosqueteiro" como mascote corintiano surgiu em 1929, quando o Corinthians venceu o Barracas (Argentina), por 3–1.[158] Foi a primeira vitória do clube paulista em partidas internacionais e que ganhou destaque nas páginas do jornal "A Gazeta", com o título dado pelo jornalista Tomás Mazzoni: "O Corinthians venceu com 'fibra de mosqueteiro'". Esta versão é adotada oficialmente pelo clube e pelos historiadores, como Celso Unzelte.[154]

                            Além do mascote, o Corinthians tem bastante apego a São Jorge. Depois de comprar o campo do Parque São Jorge, em 1926, o Corinthians adotou o santo como seu padroeiro. O clube construiu uma capela em homenagem a São Jorge dentro de sua sede social.[159]


                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Patrocinadores
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A partir da década de 1980, a publicidade estava liberada nas camisas de futebol, mas o Corinthians não conseguia encontrar patrocinadores. Era o período da Democracia Corintiana, e a camisa estampou nas costas a frase "Dia 15, vote!", embalado pelas eleições diretas para governador em 1982.[148] Naquele mesmo ano, a empresa de material esportivo Topper exibia o seu logo no lado direito da camisa e, na final do Campeonato Paulista, contra o São Paulo, exibiu nas costas (como exigia a legislação da época) o patrocínio da Bombril. Em 1983, a Cofap foi a primeira marca a ocupar também a frente da camisa, a partir do Campeonato Paulista. Em 1984, para renovar o contrato do ídolo Sócrates, o clube contou com ajuda da empresa Corona, conseguindo assim mantê-lo e tendo que pintar, em troca, um chuveiro na parte frontal da camisa.[148]

            A partir de 1985, passou a ser patrocinado pela Kalunga, em acordo que perdurou até 1994. Desde então, o clube mudou de patrocínio constantemente. Na era Ronaldo, o clube manteve um contrato com o "Grupo Hypermarcas", além de ter vendido outros espaços da camisa para outras empresas. Atualmente, o banco estatal brasileiro Caixa é o principal patrocinador do clube, após ter fechado um acordo em novembro de 2012 para estampar sua logomarca até dezembro de 2014 além de ter a Nike como fornecedora de material esportivo até 2022.[160]
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Uniforme
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Oficialmente, a primeira camisa do Corinthians teria a cor bege, em homenagem ao time inglês homônimo. A camisa de 1910 tinha detalhes em preto nas mangas, barra e gola. Os calções eram brancos e feitos com sacos de farinha.[148] Entretanto, para o jornalista Celso Unzelte, pesquisador da história do time, seria muito improvável que o clube, na época pobre e humilde, tivesse recursos financeiros para comprar uniformes que não fossem brancos, e mesmo a fotografia mais antiga do time, do Campeonato Paulista de 1913, mostra os jogadores vestindo camisas e calções brancos.[149]

                            Incontroverso é o fato de que, a partir de 1920, o Corinthians passou a jogar com camisa branca e calção preto, quando a diretoria conseguiu dinheiro para comprá-los. Desde então, tornaram-se o uniforme oficial.[148][150] A partir deste modelo, encontra-se registro das primeiras versões alternativas do uniforme, utilizadas em partidas específicas.[148] Somente em 22 de dezembro de 1946 os atletas do clube entrariam em campo com camisas numeradas, em um amistoso contra o Club Atlético River Plate, no Estádio do Pacaembu.[151] Em 1949, o clube usou uma camisa grená em um amistoso contra a Portuguesa de Desportos, como uma forma de prestar homenagem ao elenco do Torino Football Club da Itália, que foi vitimado em um acidente de avião contra a Basílica de Superga, em Turim.[148][152]
                            
                            No final de agosto de 2010, o Corinthians lançou no Parque São Jorge a camisa em comemoração ao centenário do clube, que foi utilizada como uniforme titular nas partidas em casa até o final do Campeonato Brasileiro daquele ano. A camisa remete ao suposto primeiro uniforme utilizado pelo Corinthians em 1910, com as camisetas na cor bege e no escudo as letras "CP", fazendo referência ao primeiro símbolo utilizado pelo clube.[153]
                            
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    &nbsp
                  </div>
                </div>
        <?php }else{ ?>
                        <div class="row">
                    <div class="col">
                      <img class= "d-block w-100" src="10.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">

                      <br>

                      <h3>Sport Clube Corinthians Paulista</h3>

                      <br>

                      <h5>Sport Club Corinthians Paulista é um clube poliesportivo brasileiro da cidade de São Paulo, capital do estado de São Paulo. Foi fundado como uma equipe de futebol no dia 1 de setembro de 
                        1910 por um grupo de operários do bairro Bom Retiro.</h5>    
                      
                      <br>

                      <p>Embora tenha atuado em outras modalidades esportivas ao longo dos anos, seu reconhecimento e suas principais conquistas foram alcançados no futebol. O clube é um dos mais bem sucedidos do Brasil
                        e das Américas nos últimos anos. Sendo o terceiro maior campeão nacional, com onze conquistas, ficando atrás somente do Palmeiras e Flamengo. Tendo conquistado dois Mundiais de Clubes da FIFA,
                          uma Copa Libertadores da América de forma invicta, uma Recopa Sul-Americana, sete Campeonatos Brasileiros, três Copas do Brasil, uma Supercopa do Brasil, cinco Torneios Rio-São Paulo
                          (recordista, ao lado de Palmeiras e Santos), duas Taça dos Campeões Estaduais Rio–São Paulo, 30 Campeonatos Paulistas (atual recordista) e uma Copa Bandeirantes (único vencedor). Possui o 
                          maior número de conquistas do Campeonato Brasileiro considerando a partir de 1971 (quando foi adotado o nome de Campeonato Nacional de Clubes), com 7 títulos (empatado com o Flamengo).

                        Suas cores tradicionais são o branco e o preto. Desde 2014, manda suas partidas de futebol na Neo Química Arena. Seus rivais históricos são o Palmeiras, com quem disputa o Derby Paulista;
                        o São Paulo, com quem disputa o Majestoso; e o Santos, com quem disputa o Clássico Alvinegro. Sua torcida é conhecida como "Fiel" e seus torcedores são estimados em aproximadamente 30
                          milhões espalhados por todo o Brasil e pelo mundo, atrás nacionalmente somente do carioca Flamengo. A sua torcida é considerada também uma das maiores torcidas do mundo.</p>
                    </div>

                    <div class="col">

                      <h3>Estádios</h3>

                      <br>

                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Neo Química Arena
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              Desde que o Parque São Jorge havia se tornado uma casa modesta demais para comportar o grande número de torcedores do Corinthians, sempre houve muitos projetos,[169] mas nunca foram levados à frente.[170][171]

                              Em 27 de agosto de 2010 foi anunciada a construção de um novo estádio com capacidade prevista para 48 000 pessoas e um valor estimado em 350 milhões de reais.[172] Seu projeto foi de autoria de Aníbal Coutinho.[nota 7] Localizado em uma propriedade de 197 095,14 metros quadrados,[175] a área construída é de 189 mil metros quadrados.[163]
                              
                              Construído pela Odebrecht entre 2011 e 2014, tinha previsão de custo inicial em 820 milhões de reais.[176] Porém, seu preço final atingiu R$ 985 milhões, ressaltasse que nesta conta não estão incluídos os gastos com as arquibancadas móveis (custeadas pelo governo de São Paulo em parceria com a AmBev), as estruturas complementares da FIFA, que fizeram parte do projeto Copa do Mundo FIFA de 2014, e os gastos com pagamento de juros dos empréstimos bancários, ampliaram os custos para R$ 1,15 bilhão.[177]
                              
                              O estádio está localizado a 19 quilômetros a leste do centro da cidade e a 21 km de distância do Aeroporto Internacional de São Paulo-Guarulhos. A estação de metrô mais próxima é a Corinthians-Itaquera, a 500 metros do estádio. Ela se conecta a uma estação de trem com o mesmo nome. A estação de metrô Artur Alvim está a 800 metros de distância. Se todos os usuários embarcaram em trens para deixar o estádio, ele estaria vazio em 30 minutos.[178] Durante os jogos do Mundial de 2014, um trem expresso ligou a Luz e a Estação Corinthians-Itaquera da CPTM, fazendo a viagem em 17 minutos.[179]
                              
                              A Arena Corinthians foi inaugurada oficialmente em 19 de maio de 2014 com uma partida oficial entre Corinthians e Figueirense, válida pelo Campeonato Brasileiro, que terminou com vitória por 1 a 0 da equipe catarinense.[127]
                              
                              Dias depois, sediou a abertura da Copa do Mundo FIFA de 2014 entre Brasil e Croácia e outras cinco partidas da principal competição entre seleções nacionais do mundo, incluindo uma semifinal. Durante o Mundial, a Arena Corinthians teve excepcionalmente 19 800 assentos temporários a mais para atender exigência da FIFA.[180][181][182] As arquibancadas móveis foram retiradas após o fim da Copa.[183][184]
                              
                              A Arena Corinthians foi uma das sedes do futebol olímpico no RIO 2016. O estádio recebeu 10 jogos, incluindo uma semifinal do masculino e a decisão da medalha de bronze no feminino.[185] É atualmente o 12º maior estádio do Brasil e o segundo maior do Estado de São Paulo.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Parque São Jorge
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              O Estádio Alfredo Schürig, mais conhecido como Fazendinha e Parque São Jorge, é um estádio de propriedade do Corinthians. Construído entre 1926 e 1928 através da ajuda financeira dos sócios do clube,[159] foi inaugurado em um amistoso entre Corinthians e América-RJ.[32] Em 1961, ganhou um novo sistema de iluminação, que estreou em uma partida contra o Flamengo, que resultou em uma vitória alvinegra por 7 a 2. A última partida da equipe profissional corintiana no Parque São Jorge ocorreu no dia 3 de agosto de 2002, em um amistoso contra o Brasiliense. Com capacidade atualmente para receber cerca de 18 000 espectadores, o Parque São Jorge tem sido utilizado para receber jogos do time de Futebol Americano do clube, o Corinthians Steamrollers, e também é usado para treinamentos e partidas das categorias de base corintianas.[159]

              Com o grande crescimento da torcida do Corinthians, o Parque São Jorge ficou pequeno demais para receber partidas do clube, que passou a mandar suas partidas mais importantes para estádios maiores. O principal deles foi o Estádio Paulo Machado de Carvalho, mais conhecido como Estádio do Pacaembu, que pertence ao município de São Paulo e desde sua inauguração, em 1940, era considerado como a "casa" do Corinthians.[187] Entre as décadas de 1940 e 1960, o clube mandou quase todas suas principais partidas no Pacaembu, que viu o clube alvinegro ser campeão do Campeonato Paulista por três vezes na década de 1950.[188] A partir da década de 1970, o Corinthians também passou a usar como mandante o Estádio Cícero Pompeu de Toledo, mais conhecido como Estádio do Morumbi e de propriedade do São Paulo Futebol Clube.[188] Embora o clube alvinegro mantivesse o Pacaembu como estádio principal, o Morumbi, por ter uma capacidade maior, foi quase sempre o palco dos grandes clássicos e decisões corintianas (como finais do Campeonato Paulista e do Campeonato Brasileiro) entre meados dos anos setenta e fim da década de 2000.[188] Por conta de um desentendimento com Juvenal Juvêncio, então presidente do São Paulo, sobre o número de ingressos para uma partida do clássico Majestoso em 2009, a diretoria corintiana decidiu que nunca mais mandaria jogos no Morumbi, e o Pacaembu voltou a receber as principais decisões corintianas, como a do Campeonato Brasileiro de 2011 e da Copa Libertadores de 2012, até a inauguração da Arena Corinthians.[188][189]
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Estádio da Ponte Grande
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              O Estádio da Ponte Grande foi o primeiro estádio do Corinthians Paulista. Anteriormente o clube mandava seus jogos no "Campo do Lenheiro", em um terreno situado na antiga Rua dos Imigrantes, atual Rua José Paulino, no bairro do Bom Retiro onde o clube foi fundado. O Estádio da Ponte Grande foi inaugurado em 1918, e ficava próximo da Ponte das Bandeiras, onde hoje está localizado o Centro Esportivo e de Lazer Tietê, na região norte da cidade de São Paulo.[190]

              No Estádio da Ponte Grande o Corinthians conquistou os títulos estaduais de 1922, 1923 e 1924, além de ter sido palco de algumas taças conquistadas em amistosos. Outro fato marcante foi o jogo entre a Seleção Brasileira x Corinthians. A partida amistosa aconteceu em 1925, e terminou empatada em 1-1. Apesar da importância histórica do local para o Alvinegro Paulista, há poucos registros fotográficos do que foi o primeiro Estádio do Corinthians.

              Em 1926, o então presidente do Corinthians Ernesto Cassano compra o terreno do Parque São Jorge para o clube. O terreno pertencia ao Esporte Clube Sírio, e foi comprado por Ernesto Cassano por 750 contos de réis, pagos em dez anos. A partir dai o clube iniciou o processo de mudança da Ponte Grande na zona norte de São Paulo, para o bairro do Tatuapé, na zona Leste da cidade.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      &nbsp
                    </div>
                  </div>
         <?php }  ?>
     
    <?php }else{ ?>
                  <div class="row">
                  <div class="col">
                    <img class= "d-block w-100" src="7.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">

                    <br>

                    <h3>Sport Clube Corinthians Paulista</h3>

                    <br>

                    <h5>Sport Club Corinthians Paulista é um clube poliesportivo brasileiro da cidade de São Paulo, capital do estado de São Paulo. Foi fundado como uma equipe de futebol no dia 1 de setembro de 
                      1910 por um grupo de operários do bairro Bom Retiro.</h5>    
                    
                    <br>

                    <p>Embora tenha atuado em outras modalidades esportivas ao longo dos anos, seu reconhecimento e suas principais conquistas foram alcançados no futebol. O clube é um dos mais bem sucedidos do Brasil
                      e das Américas nos últimos anos. Sendo o terceiro maior campeão nacional, com onze conquistas, ficando atrás somente do Palmeiras e Flamengo. Tendo conquistado dois Mundiais de Clubes da FIFA,
                        uma Copa Libertadores da América de forma invicta, uma Recopa Sul-Americana, sete Campeonatos Brasileiros, três Copas do Brasil, uma Supercopa do Brasil, cinco Torneios Rio-São Paulo
                        (recordista, ao lado de Palmeiras e Santos), duas Taça dos Campeões Estaduais Rio–São Paulo, 30 Campeonatos Paulistas (atual recordista) e uma Copa Bandeirantes (único vencedor). Possui o 
                        maior número de conquistas do Campeonato Brasileiro considerando a partir de 1971 (quando foi adotado o nome de Campeonato Nacional de Clubes), com 7 títulos (empatado com o Flamengo).

                      Suas cores tradicionais são o branco e o preto. Desde 2014, manda suas partidas de futebol na Neo Química Arena. Seus rivais históricos são o Palmeiras, com quem disputa o Derby Paulista;
                      o São Paulo, com quem disputa o Majestoso; e o Santos, com quem disputa o Clássico Alvinegro. Sua torcida é conhecida como "Fiel" e seus torcedores são estimados em aproximadamente 30
                        milhões espalhados por todo o Brasil e pelo mundo, atrás nacionalmente somente do carioca Flamengo. A sua torcida é considerada também uma das maiores torcidas do mundo.</p>
                  </div>

                  <div class="col">

                    <h3>Clássicos e Rivalidades</h3>

                    <br>

                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Derby Paulista
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            O Derby Paulista é o nome do clássico disputado entre Corinthians e Palmeiras, considerado o mais tradicional da capital paulista e uma das maiores rivalidades mundiais.
                            O nome do clássico foi dado pelo jornalista Tommaso Mazzoni, numa referência à mais importante corrida de cavalo do mundo, o Derby de Epsom, no qual sempre foi difícil
                              de apontar o vencedor. Em virtude da clássica corrida de cavalos, o nome Derby acabou sendo identificado mundialmente para os confrontos relevantes em todos os esportes. Em 6 de maio 
                              de 1917, ocorreu o primeiro confronto entre os clubes, onde foi vencido pelo Palmeiras (na época, tinha o nome de Palestra Itália) pelo placar de 3 a 0, partida disputada no estádio
                              Palestra Itália. Uma das particularidades desta rivalidade, se deve ao fato de ambos os clubes evitarem as cores do rival. O lado do Corinthians evita a cor verde assim como o Palmeiras
                              evita a cor preta em suas dependências, em alusão ao arquirrival Os anos de ouro da rivalidade foi na década de 1990, onde decidiram Campeonatos Paulista e o Campeonato Brasileiro de 1994, 
                              além dos confrontos épicos pela Copa Libertadores, nos anos de 1999 e 2000, pelas quartas-de-finais e semifinais respectivamente, figurando como uma das rivalidades que mais decidiram no Brasil. 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Majestoso
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            O clássico Majestoso é a rivalidade entre Corinthians e São Paulo. O nome do clássico foi idealizado pelo jornalista Tommaso Mazzoni. O primeiro encontro entre
                            os clubes ocorreu em 25 de maio de 1930, no estádio Parque São Jorge, com vitória do Corinthians por 2 a 1. O auge da rivalidade, deu início nos anos 90, onde 
                            os dois clubes mediram forças pelas semifinais da extinta Copa Conmebol em 1994, semifinais de Campeonatos Brasileiros e decisões de Campeonatos Paulistas. Os
                              grandes duelos se estenderam nos anos 2000, com decisão de Torneio Rio-São Paulo em 2002 e semifinal de Copa do Brasil. Em decisões, Corinthians e São Paulo
                              decidiram inúmeros Campeonatos Paulistas, a nível nacional decidiram o Campeonato Brasileiro de 1990, já a nível internacional decidiram a Recopa Sul-Americana 
                              de 2013. Figurando como a rivalidade brasileira que mais decidiu em números de torneios.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Clássico Alvinegro
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            O Clássico Alvinegro é disputado entre Corinthians e Santos, o clássico possui este nome em alusão as cores dos dois clubes. O primeiro duelo entre as equipes
                            ocorreu em 6 de março de 1913, partida realizada no antigo estádio Parque Antarctica, onde a equipe do litoral venceu a equipe da capital por 6 a 3. Um dos 
                            fatos mais marcantes da história desta rivalidade, foram os tabus sem vitórias dos rivais. O Corinthians ficou sem vencer o rival por 11 anos em campeonatos
                              paulistas, enquanto o Santos ficou sem vencer o Corinthians por 7 anos considerando todos os campeonatos. Em decisões de campeonatos, os alvinegros já decidiram
                              alguns Campeonatos Paulista e decidiram o Campeonato Brasileiro de 2002. Em torneios internacionais se enfrentaram em uma oportunidade, pelas semifinais da Copa 
                              Libertadores de 2012 onde o Corinthians avançou para a decisão do torneio.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    &nbsp
                  </div>
                </div>
    <?php }  ?>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sun Books</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('img/SUN BOOKS.png')}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Sun Books</h5>
                          <p class="card-text">Cansado de procurar por <a href="{{url('livraria')}}" class="underline text-gray-900 dark:text-white">livrarias</a> próximas? Ou saber de quais os <a href="livros" class="underline text-gray-900 dark:text-white">livros</a> com as maiores estrelas do momento? Ou até mesmo achar a <a href="categoria" class="underline text-gray-900 dark:text-white">categoria</a> de livro mais combina com você.</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row g-5">
          <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">Talvez te interesse</h3>
          <article>
            <section>
              <h3 class="fst-italic">1.1Qual a Importância da leitura?</h3>
              <p class="text-align: justify; ">Um pouco mais da metade da população brasileira, com 5 anos de idade ou mais, é considerada “leitor”, ou seja, leu pelo menos um livro nos últimos três meses. Pouco, né? 
                Mas esse é o cenário da leitura no Brasil mostrada na 4°e última edição da Pesquisa Retratos da Leitura, divulgada em 2016. O que muita gente não leva em consideração 
                é que o mundo da leitura potencializa nossa capacidade de pensar, produzir, criar, compreender, ouvir e, claro, saber mais, amplia o conhecimento.
        
        Transformar a leitura em um hábito é tão urgente quanto necessário desde a infância. Isso permite o desenvolvimento intelectual e ensina o caminho 
        mais curto para o conhecimento. Torna essa atividade um prazer imensurável e de valor incalculável para o resto da vida. Em meio ao boom tecnológico, à essa revolução 
        digital e a quase incorporação dos smartphones ao corpo humano – e não ache exagero, lembre-se que você dorme com o celular, acorda com ele, almoça com ele do lado e vai 
        ao banheiro com ele, e faz muitas outras coisas com esse aparelhinho, é ou não é assim? – a frequência da leitura tem diminuído vertiginosamente.
        Há ainda que se observar as também novas ferramentas tecnológicas que chegaram para dar aquela contribuição e apoio aos leitores. Aparelhos, como kindle, 
        e novos formatos de livros como os e-books e áudio books são alguns exemplos positivos surgidos nesse ambiente altamente transformador, revolucionário e disruptivo como 
        o universo digital.<br><br></p>
        
            <div class="container col-3"><p><h5><strong>Benefícios</strong></h5></p></div>
        <p class="text-align: justify;">Mas mesmo neste cenário conturbado e um tanto quanto desafiador, você sabe quais os benefícios que a leitura traz? Ler estimula o raciocínio, ativa o cérebro, 
        aumenta a imaginação, melhora o vocabulário, desenvolve o pensamento crítico, combate o estresse, dá um gás motivacional, amplia criatividade, estimula a capacidade de 
        concentração e o leitor transforma a sua escrita.
        Especialistas afirmam que quem desenvolve o hábito da leitura melhora o aprendizado, principalmente no caso de estudantes, estimula o bom funcionamento da memória, e eleva a capacidade de interpretar textos, ideias e acontecimentos. 
        Além disso, consegue ter embasamento para suas conversas, geralmente em diversos assuntos.
        E como eu conquisto tudo isso? Como ter esse hábito tão importante? Busque por obras, textos que abordem assuntos do seu interesse, que vocês 
        realmente goste. Escolha um momento do dia e dedique-se a isso. Aproveite até mesmo aqueles momentos em trânsito ou as horas reservadas 
        de folga. Em breve, a leitura será não só um hábito, mas um hobby.</p>
            </section>
            <section>
                <h3 class="fst-italic">1.2 A Leitura reduz o Estresse</h3>
                <p class="text-align: justify;">
                  Todos nós já sentimos isso em primeira mão. Ler um bom livro após um dia longo e estressante tem efeitos incríveis em nosso estado de espírito. Estudos demonstram que o ato de ler um livro pode ser até 600% mais eficiente para aliviar o estresse do que jogar videogames e 300% mais eficiente do que dar uma caminhada. Esse é um fato bem interessante sobre a leitura.
<br>
De acordo com um estudo de 2009 conduzido pela Universidade de Sussex, apenas 6 minutos de leitura são suficientes para reduzir os níveis de estresse em até 68%. É uma opção mais rápida e eficaz do que muitos outros métodos de redução do estresse, como ouvir música ou beber uma xícara de chá.
                </p>
                
            </section>
        </article>
      </div>
    </body>
</html>

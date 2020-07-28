<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="alpha corp corporation enterprise technology progress" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Alpha Corporation, Los-Angeles" />
        <link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="image/onglet.ico">


    	<SCRIPT LANGUAGE="JavaScript">
			function HeureCheckEJS()
			{
			krucial = new Date;
			heure = krucial.getHours();
			min = krucial.getMinutes();
			sec = krucial.getSeconds();
			jour = krucial.getDate();
			mois = krucial.getMonth()+1;
			annee = krucial.getFullYear();
			if (sec < 10)
				sec0 = "0";
			else
				sec0 = "";
			if (min < 10)
				min0 = "0";
			else
				min0 = "";
			if (heure < 10)
				heure0 = "0";
			else
				heure0 = "";
			DinaHeure = heure0 + heure + ":" + min0 + min + ":" + sec0 + sec;
			which = DinaHeure
			if (document.getElementById){
				document.getElementById("ejs_heure").innerHTML=which;
			}
			setTimeout("HeureCheckEJS()", 1000)
			}
			window.onload = HeureCheckEJS;
		</SCRIPT>

        <title>Alpha Corp</title>
    </head>

    <header class="wx">
    	<img id="az" src="image/logo2.png">
    	<br>
    	<u><center>Alpha Corporation</center></u>
    	<br>	
    </header>

    <body>
    	

    	<nav id="nav">
    		<p id="a">Sommaire</p>
            <ul>

                <div class="er">
                <li>
                    <a href="#df"><u>Présentation</u></a>

                    <ol>
                        <li>1. Sociétée</li>
                        <li>2. Ambitions</li>
                    </ol>

                </li>
                </div>
                <br>
                <div class="er">
                <li>
                    <a href="#dfg"><u>Logo</u></a>
                    <ol>
                        <li>1. Exlication</li>
                    </ol>

                </li>
                </div>
                <br>
                <div class="er">
                <li>
                    <a href="#dfgh"><u>L'intélligence <br> Artificielle</u></a>
                    <ol>
                        <li>1. Description</li>
                        <li>2. Exemples</li>
                        <li>3. Futurs <br> Evolutions</li>
                    </ol>
                </li>
                </div>
                <br>
                <div class="er">
                <li>
                    <u>Mystères <br> Inexpliquées</u>
                    <ol>
                        <li>1. L'Atlantide</li>
                        <li>2. Les OVNIs</li>
                        <li>3. Les Aliens</li>
                        <li>4. Les <br> Voyages <br> Temporels</li>
                        <li>5. Les Trous <br> de Verres</li>
                        <li>6. La <br> Téléporta- <br> tion</li>
                        <li>7. Techno- <br> logie <br> Quantique</li>
                        <li>8. Les Metas <br> Humains</li>

                    </ol>
                </li>
                </div>
            </ul>
    	</nav>

    	<section class="ab">
			<SCRIPT LANGUAGE="JavaScript1.2">
				var mois=new Array(13);
				mois[1]="Janvier";
				mois[2]="Février";
				mois[3]="Mars";
				mois[4]="Avril";
				mois[5]="Mai";
				mois[6]="Juin";
				mois[7]="Juillet";
				mois[8]="Août";
				mois[9]="Septembre";
				mois[10]="Octobre";
				mois[11]="Novembre";
				mois[12]="Décembre";
				var time=new Date();
				var month=mois[time.getMonth() + 1];
				var date=time.getDate();
				var year=time.getYear();
				if (year < 2000) 
				year = year + 1900;
				document.write("Aujourd'hui nous sommes le " +date + " ");
				document.write(month + " " + year);
				</SCRIPT>

    		il est <div id="ejs_heure">Initialisation</div>

            <center><video src="video/intro.mp4" controls="video/intro" width="900px" height="506px" ></video></center>

    		<article class="abcd">

    			<u id="df"><h1 class="abc">Présentation :</h1></u>

    			<center><u><h2>Sociétée</h2></u></center>

    			<p>
    				Tout d'abord Alpha Corporation est une entreprise créé en 2016 par Ethan Price qui en est toujours a ce jour l'Owner" (le propriétaire), également le but de cette entreprise est d'améliorer les conditions humaines dans le monde, mais également d'inventer des technologies futuristes et utiles à la survie humaine, cette société est également a la recherche d'explication sur des évènements inexpliqués par exemple les manifestations aliens et de mythe par encore résolue tel que l'Atlantide.
    			</p>

                <center><img id="rt" src="image/bati.jpg" alt="bati" title="cliquer dessus pour agrandir"/></center>

                <br>

                <center><u><h2>Ambitions</h2></u></center>
                
                <p>
                    À l'origine, Alpha Corporation a été créé pour la conception de technologies dernière génération et futuriste, mais au fil du temps l'entreprise, c'est intéresser a plus de domaines dont les technologies pour aider la survie de l'homme tel que les biotechnologies, les nano-technologies, les prothèse dernière génération. Vue lempleur que prenais Alpha Corporation, ils ont également décidé de s'intéresser à tous les secrets d'état et de tout ce que nous cacher les gouvernements du monde tels que les manifestations extra-terrestres, mais il sinterresse a un mystère dune importance capitale qui est le mystère de l'Atlantide qui étais sur terre il y a des million d'annee et qui déjà a cette époque connaissait la médecine très évolue, l'électricité, et l'aviation dernière génération et qui avait une énergie immense (le cœur de l'Atlantide) un cristal qui leur permettent de vivre très longtemps voir même immortel.
                </p>

    		</article>

            <article class="abcd">

                    <u id="dfg"><h1 class="abc">Logo :</h1></u>

                    <center><u><h2>Explications</h2></u></center>

                    <center><img src="image/logo2.png" alt="logo2" title="cliquer dessus pour agrandir"/></center>

                    <p>
                        Ce logo représente un blason avec trois pillier qui sont les principaux piliers d'Alpha Corporation qui sont les suivant, le premier est <u><strong>Le Respect</strong></u> car toutes les personnent travaillant chez Alpha Corp se doivent un respect mutuel que ce soit les employer envers les dirigeant mais egalement des dirigeant envers les employers, le second est <u><strong>L'Esprit D'Equipe</strong></u> qui est super important dans une multinationale comme Alpha Corporation car si les membres de la societe ne sont pas soudé les uns envers les autres cela fera a coup sur un mauvais travail, et le dernier qui est <u><strong>La Qualité et L'Inovation</strong></u> qui sont des valeurs car un travail sans qualité n'est pas utile et un projet non inovant ne sert a rien.  
                    </p>

            </article>

            <article class="abcd">

                    <u id="dfgh"><h1 class="abc">L'Intelligence Artificielle :</h1></u>

                    <center><u><h2>Description</h2></u></center>

                    <center><img src="image/logo2.png" alt="logo2" title="cliquer dessus pour agrandir"/></center>

                    <p>
                        Ce logo représente un blason avec trois pillier qui sont les principaux piliers d'Alpha Corporation qui sont les suivant, le premier est <u><strong>Le Respect</strong></u> car toutes les personnent travaillant chez Alpha Corp se doivent un respect mutuel que ce soit les employer envers les dirigeant mais egalement des dirigeant envers les employers, le second est <u><strong>L'Esprit D'Equipe</strong></u> qui est super important dans une multinationale comme Alpha Corporation car si les membres de la societe ne sont pas soudé les uns envers les autres cela fera a coup sur un mauvais travail, et le dernier qui est <u><strong>La Qualité et L'Inovation</strong></u> qui sont des valeurs car un travail sans qualité n'est pas utile et un projet non inovant ne sert a rien.  
                    </p>

                    <p>
                        Les suites de cette article à la page <a href="contenu/page2.php"> suivante</a>
                    </p>



            </article>

    	</section>



    </body>
</html>
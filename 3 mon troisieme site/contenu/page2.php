<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="alpha corp corporation enterprise technology progress" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Alpha Corporation, Los-Angeles" />
        <link rel="stylesheet" type="text/css" href="../style2.css">
		<link rel="shortcut icon" href="../image/onglet.ico">


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
    	<img id="az" src="../image/ia.jpg">
    	<br>
    	<u><center>L'Intelligence Artificielle</center></u>
    	<br>	
    </header>

    <body>
    	

    	<nav id="nav">
    		<p id="a">Sommaire</p>
            <ul>

                <div class="er">
                <li>
                    <a href="../index.php"><u>Acceuil</u></a>

                    <ol>
                        <li>1. Première <br> page</li>
                    </ol>

                </li>
                </div>
                <br>
                <div class="er">
                <li>
                    <a href="#dfg"><u>Exemples</u></a>
                    <ol>
                        <li>1. Exlication</li>
                        <li>2. Alpha Go</li>
                        <li>3. Deep Blue</li>
                        <li>4. Sophia</li>
                    </ol>

                </li>
                </div>
                <br>
                <div class="er">
                <li>
                    <a href="#dfgh"><u>Futur Evolutions</u></a>
                    <ol>
                        <li>1. Andoids</li>
                        <li>2. Evolution <br> Humaine</li>
                        <li>3. Humains ?</li>
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


    		<article class="abcd">

    			<u id="df"><h1 class="abc">Exemples</h1></u>

    			<center><u><h2>Explications</h2></u></center>

    			<p>
    				texte
    			</p>

                <center><img id="rt" src="../image/ia2.jpg" alt="ia2" title="cliquer dessus pour agrandir"/></center>

                <br>

    		</article>

            <article class="abcd">

                    <u id="dfgh"><h1 class="abc">Futur Evolutions</h1></u>

                    <center><u><h2>Description</h2></u></center>

                    <center><img src="../image/..." alt="..." title="cliquer dessus pour agrandir"/></center>

                    <p>
                        texte 
                    </p>



            </article>

    	</section>



    </body>
</html>
<?php 

  /*
    Riscrivere questa pagina del sito google
    https://policies.google.com/faq.
    Ci sono diverse domande con relative risposte.
    Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
    Per la formattazione del testo della FAQ inserite il markup HTML direttamente nel “database”
  */

  $db = [
    'section_1' => [
      'title' => "<h2> Come state implementando la recente  decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h2>",
      'text' => "<p>La recente <a href='https://curia.europa.eu/juris/document/document.jsf?text=&docid=152065&amppageIndex=0&doclang=it&mode=lst&dir=&occ=first&part=1&cid=276332'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>
      <p>
        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
      </p>
      <p>
        Per presentare una richiesta di rimozione, compila questo <a href='https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637902975188692258-1447049997&hl=it&rd=1'> modulo web </a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
      </p>
      <p>
        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
      </p>
      <p>
        Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione. 
      </p>"
    ],
    'section_2' => [
      'title' => "<h2>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h2>",
      'text' => " <p> Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno. </p>
      <p>
        Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.
      </p>
      <p>
        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='https://safety.google/'> Centro Google per la sicurezza online</a>.
      </p>
      <p>
       <a href='https://safety.google/'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.
      </p>"
    ],
    'section_3' => [
      'title' => "<h2>Perché il mio account è associato a un paese?</h2>",
      'text' => " <p> Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose: </p>
      <ol class='main-list'>
        <li> 
          La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti: 
          <ol type='a' class='main-list-indentata'>
            <li> 
              Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.
            </li>
            <li> 
              Google LLC, con sede negli Stati Uniti, per il resto del mondo.
            </li>
          </ol>
        </li>
        
        <li> 
          La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.
        </li>
      </ol>
      <p>
        Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.
      </p>"
    ],
    'section_4' => [
      'title' => "<h3>Stabilire il paese associato al tuo account</h3>",
      'text' => " <p> Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno. </p>
      <p>
        I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.
      </p>
      <p>
        Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href='https://support.google.com/accounts/troubleshooter/10082950?al=Italia&visit_id=637902976128754055-664040522&p=country_association&rd=2'>Contattaci <i class='fa-solid fa-up-right-from-square'></i> </a> se ritieni che il paese associato al tuo account sia sbagliato.
      </p>"
    ],
    'section_5' => [
      'title' => "<h2>Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?</h2>",
      'text' => " <p> I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='https://support.google.com/websearch/answer/9109?hl=it'>contattare il webmaster </a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637902976128754055-664040522&hl=it&rd=1'>fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='https://support.google.com/websearch/troubleshooter/3111061?hl=it'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>. </p>"
    ],
    'section_6' => [
      'title' => "<h2>Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?</h2>",
      'text' => " <p> In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='https://policies.google.com/privacy/key-terms#toc-terms-referrer-url'>URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='https://support.google.com/websearch/answer/173733'>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio. </p>"
    ],
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==' crossorigin='anonymous'/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="css/generals.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/footer.css">
  <title>Google FAQ</title>
</head>
<body>

  <header>
    <div class="top-header">
      <div class="left-img">
        <a href="#"><img src="./img/google-icon.png" alt="google icon"></a>
        <a href="#"><h3>Privacy e termini</h3></a>
      </div>

      <div class="right-user">
        <a href="#" class="right-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
            <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>
          </svg>
        </a>
        
        <div class="user"><a href="#">m</a></div>
      </div>
    </div>
    
    <div class="bottoms-header">
      <ul>
        <li><a href="#">Introduzione</a></li>
        <li><a href="#">Norme sulla privacy</a></li>
        <li><a href="#">Termini di servizio</a></li>
        <li><a href="#">Tecnologie</a></li>
        <li class="active"><a href="#">Domande frequenti</a></li>
      </ul>
    </div>
  </header>

  <main>

    <div class="main-container">

      <?php foreach ($db as $section => $contents): ?>
        
        <?php echo $contents['title'] ?>

        <p> <?php echo $contents['text'] ?> </p>

      <?php endforeach; ?>

    </div>

  </main>

  <footer>
    <div class="footer-container">

     <ul class="footer-list">
       <li><a href="#">Google</a></li>
       <li><a href="#">Tutto su Google</a></li>
       <li><a href="#">Privacy</a></li>
       <li><a href="#">Termini</a></li>
     </ul>
     <div>
       <i class="fa-solid fa-language right"></i>
       <select name="language_changer" class="right">
         <option value="Italiano">Italiano</option>
         <option value="Inglese">Inglese</option>
         <option value="Francese">Francese</option>
         <option value="Tedesco">Tedesco</option>
         <option value="Spagnolo">Spagnolo</option>
       </select>
     </div>

    </div>
  </footer>
  
</body>
</html>
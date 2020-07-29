<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  </head>
  <body>

    @include('partials.header')

    <main>
      <div class="container">
        <div class="testo">
          <h2>DIVENTA SVILUPPATORE WEB</h2>
          <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
          <ul>
            <li>6 mesi di corso intensivo online in diretta</li>
            <li>Nessuna competenza di programmazione richiesta</li>
            <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
          </ul>
        </div>
        <div class="pc">
          <img src="{{ asset('img/pc.gif') }}" alt="pc">
        </div>
      </div>
    </main>

    @include('partials.footer')

  </body>
</html>

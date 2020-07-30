@extends('layouts.app')

@section('title')
  FAQ
@endsection

@section('section')
  <main>
    <div class="intro">
      <h3>Domande frequenti</h3>
      <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta
        che stai cercando? Contattaci e saremo felici di darti una mano.</p>
    </div>
    <div class="faq">
      <div class="first box">
        <h4>Prima del corso</h4>
        @foreach ($faqs_list1 as $faq1)
          <div class="single-faq">
            <h5>{{ $faq1['domanda'] }}</h5> <span class="plus"><i class="fas fa-plus fa-2x"></i></span> <span class="minus hide"><i class="fas fa-minus fa-2x"></i></span>
            <p class="hide">{{ $faq1['risposta'] }}</p>
          </div>
        @endforeach
      </div>
      <div class="second box">
        <h4>Dopo il corso</h4>
        @foreach ($faqs_list2 as $faq2)
          <div class="single-faq">
            <h5>{{ $faq2['domanda'] }}</h5><span class="plus"><i class="fas fa-plus fa-2x"></i></span> <span class="minus hide"><i class="fas fa-minus fa-2x"></i></span>
            <p class="hide">{{ $faq2['risposta'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection

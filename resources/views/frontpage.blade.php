@extends('layouts.app')

  @section('content')
  @endsection
  =======
 @extends('layouts.app')

 @section('content')
     <!-- Header -->
     <header>
         <div class="logo">Logo</div>
         <nav>
             <ul>
                 <li><a href="#">Home</a></li>
                 <li><a href="#">Over ons</a></li>
                 <li><a href="#">Contact</a></li>
             </ul>
         </nav>
         <div class="auth-buttons">
             @guest
                 <button class="login-btn">Inloggen</button>
                 <button class="register-btn">Profiel aanmaken</button>
             @endguest
         </div>
     </header>

     <!-- Zoeksectie -->
     <section class="search-section">
         <input type="text" placeholder="Zoek naar woningen...">
         <button class="search-btn">Zoeken</button>
     </section>

     <!-- Uitgelichte Huizen -->
     <section class="featured-houses">
         <h2>Uitgelichte Huizen</h2>
         <div class="house-grid">
             <!-- House items go here -->
         </div>
     </section>

     <!-- Provincies Sectie -->
     <section class="provinces-section">
         <h2>Provincies</h2>
         <div class="province-grid">
             <!-- Province items go here -->
         </div>
     </section>

     <!-- Nieuw op Huisruilen.nl -->
     <section class="new-houses">
         <h2>Nieuw op Huisruilen.nl</h2>
         <div class="house-grid">
             <!-- New house items go here -->
         </div>
     </section>

     <!-- Hoe werkt het -->
     <section class="how-it-works">
         <h2>Hoe werkt het</h2>
         <div class="steps">
             <div class="step">
                 <i class="icon-search"></i>
                 <h3>Zoek naar een woning</h3>
                 <p>Vind de perfecte woning voor u.</p>
             </div>
             <div class="step">
                 <i class="icon-contact"></i>
                 <h3>Neem contact op</h3>
                 <p>Neem contact op met de verhuurder.</p>
             </div>
             <div class="step">
                 <i class="icon-move"></i>
                 <h3>Verhuis naar uw nieuwe woning</h3>
                 <p>Geniet van uw nieuwe woning.</p>
             </div>
         </div>
     </section>

     <!-- Footer -->
     <footer>
         <div class="footer-links">
             <a href="#">Huisruilen</a>
             <a href="#">Contact</a>
             <a href="#">Voorwaarden</a>
             <a href="#">Privacybeleid</a>
         </div>
         <div class="footer-info">
             <p>&copy; 2023 Huisruilen.nl</p>
         </div>
     </footer>
 @endsection
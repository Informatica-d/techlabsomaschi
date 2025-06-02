<?php include "header.php"; ?>
<title>Contatti - TechlabSomaschi</title>

<main>
  <!-- Page Title -->
  <section class="page-title dark-background">
    <div class=" position-relative">
        <img src="assets/img/lab/pic_software.png" class="img-fluid" alt="">
      <h1 data-aos="fade-up">Contatti</h1>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      
      <!-- Section Title -->
      <div class="section-title text-center">
        <h2>Entra in contatto con noi</h2>
        <p>Siamo qui per rispondere alle tue domande e supportarti nel tuo percorso tecnologico</p>
      </div>

      <div class="row gy-4">
        
        <!-- Contact Info -->
        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Indirizzo</h3>
              <p>Via dei Cappuccini, 2<br>00044 Frascati (RM), Italia</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Telefono</h3>
              <p>+39 06 123 4567<br>+39 06 987 6543</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email</h3>
              <p>info@techlabsomaschi.it<br>contact@techlabsomaschi.it</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-clock flex-shrink-0"></i>
            <div>
              <h3>Orari di apertura</h3>
              <p>Lun-Ven: 9:00 - 18:00<br>Sabato: 9:00 - 13:00</p>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Il tuo nome" required="">
              </div>

              <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="La tua email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Oggetto" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Messaggio" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Invio in corso...</div>
                <div class="error-message"></div>
                <div class="sent-message">Il tuo messaggio è stato inviato. Grazie!</div>

                <button type="submit">Invia Messaggio</button>
              </div>

            </div>
          </form>
        </div>

      </div>

    </div>
  </section>

  <!-- Map Section -->
  <section class="section" data-aos="fade-up" data-aos-delay="300">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="map-container">
            <iframe style="border-radius: 15px; overflow: hidden;"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9731.393092584101!2d12.645646331678801!3d41.72188845138864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325853780da4035%3A0xf1ead19a6715dc0c!2sScuola%20Padri%20Somaschi!5e0!3m2!1sit!2sit!4v1747408624543!5m2!1sit!2sit" 
              width="100%" 
              height="400" 
              style="border:0;"
              aria-hidden="false"
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="call-to-action section dark-background" data-aos="zoom-in" data-aos-delay="100">
    <img src="assets/img/cta-bg.jpg" alt="">
    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="200">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Pronto per iniziare il tuo percorso tecnologico?</h3>
            <p>Unisciti alla nostra community di studenti appassionati di tecnologia e innovazione. Scopri i nostri corsi e laboratori pratici.</p>
            <a class="cta-btn" href="#about">Scopri di più</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats section" data-aos="fade-up">
    <img src="assets/img/stats-bg.jpg" alt="" class="stats-bg">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      
      <div class="row gy-4">
        
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="0" class="purecounter">150</span>
            <p>Studenti Attivi</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="0" class="purecounter">25</span>
            <p>Corsi Disponibili</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="0" class="purecounter">12</span>
            <p>Laboratori Attrezzati</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="0" class="purecounter">500</span>
            <p>Progetti Completati</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- FAQ Section -->
  <section class="section">
    <div class="container" data-aos="fade-up">
      
      <div class="section-title text-center">
        <h2>Domande Frequenti</h2>
        <p>Le risposte alle domande più comuni sui nostri servizi</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          
          <div class="faq-container">
            
            <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
              <h3>Come posso iscrivermi ai corsi?</h3>
              <div class="faq-content">
                <p>Puoi iscriverti compilando il modulo di contatto sopra o chiamandoci direttamente. Il nostro staff ti fornirà tutte le informazioni necessarie sui corsi disponibili e le modalità di iscrizione.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
              <h3>Quali sono i requisiti per partecipare?</h3>
              <div class="faq-content">
                <p>I requisiti variano in base al corso scelto. Per i corsi base non sono richieste competenze pregresse, mentre per quelli avanzati è consigliabile avere delle basi. Contattaci per una valutazione personalizzata.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
              <h3>È possibile visitare i laboratori?</h3>
              <div class="faq-content">
                <p>Certamente! Organizziamo visite guidate per far conoscere le nostre strutture. Prenota una visita chiamandoci o inviando una email.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
              <h3>Offrite certificazioni?</h3>
              <div class="faq-content">
                <p>Sì, al termine di ogni corso rilasciamo un certificato di partecipazione. Per alcuni corsi avanzati è possibile ottenere certificazioni riconosciute a livello internazionale.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

</main>

<style>
/* Custom styles for contact page */
.faq-container .faq-item {
  background-color: var(--surface-color);
  position: relative;
  padding: 20px;
  margin-bottom: 15px;
  border-radius: 10px;
  box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
  cursor: pointer;
}

.faq-container .faq-item:hover {
  transform: translateY(-5px);
  box-shadow: 0px 10px 35px 0px rgba(0, 0, 0, 0.15);
}

.faq-container .faq-item h3 {
  font-size: 18px;
  font-weight: 600;
  padding-right: 50px;
  margin: 0;
  color: var(--heading-color);
}

.faq-container .faq-item .faq-content {
  display: none;
  padding-top: 15px;
  color: var(--background-color);
  font-size: 16px;
  line-height: 1.6;
}

.faq-container .faq-item.faq-active .faq-content {
  display: block;
}

.faq-container .faq-item .faq-toggle {
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 20px;
  color: var(--accent-color);
  transition: all 0.3s ease;
}

.faq-container .faq-item.faq-active .faq-toggle {
  transform: translateY(-50%) rotate(90deg);
  color: var(--heading-color);
}

.map-container {
  position: relative;
  transition: transform 0.3s ease;
}

.map-container:hover {
  transform: scale(1.02);
}

/* Enhanced contact info items */
.info-item {
  padding: 25px;
  background: var(--surface-color);
  border-radius: 15px;
  margin-bottom: 20px;
  box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
}

.info-item:hover {
  transform: translateY(-5px);
  box-shadow: 0px 15px 35px 0px rgba(0, 0, 0, 0.15);
}

.info-item i {
  font-size: 24px;
  margin-right: 20px;
  background: linear-gradient(45deg, var(--accent-color), var(--heading-color));
  color: white;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}

.info-item h3 {
  color: var(--heading-color);
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 10px;
}

.info-item p {
  color: var(--background-color);
  margin: 0;
  font-size: 16px;
}

/* Form enhancements */
.php-email-form {
  background: var(--surface-color);
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.1);
}

.php-email-form .form-control {
  border-radius: 10px;
  border: 2px solid transparent;
  transition: all 0.3s ease;
}

.php-email-form .form-control:focus {
  border-color: var(--accent-color);
  box-shadow: 0 0 15px rgba(51, 189, 227, 0.3);
}

.php-email-form button[type=submit] {
  background: linear-gradient(45deg, var(--accent-color), var(--heading-color));
  border: none;
  padding: 12px 30px;
  border-radius: 25px;
  color: white;
  font-weight: 600;
  transition: all 0.3s ease;
}

.php-email-form button[type=submit]:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(51, 189, 227, 0.4);
}
</style>

<script>
// FAQ Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    item.addEventListener('click', function() {
      const isActive = this.classList.contains('faq-active');
      
      // Close all other FAQ items
      faqItems.forEach(otherItem => {
        otherItem.classList.remove('faq-active');
      });
      
      // Toggle current item
      if (!isActive) {
        this.classList.add('faq-active');
      }
    });
  });
});

// Smooth scroll for CTA button
document.querySelector('.cta-btn').addEventListener('click', function(e) {
  e.preventDefault();
  document.querySelector('#about').scrollIntoView({
    behavior: 'smooth'
  });
});
</script>

<?php include "footer.php"; ?>

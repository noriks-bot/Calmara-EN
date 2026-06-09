<?php
/**
 * Calmara front page — landing template
 * Struktura inspirirana po high-converting Shopify product landing pages
 * (hero → trust → problem → product → benefits → how → before/after →
 *  testimonials → comparison → bundles → reviews → guarantee → FAQ → sticky CTA)
 *
 * @package calmara
 */

get_header();

$theme_uri = get_template_directory_uri();
wp_enqueue_style( 'calmara-landing', $theme_uri . '/css/landing.css', array(), '1.0.0' );
?>

<main id="calmara-landing" class="calmara-landing">

  <!-- 1. URGENCY BAR (top) -->
  <div class="cal-urgency-bar">
    <div class="cal-container">
      <span class="cal-pulse"></span>
      <strong>SAMO DANES:</strong> 50% popust + BREZPLAČNA dostava nad 70€
    </div>
  </div>

  <!-- 2. HERO -->
  <section class="cal-hero">
    <div class="cal-container cal-hero-grid">
      <div class="cal-hero-text">
        <div class="cal-rating">
          <span class="cal-stars">★★★★★</span>
          <span class="cal-rating-text">4.8 / 5 — 12.000+ zadovoljnih strank</span>
        </div>
        <h1 class="cal-h1">Boleč vrat zjutraj? <br><span class="cal-accent">Tega ne potrebuješ več.</span></h1>
        <p class="cal-hero-sub">Ergonomska blazina, ki sledi naravni krivulji vratu in razbremeni mišice — že po prvi noči.</p>
        <ul class="cal-hero-bullets">
          <li>✓ Razbremeni vratno hrbtenico v 7 noči</li>
          <li>✓ Memory foam, ki se prilagodi tvoji obliki</li>
          <li>✓ 30 noči brezplačnega preizkusa</li>
          <li>✓ Hipoalergena prevleka s srebrovimi ioni</li>
        </ul>
        <div class="cal-hero-cta">
          <a href="#bundles" class="cal-btn cal-btn-primary">KUPI ZDAJ — 50% POPUST</a>
          <div class="cal-trust-mini">🔒 Varno plačilo · 🚚 Hitra dostava · ↩ 30 dni vračilo</div>
        </div>
      </div>
      <div class="cal-hero-media">
        <div class="cal-placeholder cal-placeholder-hero">
          <span>HERO SLIKA / VIDEO<br>(blazina lifestyle shot)</span>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. TRUST BAR (featured in) -->
  <section class="cal-trust-bar">
    <div class="cal-container">
      <p class="cal-trust-label">Priporočajo nas</p>
      <div class="cal-logos">
        <div class="cal-placeholder cal-logo-ph">LOGO 1</div>
        <div class="cal-placeholder cal-logo-ph">LOGO 2</div>
        <div class="cal-placeholder cal-logo-ph">LOGO 3</div>
        <div class="cal-placeholder cal-logo-ph">LOGO 4</div>
        <div class="cal-placeholder cal-logo-ph">LOGO 5</div>
      </div>
    </div>
  </section>

  <!-- 4. PROBLEM -->
  <section class="cal-problem">
    <div class="cal-container">
      <h2 class="cal-h2">Te težave so znak, da tvoja blazina <span class="cal-accent">ne deluje</span>:</h2>
      <div class="cal-problem-grid">
        <div class="cal-problem-item">
          <div class="cal-icon">😩</div>
          <h3>Bolečina v vratu zjutraj</h3>
          <p>Vstaneš utrujen, vrat trd, glavobol pred kavo.</p>
        </div>
        <div class="cal-problem-item">
          <div class="cal-icon">😴</div>
          <h3>Slabo spiš ponoči</h3>
          <p>Obračaš se, iščeš pravi položaj, blazina se zravna.</p>
        </div>
        <div class="cal-problem-item">
          <div class="cal-icon">💢</div>
          <h3>Bolečina v ramenih</h3>
          <p>Stari vzglavnik ne podpira ramen in vratu hkrati.</p>
        </div>
        <div class="cal-problem-item">
          <div class="cal-icon">🥵</div>
          <h3>Pregrevanje ponoči</h3>
          <p>Sintetika zadržuje toploto, znojiš se.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. PRODUCT REVEAL -->
  <section class="cal-product">
    <div class="cal-container cal-product-grid">
      <div class="cal-product-media">
        <div class="cal-placeholder cal-placeholder-product">
          <span>PRODUKT SLIKA<br>(blazina close-up + dimenzije)</span>
        </div>
      </div>
      <div class="cal-product-text">
        <span class="cal-eyebrow">SPOZNAJ CALMARA</span>
        <h2 class="cal-h2">Blazina, ki <span class="cal-accent">se prilagodi tebi.</span></h2>
        <p class="cal-lead">Memory foam visoke gostote sledi naravni krivulji vratu in razbremeni pritisk na vretenca. Stranski, hrbtni ali trebušni spalec — Calmara podpre vsak položaj.</p>
        <ul class="cal-features">
          <li><strong>Memory foam jedro</strong> — 50 kg/m³, brez deformacij po 5+ letih</li>
          <li><strong>Cervikalna podpora</strong> — butterfly oblika sledi vratu</li>
          <li><strong>Srebrovi ioni v prevleki</strong> — antibakterijsko, brez vonja</li>
          <li><strong>Dihajoča mreža</strong> — uravnava temperaturo, brez znojenja</li>
          <li><strong>Snemljiva prevleka</strong> — pranje na 60°C</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- 6. BENEFITS GRID -->
  <section class="cal-benefits">
    <div class="cal-container">
      <h2 class="cal-h2 cal-center">Kaj boš občutil <span class="cal-accent">po 7 nočeh</span></h2>
      <div class="cal-benefits-grid">
        <div class="cal-benefit-card">
          <div class="cal-benefit-num">01</div>
          <h3>Vstaneš brez bolečine</h3>
          <p>Vrat sproščen, ramena razbremenjena, glavobola ni več.</p>
        </div>
        <div class="cal-benefit-card">
          <div class="cal-benefit-num">02</div>
          <h3>Globlji spanec</h3>
          <p>Mišice se sprostijo, telo gre hitreje v REM fazo.</p>
        </div>
        <div class="cal-benefit-card">
          <div class="cal-benefit-num">03</div>
          <h3>Pravilna drža</h3>
          <p>Hrbtenica v nevtralnem položaju celo noč.</p>
        </div>
        <div class="cal-benefit-card">
          <div class="cal-benefit-num">04</div>
          <h3>Več energije čez dan</h3>
          <p>Kvaliteten spanec = boljša koncentracija in dobra volja.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. HOW IT WORKS -->
  <section class="cal-how">
    <div class="cal-container">
      <h2 class="cal-h2 cal-center">Kako deluje</h2>
      <div class="cal-how-steps">
        <div class="cal-how-step">
          <div class="cal-how-num">1</div>
          <div class="cal-placeholder cal-step-ph">SLIKA — naroči</div>
          <h3>Naroči</h3>
          <p>2 klika, dostava 2-3 dni na dom.</p>
        </div>
        <div class="cal-how-step">
          <div class="cal-how-num">2</div>
          <div class="cal-placeholder cal-step-ph">SLIKA — preizkusi</div>
          <h3>Preizkusi 30 noči</h3>
          <p>Brez tveganja. Če ne deluje, ti vrnemo denar.</p>
        </div>
        <div class="cal-how-step">
          <div class="cal-how-num">3</div>
          <div class="cal-placeholder cal-step-ph">SLIKA — uživaj</div>
          <h3>Uživaj</h3>
          <p>Vstaneš spočit. Vsak dan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. BEFORE / AFTER -->
  <section class="cal-ba">
    <div class="cal-container">
      <h2 class="cal-h2 cal-center">Pred / Po</h2>
      <div class="cal-ba-grid">
        <div class="cal-ba-side">
          <div class="cal-placeholder cal-ba-ph cal-ba-before">PRED<br>(navadna blazina<br>napačen položaj vratu)</div>
          <p class="cal-ba-label">PRED Calmara</p>
        </div>
        <div class="cal-ba-side">
          <div class="cal-placeholder cal-ba-ph cal-ba-after">PO<br>(Calmara<br>nevtralna hrbtenica)</div>
          <p class="cal-ba-label">PO Calmara</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. TESTIMONIALS -->
  <section class="cal-testimonials">
    <div class="cal-container">
      <h2 class="cal-h2 cal-center">Naše stranke pravijo</h2>
      <div class="cal-testi-grid">
        <div class="cal-testi-card">
          <div class="cal-stars">★★★★★</div>
          <p>"Po treh nočeh je bolečina v vratu izginila. Žena pravi, da končno nehava smrčati."</p>
          <div class="cal-testi-author">
            <div class="cal-placeholder cal-avatar">A</div>
            <div><strong>Andrej K.</strong><br><small>Ljubljana · preverjen nakup</small></div>
          </div>
        </div>
        <div class="cal-testi-card">
          <div class="cal-stars">★★★★★</div>
          <p>"Dvomil sem. Po 30 dneh ne vrnem za nič. Najboljša naložba zadnjih 5 let."</p>
          <div class="cal-testi-author">
            <div class="cal-placeholder cal-avatar">M</div>
            <div><strong>Matej P.</strong><br><small>Maribor · preverjen nakup</small></div>
          </div>
        </div>
        <div class="cal-testi-card">
          <div class="cal-stars">★★★★★</div>
          <p>"Mož ima zjutraj manj bolečin, jaz manj njegovega tarnanja. Vsi srečni."</p>
          <div class="cal-testi-author">
            <div class="cal-placeholder cal-avatar">S</div>
            <div><strong>Saša L.</strong><br><small>Celje · preverjen nakup</small></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. COMPARISON TABLE -->
  <section class="cal-compare">
    <div class="cal-container">
      <h2 class="cal-h2 cal-center">Calmara vs navadna blazina</h2>
      <div class="cal-compare-table">
        <div class="cal-compare-row cal-compare-head">
          <div></div>
          <div class="cal-compare-us"><strong>CALMARA</strong></div>
          <div>Navadna blazina</div>
        </div>
        <div class="cal-compare-row">
          <div>Cervikalna podpora</div>
          <div class="cal-compare-us">✓</div>
          <div>✗</div>
        </div>
        <div class="cal-compare-row">
          <div>Memory foam (50 kg/m³)</div>
          <div class="cal-compare-us">✓</div>
          <div>✗</div>
        </div>
        <div class="cal-compare-row">
          <div>Srebrovi ioni</div>
          <div class="cal-compare-us">✓</div>
          <div>✗</div>
        </div>
        <div class="cal-compare-row">
          <div>30 noči preizkusa</div>
          <div class="cal-compare-us">✓</div>
          <div>✗</div>
        </div>
        <div class="cal-compare-row">
          <div>Dihajoča mreža</div>
          <div class="cal-compare-us">✓</div>
          <div>✗</div>
        </div>
        <div class="cal-compare-row">
          <div>Snemljiva prevleka 60°C</div>
          <div class="cal-compare-us">✓</div>
          <div>delno</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 11. BUNDLES / PRICING -->
  <section id="bundles" class="cal-bundles">
    <div class="cal-container">
      <h2 class="cal-h2 cal-center">Izberi svoj paket</h2>
      <p class="cal-center cal-bundles-sub">Več kosov = nižja cena na kos. Brezplačna dostava nad 70€.</p>
      <div class="cal-bundles-grid">
        <div class="cal-bundle">
          <div class="cal-bundle-label">1 KOS</div>
          <div class="cal-bundle-price"><span class="cal-old">69,90€</span><span class="cal-new">39,90€</span></div>
          <div class="cal-bundle-perunit">39,90€ / kos</div>
          <ul class="cal-bundle-feats">
            <li>1× Calmara blazina</li>
            <li>30 noči preizkusa</li>
            <li>Dostava 3-5 dni</li>
          </ul>
          <a href="#" class="cal-btn cal-btn-outline">IZBERI</a>
        </div>
        <div class="cal-bundle cal-bundle-best">
          <div class="cal-bundle-tag">NAJBOLJ PRILJUBLJENO</div>
          <div class="cal-bundle-label">2 KOSA</div>
          <div class="cal-bundle-price"><span class="cal-old">139,80€</span><span class="cal-new">69,90€</span></div>
          <div class="cal-bundle-perunit">34,95€ / kos · 50% popust</div>
          <ul class="cal-bundle-feats">
            <li>2× Calmara blazini</li>
            <li>BREZPLAČNA dostava</li>
            <li>30 noči preizkusa</li>
            <li>2 darilni prevleki</li>
          </ul>
          <a href="#" class="cal-btn cal-btn-primary">IZBERI — NAJBOLJŠA CENA</a>
        </div>
        <div class="cal-bundle">
          <div class="cal-bundle-label">3 KOSI</div>
          <div class="cal-bundle-price"><span class="cal-old">209,70€</span><span class="cal-new">89,90€</span></div>
          <div class="cal-bundle-perunit">29,97€ / kos · 57% popust</div>
          <ul class="cal-bundle-feats">
            <li>3× Calmara blazine</li>
            <li>BREZPLAČNA dostava</li>
            <li>30 noči preizkusa</li>
            <li>3 darilne prevleke</li>
          </ul>
          <a href="#" class="cal-btn cal-btn-outline">IZBERI</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 12. REVIEWS WALL -->
  <section class="cal-reviews">
    <div class="cal-container">
      <h2 class="cal-h2 cal-center">4.8 ★ · 2.847 ocen</h2>
      <div class="cal-reviews-grid">
        <?php for ( $i = 0; $i < 6; $i++ ) : ?>
        <div class="cal-review-card">
          <div class="cal-stars">★★★★★</div>
          <strong>Odlična blazina</strong>
          <p>Zelo zadovoljen. Bolečina v vratu se je zmanjšala že prvi teden uporabe.</p>
          <small>— preverjen nakup</small>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- 13. GUARANTEE -->
  <section class="cal-guarantee">
    <div class="cal-container cal-guarantee-grid">
      <div class="cal-placeholder cal-badge-ph">30<br>NOČI</div>
      <div>
        <h2 class="cal-h2">Garancija 30 noči — ali ti vrnemo denar.</h2>
        <p>Preizkusi Calmara 30 noči. Če ne občutiš razlike, ti vrnemo polno kupnino. Brez vprašanj.</p>
        <ul class="cal-guarantee-list">
          <li>✓ Brezplačno vračilo</li>
          <li>✓ Polna kupnina nazaj</li>
          <li>✓ Brez skritih stroškov</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- 14. FAQ -->
  <section class="cal-faq">
    <div class="cal-container">
      <h2 class="cal-h2 cal-center">Pogosta vprašanja</h2>
      <div class="cal-faq-list">
        <details class="cal-faq-item">
          <summary>Kako hitro občutim razliko?</summary>
          <p>Večina strank občuti razliko že po 1-3 nočeh. Polna prilagoditev mišic vratu traja do 7 dni.</p>
        </details>
        <details class="cal-faq-item">
          <summary>Je primerna za stranske spalce?</summary>
          <p>Da. Butterfly oblika podpira vrat in ramo, ne glede na položaj spanja.</p>
        </details>
        <details class="cal-faq-item">
          <summary>Kako jo perem?</summary>
          <p>Prevleka je snemljiva, pranje na 60°C v pralnem stroju. Jedro iz memory foama brišeš z vlažno krpo.</p>
        </details>
        <details class="cal-faq-item">
          <summary>Kako dolgo traja dostava?</summary>
          <p>2-3 delovne dni po Sloveniji. Brezplačno za naročila nad 70€.</p>
        </details>
        <details class="cal-faq-item">
          <summary>Kaj če mi ne ustreza?</summary>
          <p>30 noči preizkusa. Vrneš v originalni embalaži, denar nakažemo v 5 delovnih dneh.</p>
        </details>
        <details class="cal-faq-item">
          <summary>Iz česa je narejena?</summary>
          <p>Jedro: memory foam visoke gostote (50 kg/m³). Prevleka: bombaž s srebrovimi ioni, antibakterijska.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- 15. FINAL CTA -->
  <section class="cal-final-cta">
    <div class="cal-container cal-center">
      <h2 class="cal-h2">Začni spati boljše. <span class="cal-accent">Že nocoj.</span></h2>
      <p>50% popust velja samo danes. 30 noči brez tveganja.</p>
      <a href="#bundles" class="cal-btn cal-btn-primary cal-btn-lg">KUPI ZDAJ</a>
    </div>
  </section>

  <!-- 16. STICKY MOBILE CTA -->
  <div class="cal-sticky-cta">
    <div class="cal-sticky-info">
      <strong>Calmara blazina</strong>
      <span><s>69,90€</s> <strong>39,90€</strong></span>
    </div>
    <a href="#bundles" class="cal-btn cal-btn-primary cal-btn-sm">KUPI</a>
  </div>

</main>

<?php get_footer(); ?>

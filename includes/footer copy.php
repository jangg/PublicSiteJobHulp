<!-- ======= Footer ======= -->
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-contact">
					<h3><?= LOC_NAME ?></h3>
					<h5>Postadres:</h5>
					<p>Alida de Jongstraat 56 <br>
						4105 ED Culemborg</p><br>
					<h5>Bezoekadres:</h5>
					<p>De Salaamander<br />
						Heimanslaan 2<br />
						Dinsdag 9:30-11:30 uur</p><br>
						<p>CKG De Ark<br />
						Prijsseweg 91<br />
						Donderdag 9:30-11:30 uur</p><br>

					<h5>Contactinformatie</h5>
					<p>Vul het <a href="">formulier</a> in</p>
				</div>
				
				<div class="col-lg-3 col-md-6 footer-links">
					<h4>De kortste weg naar ...</h4>
					<ul>
						<li><i class="bi bi-caret-right-square"></i> <a href="/index.php">Home</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/aanmelden.php#aanmelden">Aanmelden</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/stichting.php">Over ons</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/organisatie.php#sponsors">Sponsoren</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/index.php#faq">Veel gestelde vragen</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/privacy.php">De privacyregels</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/stichting.php#downloads">Documenten die gedownload kunnen worden</a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Wat we doen</h4>
					<ul>
						<li><i class="bi bi-caret-right-square"></i> <a href="/index.php#maatje">JobMaatjes begeleiding</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="#">JobGroep training</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="#">Stap in vrijwilligerswerk</a></li>
						<!-- <li><i class="bi bi-caret-right-square"></i>&nbsp;&nbsp;&nbsp;Lezingen</li>
						<li><i class="bi bi-caret-right-square"></i> <a href="<?= LOC_WEBSITE ?>#contact">Inloopspreekuur</a></li> -->
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Onze Social Media</h4>
					<p>Volg ons op de belangrijkste social media</p>
					<div class="social-links my-3">
						<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
						<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></i></a>
					</div>
					<br /><br />
					<div class="row">
						<a href="stichting.php#stichtinginfo">
							<div class="col-8 p-2 bg-light rounded">
								<p style="font-size: .9em;color: black;"><?= LOC_NAME ?> is een</p>
								<img src="assets/img/ANBI_zk_FC_blauw.jpg" class="img-fluid bg-light" width="100%">
							</div>
						</a>
						<div class="col-4"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container py-4">
		<div class="copyright">
			&copy; <?php echo date("Y");?>&nbsp&nbsp<span><?= LOC_NAME ?></span>.
		</div>
	</div>
</footer><!-- End Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Cookie consent banner -->
<div id="cookieBanner" class="cookie-banner position-fixed bottom-0 start-0 end-0 p-3 d-none" style="z-index: 1080;">
  <div class="container">
	<div class="card shadow">
	  <div class="card-body d-flex flex-column flex-md-row gap-3 align-items-start align-items-md-center justify-content-between">
		<div class="me-md-3">
		  <h2 class="h6 mb-1">Koekjes (cookies)</h2>
		  <p class="mb-0 text-body-secondary">
			JobHulp gebruikt cookies voor een goede werking en om de site te verbeteren.
			<a href="/privacy.php" class="link-primary">Lees meer</a>.
		  </p>
		</div>

		<div class="d-flex flex-wrap gap-2">
		  <button type="button" class="btn btn-outline-secondary btn-sm" id="cookieDecline">
			Weigeren
		  </button>
		  <button type="button" class="btn btn-outline-primary btn-sm" id="cookieSettings" data-bs-toggle="modal" data-bs-target="#cookieModal">
			Instellingen
		  </button>
		  <button type="button" class="btn btn-primary btn-sm" id="cookieAccept">
			Akkoord
		  </button>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Optioneel: instellingen-modal -->
<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="cookieModalLabel">Cookie-instellingen</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Sluiten"></button>
	  </div>
	  <div class="modal-body">
		<div class="form-check">
		  <input class="form-check-input" type="checkbox" value="" id="cookieNecessary" checked disabled>
		  <label class="form-check-label" for="cookieNecessary">
			Noodzakelijk (altijd aan)
		  </label>
		</div>

		<hr>

		<div class="form-check">
		  <input class="form-check-input" type="checkbox" value="" id="cookieAnalytics">
		  <label class="form-check-label" for="cookieAnalytics">
			Statistiek (analytics)
		  </label>
		</div>

		<p class="small text-body-secondary mt-2 mb-0">
		  Je kunt dit later altijd aanpassen via de privacy-pagina.
		</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuleren</button>
		<button type="button" class="btn btn-primary" id="cookieSaveSettings">Opslaan</button>
	  </div>
	</div>
  </div>
</div>

<script>
  (function () {
	const KEY = "cookie_consent_v1"; // bump versie als je beleid verandert

	const banner = document.getElementById("cookieBanner");
	const btnAccept = document.getElementById("cookieAccept");
	const btnDecline = document.getElementById("cookieDecline");
	const btnSave = document.getElementById("cookieSaveSettings");
	const analyticsToggle = document.getElementById("cookieAnalytics");

	function getConsent() {
	  try { return JSON.parse(localStorage.getItem(KEY)); }
	  catch { return null; }
	}

	function setConsent(value) {
	  localStorage.setItem(KEY, JSON.stringify(value));
	  hideBanner();
	  // Hier kun je optioneel scripts aan/uit zetten op basis van consent:
	  // if (value.analytics) { loadAnalytics(); }
	}

	function showBanner() { banner.classList.remove("d-none"); }
	function hideBanner() { banner.classList.add("d-none"); }

	// Toon banner alleen als er nog geen keuze is
	const consent = getConsent();
	if (!consent) showBanner();

	btnAccept?.addEventListener("click", () => setConsent({ necessary: true, analytics: true, ts: Date.now() }));
	btnDecline?.addEventListener("click", () => setConsent({ necessary: true, analytics: false, ts: Date.now() }));

	btnSave?.addEventListener("click", () => {
	  setConsent({ necessary: true, analytics: !!analyticsToggle?.checked, ts: Date.now() });

	  // Modal sluiten (als Bootstrap JS geladen is)
	  const modalEl = document.getElementById("cookieModal");
	  if (modalEl && window.bootstrap) {
		const modal = window.bootstrap.Modal.getInstance(modalEl) || new window.bootstrap.Modal(modalEl);
		modal.hide();
	  }
	});

	// Als er al consent is: zet toggle passend (handig bij openen modal)
	if (consent && analyticsToggle) analyticsToggle.checked = !!consent.analytics;
  })();
</script>

<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<!-- <script src="/assets/vendor/php-email-form/validate.js"></script> -->
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
<!-- Include cookiealert script -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

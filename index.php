<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtruvioHub - Professional Exterior Design Solutions</title>
    <meta name="description" content="Transform your outdoor spaces with AtruvioHub's expert exterior design services. From garden makeovers to complete property transformations, click here to continue exploring our comprehensive design solutions.">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        
        .nav-container-8x9z { background: #2c3e50; padding: 1rem 0; position: fixed; width: 100%; top: 0; z-index: 1000; }
        .nav-wrapper-4k7m { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 0 2rem; }
        .logo-brand-3n8q { color: #fff; font-size: 1.8rem; font-weight: bold; text-decoration: none; }
        .nav-menu-5r2t { display: flex; list-style: none; }
        .nav-item-9w1e { margin-left: 2rem; }
        .nav-link-7p4s { color: #fff; text-decoration: none; transition: color 0.3s; }
        .nav-link-7p4s:hover { color: #3498db; }
        
        .hero-section-6m3k { background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg') center/cover; height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; color: white; margin-top: 70px; }
        .hero-content-2q8n { max-width: 800px; padding: 0 2rem; }
        .hero-title-1z5r { font-size: 3rem; margin-bottom: 1rem; }
        .hero-subtitle-4x7c { font-size: 1.3rem; margin-bottom: 2rem; }
        .cta-button-8k2m { background: #e74c3c; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-size: 1.1rem; transition: background 0.3s; }
        .cta-button-8k2m:hover { background: #c0392b; }
        
        .section-wrapper-3n9p { padding: 4rem 0; }
        .container-max-7r4t { max-width: 1200px; margin: 0 auto; padding: 0 2rem; }
        .section-title-5k8w { text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: #2c3e50; }
        
        .services-grid-9m2x { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem; }
        .service-card-4p7n { background: #f8f9fa; padding: 2rem; border-radius: 10px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .service-icon-6w3q { width: 80px; height: 80px; margin: 0 auto 1rem; border-radius: 50%; background: #3498db; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white; }
        .service-title-8r5m { font-size: 1.5rem; margin-bottom: 1rem; color: #2c3e50; }
        
        .about-section-2k9x { background: #ecf0f1; }
        .about-content-7n4p { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; }
        .about-text-5m8r { font-size: 1.1rem; }
        .about-image-3q7k { border-radius: 10px; overflow: hidden; }
        
        .history-timeline-9x2n { position: relative; padding: 2rem 0; }
        .timeline-item-4k7m { display: flex; margin-bottom: 2rem; }
        .timeline-year-8p3q { background: #e74c3c; color: white; padding: 1rem; border-radius: 50%; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 2rem; }
        .timeline-content-6r9w { flex: 1; background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); }
        
        .reviews-container-5n8k { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; }
        .review-card-7m4p { background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .review-stars-3x9r { color: #f39c12; font-size: 1.2rem; margin-bottom: 1rem; }
        .review-text-8k2n { font-style: italic; margin-bottom: 1rem; }
        .review-author-4p7q { font-weight: bold; color: #2c3e50; }
        
        .footer-main-6w9x { background: #2c3e50; color: white; padding: 3rem 0 1rem; }
        .footer-content-8r3m { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; }
        .footer-section-5k7n { }
        .footer-title-9p4q { font-size: 1.3rem; margin-bottom: 1rem; }
        .footer-link-2x8w { color: #bdc3c7; text-decoration: none; display: block; margin-bottom: 0.5rem; }
        .footer-link-2x8w:hover { color: white; }
        .phone-link-7n5r { color: #3498db; text-decoration: none; }
        .phone-link-7n5r:hover { color: #2980b9; }
        
        .modal-overlay-4k9m { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 2000; }
        .modal-content-8x3p { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 2rem; border-radius: 10px; max-width: 800px; max-height: 80vh; overflow-y: auto; }
        .modal-close-6r7n { float: right; font-size: 2rem; cursor: pointer; color: #e74c3c; }
        
        .continue-btn-9k4x { background: #27ae60; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; display: inline-block; margin: 1rem 0; transition: background 0.3s; }
        .continue-btn-9k4x:hover { background: #219a52; }
        
        @media (max-width: 768px) {
            .nav-menu-5r2t { display: none; }
            .hero-title-1z5r { font-size: 2rem; }
            .about-content-7n4p { grid-template-columns: 1fr; }
            .timeline-item-4k7m { flex-direction: column; text-align: center; }
            .timeline-year-8p3q { margin: 0 auto 1rem; }
        }
    </style>
</head>
<body>
    <nav class="nav-container-8x9z">
        <div class="nav-wrapper-4k7m">
            <a href="#home" class="logo-brand-3n8q">AtruvioHub</a>
            <ul class="nav-menu-5r2t">
                <li class="nav-item-9w1e"><a href="#services" class="nav-link-7p4s">Services</a></li>
                <li class="nav-item-9w1e"><a href="#about" class="nav-link-7p4s">About</a></li>
                <li class="nav-item-9w1e"><a href="#history" class="nav-link-7p4s">History</a></li>
                <li class="nav-item-9w1e"><a href="#portfolio" class="nav-link-7p4s">Portfolio</a></li>
                <li class="nav-item-9w1e"><a href="#reviews" class="nav-link-7p4s">Reviews</a></li>
                <li class="nav-item-9w1e"><a href="#contact" class="nav-link-7p4s">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-6m3k">
        <div class="hero-content-2q8n">
            <h1 class="hero-title-1z5r">Transform Your Outdoor Spaces</h1>
            <p class="hero-subtitle-4x7c">Professional exterior design solutions that bring your vision to life</p>
            <a href="#services" class="cta-button-8k2m">Explore Our Services</a>
        </div>
    </section>

    <section id="services" class="section-wrapper-3n9p">
        <div class="container-max-7r4t">
            <h2 class="section-title-5k8w">Our Services</h2>
            <div class="services-grid-9m2x">
                <div class="service-card-4p7n">
                    <div class="service-icon-6w3q">🏡</div>
                    <h3 class="service-title-8r5m">Residential Exteriors</h3>
                    <p>Complete home exterior transformations including facades, landscaping, and outdoor living spaces that enhance your property's appeal.</p>
                    <a href="#contact" class="continue-btn-9k4x">Click here to continue</a>
                </div>
                <div class="service-card-4p7n">
                    <div class="service-icon-6w3q">🌿</div>
                    <h3 class="service-title-8r5m">Garden Design</h3>
                    <p>Custom garden layouts, plant selection, and sustainable landscaping solutions that create beautiful outdoor environments.</p>
                </div>
                <div class="service-card-4p7n">
                    <div class="service-icon-6w3q">🏢</div>
                    <h3 class="service-title-8r5m">Commercial Projects</h3>
                    <p>Professional exterior design for businesses, offices, and commercial properties that make lasting impressions.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section-wrapper-3n9p about-section-2k9x">
        <div class="container-max-7r4t">
            <h2 class="section-title-5k8w">About AtruvioHub</h2>
            <div class="about-content-7n4p">
                <div class="about-text-5m8r">
                    <p>At AtruvioHub, we specialize in creating exceptional exterior spaces that reflect your unique style and enhance your property's value. Our team of experienced designers combines creativity with practical expertise to deliver outstanding results.</p>
                    <p>We believe that every outdoor space has potential. Whether you're looking to revitalize your home's curb appeal or create a stunning commercial exterior, we work closely with you to bring your vision to reality.</p>
                    <a href="#portfolio" class="continue-btn-9k4x">Click here to continue</a>
                </div>
                <div class="about-image-3q7k">
                    <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg" alt="Exterior Design Team" style="width: 100%; height: 300px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="section-wrapper-3n9p">
        <div class="container-max-7r4t">
            <h2 class="section-title-5k8w">Our Journey</h2>
            <div class="history-timeline-9x2n">
                <div class="timeline-item-4k7m">
                    <div class="timeline-year-8p3q">2018</div>
                    <div class="timeline-content-6r9w">
                        <h3>Company Founded</h3>
                        <p>AtruvioHub was established with a vision to revolutionize exterior design. Starting with residential projects, we quickly gained recognition for our innovative approach and attention to detail.</p>
                    </div>
                </div>
                <div class="timeline-item-4k7m">
                    <div class="timeline-year-8p3q">2020</div>
                    <div class="timeline-content-6r9w">
                        <h3>Commercial Expansion</h3>
                        <p>We expanded our services to include commercial exterior design, working with local businesses and corporate clients to create impressive outdoor spaces.</p>
                    </div>
                </div>
                <div class="timeline-item-4k7m">
                    <div class="timeline-year-8p3q">2022</div>
                    <div class="timeline-content-6r9w">
                        <h3>Sustainable Focus</h3>
                        <p>Introduced eco-friendly design practices and sustainable landscaping solutions, becoming a leader in environmentally conscious exterior design.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="section-wrapper-3n9p about-section-2k9x">
        <div class="container-max-7r4t">
            <h2 class="section-title-5k8w">Featured Projects</h2>
            <div class="services-grid-9m2x">
                <div class="service-card-4p7n">
                    <img src="https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg" alt="Modern Home Exterior" style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px; margin-bottom: 1rem;">
                    <h3 class="service-title-8r5m">Modern Family Home</h3>
                    <p>Complete exterior renovation featuring contemporary landscaping and architectural elements that transformed this family residence.</p>
                </div>
                <div class="service-card-4p7n">
                    <img src="https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg" alt="Garden Design" style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px; margin-bottom: 1rem;">
                    <h3 class="service-title-8r5m">Urban Garden Oasis</h3>
                    <p>Creative use of space and native plants to create a peaceful garden retreat in an urban setting.</p>
                    <a href="#reviews" class="continue-btn-9k4x">Click here to continue</a>
                </div>
                <div class="service-card-4p7n">
                    <img src="https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg" alt="Commercial Exterior" style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px; margin-bottom: 1rem;">
                    <h3 class="service-title-8r5m">Office Complex</h3>
                    <p>Professional exterior design for a corporate office building, emphasizing clean lines and welcoming entrance areas.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="section-wrapper-3n9p">
        <div class="container-max-7r4t">
            <h2 class="section-title-5k8w">Client Reviews</h2>
            <div class="reviews-container-5n8k">
                <div class="review-card-7m4p">
                    <div class="review-stars-3x9r">★★★★★</div>
                    <p class="review-text-8k2n">"AtruvioHub completely transformed our backyard into a beautiful outdoor living space. The team was professional, creative, and delivered exactly what we envisioned."</p>
                    <p class="review-author-4p7q">- Sarah Mitchell</p>
                </div>
                <div class="review-card-7m4p">
                    <div class="review-stars-3x9r">★★★★★</div>
                    <p class="review-text-8k2n">"Outstanding work on our commercial property. The new exterior design has received numerous compliments from clients and has definitely improved our business image."</p>
                    <p class="review-author-4p7q">- David Chen</p>
                </div>
                <div class="review-card-7m4p">
                    <div class="review-stars-3x9r">★★★★★</div>
                    <p class="review-text-8k2n">"From concept to completion, AtruvioHub exceeded our expectations. Their attention to detail and commitment to quality is remarkable."</p>
                    <p class="review-author-4p7q">- Maria Rodriguez</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#contact" class="continue-btn-9k4x">Click here to continue with your project</a>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-main-6w9x">
        <div class="container-max-7r4t">
            <div class="footer-content-8r3m">
                <div class="footer-section-5k7n">
                    <h3 class="footer-title-9p4q">AtruvioHub</h3>
                    <p>Professional exterior design solutions for residential and commercial properties.</p>
                </div>
                <div class="footer-section-5k7n">
                    <h3 class="footer-title-9p4q">Contact Info</h3>
                    <p>📍 1247 Oakwood Avenue, Springfield, IL 62701</p>
                    <p>📧 info@atriviohub.com</p>
                    <p>📞 <a href="tel:+15559876543" class="phone-link-7n5r">(555) 987-6543</a></p>
                </div>
                <div class="footer-section-5k7n">
                    <h3 class="footer-title-9p4q">Services</h3>
                    <a href="#services" class="footer-link-2x8w">Residential Design</a>
                    <a href="#services" class="footer-link-2x8w">Garden Planning</a>
                    <a href="#services" class="footer-link-2x8w">Commercial Projects</a>
                    <a href="#portfolio" class="footer-link-2x8w">Portfolio</a>
                </div>
                <div class="footer-section-5k7n">
                    <h3 class="footer-title-9p4q">Legal</h3>
                    <a href="#" class="footer-link-2x8w" onclick="openModal('privacy')">Privacy Policy</a>
                    <a href="#" class="footer-link-2x8w" onclick="openModal('terms')">Terms of Service</a>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #34495e;">
                <p>© 2024 AtruvioHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <div id="privacy-modal" class="modal-overlay-4k9m">
        <div class="modal-content-8x3p">
            <span class="modal-close-6r7n" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you contact us for design services, request quotes, or subscribe to our newsletter.</p>
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, communicate with you, and send you updates about our projects and services.</p>
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy.</p>
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@atriviohub.com</p>
        </div>
    </div>

    <div id="terms-modal" class="modal-overlay-4k9m">
        <div class="modal-content-8x3p">
            <span class="modal-close-6r7n" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using AtruvioHub's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            <h3>Services</h3>
            <p>AtruvioHub provides exterior design consultation and planning services. All designs and recommendations are subject to local building codes and regulations.</p>
            <h3>Client Responsibilities</h3>
            <p>Clients are responsible for obtaining necessary permits and ensuring compliance with local regulations for any construction or modification work.</p>
            <h3>Limitation of Liability</h3>
            <p>AtruvioHub shall not be liable for any indirect, incidental, special, or consequential damages resulting from the use of our services.</p>
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@atriviohub.com</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }
        
        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }
        
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-4k9m')) {
                event.target.style.display = 'none';
            }
        }
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>

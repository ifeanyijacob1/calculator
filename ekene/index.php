<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onyeukwu Ifeanyi Jacob - Portfolio</title>
    <meta name="description" content="Full Stack Developer & UI/UX Designer Portfolio">
    <meta name="color-scheme" content="light dark">
        <!-- <link rel="stylesheet" type="text/css" href="dd.css"> -->

    <style>
        /* Critical CSS for above-the-fold content */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(168, 85, 247, 0.1));
        }
        .highlight {
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 600;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="port.css">
</head>
<body>
    <!-- Skip link for screen readers -->
    <!-- <a href="#main" class="skip-link">Skip to content</a> -->

    <!-- Navigation -->
    <nav class="navbar" id="navbar" aria-label="Main navigation">
        <div class="nav-container">
            <div class="logo">Portfolio</div>
            <ul class="nav-menu" id="nav-menu" role="menu">
                <li role="none"><a href="#home" class="nav-link active" role="menuitem">Home</a></li>
                <li role="none"><a href="#about" class="nav-link" role="menuitem">About</a></li>
                <li role="none"><a href="#projects" class="nav-link" role="menuitem">Projects</a></li>
                <li role="none"><a href="#values" class="nav-link" role="menuitem">Philosophy</a></li>
                <li role="none"><a href="#contact" class="nav-link" role="menuitem">Contact</a></li>
            </ul>
            <button id="hamburger" aria-expanded="false" aria-controls="nav-menu" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <main id="main">
        <section id="home" class="hero">
            <div class="hero-content fade-in">
                 <img src="images/ekene.jpg" loading="lazy" alt="Portrait of Nwaodu Ekene Michael" class="hero-image">
                <h1>NWAODU EKENE MICHAEL</h1>
                <p class="hero-tagline">Building digital experiences that <span class="highlight">convert visitors</span> and <span class="highlight">delight users</span></p>
                <p class="about-text">
                    I specialize in creating full-stack solutions that drive measurable business results - like the 40% conversion increase I delivered for my last client.
                </p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary hover-scale">View My Work</a>
                    <a href="#contact" class="btn btn-outline hover-scale">Get In Touch</a>
                </div>
            </div>
            <div class="scroll-indicator" aria-hidden="true">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="6,9 12,15 18,9"></polyline>
                </svg>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="section section-alt">
            <div class="container">
                <h2 class="section-title fade-in">About Me</h2>
                <div class="about-grid">
                    <div class="fade-in">
                        <p class="about-text">
                            I'm a passionate full-stack developer with 5+ years of experience creating web applications 
                            that solve real-world problems. I specialize in React, Node.js, and scalable cloud architecture.
                        </p>
                        <p class="about-text">
                            My work has helped clients increase conversion rates by up to 40% through optimized UX. When I'm not coding, 
                            I contribute to open-source projects and mentor aspiring developers.
                        </p>
                        
                        <div class="achievements-grid">
                            <div class="achievement-card hover-scale">
                                <div class="achievement-number">40%</div>
                                <div class="achievement-text">Avg. conversion improvement</div>
                            </div>
                            <div class="achievement-card hover-scale">
                                <div class="achievement-number">5+</div>
                                <div class="achievement-text">Years of experience</div>
                            </div>
                            <div class="achievement-card hover-scale">
                                <div class="achievement-number">100%</div>
                                <div class="achievement-text">Client satisfaction</div>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="https://github.com/ifeanyijacob" class="social-link hover-scale" aria-label="GitHub">
                                <svg width="20" height="20" fill="currentColor">
                                    <use href="#github-icon"></use>
                                </svg>
                            </a>
                            <a href="https://linkedin.com/in/ifeanyijacob" class="social-link hover-scale" aria-label="LinkedIn">
                                <svg width="20" height="20" fill="currentColor">
                                    <use href="#linkedin-icon"></use>
                                </svg>
                            </a>
                            <a href="https://twitter.com/ifeanyijacob" class="social-link hover-scale" aria-label="Twitter">
                                <svg width="20" height="20" fill="currentColor">
                                    <use href="#twitter-icon"></use>
                                </svg>
                            </a>
                        </div>

                       <a href="viewresume.php" class="btn btn-primary hover-scale">
                            <svg width="16" height="16" fill="currentColor" style="margin-right: 0.5rem;" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                            View Resume
                        </a>

                    </div>

                    <div class="skills-grid fade-in">
                        <div class="skill-category">
                            <h3>Frontend</h3>
                            <div class="skill-tags">
                                <span class="skill-tag hover-scale">React</span>
                                <span class="skill-tag hover-scale">Vue.js</span>
                                <span class="skill-tag hover-scale">TypeScript</span>
                                <span class="skill-tag hover-scale">Tailwind CSS</span>
                            </div>
                        </div>
                        <div class="skill-category">
                            <h3>Backend</h3>
                            <div class="skill-tags">
                                <span class="skill-tag hover-scale">Django</span>
                                <span class="skill-tag hover-scale">Python</span>
                                <span class="skill-tag hover-scale">PostgreSQL</span>
                                <span class="skill-tag hover-scale">MongoDB</span>
                            </div>
                        </div>
                        <div class="skill-category">
                            <h3>Tools</h3>
                            <div class="skill-tags">
                                <span class="skill-tag hover-scale">Git</span>
                                <span class="skill-tag hover-scale">Docker</span>
                                <span class="skill-tag hover-scale">AWS</span>
                                <span class="skill-tag hover-scale">Figma</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Philosophy Section -->
        <section id="values" class="section">
            <div class="container">
                <h2 class="section-title fade-in">My Development Philosophy</h2>
                <div class="philosophy-grid">
                    <div class="philosophy-card hover-scale">
                        <h3>Human-Centered</h3>
                        <p>I design for real people first, ensuring accessibility and intuitive interactions that work for everyone.</p>
                    </div>
                    <div class="philosophy-card hover-scale">
                        <h3>Results-Driven</h3>
                        <p>Every line of code serves a business objective and user need, with measurable impact on key metrics.</p>
                    </div>
                    <div class="philosophy-card hover-scale">
                        <h3>Future-Proof</h3>
                        <p>I build maintainable systems with clean architecture that evolve with your business needs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="section">
            <div class="container">
                <h2 class="section-title fade-in">Featured Projects</h2>
                
                <div class="project-filters fade-in">
                    <button data-filter="all" class="active hover-scale">All Projects</button>
                    <button data-filter="frontend" class="hover-scale">Frontend</button>
                    <button data-filter="backend" class="hover-scale">Backend</button>
                    <button data-filter="fullstack" class="hover-scale">Full Stack</button>
                </div>
                
                <div class="projects-grid">
                    <!-- E-Commerce Platform -->
                    <div class="project-card fade-in" tabindex="0" data-project-id="ecommerce" data-category="fullstack">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=500&h=300&fit=crop" 
                             loading="lazy" 
                             alt="E-Commerce Platform" 
                             class="project-image">
                        <div class="project-content">
                            <h3 class="project-title">E-Commerce Platform</h3>
                            <p class="project-description">
                                Full-stack web application with React, Node.js, and MongoDB. Increased client revenue by 30%.
                            </p>
                            <div class="project-impact">
                                <h4>Key Results:</h4>
                                <ul>
                                    <li>30% increase in conversion rate</li>
                                    <li>25% reduction in server costs</li>
                                    <li>92 Lighthouse performance score</li>
                                </ul>
                            </div>
                            <div class="project-tech">
                                <span class="tech-tag">React</span>
                                <span class="tech-tag">Node.js</span>
                                <span class="tech-tag">MongoDB</span>
                                <span class="tech-tag">Stripe API</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/ifeanyijacob/ecommerce-platform" class="project-link hover-scale" target="_blank">View Code</a>
                                <a href="https://ecommerce-demo.ifeanyijacob.com" class="project-link hover-scale" target="_blank">Live Demo</a>
                            </div>
                        </div>
                    </div>

                    <!-- Task Manager -->
                    <div class="project-card fade-in" tabindex="0" data-project-id="task-manager" data-category="frontend">
                        <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=500&h=300&fit=crop"
                             loading="lazy"
                             alt="Task Management App"
                             class="project-image">
                        <div class="project-content">
                            <h3 class="project-title">Task Manager</h3>
                            <p class="project-description">
                                Mobile-first productivity app with drag-and-drop functionality and real-time collaboration.
                            </p>
                            <div class="project-impact">
                                <h4>Key Results:</h4>
                                <ul>
                                    <li>5,000+ active users in 3 months</li>
                                    <li>40% faster task completion</li>
                                    <li>95% user satisfaction rating</li>
                                </ul>
                            </div>
                            <div class="project-tech">
                                <span class="tech-tag">React Native</span>
                                <span class="tech-tag">Firebase</span>
                                <span class="tech-tag">Redux</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/ifeanyijacob/task-manager" class="project-link hover-scale" target="_blank">View Code</a>
                                <a href="https://taskmanager.ifeanyijacob.com" class="project-link hover-scale" target="_blank">Live Demo</a>
                            </div>
                        </div>
                    </div>

                    <!-- Data Dashboard -->
                    <div class="project-card fade-in" tabindex="0" data-project-id="data-dashboard" data-category="fullstack">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=500&h=300&fit=crop"
                             loading="lazy"
                             alt="Data Visualization Dashboard"
                             class="project-image">
                        <div class="project-content">
                            <h3 class="project-title">Data Dashboard</h3>
                            <p class="project-description">
                                Interactive business analytics dashboard with real-time data visualization.
                            </p>
                            <div class="project-impact">
                                <h4>Key Results:</h4>
                                <ul>
                                    <li>60% faster reporting</li>
                                    <li>30% increase in data-driven decisions</li>
                                    <li>Seamless integration with 5+ data sources</li>
                                </ul>
                            </div>
                            <div class="project-tech">
                                <span class="tech-tag">Vue.js</span>
                                <span class="tech-tag">D3.js</span>
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">FastAPI</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/ifeanyijacob/data-dashboard" class="project-link hover-scale" target="_blank">View Code</a>
                                <a href="https://dashboard.ifeanyijacob.com" class="project-link hover-scale" target="_blank">Live Demo</a>
                            </div>
                        </div>
                    </div>

                    <!-- Social Network -->
                    <div class="project-card fade-in hidden-project" tabindex="0" data-project-id="social-network" data-category="fullstack">
                        <img src="https://images.unsplash.com/photo-1611162616475-46b635cb6868?w=500&h=300&fit=crop"
                             loading="lazy"
                             alt="Social Network App"
                             class="project-image">
                        <div class="project-content">
                            <h3 class="project-title">Social Network</h3>
                            <p class="project-description">
                                Community platform with user profiles, posts, and real-time notifications.
                            </p>
                            <div class="project-impact">
                                <h4>Key Results:</h4>
                                <ul>
                                    <li>10,000+ registered users</li>
                                    <li>Average 45 min daily engagement</li>
                                    <li>95% uptime with scalable architecture</li>
                                </ul>
                            </div>
                            <div class="project-tech">
                                <span class="tech-tag">React</span>
                                <span class="tech-tag">GraphQL</span>
                                <span class="tech-tag">MongoDB</span>
                                <span class="tech-tag">WebSockets</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/ifeanyijacob/social-network" class="project-link hover-scale" target="_blank">View Code</a>
                                <a href="https://social.ifeanyijacob.com" class="project-link hover-scale" target="_blank">Live Demo</a>
                            </div>
                        </div>
                    </div>

                    <!-- Fitness Tracker -->
                    <div class="project-card fade-in hidden-project" tabindex="0" data-project-id="fitness-app" data-category="mobile">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=500&h=300&fit=crop"
                             loading="lazy"
                             alt="Fitness Tracking App"
                             class="project-image">
                        <div class="project-content">
                            <h3 class="project-title">Fitness Tracker</h3>
                            <p class="project-description">
                                Workout logging app with exercise database and progress analytics.
                            </p>
                            <div class="project-impact">
                                <h4>Key Results:</h4>
                                <ul>
                                    <li>4.8/5 App Store rating</li>
                                    <li>50% user retention after 3 months</li>
                                    <li>Integrated with 3 major fitness APIs</li>
                                </ul>
                            </div>
                            <div class="project-tech">
                                <span class="tech-tag">Flutter</span>
                                <span class="tech-tag">Firebase</span>
                                <span class="tech-tag">Dart</span>
                                <span class="tech-tag">HealthKit</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/ifeanyijacob/fitness-tracker" class="project-link hover-scale" target="_blank">View Code</a>
                                <a href="https://fitness.ifeanyijacob.com" class="project-link hover-scale" target="_blank">Live Demo</a>
                            </div>
                        </div>
                    </div>

                    <!-- AI Chatbot -->
                    <div class="project-card fade-in hidden-project" tabindex="0" data-project-id="ai-chatbot" data-category="backend">
                        <img src="https://images.unsplash.com/photo-1655720828012-585b4245fb64?w=500&h=300&fit=crop"
                             loading="lazy"
                             alt="AI Chatbot Interface"
                             class="project-image">
                        <div class="project-content">
                            <h3 class="project-title">AI Chatbot</h3>
                            <p class="project-description">
                                NLP-powered customer support chatbot with sentiment analysis.
                            </p>
                            <div class="project-impact">
                                <h4>Key Results:</h4>
                                <ul>
                                    <li>75% reduction in support tickets</li>
                                    <li>90% accuracy in intent recognition</li>
                                    <li>Integrated with 5 business systems</li>
                                </ul>
                            </div>
                            <div class="project-tech">
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">TensorFlow</span>
                                <span class="tech-tag">Node.js</span>
                                <span class="tech-tag">NLTK</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/ifeanyijacob/ai-chatbot" class="project-link hover-scale" target="_blank">View Code</a>
                                <a href="https://chatbot.ifeanyijacob.com" class="project-link hover-scale" target="_blank">Live Demo</a>
                            </div>
                        </div>
                    </div>

                    <!-- CMS Platform -->
                    <div class="project-card fade-in hidden-project" tabindex="0" data-project-id="cms-platform" data-category="fullstack">
                        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=500&h=300&fit=crop"
                             loading="lazy"
                             alt="Content Management System"
                             class="project-image">
                        <div class="project-content">
                            <h3 class="project-title">CMS Platform</h3>
                            <p class="project-description">
                                Custom content management system with drag-and-drop editor and multi-site support.
                            </p>
                            <div class="project-impact">
                                <h4>Key Results:</h4>
                                <ul>
                                    <li>80% faster content publishing</li>
                                    <li>Used by 15+ organizations</li>
                                    <li>99.9% uptime SLA</li>
                                </ul>
                            </div>
                            <div class="project-tech">
                                <span class="tech-tag">React</span>
                                <span class="tech-tag">Node.js</span>
                                <span class="tech-tag">PostgreSQL</span>
                                <span class="tech-tag">AWS</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/ifeanyijacob/cms-platform" class="project-link hover-scale" target="_blank">View Code</a>
                                <a href="https://cms.ifeanyijacob.com" class="project-link hover-scale" target="_blank">Live Demo</a>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Gateway -->
                    <div class="project-card fade-in hidden-project" tabindex="0" data-project-id="payment-gateway" data-category="backend">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=500&h=300&fit=crop"
                             loading="lazy"
                             alt="Payment Gateway Integration"
                             class="project-image">
                        <div class="project-content">
                            <h3 class="project-title">Payment Gateway</h3>
                            <p class="project-description">
                                Custom payment processing solution with multi-provider support and fraud detection.
                            </p>
                            <div class="project-impact">
                                <h4>Key Results:</h4>
                                <ul>
                                    <li>99.99% transaction success rate</li>
                                    <li>Reduced processing fees by 20%</li>
                                    <li>PCI-DSS compliant architecture</li>
                                </ul>
                            </div>
                            <div class="project-tech">
                                <span class="tech-tag">Java</span>
                                <span class="tech-tag">Spring Boot</span>
                                <span class="tech-tag">PostgreSQL</span>
                                <span class="tech-tag">Kubernetes</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/ifeanyijacob/payment-gateway" class="project-link hover-scale" target="_blank">View Code</a>
                                <a href="https://payments.ifeanyijacob.com" class="project-link hover-scale" target="_blank">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center fade-in" style="margin-top: 2rem;">
                    <button class="btn btn-outline hover-scale" id="showAllProjects">View All Projects</button>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section section-alt">
            <div class="container">
                <h2 class="section-title fade-in">Get In Touch</h2>
                <div class="contact-grid">
                    <div class="contact-info fade-in">
                        <h3>Let's work together!</h3>
                        <p>
                            I'm currently available for freelance work or full-time positions. Reach out to discuss your project!
                        </p>
                        
                        <div class="contact-item">
                            <svg width="24" height="24" fill="currentColor" aria-hidden="true">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <a href="mailto:jacobonyeukwu@email.com">jacobonyeukwu@email.com</a>
                        </div>
                        <div class="contact-item">
                            <svg width="24" height="24" fill="currentColor" aria-hidden="true">
                                <use href="#github-icon"></use>
                            </svg>
                            <a href="https://github.com/ifeanyijacob">github.com/ifeanyijacob</a>
                        </div>
                        <div class="contact-item">
                            <svg width="24" height="24" fill="currentColor" aria-hidden="true">
                                <use href="#linkedin-icon"></use>
                            </svg>
                            <a href="https://linkedin.com/in/ifeanyijacob">linkedin.com/in/ifeanyijacob</a>
                        </div>
                    </div>

                   <form id="contact-form" class="contact-form fade-in" action="message.php" method="POST">

                        <div class="form-group">
                            <label for="name" class="sr-only">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Your Email</label>
                            <input type="email" id="email" name="email" placeholder="Your Email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="Subject" class="form-input" required>
                        </div>
                        <fieldset class="form-group">
                            <legend class="form-legend">Preferred Contact Method</legend>
                            <div class="radio-group">
                                <input type="radio" id="contact-email" name="contact-method" value="email" checked>
                                <label for="contact-email">Email</label>
                                <input type="radio" id="contact-call" name="contact-method" value="call">
                                <label for="contact-call">Phone Call</label>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label for="message" class="sr-only">Your Message</label>
                            <textarea id="message" name="message" placeholder="Your Message" class="form-input" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary hover-scale">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="personal-signature">
                <p>Crafting digital excellence in Lagos, Nigeria</p>
                <img src="signature.svg" alt="Personal signature" width="120" loading="lazy">
            </div>
            <p>&copy; 2025 Onyeukwu Ifeanyi Jacob. Built with HTML, CSS & JavaScript.</p>
            <button id="theme-toggle" class="theme-toggle hover-scale" aria-label="Toggle dark mode">
                <svg width="20" height="20" fill="currentColor">
                    <use href="#moon-icon"></use>
                </svg>
            </button>
        </div>
    </footer>

    <!-- SVG Sprite Sheet (hidden) -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="github-icon" viewBox="0 0 24 24">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
        </symbol>
        <symbol id="linkedin-icon" viewBox="0 0 24 24">
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
        </symbol>
        <symbol id="twitter-icon" viewBox="0 0 24 24">
            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
        </symbol>
        <symbol id="moon-icon" viewBox="0 0 24 24">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
        </symbol>
        <symbol id="sun-icon" viewBox="0 0 24 24">
            <path d="M12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636 5.636 7.05 3.515 4.93zM16.95 18.364l1.414-1.414 2.121 2.121-1.414 1.414-2.121-2.121zm2.121-14.85l1.414 1.415-2.121 2.121-1.414-1.414 2.121-2.121zM5.636 16.95l1.414 1.414-2.121 2.121-1.414-1.414 2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z"/>
        </symbol>
    </svg>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle with ARIA updates
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');

        hamburger.addEventListener('click', () => {
            const isExpanded = hamburger.getAttribute('aria-expanded') === 'true';
            hamburger.setAttribute('aria-expanded', !isExpanded);
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });

        // Close menu when clicking links (for touch devices)
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.setAttribute('aria-expanded', 'false');
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
                
                // Update active nav link
                document.querySelectorAll('.nav-link').forEach(navLink => {
                    navLink.classList.remove('active');
                });
                link.classList.add('active');
            });
        });

        // Sticky navbar
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Active section detection
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        function updateActiveSection() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveSection);

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Dark mode toggle
        const themeToggle = document.getElementById('theme-toggle');
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme');
            localStorage.setItem('theme', document.body.classList.contains('dark-theme') ? 'dark' : 'light');
            
            // Update icon
            const icon = themeToggle.querySelector('use');
            icon.setAttribute('href', document.body.classList.contains('dark-theme') ? '#sun-icon' : '#moon-icon');
        });

        // Check for saved theme preference
        if (localStorage.getItem('theme') === 'dark' || 
            (window.matchMedia('(prefers-color-scheme: dark)').matches && !localStorage.getItem('theme'))) {
            document.body.classList.add('dark-theme');
            document.querySelector('#theme-toggle use').setAttribute('href', '#sun-icon');
        }

        // Project filtering
        document.querySelectorAll('.project-filters button').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const filter = btn.dataset.filter;
                
                // Update active button
                document.querySelectorAll('.project-filters button').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Filter projects
                document.querySelectorAll('.project-card').forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Show all projects
        const showAllBtn = document.getElementById('showAllProjects');
        let showingAll = false;
        
        showAllBtn.addEventListener('click', (e) => {
            e.preventDefault();
            
            if (!showingAll) {
                // Show hidden projects
                const hiddenProjects = document.querySelectorAll('.hidden-project');
                hiddenProjects.forEach(project => {
                    project.style.display = 'block';
                    setTimeout(() => {
                        project.style.opacity = '1';
                        project.style.transform = 'translateY(0)';
                    }, 50);
                });
                
                // Update button
                showAllBtn.textContent = "Show Less Projects";
                showingAll = true;
                
                // Scroll to button to show new projects
                setTimeout(() => {
                    showAllBtn.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            } else {
                // Hide projects beyond the first 3
                const allProjects = document.querySelectorAll('.project-card');
                allProjects.forEach((project, index) => {
                    if (index >= 3) {
                        project.style.opacity = '0';
                        project.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            project.style.display = 'none';
                        }, 300);
                    }
                });
                
                // Update button
                showAllBtn.textContent = "View All Projects";
                showingAll = false;
            }
        });

        // Contact form submission
       const contactForm = document.getElementById('contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    
                    const formData = new FormData(contactForm);
                    const submitBtn = contactForm.querySelector('button[type="submit"]');
                    const originalBtnText = submitBtn.textContent;
                    
                    try {
                        // Show loading state
                        submitBtn.disabled = true;
                        submitBtn.textContent = "Sending...";
                        
                        // ✅ Send form data to contact.php
                        const response = await fetch("message.php", {
                            method: "POST",
                            body: formData
                        });

                        const result = await response.text(); // or .json() if PHP returns JSON

                        alert(result); // Show response from PHP (success or error)
                        contactForm.reset();
                    } catch (error) {
                        alert('❌ There was an error sending your message. Please try again.');
                        console.error('Form submission error:', error);
                    } finally {
                        // Reset button state
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalBtnText;
                    }
                });
            }


        // Project card interactions
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('click', (e) => {
                if (!e.target.closest('.project-link')) {
                    // Open project details modal (implementation would go here)
                    console.log('Opening project:', card.dataset.projectId);
                }
            });

            // Keyboard accessibility
            card.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    card.click();
                }
            });
        });

        // Initialize animations and set initial active section
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.hero .fade-in').classList.add('visible');
            updateActiveSection();
        });
    </script>
</body>
</html>